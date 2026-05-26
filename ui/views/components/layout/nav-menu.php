<?php
$nav_links = [
    ['url' => '/', 'label' => 'Home'],
    ['url' => '/history', 'label' => 'History'],
    ['url' => '/memberships', 'label' => 'Memberships'],
    ['url' => '/donate', 'label' => 'Donate'],
]; ?>

<nav class="<?= $class ?? '' ?>">
    <ol class="flex flex-col md:flex-row md:items-baseline text-lg gap-4 md:gap-6 xl:gap-7 justify-center">
        <?php foreach ($nav_links as $link) : ?>
            <?= component('layout/nav-link', $link) ?>
        <?php endforeach; ?>
    </ol>
</nav>
