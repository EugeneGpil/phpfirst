<?php
require_once 'vendor/autoload.php';


// $pathToMainContent = $getData->getPathToMainConten();
// $mainPageData = $getData->getMainPageArray();

//require_once 'app/prepare/getData_old.php';

//show page

session_start();

$config = App\Prepare\ConfigHandler::getConfig();

$connection = App\Prepare\Connection::getConnection($config);

$inputs = App\Changers\Changer::change($connection, $config);

App\ShowClasses\ShowPage::show($inputs, App\Prepare\GetData::getData($connection, $config, $inputs));
