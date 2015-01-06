<?php include("include/connection.php");?>
<?php include("include/functions.php");?>
<?php include("header.php");?>
  <div class="row">
   <ul class="nav navbar-nav">
    <li><a class="btn-primary nav-hover" href="<?php echo $_SERVER['PHP_SELF'];?>" >Reset Page</a></li>
    <li><a class="btn-primary nav-hover"href="admin-index.php">Admin Panel</a></li>
  </ul>
</div>
             
            </header>
            
            <nav class="row">
                
            </nav>
            <div class="row">
                    <section class="col-sm-12">
                        <div>
                             <?php
 
 if(isset($_POST['search'])){
    $studentname=$_POST['studentname'];
    if(!empty($studentname)){
    $sql="SELECT * from st_table
            WHERE first_name LIKE '%$studentname%'";
    $result=mysql_query($sql,$connection);
  
        echo "<table class=\"table\">";
        while ($row=mysql_fetch_array($result)) {
            echo   "<tr><td>". $row["first_name"]."</td>
                    <td>".$row["last_name"]. "</td>
                    <td>".$row["email"].   "</td>
                    <td>". $row["registration"]."</td>
                    <td>". $row["roll"]."</td>
                    <td>". $row["season"]."</td>
                    </tr>"; 
        }
        echo "</table>";
 }else{
    echo "<div class=\"alert alert-danger\">please input first name </div>";
 }   
 }
 ?>
                        </div>
                    <div class="text-center">
                            
                               <form class="form-inline" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                <h2>find student infromation by first name</h2>
                                <label for="studentname"> FIRST NAME:</label>
                                <input class="form-control" type="text" placeholder="search" name="studentname">
                                <input class="btn btn-default" type="submit" value="search" name="search">
                            </form>
                        </div>
                        <div>
                            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                <input type="submit" value="all student list" class="btn btn-primary" name="all_list">
                            </form>

                        </div>

                        <?php

                        if(isset($_POST['all_list'])){
                        echo "<div>";
                        echo "<table class=\"table table-border\">";
                         echo       "<tr>
                                    <td>first name:</td>
                                    <td>last name:</td>
                                    <td>email:</td>
                                    <td>registration no :</td>
                                    <td>roll no:</td>
                                    <td>season</td>
                                </tr>";
                                
                        
                                $query="SELECT * FROM st_table";
                                $result=mysql_query($query,$connection);
                                
                                while($row=mysql_fetch_array($result)){
                                  echo   "<tr><td>". $row["first_name"]."</td>
                                              <td>".$row["last_name"]. "</td>
                                              <td>".$row["email"].   "</td>
                                              <td>". $row["registration"]."</td>
                                              <td>". $row["roll"]."</td>
                                              <td>". $row["season"]."</td>
                                           </tr>";
                      
                                }
                                
                                
                        echo "</table></div>";
                    }
                    ?>
                    </section>
                    
                    
            </div>
        
<?php include("footer.php");?>