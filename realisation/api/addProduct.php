<?php
require_once '../manager/productsManager.php';

$product = new Product();
$product->setFirst($_POST["nom"]);
$product->setLast($_POST["prix"]);


$addProductManager = null;
$addProductManager =  new productsManager(); 
$addProductQuery = $addProductManager->add($product);

?>