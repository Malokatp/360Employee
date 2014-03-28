<?php
	/*if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/xampp/');
	exit;*/
    
    
?>

<form action="ID_validator.php" method="post"> 
ID Number: <input name="id_number" type="text" /> 

<input type="submit" />
</form>