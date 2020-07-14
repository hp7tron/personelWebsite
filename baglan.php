

<?php
$db = 'denem123';
$baglan =new MySQLi('localhost','root','',$db,'3306');
    if($baglan->connect_error) {
	$error=$baglan->connect_error;
	}
?> 

