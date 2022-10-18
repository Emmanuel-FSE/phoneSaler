<?php
require_once ('database/DBController.php');
require ('database/Product.php');

//DBController object
$db = new DBController();

$product = new Product($db);