<?php

    ini_set("log_errors" , "1");
    ini_set("error_log" , "logs/allerrors.log");
    ini_set("display_errors" , "0");

    define("DS",DIRECTORY_SEPARATOR);
    define("WWW_ROOT",dirname(__FILE__) . DS);

    // import files
    require_once WWW_ROOT . "includes" . DS . "functions.php";
    muteExpectedErrors();
    require_once WWW_ROOT . "classes" . DS . "Config.php";

    // controllers
    require_once WWW_ROOT . "controller" . DS . "AppController.php";
    require_once WWW_ROOT . "controller" . DS . "CampaignController.php";
    require_once WWW_ROOT . "controller" . DS . "CreateController.php";
    // set variables
    $config = new Config();


    $page = isset($_GET['page']) ? $_GET['page'] : 'campaign';
    $controller = "";

    switch($page)
    {
        default:
            $controller = new AppController();
            break;

        case 'campaign':
            $controller = new CampaignController();
            break;

        case 'create':
            $controller = new CreateController();
            break;
    }


    $controller->render();

?>
