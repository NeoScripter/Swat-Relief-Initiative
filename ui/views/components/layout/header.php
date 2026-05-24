<header class="bg-nav-background text-white">
    <?= component('ui/adaptive-img', [
        'sizes'    => 'mb',
        'avif'     => true,
        'path'     => 'shared/logo',
        'prtClass' => 'size-10'
    ]) ?>
    <nav>
        <ol class="flex items-baseline gap-3 justify-center">
            <?= component('layout/nav-link', [
                'url'    => '/',
                'label'     => 'Home',
            ]) ?>
            <?= component('layout/nav-link', [
                'url'    => '/history',
                'label'     => 'History',
            ]) ?>
        </ol>
    </nav>
</header>
