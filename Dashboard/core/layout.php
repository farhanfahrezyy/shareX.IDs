<?php
// Minimal section/yield helper like Blade

global $__sections;
if (!isset($__sections)) {
    $__sections = [];
}

function startSection(string $name): void {
    global $__sections;
    if (!isset($__sections[$name])) {
        $__sections[$name] = '';
    }
    ob_start();
}

function endSection(string $name): void {
    global $__sections;
    $content = ob_get_clean();
    $__sections[$name] = ($__sections[$name] ?? '') . $content;
}

function section(string $name, string $default = ''): void {
    global $__sections;
    echo isset($__sections[$name]) ? $__sections[$name] : $default;
}


