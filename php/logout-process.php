<?php 
	session_start();

	if (empty($_SESSION['user_email'])) {
	 
		header('Location: ../index.php');
		exit();
	}
	else{
	    echo $_SESSION['user_email']."<br>";
        echo $_SESSION['user_name']."<br>";
        echo $_SESSION['user_id']."<br>";
        session_unset();
		session_destroy();

		header('Location: ../');
	}

 ?>