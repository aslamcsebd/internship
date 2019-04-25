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
            <a href="holidays.php" class="btn btn-sm btn-success btn-fill">Back</a>
            <div class="btn-group pull-right" role="group" aria-label="Basic example">
               <a href="adminHome.php" class="btn btn-sm btn-info btn-fill">Home</a>
               <a href="logout.php" class="btn btn-sm btn-danger btn-fill">Logout</a>     
            </div>
         </div>

         <?php 
            if (isset($_GET['id'])) {
               $id=$_GET['id']; 
               $sql  ="select * from holidays where id='$id'";
               $result  =  mysqli_query($hrm,$sql);
               $row = mysqli_fetch_assoc($result);
            }
                        
            if (isset($_POST['updateHoliday'])) {   
               $date    =  $_POST['date'];
               $holiday = $_POST['holiday'];
               $about   =  $_POST['about'];  

               $sql ="update holidays set date='$date',holiday='$holiday',about='$about' where id=$id";

               $result =  mysqli_query($hrm,$sql);
                  if ($result) {
                     $sql2 ="SELECT * FROM holidays where date='$date' AND id='$id' ";
                     $result2=mysqli_query($hrm,$sql2);
                     $rowcount = mysqli_num_rows($result2);
                        if ($rowcount){
                           $_SESSION['holiday_update_successfully']=true;
                           echo "<script>window.location.href='holidays.php'</script>";
                        }else{
                              $_SESSION['holiday_update_fail']=true;
                        }
                  }    
            }
         ?>    

         <?php if(isset($_SESSION['holiday_update_fail'])) { ?>
            <?php 
               echo '<script type="text/javascript">
                        alert("Holiday add fail.\nPlease try again.");
                     </script>';
            ?> 
         <?php } ?> 

         <div id="page-wrapper">
            <div class="row">
               <div class="col-lg-12">
                  <div class="panel panel-default">
                     <div class="panel-heading text-center">
                        Update Holiday
                     </div>                     
                     <div class="panel-body">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2 col-sm-offset-2">
                                 <div class="register-form">
                                    <fieldset class="scheduler-border animated zoomIn wow">
                                       <legend class="scheduler-border" align="center">
                                          Update Holiday
                                       </legend>
                                       <form method="POST">
                                          <div class="form-group row">
                                             <label  class="col-md-4 col-form-label">Select Date</label>
                                             <div class="col-md-8">
                                                <input type="text" class="form-control" name="date" placeholder="holiday's date" value="<?= $row['date']; ?>">
                                             </div>
                                          </div> 
                                         
                                           <div class="form-group row">
                                             <label  class="col-md-4 col-form-label">Holiday's Name</label>
                                             <div class="col-md-8">
                                                <input type="text" class="form-control" name="holiday" placeholder="Holiday's name" value="<?= $row['holiday']; ?>">
                                             </div>
                                          </div> 
                                         
                                          <div class="form-group row">
                                             <label  class="col-md-4 col-form-label">About Holiday</label>
                                             <div class="col-md-8">
                                                <textarea type="text" class="form-control" name="about" placeholder="About holiday"><?= $row['about']; ?></textarea>
                                             </div> 
                                          </div> 

                                          <div class="form-group row">
                                             <div class="col-md-offset-4 col-md-8" style="background: transparent; border: none; text-align: left;">
                                                <button type="submit" name="updateHoliday" class="btn btn-sm btn-info btn-fill tn-block">Update Now</button>
                                             </div>
                                          </div>    
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
</div>      
<?php unset($_SESSION['holiday_update_fail']); ?>
<?php include("footer.php"); ?>