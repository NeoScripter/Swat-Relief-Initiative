<!doctype html>
<html
    lang="en"
    class="overflow-x-clip"
>
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0"
        />
        <?= (vite_tags())."
" ?>
        <title><?= ($title ?? $app_name) ?></title>
    </head>
    <body class="overflow-x-clip min-h-screen font-sans">
        <?php echo $this->render('components/layout/header.htm',NULL,get_defined_vars(),0); ?>
        <main>
            <?php echo $this->render($inc,NULL,get_defined_vars(),0); ?>
        </main>
        <?php echo $this->render('components/layout/footer.htm',NULL,get_defined_vars(),0); ?>
    </body>
</html>
