<?php
	if(isset($_POST['namesurname'])&&isset($_POST['mail'])&&isset($_POST['message'])){		
		$namesurname=$_POST['namesurname'];
		$mail=$_POST['mail'];
		$message=$_POST['message']
		$myfile = fopen(”formdata.txt”, “a”);
		$savestring = $namesurname . “,” . $mail . “,” . $message . “n”;
		fwrite($myfile, $savestring);
		fclose($fp);

	}
?>