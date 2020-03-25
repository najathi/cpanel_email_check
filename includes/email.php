<?php
$json = file_get_contents('../asset/email.json');
$obj = json_decode($json)->{'slbi.lk'}->{'accounts'}; 
//var_dump(json_decode($json));
//var_dump($obj);
$accounts = [];
foreach($obj as $key => $value) {
		$accounts[$key.'@slbi.lk'] =  $key.'@slbi.lk';
  }
	
  echo json_encode($accounts);