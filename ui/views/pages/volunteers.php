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
