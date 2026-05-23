<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0"
        />
        <title><?= ($title ?? $app_name) ?></title>
    </head>
    <body>
        <?php echo $this->render($inc,NULL,get_defined_vars(),0); ?>
    </body>
</html>
