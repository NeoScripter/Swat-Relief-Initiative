<div class="adaptive-img-blur overflow-clip bg-cover bg-center bg-no-repeat relative <?= $prtClass ?? '' ?>">
    <picture>
        <?php if (($avif ?? false) && str_contains($sizes, 'dk')): ?>
            <source
                type="image/avif"
                srcset="<?= build_src_set($path, 'dk', 'avif') ?>"
                media="(min-width: 64rem)"
            />
        <?php endif ?>
        <?php if (str_contains($sizes, 'dk')): ?>
            <source
                type="image/webp"
                srcset="<?= build_src_set($path, 'dk', 'webp') ?>"
                media="(min-width: 64rem)"
            />
        <?php endif ?>
        <?php if (($avif ?? false) && str_contains($sizes, 'tb')): ?>
            <source
                type="image/avif"
                srcset="<?= build_src_set($path, 'tb', 'avif') ?>"
                media="(min-width: 31.25rem)"
            />
        <?php endif ?>
        <?php if (str_contains($sizes, 'tb')): ?>
            <source
                type="image/webp"
                srcset="<?= build_src_set($path, 'tb', 'webp') ?>"
                media="(min-width: 31.25rem)"
            />
        <?php endif ?>
        <?php if (($avif ?? false) && str_contains($sizes, 'mb')): ?>
            <source
                type="image/avif"
                srcset="<?= build_src_set($path, 'mb', 'avif') ?>"
            />
        <?php endif ?>
        <img
            srcset="<?= build_src_set($path, 'mb', 'webp') ?>"
            loading="lazy"
            alt="<?= $alt ?? '' ?>"
            class="block size-full object-cover object-center <?= $imgClass ?? '' ?>"
        />
    </picture>
</div>
