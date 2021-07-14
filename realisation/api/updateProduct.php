<?php
require_once '../manager/productsManager.php';

$product = new Product;
$product->setId($_POST["id"]);
$product->setFirst($_POST["nom"]);
$product->setLast($_POST["prix"]);


$updateProductsManager = null;
$updateProductManager =  new productsManager(); 
$updateProductQuery = $updateProductManager->update($product);
?>