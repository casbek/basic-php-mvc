<?php
//config.php dosyasını her yerde dahil etmek yerine autoloaderde dahil etttik
require_once "../app/config.php";

spl_autoload_register(function ($class) {
    $paths = [
        "../app/controllers/",
        "../app/models/",
        "../app/core/"
    ];

    foreach ($paths as $path) {
        $file = $path . $class . ".php";
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});
