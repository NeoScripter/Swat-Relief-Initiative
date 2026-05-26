<header class="bg-nav text-white px-(--px) pt-3 flex items-center justify-between">
    <?= component('ui/adaptive-img', [
        'sizes'    => 'mb',
        'avif'     => true,
        'path'     => 'shared/logo/logo',
        'prtClass' => 'size-15 sm:size-25 xl:size-30',
        'overlayClass' => 'rounded-full'
    ]) ?>
    <?= component('layout/burger-menu', [
        'class'    => 'md:hidden mr-2 sm:size-12 sm:mr-4',
    ]) ?>
    <?= component('layout/nav-menu', [
        'class' => 'hidden md:block'
    ]) ?>
</header>
