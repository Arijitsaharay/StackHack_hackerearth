<?php
	
	include_once('connection.php');

	// echo "<pre>";
	
	// print_r($_GET);
	// print_r($_POST);
	// print_r($_REQUEST);


	if(isset($_POST['registrationbn'])){
		$username = $_POST['u_name'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];


		$sql = "INSERT INTO user (`u_name`,`password`,`name`,`phone`,`email`) VALUES ('".$username."','".$password."','".$name."','".$phone."','".$email."')";

		if($conn->query($sql)){
			header('Location:register.php');
			exit();
		}else{
			header('Location:register.php');
			exit();
		}	
	}


	if(isset($_POST['updatebn'])){
		$username = $_POST['u_name'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$user_id = $_POST['user_id'];


		$sql = "UPDATE user SET u_name='".$username."', password='".$password."',name='".$name."', phone='".$phone."',email='".$email."' WHERE user_id='".$user_id."'";
	
		if($conn->query($sql)){
			header('Location:user_details.php');
			exit();
		}else{
			header('Location:user_details.php');
			exit();
		}	
	}
	


	if(isset($_GET['mode']) && $_GET['mode']=="delete"){

		$user_id = $_GET['user_id'];
		
		$sql = "DELETE FROM user WHERE user_id='".$user_id."'";
	
		if($conn->query($sql)){
			header('Location:user_details.php');
			exit();
		}
	}
	

?>
