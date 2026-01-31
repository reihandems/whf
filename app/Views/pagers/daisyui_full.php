<?php $pager->setSurroundCount(2) ?>

<div class="join">
    <?php if ($pager->hasPrevious()) : ?>
        <a href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>" class="join-item btn btn-sm btn-ghost">
            <span aria-hidden="true">« First</span>
        </a>
        <a href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>" class="join-item btn btn-sm btn-ghost">
            <span aria-hidden="true">‹ Prev</span>
        </a>
    <?php endif ?>

    <?php foreach ($pager->links() as $link) : ?>
        <a href="<?= $link['uri'] ?>" class="join-item btn btn-sm <?= $link['active'] ? 'btn-active btn-neutral' : 'btn-ghost' ?>">
            <?= $link['title'] ?>
        </a>
    <?php endforeach ?>

    <?php if ($pager->hasNext()) : ?>
        <a href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>" class="join-item btn btn-sm btn-ghost">
            <span aria-hidden="true">Next ›</span>
        </a>
        <a href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>" class="join-item btn btn-sm btn-ghost">
            <span aria-hidden="true">Last »</span>
        </a>
    <?php endif ?>
</div>