<?php require_once("../includes/dbconnection.php");?>
<?php require_once("../includes/all_functions.php");?>
<?php
	if(isset($_POST['submit']))
	{
    	$domain_id = $_POST['topicId'];
    	$input_topic = $_POST['broadTopic'];
    	$question_name=$_POST['questionName'];
        $questiont_type = $_POST['questionType'];
    	$number_ofoption = $_POST['numberOfOption'];
    	$question_desc = $_POST['questionDesc'];
    	$domainID= select_Domain_id($domain_id);

    	if(isset($domainID))
    	{
    		 while($row =$domainID->fetch_assoc())
			{
				$temp=$row["Topic_id"];
			}
    		/*$query="insert into syllabus(";
    		$query .="Broad_topic,Question_name,Question_type,Option_no,Question_description,Topic_Id";
    		$query .=") values(?,?,?,?,?,?)";*/
            //$query="call addquestion(?,?,?,?,?,?)"
            $stmt = $connection->prepare("call addquestion(?,?,?,?,?,?)");
            $stmt->bind_param('sssisi', $input_topic, $question_name, $questiont_type, $number_ofoption, $question_desc, $temp);
            $result = $stmt->execute();
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