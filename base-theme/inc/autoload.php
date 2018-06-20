<?php


spl_autoload_register(function ($class) {
    if (substr($class, 0, strlen(BASE_THEME_NAMESPACE) + 1) == BASE_THEME_NAMESPACE . '\\') {
        $filename = get_template_directory() . '/inc/' . str_replace('\\', DIRECTORY_SEPARATOR, strtolower($class)) . '.php';
        if (file_exists($filename))
            include $filename;
    }
});