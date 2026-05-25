<header class="bg-nav text-white px-(--px) pt-3 flex items-center justify-between">
    <?= component('ui/adaptive-img', [
        'sizes'    => 'mb',
        'avif'     => true,
        'path'     => 'shared/logo/logo',
        'prtClass' => 'size-15 sm:size-25 xl:size-30',
        'overlayClass' => 'rounded-full'
    ]) ?>
    <?= component('layout/burger-menu', [
        'class'    => 'md:hidden',
    ]) ?>
    <?= component('layout/nav-menu', [
        'class' => 'hidden md:block'
    ]) ?>
</header>
