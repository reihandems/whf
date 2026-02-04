<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index()
    {
        $blogModel = new \App\Models\BlogModel();

        $latest = $blogModel->getLatest(1);
        $latestId = !empty($latest) ? $latest[0]['id_blog'] : null;

        $mostRead = $blogModel->getMostRead(3, $latestId);
        $mostReadIds = array_column($mostRead, 'id_blog');

        $excludeIds = array_merge([$latestId], $mostReadIds);
        $others = $blogModel->getOtherArticles(8, array_filter($excludeIds));

        $data = [
            'menu' => 'blog',
            'latest' => !empty($latest) ? $latest[0] : null,
            'mostRead' => $mostRead,
            'others' => $others
        ];

        return view('pages/customer/view_blog.php', $data);
    }

    public function detail($slug)
    {
        $blogModel = new \App\Models\BlogModel();
        $blog = $blogModel->where('slug', $slug)->first();

        if (!$blog) {
            return redirect()->to('/user/blog');
        }

        // Increase views
        $blogModel->update($blog['id_blog'], ['views' => $blog['views'] + 1]);

        $data = [
            'menu' => 'blog',
            'b' => $blog,
            'related' => $blogModel->getOtherArticles(4, [$blog['id_blog']])
        ];

        return view('pages/customer/view_detail_blog.php', $data);
    }
}
