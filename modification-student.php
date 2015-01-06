<?php include("include/connection.php");?>
<?php include("include/functions.php");?>
<?php include("header.php");?>

<div class="row">
    <a href="admin-index.php" class="btn btn-success">Back admin page</a>
</div>
      
                  <div class="row">
                    <section class="col-sm-12">
                    

                        

                        
                      <div>
                        <table class="table table-border table-responsive table-striped">
                                <tr>
                                    <th>Serial:</th>
                                    <th>First name:</th>
                                    <th>Last name:</th>
                                    <th>Email:</th>
                                    <th>Registration no :</th>
                                    <th>Roll no:</th>
                                    <th>Season:</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    
                                    
                                </tr>
                              <?php
                        
                                $query="SELECT * FROM st_table";
                                $result=mysql_query($query,$connection);
                                $serial=0;
                                while($row=mysql_fetch_array($result)){
                                $serial++;
                              ?>
                                  <tr>
                                      <td><?php echo $serial; ?></td>
                                      <td><?php echo $row["first_name"]?></td>
                                      <td><?php echo $row["last_name"]?></td>
                                      <td><?php echo $row["email"]?></td>
                                      <td><?php echo $row["registration"]?></td>
                                      <td><?php echo $row["roll"]?></td>
                                      <td><?php echo $row["season"]?></td>
                                      <td><a class="btn btn-info" href="edit-student.php?id=<?php echo $row['id'] ?>">UPDATE</a></td>
                                      <td><a onclick="confirm_delete();" class="btn btn-danger" href="delete-student.php?id=<?php echo $row['id'] ?>">DELETE</a></td>
                                  </tr>
                          <?php
                               }?>
                                
                                
                        </table>
                        </div>
                    
                    
                    </section>
                    
                    
            </div>
        <script>
          function confirm_delete(){
            return confirm('Are you want to delete');
          }
            
</script>
<?php include("footer.php");?>