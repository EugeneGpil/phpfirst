<?php
require_once 'vendor/autoload.php';

$getData = new App\Prepare\GetData();
$config = $getData->getConfig();
$connection = $getData->getConnection();
$urlArray = $getData->getUrlArray();
$regular = $getData->getRegular();
$pathToMainContent = $getData->getPathToMainConten();
$mainPageData = $getData->getMainPageArray();

require_once 'app/prepare/getData_old.php';

//show page

App\ShowClasses\ShowMainPage::show($config, $regular, $pathToMainContent);

//require_once 'app/show/page.php';
