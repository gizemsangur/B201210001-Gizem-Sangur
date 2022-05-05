<?php
	if(isset($_POST['mail'])&&isset($_POST['password'])){		
		$mail=$_POST['mail'];
		$password=$_POST['password'];
		$papas=base64_encode($password);
		
		if (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $mail)){ 
			header("Location:giris.html");
			exit();
		}else{
			if($mail=='b201210001@sakarya.edu.tr'&&$password=='b201210001'){
				session_start();
				$_SESSION['mail']='b201210001@sakarya.edu.tr';
				$_SESSION['password']='b201210001';
				header("Location: giris2.html");
				exit();
			}else{
				header("Location: giris.html");
				exit();
			}
		}	
	}
?>

