<?php include("include/connection.php");?>
<?php include("include/functions.php");?>
<?php include("header.php");?>
<?php 

if(isset($_GET['id']))
{
  $id=$_GET['id'];
  $sql="delete from st_table where id='$id'";
  if(mysql_query($sql,$connection)){
    header('location:modification-student.php');
  }

}else{
  header('location:modification-student.php');
}

?>
<?php include("footer.php");?>