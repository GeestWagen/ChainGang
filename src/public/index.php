<?php

session_start();

//define("PRIVATE_FOLDER", "../private");
define("PRIVATE_FOLDER", realpath(dirname(__FILE__) . "/../private"));
require_once(PRIVATE_FOLDER . "/config/config.php");

//echo $_GET["page"];
Route::loadPage($_GET["page"]);