<?php

declare(strict_types=1);

require APP_DIR . '/vendor/autoload.php';

$f3 = Base::instance();

$f3->set('AUTOLOAD', APP_DIR . '/app/;');
$f3->set('UI', APP_DIR . '/ui/views/');
$f3->set(
    'props',
    fn($arr) => implode(',', array_map(
        function ($key, $val) {
            if (is_bool($val))    return "{$key}=" . ($val ? 'true' : 'false');
            if (is_numeric($val)) return "{$key}={$val}";
            return "{$key}='{$val}'";
        },
        array_keys($arr),
        array_values($arr)
    ))
);

$f3->config(APP_DIR . '/config/config.ini');
$f3->set('DEBUG', $f3->get('app_debug') ? 3 : 0);

Falsum\Run::handler();

$f3->run();
