<!DOCTYPE html>
<html>
<body>


<?php
	

	$query=@unserialize(file_get_contents('http://ip-api.com/php/'));
		var_dump($query);
	if ($query && $query['status'] == 'success') {
		// if ($query['country'] == 'Egypt') {
			// header("location:https://www.google.com");}
		}
	else{echo "Something is Wrong !!";}
?>
</body>
</html>