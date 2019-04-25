<?php 
   session_start(); 
   include('connection.php'); 
  $hrm  =  hrm();
?>
<?php include('header.php'); ?>
<div class="wrapper">   
   <?php include('left_header.php'); ?>   
   <div class="main-panel">
      <?php include('nav_bar.php'); ?>
      <div class="container"><br>
         <div class="container">
            <a href="Employee_Information.php" class="btn btn-sm btn-success btn-fill">Back</a>
            <div class="btn-group pull-right" role="group" aria-label="Basic example">
               <a href="Create_Account.php" class="btn btn-sm btn-info btn-fill">Home</a>
               <a href="" class="btn btn-sm btn-danger btn-fill">Logout</a>     
            </div>
         </div><br>

         <?php 
            if (isset($_GET['employee_id'])) {
               $employee_id=$_GET['employee_id']; 
               $salary_month=$_GET['salary_month'];
               $sql  ="select * from salary_bonus where employee_id='$employee_id' AND salary_month='$salary_month'";
               $result  =  mysqli_query($hrm,$sql);
               $row = mysqli_fetch_assoc($result);
            }
            if (isset($_POST['salaryUpdate'])) {

               $employee_id      =  $_POST['employee_id'];
               $full_name     = $_POST['full_name'];
               $salary_month2      =  $_POST['salary_month'];     
               $salary_month;     
               $salary   =  $_POST['salary'];
               $bonus   =  $_POST['bonus'];

               $sql2 ="update salary_bonus set salary_month='$salary_month2',salary='$salary',bonus='$bonus' where employee_id='$employee_id' AND salary_month='$salary_month'";
               $result2 =  mysqli_query($hrm,$sql2);
               if ($result2) {
                  $_SESSION['salary_update_successfully']=true;
                  echo "<script>window.location.href='Salary_Bonus_Info.php'</script>";
                  // header("Location: Salary_Bonus_Info.php");
               }else{
                  $_SESSION['salary_update_fail']=true;
               }
            }                                
         ?>

         <?php if(isset($_SESSION['salary_update_fail'])) { ?>
            <?php 
               echo '<script type="text/javascript">
                        alert("salary_update_fail.\nPlease try again.");
                     </script>';
            ?> 
         <?php } ?>       

         <div id="page-wrapper">
            <div class="row">
               <div class="col-lg-12">
                  <div class="panel panel-default">
                     <div class="panel-heading text-center">
                        Employee Information
                     </div>                     
                     <div class="panel-body">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2 col-sm-offset-2">
                                 <div class="editAccount">
                                    <form method="POST">
                                       <?php 
                                          $sql  ="select * from employee where employee_id='$employee_id' AND full_name='$row[full_name]'";
                                          $result  =  mysqli_query($hrm,$sql);
                                          $row2 = mysqli_fetch_assoc($result);
                                        ?>

                                       <?php if($row2['photo']==null){?>
                                          <div class="text-center">                 
                                             <img src="images/default.png" width="200" height="200" style="border-radius: 50%; margin: 5px 0px;">
                                             <br>
                                             <br>
                                          </div>
                                       <?php }else{?>
                                          <div class="text-center">                 
                                             <img src="<?= $row2['photo'];?>" width="200" height="200" style="border-radius: 50%; margin: 5px 0px;">
                                             <br>
                                             <br>
                                          </div> 
                                       <?php } ?>

                                       <div class="form-group row  justify-content-md-center">
                                          <label class="col-md-4 col-form-label">Employee_id</label>
                                          <div class="col-md-8" style="text-align: center;">
                                             <label  class="col-form-label">
                                                <?= $row['employee_id']; ?>
                                                <input name="employee_id" type="hidden" value="<?= $row['employee_id']; ?>">
                                             </label>
                                          </div>
                                       </div>
                                       <div class="form-group row  justify-content-md-center">
                                          <label  class="col-md-4 col-form-label">Full Name</label>
                                          <div class="col-md-8" style="text-align: center;">
                                             <label  class="col-form-label" align="center">
                                                <?= $row['full_name']; ?>
                                                <input name="full_name" type="hidden" value="<?= $row['full_name']; ?>">
                                             </label>
                                          </div>
                                       </div> 
                                       <div class="form-group row  justify-content-md-center">
                                          <label  class="col-md-4 col-form-label">Salary Month</label>
                                          <div class="col-md-8">                     
                                             <input type="text" class="form-control" name="salary_month" placeholder="Father Name" value="<?= $row['salary_month']; ?>">
                                          </div>
                                       </div> 
                                       <div class="form-group row  justify-content-md-center">
                                          <label  class="col-md-4 col-form-label">Salary</label>
                                          <div class="col-md-8">
                                             <input type="text" class="form-control" name="salary" placeholder="Mother Name" value="<?= $row['salary']; ?>">
                                          </div>
                                       </div> 
                                       <div class="form-group row  justify-content-md-center">
                                          <label  class="col-md-4 col-form-label">Bonus</label>
                                          <div class="col-md-8">
                                             <input type="text" class="form-control" name="bonus" placeholder="bonus" value="<?= $row['bonus']; ?>">
                                          </div>
                                       </div>   
                                       <div class="form-group row  justify-content-md-center">
                                          <div class="col-md-offset-4 col-md-8" style="background: transparent; border: none;">
                                             <button type="submit" name="salaryUpdate" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-fill btn-block">Update Now</button>
                                          </div>
                                       </div>                                      
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>                  
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>      
<?php unset($_SESSION['salary_update_fail']); ?>
<?php include("footer.php"); ?>