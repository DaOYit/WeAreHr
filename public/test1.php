<?php require_once("../includes/dbconnection.php");?>
<?php require_once("../includes/all_functions.php");?>
<html>
<body>
<?php
	
	$result=select_Domain_id("Java");
	print_r($result);
	
?>

</body>
</html>