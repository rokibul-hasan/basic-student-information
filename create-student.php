<?php include("include/connection.php");?>
<?php include("include/functions.php");?>
<?php include("header.php");?>
<?php 
if(isset($_POST['st_info-sumbit'])){

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
        $sql=" INSERT INTO st_table 
                (first_name,last_name,email,registration,roll,season)
                VALUES
                ('$first_name','$last_name','$email','$registration_no','$roll_no','$season')";
      
        $result=mysql_query($sql,$connection);
        echo "<div class=\"alert alert-success\">operation success</div>";
    }
    }

?>

            <div class="row">
                    <section class="col-sm-8">
                       <div>
                       		
               
                       </div>
                        <div class="form-center">
							<div>
							<form action="create-student.php" method="post" class="form">
								<table class="table-line-hight">
									<tr>
										<td>First Name:</td>
										<td><input class="form-control" type="text" name="first_name" placeholder="first name" /></td>
									</tr>
									<tr>
										<td>Last Name:</td>
										<td><input class="form-control" type="text" name="last_name" placeholder="last name" /></td>
									</tr>
									<tr>
										<td>Email:</td>
										<td><input class="form-control" type="text" name="email" placeholder="email" /></td>
									</tr>
									<tr>
										<td>Registration No:</td>
										<td><input class="form-control" type="text" name="registration_no" placeholder="Registration No" /></td>
									</tr>
									<tr>
										<td>Roll No:</td>
										<td><input class="form-control" type="text" name="roll_no" placeholder="Roll No" /></td>
									</tr>
									<tr>
										<td>Season:</td>
										<td><input class="form-control" type="text" name="season" placeholder="Season" /></td>
									</tr>
									<tr>
										<td colspan="2">
											<input type="submit" class="btn btn-primary form-control" name="st_info-sumbit" value="Create New"/>
										</td>
									</tr>
								</table>
							</form>
							</div>
						</div>
                    </section>
                    
                    <aside class="col-sm-4">
                      
                      <div>
                      	<a href="index.php" class="btn btn-primary" target="_blank">go to main page</a>
                      </div>    
                      
                      <div>
                      	 <a href="admin-index.php" class="btn btn-primary" target="_blank">go to admin page</a>
                      </div>
                     
                
                    </aside>
            </div>
        
<?php include("footer.php");?>