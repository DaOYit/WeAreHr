<?php require_once("../includes/dbconnection.php");?>
<?php require_once("../includes/all_functions.php");?>
<?php
	if(isset($_POST['submit']))
	{
    	$domain_id = $_POST['topicId'];
    	$input_topic = $_POST['subTopic'];
    	$input_time_toComplete=$_POST['timeToComplete'];
        $inputTotal_ques = $_POST['numberOfQuestion'];
    	$input_ref = $_POST['refUrl'];
    	$input_sugestion = $_POST['refBook'];
    	$domainID= select_Domain_id($domain_id);

    	if(isset($domainID))
    	{
    		 while($row=mysqli_fetch_assoc($domainID))
			{
				$temp=$row["Domain_ID"];
			}
    		$query="insert into syllabus(";
    		$query .="Subtopic_Name,Number_of_Question,time_to_complete,References_url,References_book,Topic_Id";
    		$query .=") values('{$input_topic}','{$inputTotal_ques}','{$input_time_toComplete}','{$input_ref}','{$input_sugestion}','{$temp}')";
    		$result=mysqli_query($connection,$query);
    		if($result)
    		{
        		echo "Success";
        		redirect_to("addChallenge.php");
    		}else
    		{
	        	die("Database connection fail".mysqli_error($connection)." ".$temp);
    		}	
    	}
	}
?>

<?php
if(isset($connection))
{
	mysqli_close($connection);
}
?>