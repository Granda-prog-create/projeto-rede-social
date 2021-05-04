<?php
session_start();
require('vendor/autoload.php'); 
define('INCLUDE_PATH_STATIC','http://localhost/projetoredesocial/DankiCode/Views/Pages'); 
$app = new DankiCode\Application();
$app->run()

?>