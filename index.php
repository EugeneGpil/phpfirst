<?php
require_once 'vendor/autoload.php';


// $pathToMainContent = $getData->getPathToMainConten();
// $mainPageData = $getData->getMainPageArray();

//require_once 'app/prepare/getData_old.php';

//show page

App\ShowClasses\ShowMainPage::show(App\Prepare\GetData::getData());
