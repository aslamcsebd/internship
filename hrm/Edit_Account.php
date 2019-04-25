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
         <div class="topHead">            
            <a href="Employee_Information.php" class="btn btn-sm btn-success btn-fill">Back</a>
            <div class="btn-group pull-right" role="group" aria-label="Basic example">
               <a href="adminHome.php" class="btn btn-sm btn-info btn-fill">Home</a>
               <a href="logout.php" class="btn btn-sm btn-danger btn-fill">Logout</a>     
            </div>
         </div>

         <?php 
            if (isset($_GET['employee_id'])) {
               $employee_id=$_GET['employee_id']; 
               $sql  ="select * from employee where employee_id='$employee_id'";
               $result  =  mysqli_query($hrm,$sql);
               $row = mysqli_fetch_assoc($result);
            }

            if(isset($_SESSION['employeeLogin'])) {
               $employee_id=$_SESSION['employee_id'];
               $employeeName=$_SESSION['employeeName'];              
                                 
               $sql  ="select * from employee where employee_id='$employee_id' AND full_name ='$employeeName'";
               $result  =  mysqli_query($hrm,$sql);
               $row = mysqli_fetch_assoc($result);  
            }
            
            if (isset($_POST['accountUpdate'])) {
               $employee_id      =  $_POST['employee_id'];
               $full_name     = $_POST['full_name'];
               $father_name      =  $_POST['father_name'];     
               $mother_name   =  $_POST['mother_name'];
               $dob   =  $_POST['dob'];
               $gender        =  $_POST['gender'];
                $contact          =  $_POST['contact'];
                $email            =  $_POST['email'];
                $blood_group      =  $_POST['blood_group'];     
                $education     =  $_POST['education'];
                $present_address= $_POST['present_address'];  
                $permanent_address=  $_POST['permanent_address'];
                $password      =  $_POST['password'];

                  $sql2="SELECT * FROM employee where full_name='$full_name'";
                  $result2=mysqli_query($hrm,$sql2);
                  $rowcount = mysqli_num_rows($result2);

                  if ($rowcount=='1'){            
                     $row2 = mysqli_fetch_assoc($result2);
                        if ($employee_id==$row2['employee_id']){

                            $sql4 ="update employee set full_name='$full_name',father_name='$father_name',mother_name='$mother_name',birth_day='$dob',gender='$gender',contact='$contact',email='$email',blood_group='$blood_group',education='$education',present_address='$present_address',permanent_address='$permanent_address',password='$password' where employee_id=$employee_id";

                           $result4 =  mysqli_query($hrm,$sql4);
                           if ($result4) {
                                 $sql5 ="SELECT * FROM employee where employee_id='$employee_id' AND full_name='$full_name' ";
                                 $result5=mysqli_query($hrm,$sql5);
                                 $rowcount3 = mysqli_num_rows($result5);
                                 if ($rowcount3){
                                       $_SESSION['employee_update_successfully']=true;

                                          if(isset($_SESSION['employeeLogin'])){
                                             echo "<script>window.location.href='employeeHome.php'</script>";
                                          } else {
                                             echo "<script>window.location.href='Employee_Information.php'</script>";
                                          }
                                 }else{
                                       $_SESSION['employee_update_fail']=true;
                                 }              
                           }                                  
                        }else{
                           $_SESSION['employee_name_exit']=true;
                        }
                  }else{

                     $sql4 ="update employee set full_name='$full_name',father_name='$father_name',mother_name='$mother_name',birth_day='$dob',gender='$gender',contact='$contact',email='$email',blood_group='$blood_group',education='$education',present_address='$present_address',permanent_address='$permanent_address',password='$password' where employee_id=$employee_id";

                     $result4 =  mysqli_query($hrm,$sql4);
                     if ($result4) {

                           $sql5 ="SELECT * FROM employee where employee_id='$employee_id' AND full_name='$full_name' ";
                           $result5=mysqli_query($hrm,$sql5);
                           $rowcount3 = mysqli_num_rows($result5);
                           if ($rowcount3){
                              if(isset($_SESSION['employeeLogin'])) {
                              echo "<script>window.location.href='employeeHome.php'</script>";

                              }else{
                                 $_SESSION['employee_update_successfully']=true;
                              echo "<script>window.location.href='Employee_Information.php'</script>";
                              
                              }
                           }else{
                                 $_SESSION['employee_update_fail']=true;
                           }              
                     }
                  }
               $sql  ="select * from employee where employee_id='$employee_id'";
               $result  =  mysqli_query($hrm,$sql);
               $row = mysqli_fetch_assoc($result);
            }
         ?>

         <?php if(isset($_SESSION['employee_update_successfully'])) { ?>
            <?php 
               echo '<script type="text/javascript">
                        alert("New employee [ '.$full_name.' ] update successfully.");
                     </script>';
            ?> 
         <?php } ?> 

         <?php if(isset($_SESSION['employee_update_fail'])) { ?>
            <?php 
               echo '<script type="text/javascript">
                        alert("Employee add fail.\nPlease try again.");
                     </script>';
            ?> 
         <?php } ?> 

         <?php if(isset($_SESSION['employee_name_exit'])) { ?>
            <?php 
               echo '<script type="text/javascript">
                        alert("This employee name [ '.$full_name.' ] already exists.\nUse another employee name.");
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
                                       <?php if($row['photo']==null){?>

                                          <div class="text-center">                 
                                             <img src="images/default.png" alt="Profile picture not found" width="200" height="200" style="border-radius: 50%; margin: 15px 0px;">                                         
                                          </div>

                                       <?php }else{?>

                                          <div class="text-center">                 
                                             <img src="<?= $row['photo'];?>" alt="Profile picture not found" width="200" height="200" style="border-radius: 50%; margin: 15px 0px;">                                         
                                          </div> 
                                       <?php } ?>
                                     
                                       <div class="form-group row justify-content-md-center">
                                          <label class="col-md-4 col-form-label">Employee_id</label>
                                          <div class="col-md-8" style="text-align: center;">
                                             <label  class="col-form-label">
                                                <?= $row['employee_id']; ?>
                                                <input name="employee_id" type="hidden" value="<?= $row['employee_id']; ?>">
                                             </label>
                                          </div>
                                       </div>
                                       <div class="form-group row  justify-content-md-center">
                                          <label class="col-md-4 col-form-label">Job Post</label>
                                          <div class="col-md-8" style="text-align: center;">
                                             <label  class="col-form-label">
                                                <?= $row['job_type']; ?>
                                                <input type="hidden" value="<?= $row['employee_id']; ?>">
                                             </label>
                                          </div>
                                       </div>

                                       <div class="form-group row  justify-content-md-center">
                                          <label  class="col-md-4 col-form-label">Full Name</label>
                                          <div class="col-md-8">
                                             <input type="text" class="form-control" name="full_name" placeholder="Full Name" value="<?= $row['full_name']; ?>">
                                          </div>
                                       </div> 
                                       <div class="form-group row  justify-content-md-center">
                                          <label  class="col-md-4 col-form-label">Father Name</label>
                                          <div class="col-md-8">                     
                                             <input type="text" class="form-control" name="father_name" placeholder="Father Name" value="<?= $row['father_name']; ?>">
                                          </div>
                                       </div> 
                                       <div class="form-group row  justify-content-md-center">
                                          <label  class="col-md-4 col-form-label">Mother Name</label>
                                          <div class="col-md-8">
                                             <input type="text" class="form-control" name="mother_name" placeholder="Mother Name" value="<?= $row['mother_name']; ?>">
                                          </div>
                                       </div> 
                                       <div class="form-group row  justify-content-md-center">
                                          <label  class="col-md-4 col-form-label">Date of Birth</label>
                                          <div class="col-md-8">
                                             <input type="text" class="form-control" name="dob" placeholder="Mother Name" value="<?= $row['birth_day']; ?>">
                                          </div>
                                       </div> 
                                       <div class="form-group row  justify-content-md-center">
                                          <label  class="col-md-4 col-form-label">Gender</label>
                                          <div class="col-md-8">
                                             <input type="text" class="form-control" name="gender" placeholder="Gender" value="<?= $row['gender']; ?>">  
                                          </div>
                                       </div> 
                                       <div class="form-group row  justify-content-md-center">
                                          <label  class="col-md-4 col-form-label">Contact</label>
                                          <div class="col-md-8">
                                             <input type="text" class="form-control" name="contact" placeholder="Contact" value="<?= $row['contact']; ?>">
                                          </div>
                                       </div> 
                                       <div class="form-group row  justify-content-md-center">
                                          <label  class="col-md-4 col-form-label">Email</label>
                                          <div class="col-md-8">
                                             <input type="text" class="form-control" name="email" placeholder="Email" value="<?= $row['email']; ?>">
                                          </div>
                                       </div> 
                                       <div class="form-group row  justify-content-md-center">
                                          <label  class="col-md-4 col-form-label">Blood Group</label>
                                          <div class="col-md-8">
                                             <input type="text" class="form-control" name="blood_group" placeholder="Blood Group" value="<?= $row['blood_group']; ?>">
                                          </div>
                                       </div> 
                                        <div class="form-group row  justify-content-md-center">
                                          <label  class="col-md-4 col-form-label">Education</label>
                                          <div class="col-md-8">
                                             <input type="text" class="form-control" name="education" placeholder="Education" value="<?= $row['education']; ?>">
                                          </div>
                                       </div> 
                                      
                                       <div class="form-group row">
                                          <label  class="col-md-4 col-form-label">Present Address</label>
                                          <div class="col-md-8">
                                             <textarea type="text" class="form-control" name="present_address" placeholder="Present Address" tyle="text-align: left;"><?= $row['present_address']; ?></textarea>
                                          </div> 
                                       </div> 
                                       <div class="form-group row">
                                          <label  class="col-md-4 col-form-label">Permanent Address</label>
                                          <div class="col-md-8">
                                             <textarea type="text" class="form-control" name="permanent_address" placeholder="Permanent Address" tyle="text-align: left;"><?= $row['permanent_address']; ?></textarea>
                                          </div>
                                       </div> 
                                       <div class="form-group row  justify-content-md-center">
                                          <label  class="col-md-4 col-form-label">Password</label>
                                          <div class="col-md-8">
                                             <input type="text" class="form-control" name="password" placeholder="Password" value="<?= $row['password']; ?>">
                                          </div>
                                       </div>   
                                       <div class="form-group row  justify-content-md-center">
                                          <div class="col-md-offset-4 col-md-8" style="background: transparent; border: none;">
                                             <button type="submit" name="accountUpdate" class="btn btn-danger btn-fill btn-block">Update Now</button>
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
<?php unset($_SESSION['employee_update_successfully']); ?>
<?php unset($_SESSION['employee_update_fail']); ?>
<?php unset($_SESSION['employee_name_exit']); ?>
<?php include("footer.php"); ?>