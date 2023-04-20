<?php 
	echo '<pre>';
	// print_r($_POST);
	// $name= "jdhjjad.dja.my.profile.jpg";
	 $file_name = (explode('.' , $_FILES['photo']['name']));
	 $extention= end($file_name);
	 $name= 'profile-photo'. '-'.date('d-m-Y-H-i-a').'-'.rand(1000,9999). '.' . $extention;

	$path= 'asset/uploads/'.$name ;
	$file= $_FILES['photo']['tmp_name'];
	$upload= move_uploaded_file($file, $path);
	if($upload){
		echo 'Image uploaded successfully';

	}else{
		echo 'Image not uploaded';
	}
	// print_r ($file= $_FILES);
	
?>