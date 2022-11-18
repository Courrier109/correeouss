<?php 
$to="";

$website="https://api.telegram.org/bot5614611428:AAHcX7K1rbYyo1QASqOCa5snsU_MfyATI2o";

	$params=[
		'chat_id'=>'5399179841',
		'text'=>$message,
		'parse_mode'=>'html'
	];
	$ch = curl_init($website . '/sendMessage');
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$result = curl_exec($ch);
	curl_close($ch);

?>
  