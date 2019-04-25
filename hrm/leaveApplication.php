<?php  session_start(); ?>
<?php include('header.php'); ?>
<div class="wrapper">   
   <?php include('left_header.php');   ?>
   
   <div class="main-panel">
      <?php include('nav_bar.php'); ?>
      <div class="container"><br>
         <div class="topHead">
            <a href="employeeHome.php" class="btn btn-sm btn-success btn-fill">Back</a>
            <div class="btn-group pull-right" role="group" aria-label="Basic example">
               <a href="employeeHome.php" class="btn btn-sm btn-info btn-fill">Home</a>
               <a href="logout.php" class="btn btn-sm btn-danger btn-fill">Logout</a>     
            </div>
         </div>

			<?php
				include('connection.php');
				$hrm  =  hrm();
			   if (isset($_GET['employee_id'])) {
			      $employee_id=$_GET['employee_id']; 
			      $sql  ="select * from employee where employee_id='$employee_id'";
			      $result  =  mysqli_query($hrm,$sql);
			      $row = mysqli_fetch_assoc($result);
			   }

			   if (isset($_POST['addRequest'])) {
			   	date_default_timezone_set("Asia/Dhaka");
			   	$employee_id=$_SESSION['employee_id'];
  					$full_name=$_SESSION['employeeName'];
  					
  					date_default_timezone_set("Asia/Dhaka");
      			$today= date("Y-m-d");

               $type='Leave';
					$subject		=	$_POST['subject'];
					$application		=	$_POST['application'];
					$status='0';						

					$sql ="insert into application values (null, '$type', '$employee_id', '$full_name', '$today', '$subject', '$application','$status')";
					$result 	=	mysqli_query($hrm,$sql);

					

					$sql3 ="insert into application_status values (null, '$employee_id', '$full_name', '$today', '$type', '$status')";
					$result3 	=	mysqli_query($hrm,$sql3);

					if ($result) {
						$sql2 ="SELECT * FROM application where employee_id='$employee_id' AND date='$today'";
						$result2=mysqli_query($hrm,$sql2);
						$rowcount2 = mysqli_num_rows($result2);

						if ($rowcount2) {

							$_SESSION['Leave_application_sent_successfully']=true;
								echo "<script>window.location.href='employeeHome.php'</script>";
						}else{
							$_SESSION['application_sent_fail']=true;
						}					
					}
				}					
			?>

			<?php if(isset($_SESSION['application_sent_fail'])) { ?>
           	<?php 
               echo '<script type="text/javascript">
                        alert("Sorry! Application don`t sent successfully.\nPlease try again.");
                     </script>';
            ?> 
			<?php } ?>

	         <div id="page-wrapper">
	            <div class="row">
	               <div class="col-lg-12 row">
	                  <div class="panel panel-default">
	                     <div class="container">
							      <div class="row">
							        	<div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2 col-sm-offset-2">
							          	<div class="register-form">
							          		<fieldset class="scheduler-border animated zoomIn wow">
							          			<legend class="scheduler-border" align="center">
														Leave Application
													</legend>
								            	<form action="" method="POST" enctype="multipart/form-data">
									             

									              	<div class="row">  
										               <div class="col-md-2 col-xs-12">
										                  <div class="form-group">
										                  	<label for="inputEmail3" class="col-3 col-form-label">To</label>
										                  </div> 
										               </div>  
										               <div class="col-md-10 col-xs-12">
										                  <div class="form-group">
										                  	<label for="inputEmail3" class="col-3 col-form-label" style="background: blue; padding: 8px 16px;">Manager</label>
										                  							                    
										                  </div> 
										               </div>  
									              	</div>  

									              	<div class="row">
										               <div class="col-md-2 col-xs-12">
										                  <div class="form-group">
										                  	<label   for="inputEmail3" class="col-3 col-form-label">Subject</label>
										                  </div> 
										               </div>  
										               <div class="col-md-10 col-xs-12">
										                  <div class="form-group">
										                    	<input type="text" name="subject" class="form-control"  required style="text-align: justify;">      
										                  </div> 
										               </div>  
									              	</div> 

									              	<div class="row">  
										               <div class="col-md-2 col-xs-12">
										                  <div class="form-group">
										                  	<label for="inputEmail3" class="col-3 col-form-label" >Application</label>
										                  </div> 
										               </div>  
										               <div class="col-md-10 col-xs-12">
										                  <div class="form-group">
										                   	<textarea type="text" class="form-control" rows="5" name="application" required style="text-align: justify;"></textarea>
										                  </div> 
										               </div>  
									              	</div> 

									              	<div class="row">  										               
										               <div class="col-md-offset-2 col-md-10 col-xs-12">
										                  <div class="form-group">
										                   	<input type="submit" name="addRequest" onclick="return confirm('Are you sure?')" value="Send Request" class="btn btn-sm btn-primary btn-fill tn-block btn-lg" tabindex="7" style="color: #fff;">
										                  </div> 
										               </div>  
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
<?php include('footer.php');   ?>
<?php unset($_SESSION['application_sent_fail']); ?>