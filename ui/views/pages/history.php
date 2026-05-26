<section class="app-section pb-0">
    <h2>History of <span class="text-accent">Swat & SRI</span></h2>
</section>

<section class="app-section full-bleed">

    <ul>
        <?php if (isset($HISTORY_ITEMS)) : ?>
            <?php foreach ($HISTORY_ITEMS as $idx => $item): ?>
                <?php $idx++; ?>

                <li class="px-(--px) group py-4 md:py-8 xl:py-12 md:gap-8 group xl:gap-12 md:flex odd:bg-gray-100/75 md:items-start">
                    <?= component('ui/info-tile', [
                        'class'    => "mb-6 md:mb-0 md:basis-2/3 group-odd:md:order-2",
                        'title'     => $item['title'],
                        'description'     => $item['description'],
                    ]) ?>

                    <?= component('ui/adaptive-img', [
                        'sizes'    => 'mb|tb',
                        'avif'     => true,
                        'path'     => "history/history-{$idx}",
                        'prtClass' => 'w-full max-w-sm h-100 rounded-lg md:basis-1/3 shrink-0 md:h-90',
                        'imgClass' => 'lg:group-[:nth-of-type(2)]:object-contain group-[:nth-of-type(8)]:object-contain group-[:nth-of-type(7)]:object-contain'
                    ]) ?>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</section>

<section class="full-bleed relative grid place-content-center bg-gray-400/50 min-h-100 md:min-h-110 xl:min-h-120">

    <?= component('ui/bg-video', [
        'src' => 'history',
        'prtClass' => 'absolute inset-0 size-full'
    ]) ?>

    <p class="z-100 text-white isolate mx-auto px-(--px) max-w-[90ch] text-lg md:text-xl xl:text-2xl text-balance">Swat is home to stunning landscapes, snow-capped mountains, gushing streams, fruit-laden orchards and its hospitable, peace-loving people. In a 1961 hunting trip to the region, Queen Elizabeth called Swat “the Switzerland of the East”.</p>

</section>
