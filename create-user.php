<?php include("include/connection.php");?>
<?php include("include/functions.php");?>
<?php include("header.php");?>

<?php 


if((isset($_POST['firstname'])) && (isset($_POST['lastname']))){
	$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$sql="INSERT INTO `user_tbl`(`id`, `user_name`, `password`) VALUES ([01],[$firstname],[$lastname])"

//$sql="insert into user_tbl
//		values($firstname,$lastname)";
		$result=mysql_query($sql,$connection);

}else{
	$firstname="";
	$lastname="";
}
echo $firstname . " ". $lastname;	
?>
	<section>

<form action="create-user.php" method="post">
Firstname: <input type="text" name="firstname">
Lastname: <input type="text" name="lastname">

<input type="submit" name="form_login">
</form>



	</section>
<?php include("footer.php");?>