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
