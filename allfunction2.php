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
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$r_type = $_POST['r_type'];
		$event = $_POST['event'];
		$ticket = $_POST['ticket'];
		$unique_id = $_POST['unique_id'];
		$seat = $_POST['seat'];


		$sql = "UPDATE event_table SET name='".$name."', email='".$email."', phone='".$phone."',r_type='".$r_type."',event='".$event."',ticket='".$ticket."',unique_id='".$unique_id."',seat='".$seat."' WHERE user_id='".$user_id."'";
	
		if($conn->query($sql)){
			header('Location:event_details.php');
			exit();
		}else{
			header('Location:event_details.php');
			exit();
		}	
	}
	


	if(isset($_GET['mode']) && $_GET['mode']=="delete"){

		$user_id = $_GET['user_id'];
		
		$sql = "DELETE FROM event_table WHERE user_id='".$user_id."'";
	
		if($conn->query($sql)){
			header('Location:event_details.php');
			exit();
		}
	}
	

?>
