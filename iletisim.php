<?php 
  if(isset($_POST['namesurname'])&&isset($_POST['mail'])&&isset($_POST['message'])&&isset($_POST['fav_language'])&&isset($_POST['contact_reason'])){		
		$mail=$_POST['mail'];
		$name=$_POST['namesurname'];
		$msg=$_POST['message'];
    $fav_lang=$_POST['fav_language'];
    $contact=$_POST['contact_reason'];
		
		$myfile = fopen("formcontact.txt", "a") or die("Unable to open file!");
    fwrite($myfile,$name );
    fwrite($myfile,'=>');
    fwrite($myfile,$mail);
    fwrite($myfile,',');
    fwrite($myfile,$msg);
    fwrite($myfile,',');
    fwrite($myfile,$fav_lang);
    fwrite($myfile,',');
    fwrite($myfile,$contact);
    fwrite($myfile,' / ');
    fclose($myfile);
    header("Location:iletisim.html");
	}
?>