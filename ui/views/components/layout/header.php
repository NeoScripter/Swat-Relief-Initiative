<header class="bg-nav text-white px-(--px) pt-3 flex items-center justify-between">
    <?= component('ui/adaptive-img', [
        'sizes'    => 'mb',
        'avif'     => true,
        'path'     => 'shared/logo',
        'prtClass' => 'size-15 sm:size-25 xl:size-30',
        'overlayClass' => 'rounded-full'
    ]) ?>
    <nav>
        <ol class="flex items-baseline gap-3 md:gap-5 xl:gap-7 justify-center">
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
</header>
