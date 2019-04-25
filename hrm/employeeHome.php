<?php 
   session_start();
   if(!isset($_SESSION['employeeLogin'])){
      header("location: index.php");
   }

   $employee_id=$_SESSION['employee_id'];
   $employeeName=$_SESSION['employeeName'];
   
   include('connection.php'); 
   $hrm  =  hrm();                     
   $sql  ="select * from employee where employee_id='$employee_id' AND full_name ='$employeeName'";
   $result  =  mysqli_query($hrm,$sql);
   $row = mysqli_fetch_assoc($result);  
?>

<?php include('header.php'); ?>
<div class="wrapper">   
   <?php include('left_header.php'); ?>   
   <div class="main-panel">
      <?php include('nav_bar.php'); ?>
      <div class="container"><br>
         <div class="topHead">
            <div class="pull-right">
               <a href="logout.php" class="btn btn-sm btn-danger btn-fill">Logout</a>     
            </div>
         </div><br>

         <?php if(isset($_SESSION['Leave_application_sent_successfully'])) { ?>
            <?php 
               echo '<script type="text/javascript">
                        alert("Leave application sent successfully.");
                     </script>';
            ?> 
         <?php } ?>  
         <?php if(isset($_SESSION['Movement_application_sent_successfully'])) { ?>
            <?php 
               echo '<script type="text/javascript">
                        alert("Movement application sent successfully.");
                     </script>';
            ?> 
         <?php } ?>       
         <div id="page-wrapper">
            <div class="row">
               <div class="col-lg-12">
                  <div class="panel panel-default">                                      
                     <div class="panel-body">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2 col-sm-offset-2">
                                 <div class="viewEmployee">
                                     <?php if($row['photo']==null){?>

                                       <?php if($row['gender']=='Male'){ ?>
                                          <div class="text-center">                 
                                             <img src="images/default.png" alt="Profile picture not found" width="200" height="200" style="border-radius: 50%; margin: 15px 0px;">
                                          </div>
                                           <?php }else{?>
                                              <div class="text-center">                 
                                             <img src="images/female.png" alt="Profile picture not found" width="200" height="200" style="border-radius: 50%; margin: 15px 0px; border: 5px solid #fff;">
                                          </div>
                                       <?php }?>

                                    <?php }else{?>

                                       <div class="text-center">                 
                                          <img src="<?= $row['photo'];?>" alt="Profile picture not found" width="200" height="200" style="border-radius: 50%; margin: 15px 0px;">                                         
                                       </div> 
                                    <?php } ?>
                                    <h3 class="text-center"> <?= $row['full_name']; ?> </h3>                                   

                                    <div class="form-group row">
                                       <label class="col-md-4 col-form-label">Employee_id</label>
                                       <div class="col-md-8">
                                          <label class="col-form-label"><?= $row['employee_id'] ?></label>
                                       </div>
                                    </div> 
                                    <div class="form-group row">
                                       <label class="col-md-4 col-form-label">Job Post</label>
                                       <div class="col-md-8">
                                          <label class="col-form-label" align="center"><?= $row['job_type'] ?></label>
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
                                    <div class="form-group row" style="border: none; ">
                                       <div class="col-md-offset-4 col-md-8" style="background: none; argin-left: 120px;">
                                          <a href="Edit_Account.php" class="btn btn-sm btn-success btn-fill pull-right">Edit Account</a>
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

<?php include('footer.php');   ?>
<?php unset($_SESSION['Leave_application_sent_successfully']); ?>
<?php unset($_SESSION['Movement_application_sent_successfully']); ?>
