<?php $groups = include_once(APP_DIR . '/ui/data/volunteers.php'); ?>

<section class="app-section pb-0">
    <h2>Our <span class="text-accent">Volunteers</span></h2>
</section>

<section class="app-section">
    <div class="mx-auto max-w-250">
        <?php if (isset($groups) && ! empty($groups)) : ?>
            <ul class="space-y-6 text-balance gap-6 md:gap-6 xl:gap-12 md:space-y-8 xl:space-y-12 md:columns-2">
                <?php foreach ($groups as $group) : ?>
                    <li class="rounded-md p-[calc(var(--py)/2)] bg-gray-100/75">
                        <h3 class="mb-6 font-semibold uppercase md:mb-8 xl:mb-12"><?= $group['title'] ?? '' ?></h3>
                        <?php if (isset($group['members']) && ! empty($group['members'])) : ?>
                            <ul class="space-y-3 md:space-y-4 xl:space-y-6">
                                <?php foreach ($group['members'] as $person) : ?>
                                    <li>
                                        <h4 class="uppercase font-medium mb-[0.5lh] text-[1.25em]"><?= $person['name'] ?? '' ?></h4>
                                        <?php if (isset($person['role']) && ! empty($person['role'])) : ?>
                                            <p><?= $person['role'] ?></p>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>


<section class="full-bleed relative grid place-content-center bg-gray-400/50 h-100 md:h-110 xl:h-120">

    <div class="absolute size-full inset-0">

        <?= component('ui/adaptive-img', [
            'sizes'    => 'mb|tb|dk',
            'avif'     => true,
            'path'     => "volunteers/volunteers",
            'prtClass' => 'absolute inset-0 size-full',
            'imgClass' => 'object-center',
        ]) ?>

        <div class="absolute bg-black/25 inset-0">
        </div>
    </div>

    <div class="z-100 text-white isolate mx-auto px-(--px) max-w-[90ch] xl:max-w-280 text-lg md:text-xl xl:text-2xl text-balance xl:text-wrap">
        <h2 class="mb-[1lh] text-left text-white">Do you want to be a volunteer?</h2>
        <p>Spread the word by liking us on our Facebook page and following us on X. Both of these can be accessed at the bottom of the page.</p>
    </div>

</section>
