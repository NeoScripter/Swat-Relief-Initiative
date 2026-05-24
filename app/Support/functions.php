<?php

define('VITE_DEV_SERVER', 'http://localhost:5173');

function vite_is_dev(): bool
{
    $handle = @fsockopen('localhost', 5173, timeout: 1);
    if (!$handle) return false;
    fclose($handle);
    return true;
}

function vite_tags(): string
{
    if (vite_is_dev()) {
        return implode(PHP_EOL, [
            "<script type='module' src='" . VITE_DEV_SERVER . "/@vite/client'></script>",
            "<script type='module' src='" . VITE_DEV_SERVER . "/ui/ts/main.ts'></script>",
        ]) . PHP_EOL;
    }

    $assets = glob('dist/assets/*');

    $js  = current(preg_grep('/\.js$/', $assets));
    $css = current(preg_grep('/\.css$/', $assets));

    return implode(PHP_EOL, array_filter([
        $js  ? "<script type='module' src='/dist/assets/" . basename($js)  . "'></script>" : '',
        $css ? "<link rel='stylesheet' href='/dist/assets/" . basename($css) . "'>"         : '',
    ])) . PHP_EOL;
}

function build_src_set(string $path, string $size, string $ext): string
{
    $img_dir = \Base::instance()->IMG_DIR;
    $sources = [
        ["{$img_dir}{$path}-{$size}.{$ext}",     '1x'],
        ["{$img_dir}{$path}-{$size}2x.{$ext}",   '2x'],
        ["{$img_dir}{$path}-{$size}3x.{$ext}",   '3x'],
    ];

    return implode(
        ', ',
        array_map(
            fn($s) => "{$s[0]} {$s[1]}",
            array_filter($sources, fn($s) => !empty($s[0]))
        )
    );
}

function component(string $path, array $props = []): string
{
    $f3 = \Base::instance();

    foreach ($props as $key => $val) {
        $f3->set($key, $val);
    }

    $view = view("/components/{$path}");

    foreach ($props as $key => $_) {
        $f3->clear($key);
    }

    return $view;
}

function view(string $name): string
{
    return View::instance()->render("{$name}.php");
}

