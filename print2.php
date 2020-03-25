<?php 
	 
	$fileContent =  file_get_contents('http://localhost/cPanel_Email_Checking/includes/email2.php');

	$arrEmail =  json_decode($fileContent, true);

	$emailAddress = 'najathi7.cf@slbi.lk';

	if(in_array($emailAddress, $arrEmail)){
		echo 'true';
	}else{
		echo 'false';
	}