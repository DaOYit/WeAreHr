<?php
function redirect_to($new_location)
{
	header("Location: ".$new_location);
	exit;
}
function confirm_query($result)
{
	if(!$result)
    {
    	global $connection;
 		die("Fail to execute".mysqli_error($connection));
    }
}
function select_Domain()
{
	global $connection;
	$stmt = $connection->prepare("call getTopic()");
	$stmt->execute();
	$result = $stmt->get_result();
	confirm_query($result);
	return $result;


}
function select_Domain_id($domainName)
{
	global $connection;
	$query="select Topic_id";
	$query .=" from Topic";
	$query .=" where Topic_Name='{$domainName}' LIMIT 1";
	$stmt = $connection->prepare($query);
	$stmt->execute();
	$result = $stmt->get_result();
	confirm_query($result);
	return $result;
}

?>