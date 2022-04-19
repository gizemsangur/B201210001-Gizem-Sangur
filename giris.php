<?php
	if(isset($_POST['mail'])&&isset($_POST['password'])){		
		$mail=$_POST['mail'];
		$password=$_POST['password'];
		$papas=base64_encode($password);
		
		
		if($mail=='b201210001@sakarya.edu.tr'&&$password=='b201210001'){
			session_start();
			$_SESSION['mail']='b201210001@sakarya';
			$_SESSION['password']='b201210001';
			header("Location: giris2.html");
			exit();
		}else{
			echo 'Giriş baraşırız';
			header("Location: giris.html");
			exit();
		}			
	}
?>

