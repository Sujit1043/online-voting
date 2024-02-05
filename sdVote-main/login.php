<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_POST['login'])){
		$voter = $_POST['voter'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM voters WHERE voters_id = '$voter'";
		$query = $conn->query($sql);
			
		if($query->num_rows > 1){
			$_SESSION['error'] = 'Cannot find voter with the ID';
			echo $voter.'   '.$password.'          '.$_SESSION['error'];
			die();
		}
		else{
			$row = $query->fetch_assoc();
			if($password == $row['password']){
				$_SESSION['voter'] = $row['id'];
			}
			else{
				$_SESSION['error'] = 'Incorrect password';
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Input voter credentials first';
	}

	header('location: index.php');

?>