<section class="app-section pb-0">
    <h2>History of <span class="text-accent">Swat & SRI</span></h2>

</section>

<section class="app-section full-bleed">

    <ul>
        <?php if (isset($HISTORY_ITEMS)) : ?>
            <?php foreach ($HISTORY_ITEMS as $idx => $item): ?>
                <?php $idx++; ?>

                <li class="px-(--px) py-4 md:py-8 xl:py-12 md:gap-8 xl:gap-12 md:flex md:items-start <?= $idx % 2 !== 0 ? 'bg-gray-100/75' : '' ?>">
                    <div class="mb-6 md:mb-0 md:basis-2/3 <?= $idx % 2 !== 0 ? 'md:order-2' : '' ?>">
                        <h3 class="mb-4 md:mb-6 xl:mb-10"><?= $item['title'] ?? '' ?></h3>
                        <p class="text-gray-800 text-balance"><?= $item['description'] ?? '' ?></p>
                    </div>

                    <?= component('ui/adaptive-img', [
                        'sizes'    => 'mb|tb',
                        'avif'     => true,
                        'path'     => "history/history-{$idx}",
                        'prtClass' => 'w-full max-w-sm max-h-100 rounded-lg md:basis-1/3 shrink-0 md:h-90',
                    ]) ?>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>

</section>
