<?php
require_once('../model/product.php');

class productsManager {

	public function getList(){
		$dbh = new PDO("mysql:host=localhost;dbname=menupoisson","root","solicode24");
		$stack = array();
		$req = "SELECT * FROM poisson";
		$result = $dbh->query($req)->fetchAll();
		foreach ($result as $row){
			$item = new Product();
			$item->setId($row["id"]);
			$item->setFirst($row["nom"]);
			$item->setLast($row["prix"]);
			
			array_push($stack, $item);
		}
		return $stack;

	}
//Add Product
		public function add($product){
			$dbh = new PDO("mysql:host=localhost;dbname=menupoisson","root","solicode24");
			$req = "INSERT INTO `poisson`(`id`,`nom`, `prix`) VALUES (:id,:nom,:prix)";

			$updateProductQuery = $dbh ->prepare($req);
			$updateProductQuery -> bindParam(":id",$product->getId(),PDO::PARAM_STR);	
			$updateProductQuery -> bindParam(":nom",$product->getName(),PDO::PARAM_STR);
            $updateProductQuery -> bindParam(":prix",$product->getLast(),PDO::PARAM_STR);
        
			$updateProductQuery->execute();
        }
		// delete product

		public function delete($id){
			$dbh = new PDO("mysql:host=localhost;dbname=menupoisson","root","solicode24");

			$req = "DELETE FROM poisson WHERE id = $id";
			$deleteProduct = $dbh->prepare($req);
            $deleteProduct->execute();
        }
		// update product		
		public function update($product){
			$id = $product->getId();
			$dbh = new PDO("mysql:host=localhost;dbname=menupoisson","root","solicode24");
			$req = "UPDATE poisson SET nom = :nom,prix = :prix WHERE id = $id";
			$updateProductQuery = $dbh ->prepare($req);
			$updateProductQuery -> bindParam(":nom",$product->getName(),PDO::PARAM_STR);
            $updateProductQuery -> bindParam(":prix",$product->getLast(),PDO::PARAM_STR);
           
			$updateProductQuery->execute();
        }
}
?>