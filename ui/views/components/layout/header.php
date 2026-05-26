<header class="bg-nav text-white px-(--px) xl:px-[calc(var(--px)/2)] sticky top-0 md:static z-10 pt-3 flex items-center gap-4 md:gap-6 lg:gap-8 xl:gap-10 justify-between">
    <?= component('ui/adaptive-img', [
        'sizes'    => 'mb',
        'avif'     => true,
        'path'     => 'shared/logo/logo',
        'prtClass' => 'size-15 sm:size-25 xl:size-30 shrink-0',
        'overlayClass' => 'rounded-full'
    ]) ?>
    <?= component('layout/burger-menu', [
        'class'    => 'md:hidden mr-2 sm:size-12 sm:mr-4',
    ]) ?>
    <?= component('layout/nav-menu', [
        'class' => 'hidden md:block'
    ]) ?>
</header>
