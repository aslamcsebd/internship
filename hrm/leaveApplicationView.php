<?php  session_start(); 
      include('connection.php'); 
      $hrm  =  hrm();

   if (isset($_GET['employee_id'])) {      
      $id=$_GET['id'];
      $employee_id=$_GET['employee_id'];
      $date=$_GET['date'];
                      
      $sql  ="select * from application where employee_id='$employee_id' AND id='$id'";
      $result  =  mysqli_query($hrm,$sql);
      $row = mysqli_fetch_assoc($result);

   } if (isset($_POST['approve'])) {
      $id=$_GET['id'];      
      $action='1';
      $sql2  ="update application set status='$action' where employee_id='$employee_id' AND id='$id'";
      $result2  =  mysqli_query($hrm,$sql2);
      $_SESSION['request_approve']=true;
      echo "<script>window.location.href='leaveApplicationConfirm.php'</script>";

   } if (isset($_POST['reject'])) {
      $id=$_GET['id'];      
      $action='2';
      $sql2  ="update application set status='$action' where employee_id='$employee_id' AND id='$id'";
      $result2  =  mysqli_query($hrm,$sql2);
      $_SESSION['request_reject']=true;
      echo "<script>window.location.href='leaveApplicationConfirm.php'</script>";
   }

?>
<style type="text/css">
   .col-sm-8 .col-md-10 label {
      background: #1abc9c;
      padding: 6px 16px;
      text-align: justify;
      font-weight: normal;
      border-radius: 5px;
   }  
</style>

<?php include('header.php'); ?>
<div class="wrapper">
   <?php include('left_header.php'); ?>
   <div class="main-panel">
      <?php include('nav_bar.php'); ?>
      <div class="container"><br>
         <div class="topHead">
            <a href="leaveApplicationConfirm.php" class="btn btn-sm btn-success btn-fill">Back</a>
            <div class="btn-group pull-right" role="group" aria-label="Basic example">
               <a href="adminHome.php" class="btn btn-sm btn-info btn-fill">Home</a>
               <a href="logout.php" class="btn btn-sm btn-danger btn-fill">Logout</a>     
            </div>
         </div>

         <div id="page-wrapper">
            <div class="row">
               <div class="col-lg-12 row">
                  <div class="panel panel-default">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-10 col-sm-8 col-xs-12 col-md-offset-1 col-sm-offset-2">
                              <div class="register-form">
                                 <fieldset class="scheduler-border animated zoomIn wow">
                                    <legend class="scheduler-border" align="center">
                                       Leave Application
                                    </legend>
                                    <form method="POST">                             

                                       <div class="row">
                                          <div class="col-md-2 col-xs-12">
                                             <div class="form-group">
                                                <label for="inputEmail3" class="col-form-label" >Employee_id</label>
                                             </div> 
                                          </div>
                                          <div class="col-md-10 col-xs-12">
                                             <div class="form-group">
                                                <label for="inputEmail3" class="col-3 col-form-label"><?= $row['employee_id'] ?></label>              
                                             </div> 
                                          </div> 
                                       </div>
                                       <div class="row">                                           
                                          <div class="col-md-2 col-xs-12">
                                             <div class="form-group">
                                                <label for="inputEmail3" class="col-3 col-form-label">Name</label>
                                             </div> 
                                          </div>  
                                          <div class="col-md-10 col-xs-12">
                                             <div class="form-group">
                                                <label for="inputEmail3" class="col-3 col-form-label"><?= $row['full_name'] ?></label>              
                                             </div> 
                                          </div>  
                                       </div>
                                       <div class="row">  
                                          <div class="col-md-2 col-xs-12">
                                             <div class="form-group">
                                                <label for="inputEmail3" class="col-3 col-form-label">Date</label>
                                             </div> 
                                          </div>  
                                          <div class="col-md-10 col-xs-12">
                                             <div class="form-group">
                                                <label for="inputEmail3" class="col-3 col-form-label"><?= $row['date'] ?></label>              
                                             </div> 
                                          </div>  
                                       </div>
                                       <div class="row">  
                                          <div class="col-md-2 col-xs-12">
                                             <div class="form-group">
                                                <label for="inputEmail3" class="col-3 col-form-label">Subject</label>
                                             </div> 
                                          </div>  
                                          <div class="col-md-10 col-xs-12">
                                             <div class="form-group">
                                                <label for="inputEmail3" class="col-3 col-form-label"><?= $row['subject'] ?></label>              
                                             </div> 
                                          </div>  
                                       </div>
                                       <div class="row">  
                                          <div class="col-md-2 col-xs-12">
                                             <div class="form-group">
                                                <label for="inputEmail3" class="col-3 col-form-label">Application</label>
                                             </div> 
                                          </div>  
                                          <div class="col-md-10 col-xs-12">
                                             <div class="form-group">
                                                <label for="inputEmail3" class="col-3 col-form-label"><?= $row['application'] ?></label>              
                                             </div> 
                                          </div>  
                                       </div>
                                       <?php if (isset($_SESSION['adminLogin'])) { ?>
                                          <div class="row">
                                             <div class="col-md-offset-1 col-md-5 col-xs-12">
                                                <div style="margin-left: 15px;" class="btn-group pull-right" role="group" aria-label="Basic example">
                                                   <button type="submit" name="approve" class="btn btn-sm btn-success btn-fill tn-block" onclick="return confirm('Are you sure?')">Approve Request</button>                                              
                                                   <button type="submit" name="reject" class="btn btn-sm btn-danger btn-fill tn-block" onclick="return confirm('Are you sure?')">Reject Request</button>
                                                </div>
                                             </div>
                                          </div> 
                                       <?php } ?>                                 
                                    </form>
                                 </fieldset>
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