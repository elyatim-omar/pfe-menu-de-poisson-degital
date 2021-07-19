<?php 

// ob_start();
session_start();

$timezone = date_default_timezone_set("Europe/London");

$con = mysqli_connect("localhost", "root", "solicode24", "menupoisson");

if(mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
}



	

	// if(isset($_POST['name'])){
		$file_name = "";  
  
		$photo = "";
		

		// if(isset($_FILES['photo']['error'])){
			// if($_FILES['photo']['error'] == 0){
		 
				$target_dir = "./uploads/";
				
				$photo = time()."_".rand(100000,10000000).rand(100000,10000000)."_".$_FILES["photo"]["name"];

				$photo = str_replace(" ", "_", $photo);
				$photo = urlencode($photo);
 

				$source = $_FILES["photo"]["tmp_name"];
				$destinatin = $target_dir.$photo;
				
				 if(!move_uploaded_file($source, $destinatin)){
				 	$photo = "";
				 }
			// }
		// }


	
		"INSERT INTO poissons(img)VALUES('{$photo}')";


		// header("Location:index.php");
		// die();
	// }

	
?>
	

