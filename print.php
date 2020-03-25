<?php 
	 
	$fileContent =  file_get_contents('http://localhost/cPanel_Email_Checking/includes/email.php');

	$arrEmail =  json_decode($fileContent, true);

	$emailAddress = 'najathi.cf@slbi.lk';

	if(array_key_exists($emailAddress, $arrEmail)){
		echo 'true';
	}else{
		echo 'false';
	}