<?php

// Hata ayıklama modu (isteğe bağlı)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Autoloader (eğer kullanıyorsanız)
require_once "../app/core/Autoloader.php";

// Router'ı dahil edin ve başlatın
require_once "../app/core/router.php";
$router = new Router();
