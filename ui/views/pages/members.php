<?php
$docs = [
    ['url' => '/assets/files/members/pcp-certificate.webp', 'label' => 'Pakistan Center of philanthropy'],
    ['url' => '/assets/files/members/tax-exemption-certificate.pdf', 'label' => 'Tax exempt status with FBR, Government of Pakistan'],
    ['url' => '/assets/files/members/mou-certificate.pdf', 'label' => 'MOU with Economic Affair Division, Government of Pakistan'],
]; ?>

<section class="app-section pb-0">
    <h2>Our <span class="text-accent">Memberships</span></h2>
</section>

<section class="app-section">
    <div class="bg-gray-100/75 mx-auto w-fit rounded-md p-[calc(var(--py)/2)]">
        <ul class="space-y-3 text-balance xl:space-y-4">
            <?php foreach ($docs as $doc) : ?>
                <li>
                    <a
                        href="<?= $doc['url'] ?>"
                        target="_blank"
                        class="font-medium block hover:animate-jump">
                        <span class="translate-y-1 mr-0.5 inline-block before:content-[url(/assets/svgs/download-file.svg)]"></span>
                        <?= $doc['label'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

    </div>
</section>
