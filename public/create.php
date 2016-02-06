<?php require_once("../includes/dbconnection.php");?>
<?php require_once("../includes/all_functions.php");?>

<?php
if(isset($_POST['submit']))
{
    $topic_name = $_POST['topicName'];

    $query="insert into";
    $query .=" domain(domain_Name)";
    $query .=" values('{$topic_name}')";
    $result=mysqli_query($connection,$query);
    if($result)
    {
        echo "Success";
        redirect_to("addChallenge.php");
    }else
    {
        die("Database connection fail".mysqli_error($connection));
    }
}
else
{
    echo "fail ";
}
?>


<?php
if(isset($connection))
{
	mysqli_close($connection);
}
?>