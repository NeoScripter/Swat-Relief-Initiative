<nav class="<?= $class ?? '' ?>">
    <ol class="flex flex-col md:flex-row md:items-baseline text-lg gap-4 md:gap-5 xl:gap-7 justify-center">
        <?= component('layout/nav-link', [
            'url'    => '/',
            'label'     => 'Home',
        ]) ?>
        <?= component('layout/nav-link', [
            'url'    => '/history',
            'label'     => 'History',
        ]) ?>
        <?= component('layout/nav-link', [
            'url'    => '/donate',
            'label'     => 'Donate',
        ]) ?>
    </ol>
</nav>
