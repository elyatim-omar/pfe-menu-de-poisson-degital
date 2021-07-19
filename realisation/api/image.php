<?php
 function message($body,$type){
	$_SESSION['message']['body'] = $body;
	$_SESSION['message']['type'] = $type;
}
	if(isset($_POST['Lastname'])){
		$file_name = "";  
  
		$photo = "";
		if(isset($_FILES['photo']['error'])){
			if($_FILES['photo']['error'] == 0){
				$target_dir = "uploads/";
				$photo = time()."_".rand(100000,10000000).rand(100000,10000000)."_".$_FILES["photo"]["Lastname"];

				$photo = str_replace(" ", "_", $photo);
				$photo = urlencode($photo);
 

				$source = $_FILES["photo"]["tmp_name"];
				$destinatin = $target_dir.$photo;
				
				 if(move_uploaded_file($source, $destinatin)){
				 	 
				 }else{
				 	$photo = "";
				 }
			}
		}
        $SQL = "INSERT INTO poissons(
            img
        )VALUES(
            '{$photo}'
        )
    ";

if($con->query($SQL)){ 
echo("vv brother");
}else{ 
echo("error");
}

// header("Location:index.php");
die();
}


?>