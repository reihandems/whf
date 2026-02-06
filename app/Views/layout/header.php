<div class="navbar bg-base-200 px-8 shadow-md shadow-gray-600/50">
    <div class="flex-1">
        <p class="text-xl"><?= $title ?></p>
    </div>
    <div class="flex flex-row items-center gap-2">
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                    <?php if (session()->get('role') == 'trainer') : ?>
                        <img src="<?= base_url('assets/img/trainer/' . session()->get('foto')) ?>" alt="Profile">
                    <?php elseif (session()->get('role') == 'customer' && session()->get('foto')) : ?>
                        <img src="<?= base_url('assets/img/customer/' . session()->get('foto')) ?>" alt="Profile">
                    <?php else : ?>
                        <img src="https://ui-avatars.com/api/?name=<?= urlencode(session()->get('nama')) ?>&background=random" alt="Profile">
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <span class="text-sm font-bold"><?= session()->get('nama') ?></span>
            <span class="text-xs text-gray-400"><?= session()->get('role') ?></span>
        </div>
    </div>
</div>