<?php include("include/connection.php");?>
<?php include("include/functions.php");?>
<?php include("header.php");?>
<?php 

if(isset($_GET['id']))
{
  $id=$_GET['id'];

}else{
  header('location:modification-student.php');
}

?>

<?php 
if(isset($_POST['st_info_update_sumbit'])){

     $first_name=$_POST['first_name'];
     $last_name=$_POST['last_name'];
     $email=$_POST['email'];
     $registration_no=$_POST['registration_no'];
     $roll_no=$_POST['roll_no'];
     $season=$_POST['season'];

     if (empty($first_name)) {
        echo "<div class=\"alert-danger\">";
        echo "First name cannot be empty<br></div>";
     }
     if (empty($last_name)) {
        echo "<div class=\"alert-danger\">";
        echo "Last name cannot be empty<br></div>";
     }
     if (empty($email)) {
     echo "<div class=\"alert-danger\">";
        echo "emain cannot be empty<br></div>";
     }
     if (empty($registration_no)) {
     echo "<div class=\"alert-danger\">";
        echo "Registration no cannot be empty<br></div>";
     }
     if (empty($roll_no)) {
     echo "<div class=\"alert-danger\">";
        echo "Roll no cannot be empty<br></div>";
     }
     if (empty($season)) {
     echo "<div class=\"alert-danger\">";
        echo "season cannot be empty<br></div>";
     }


    if(!empty($first_name)&& !empty($last_name)&& !empty($email)&& !empty($registration_no) && !empty($roll_no) && !empty($season)){
//        $sql=" INSERT INTO st_table 
//                (first_name,last_name,email,registration,roll,season)
//                VALUES
//                ('$first_name','$last_name','$email','$registration_no','$roll_no','$season')";
      
        
      $sql="UPDATE st_table 
            SET 
            first_name='$first_name',
            last_name='$last_name',
            email='$email',
            registration='$registration_no',
            roll='$roll_no',
            season='$season' 
            WHERE id='$id'";
        if (mysql_query($sql,$connection)) {
    echo "<div class=\"alert alert-success\">operation success</div>";
} else {
    echo "Error updating record: " . mysql_error();
}
        
    }
    }

?>
<?php
    $query=mysql_query("SELECT * FROM st_table WHERE id='$id' LIMIT 1");
      while($row=mysql_fetch_array($query)){
        $page_id=$row['id'];
        $first_name_old=$row['first_name'];
        $last_name_old=$row['last_name'];
        $email_old=$row['email'];
        $registration_no_old=$row['registration'];
        $roll_no_old=$row['roll'];
        $season_old=$row['season'];
      }  
?>



            <div class="row">
                    <section class="col-sm-8">
                       <div>
                       		
               
                       </div>
                        <div class="form-center">
							<div>
							<form action="edit-student.php?id=<?php echo $page_id; ?>" method="post" class="form">
								<table class="table-line-hight">
									<tr>
										<td>First Name:</td>
										<td><input class="form-control" type="text" name="first_name" value="<?php echo $first_name_old; ?>"/></td>
									</tr>
									<tr>
										<td>Last Name:</td>
										<td><input class="form-control" type="text" name="last_name" value="<?php echo $last_name_old; ?>" /></td>
									</tr>
									<tr>
										<td>Email:</td>
										<td><input class="form-control" type="text" name="email" value="<?php echo $email_old; ?>" /></td>
									</tr>
									<tr>
										<td>Registration No:</td>
										<td><input class="form-control" type="text" name="registration_no" value="<?php echo $registration_no_old; ?>" /></td>
									</tr>
									<tr>
										<td>Roll No:</td>
										<td><input class="form-control" type="text" name="roll_no" value="<?php echo $roll_no_old; ?>" /></td>
									</tr>
									<tr>
										<td>Season:</td>
										<td><input class="form-control" type="text" name="season" value="<?php echo $season_old; ?>" /></td>
									</tr>
									<tr>
										<td colspan="2">
											<input type="submit" class="btn btn-primary form-control" name="st_info_update_sumbit" value="Update"/>
										</td>
										<td><a href="modification-student.php" class="btn btn-primary form-control" >go back modification page</a></td>
									</tr>
								</table>
								
								
								
							</form>
							</div>
						</div>
                    </section>
                    
                    <aside class="col-sm-4">
                      
                      <div>
                      	
                      	  
                        <ul class="nav navpils nav-stacked custome-hover text-center">
                          <li><a href="index.php" class="btn btn-primary form-control">Go to main page</a></li>
                          <li><a href="admin-index.php" class="btn btn-primary form-control">Go to admin page</a></li>
                        </ul>
                      	 
                      </div>
                     
                
                    </aside>
            </div>
        
<?php include("footer.php");?>