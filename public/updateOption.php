<?php require_once("../includes/dbconnection.php");?>
<?php require_once("../includes/all_functions.php");?>
<?php
if(isset($_POST['submit']))
{
		$questionid=$_POST['questionId'];
		$question_Type=$_POST['questionType'];
		$question_name=$_POST['QuestionName'];
		$question_details=$_POST['Questiondetails'];
		$questionans=$_POST['questionAns'];
		$answeroption="";
		foreach ($_POST['choice'] as $key => $value) {
			$answeroption .=$value .",";
		}
		$answeroption=substr($answeroption,0,-1);
		$stmt=$connection->prepare("call updateQuestionAns(?,?,?,?,?,?)");
		$stmt->bind_param('isssss',$questionid, $question_name, $question_Type, $answeroption, $questionans, $question_details);
		$result = $stmt->execute();
		if($result)
		{
				redirect_to("setQuestion.php");
		}else
		{
			die("fail to insert".$connection->connect_errno);
		}
	

}
?>
<?php
if(isset($connection))
{
	mysqli_close($connection);
}
?>