<?php
// Simple PHP-native templating helpers (sections/yield)

if (!isset($GLOBALS['__sections'])) {
    $GLOBALS['__sections'] = [];
}

/**
 * Begin capturing a named section.
 */
function startSection(string $name): void {
    if (!isset($GLOBALS['__sections'][$name])) {
        $GLOBALS['__sections'][$name] = '';
    }
    ob_start();
}

/**
 * End capture and store into a named section.
 */
function endSection(string $name): void {
    $buffer = ob_get_clean();
    $GLOBALS['__sections'][$name] = ($GLOBALS['__sections'][$name] ?? '') . $buffer;
}

/**
 * Echo a section value (like Blade's @stack/@yield) with default.
 */
function echoSection(string $name, string $default = ''): void {
    echo $GLOBALS['__sections'][$name] ?? $default;
}


