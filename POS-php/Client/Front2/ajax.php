<?php 
include 'func.php';
$productClass = new DataBase();
$row = $productClass->getall();
echo json_encode($row); 
