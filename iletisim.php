<?php 
  if(isset($_POST['namesurname'])&&isset($_POST['mail'])&&isset($_POST['message'])){		
		$mail=$_POST['mail'];
		$name=$_POST['namesurname'];
		$msg=$_POST['message'];
		
		$myfile = fopen("formcontact.txt", "a") or die("Unable to open file!");
    fwrite($myfile,$name );
    fwrite($myfile,'=>');
    fwrite($myfile,$mail);
    fwrite($myfile,',');
    fwrite($myfile,$msg);
    fwrite($myfile,' / ');
    fclose($myfile);
    header("Location:iletisim.html");
	}
?>