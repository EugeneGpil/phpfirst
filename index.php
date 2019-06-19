<?php
require_once 'vendor/autoload.php';

$getData = new App\Prepare\GetData();
$config = $getData->getConfig();
$connection = $getData->getConnection();
$urlArray = $getData->getUrlArray();
$urlToImages = $getData->getUrlToImages();
$urlToAvatars = $getData->getUrlToAvatars();
$urls = $getData->getUrls();
$regular = $getData->getRegular();
$pathToMainContent = $getData->getPathToMainConten();

require_once 'app/prepare/getData_old.php';

//show page

require_once 'app/show/page.php';
