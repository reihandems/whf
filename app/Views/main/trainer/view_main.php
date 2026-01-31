<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - WHF Fitness</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/output.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="grid grid-cols-12">
        <!-- Sidebar -->
        <div class="col-span-12 md:col-span-3">
            <?= $this->include('layout/sidebar_trainer', ['menu' => $menu]) ?>
        </div>
        <!-- Content -->
        <div class="col-span-12 md:col-span-9">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <?= $this->include('layout/header') ?>
                </div>
                <div class="col-span-12 p-8">
                    <?= $this->renderSection('content') ?>
                </div>
            </div>
        </div>
</body>

</html>