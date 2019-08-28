<?php

ob_start();

defined("db_host") ? null: define("db_host", "localhost");
defined("db_user") ? null: define("db_user", "root");

defined("db_pass") ? null: define("db_pass", "");

defined("db_name") ? null: define("db_name", "cricket");


$connection = mysqli_connect(db_host,db_user,db_pass,db_name);

require_once("functions.php");












?>
