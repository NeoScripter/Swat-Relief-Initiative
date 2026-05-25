<?php $items = include_once(APP_DIR . '/ui/data/footer.php'); ?>

<footer class="app-section bg-neutral-800 px-(--px) text-white">
    <?php if (isset($items) && !empty($items)) : ?>
        <ul>
            <?php foreach ($items as $idx => $item): ?>
                <li><?= $item['title'] ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</footer>
