<?php
$json = file_get_contents('../asset/email.json');
$obj = json_decode($json)->{'slbi.lk'}->{'accounts'}; 
$accounts = [];
foreach($obj as $key => $value) {
		array_push($accounts, $key. '@slbi.lk');
}
	
  echo json_encode($accounts);