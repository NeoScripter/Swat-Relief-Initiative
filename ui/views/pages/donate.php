<?php
$options = [
    ['label' => 'Option A', 'value' => 10.00],
    ['label' => 'Option B', 'value' => 20.00],
    ['label' => 'Option C', 'value' => 30.00],
    ['label' => 'Option D', 'value' => 40.00],
    ['label' => 'Option E', 'value' => 50.00],
    ['label' => 'Option F', 'value' => 75.00],
    ['label' => 'Option G', 'value' => 100.00],
    ['label' => 'Option H', 'value' => 150.00],
    ['label' => 'Option I', 'value' => 200.00],
    ['label' => 'Option J', 'value' => 250.00],
];
?>

<h2 class="sr-only">Donations</h2>

<section class="app-section">
    <div class="space-y-[calc(var(--py)/2)] text-balance">

        <?= component('ui/info-tile', [
            'title'     => 'How To Donate',
            'description'     => "If you have decided to make a donation, please remember to leverage your donation by utilizing your company’s matching program. Because of the kindness of donors like you, we are already approved for matching by several corporations such as GE, Johnson & Johnson, Goldman Sachs and others.",
        ]) ?>

        <?= component('ui/info-tile', [
            'title'     => 'Check',
            'description'     => "Please make your check payable to “Swat Relief Initiative” and send it to the following address: Swat Relief Initiative, P.O. Box 860, Pennington,  NJ 08534",
        ]) ?>
        <?= component('ui/info-tile', [
            'title'     => 'Online',
            'description'     => "You can donate online via PayPal",
        ]) ?>
        <div class="grid md:grid-cols-2 gap-[calc(var(--py)/2)] text-balance">
            <div>
                <?= component('ui/info-tile', [
                    'title'     => 'Recurring Donation',
                    'description'     => "Choose your amount and click the Donate button",
                ]) ?>

                <form action="https://www.paypal.com/cgi-bin/webscr"
                    method="post"
                    target="_top"
                    class="mt-4 md:mt-6 xl:mt-10">
                    <input name="cmd" type="hidden" value="_s-xclick">
                    <input name="hosted_button_id" type="hidden" value="KAJA7URDN5GWW">
                    <input name="on0" type="hidden" value="">
                    <select name="os0" class="border-4 p-1 border-gray-800 rounded-sm border-double shadow-xl">
                        <?php foreach ($options as $option) : ?>
                            <option value="<?= $option['label'] ?>">
                                <?= $option['label'] ?> : $<?= number_format($option['value'], 2) ?> USD - monthly
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <figure><img decoding="async" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" alt="" width="1" height="1" border="0" wjp3w3tmb=""></figure>
                    <input name="currency_code" type="hidden" value="USD">
                    <input
                        alt="PayPal - The safer, easier way to pay online!"
                        name="submit"
                        src="/assets/imgs/donate/paypal-mb.webp"
                        type="image"
                        class="mt-4 md:mt-6 xl:mt-10 max-w-65 rounded-md shadow-lg transition-transform hover:scale-105">
                </form>
            </div>
            <div>
                <?= component('ui/info-tile', [
                    'title'     => 'One-Time Donation',
                    'description'     => "For one-time donation, please click on the “PayPal Donate Now” button below.",
                ]) ?>

                <div class="space-y-10 xl:space-y-12">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post"><input name="cmd" type="hidden" value="_s-xclick"><input name="hosted_button_id" type="hidden" value="CUBAUL4UXYA6S">
                        <input
                            alt="PayPal - The safer, easier way to pay online!"
                            name="submit"
                            src="/assets/imgs/donate/paypal-mb.webp" type="image"
                            class="mt-4 md:mt-6 xl:mt-10 max-w-65 rounded-md shadow-lg transition-transform hover:scale-105">
                    </form>

                    <div>
                        <?= component('ui/adaptive-img', [
                            'sizes'    => 'mb',
                            'avif'     => true,
                            'path'     => "donate/zelle",
                            'prtClass' => 'w-full mb-3 max-w-55',
                            'imgClass' => 'object-contain'
                        ]) ?>

                        <p class="font-medium text-primary text-[1.25em]">Swat Relief Initiative</p>
                        <p>Email: Zebu@swatreliefinitiative.org</p>
                    </div>

                    <div>
                        <?= component('ui/adaptive-img', [
                            'sizes'    => 'mb',
                            'avif'     => true,
                            'path'     => "donate/venmo",
                            'prtClass' => 'w-full mb-3 max-w-55',
                            'imgClass' => 'object-contain'
                        ]) ?>

                        <p class="font-medium text-primary text-[1.25em]">Swat Relief Initiative</p>
                        <p>Venmo ID: Swat Relief Initiative @SRI-donations</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
