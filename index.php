<?php
require_once 'vendor/autoload.php';


// $pathToMainContent = $getData->getPathToMainConten();
// $mainPageData = $getData->getMainPageArray();

//require_once 'app/prepare/getData_old.php';

//show page

$config = App\Prepare\ConfigHandler::getConfig();

$connection = App\Prepare\Connection::getConnection($config);

App\ShowClasses\ShowPage::show(App\Prepare\GetData::getData($connection, $config), App\Changers\Changer::change($connection));
