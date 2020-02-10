<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$url = $_GET['url'];
require 'controllers/' . $url . '.php';
$controller = new $url;
