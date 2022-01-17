<?php
session_start();

spl_autoload_register(function($class){
    $file = "php/" . $class . ".php";
    if(file_exists($file))
      include($file);
  });


define("ROOT", $_SERVER['DOCUMENT_ROOT'] );
define("CONTROLLER_PATH", ROOT. "/controllers/");
define("MODEL_PATH", ROOT. "/models/");
define("VIEW_PATH", ROOT. "/views/");

require_once("db.php");
require_once("route.php");
require_once MODEL_PATH. 'Model.php';
require_once VIEW_PATH. 'View.php';
require_once CONTROLLER_PATH. 'Controller.php';


Routing::buildRoute();