<?php  session_start(); 
   if (isset($_GET['employee_id'])) {
      $employee_id=$_GET['employee_id'];
      include('connection.php'); 
      $hrm  =  hrm();                     
      $sql  ="select * from employee where employee_id='$employee_id'";
      $result  =  mysqli_query($hrm,$sql);
      $row = mysqli_fetch_assoc($result);
   }
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
                                 <div class="viewEmployee">
                                    <?php if($row['photo']==null){?>

                                       <?php if($row['gender']=='Male'){ ?>
                                          <div class="text-center">                 
                                             <img src="assets/profilePicture/default.png" alt="Profile picture not found" width="200" height="200" style="border-radius: 50%; margin: 15px 0px;">
                                          </div>
                                           <?php }else{?>
                                              <div class="text-center">                 
                                             <img src="assets/profilePicture/female.png" alt="Profile picture not found" width="200" height="200" style="border-radius: 50%; margin: 15px 0px; border: 5px solid #fff;">
                                          </div>
                                       <?php }?>

                                    <?php }else{?>

                                       <div class="text-center">                 
                                          <img src="<?= $row['photo'];?>" alt="Profile picture not found" width="200" height="200" style="border-radius: 50%; margin: 15px 0px;">                                         
                                       </div> 
                                    <?php } ?>
                                    
                                    <div class="form-group row">
                                       <label class="col-md-4 col-form-label">Employee_id</label>
                                       <div class="col-md-8">
                                          <label class="col-form-label"><?= $row['employee_id'] ?></label>
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <label class="col-md-4 col-form-label">Job Post</label>
                                       <div class="col-md-8">
                                          <label class="col-form-label"><?= $row['job_type'] ?></label>
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <label  class="col-md-4 col-form-label">Full Name</label>
                                       <div class="col-md-8">
                                          <label  class="col-form-label"><?= $row['full_name'] ?></label>  
                                       </div>
                                    </div> 
                                    <div class="form-group row">
                                       <label  class="col-md-4 col-form-label">Father Name</label>
                                       <div class="col-md-8">
                                          <label class="col-form-label"><?= $row['father_name'] ?></label>    
                                       </div>
                                    </div> 
                                    <div class="form-group row  ">
                                       <label  class="col-md-4 col-form-label">Mother Name</label>
                                       <div class="col-md-8">
                                          <label  class="col-form-label"><?= $row['mother_name'] ?></label>   
                                       </div>
                                    </div> 
                                    <div class="form-group row  ">
                                       <label  class="col-md-4 col-form-label">Date of Birth</label>
                                       <div class="col-md-8">
                                          <label  class="col-form-label"><?= $row['birth_day'] ?></label>   
                                       </div>
                                    </div> 
                                    <div class="form-group row  ">
                                       <label  class="col-md-4 col-form-label">Gender</label>
                                       <div class="col-md-8">
                                          <label  class="col-form-label"><?= $row['gender'] ?></label>   
                                       </div>
                                    </div> 
                                    <div class="form-group row  ">
                                       <label  class="col-md-4 col-form-label">Contact</label>
                                       <div class="col-md-8">
                                          <label  class="col-form-label"><?= $row['contact'] ?></label>  
                                       </div>
                                    </div>  
                                    <div class="form-group row  ">
                                       <label  class="col-md-4 col-form-label">Email</label>
                                       <div class="col-md-8">
                                          <label  class="col-form-label"><?= $row['email'] ?></label>  
                                       </div>
                                    </div> 
                                    <div class="form-group row  ">
                                       <label  class="col-md-4 col-form-label">Blood Group</label>
                                       <div class="col-md-8">
                                          <label  class="col-form-label"><?= $row['blood_group'] ?></label>  
                                       </div>
                                    </div> 
                                    <div class="form-group row  ">
                                       <label  class="col-md-4 col-form-label">Education</label>
                                       <div class="col-md-8">
                                          <label  class="col-form-label"><?= $row['education'] ?></label>  
                                       </div>
                                    </div> 
                                    <div class="form-group row  ">
                                       <label  class="col-md-4 col-form-label">Present Address</label>
                                       <div class="col-md-8">
                                          <label  class="col-form-label" style="text-align: justify; padding: 8px"><?= $row['present_address'] ?></label>  
                                       </div>
                                    </div> 
                                    <div class="form-group row  ">
                                       <label  class="col-md-4 col-form-label">Permanent Address</label>
                                       <div class="col-md-8">
                                          <label  class="col-form-label" style="text-align: justify; padding: 8px"><?= $row['permanent_address'] ?></label>  
                                       </div>
                                    </div> 
                                    <div class="form-group row  ">
                                       <label  class="col-md-4 col-form-label">Password</label>
                                       <div class="col-md-8">
                                          <label  class="col-form-label"><?= $row['password'] ?></label>  
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
   </div>
</div>

<?php include("footer.php"); ?>