<?php  session_start(); ?>
<?php include('header.php'); ?>
<div class="wrapper">   
   <?php include('left_header.php');   ?>
   
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
				include('connection.php'); 
				$hrm  =  hrm();			  

			   if (isset($_POST['addHoliday'])) { 

					$date		=	$_POST['date'];
					$holiday		=	$_POST['holiday'];
					$about		=	$_POST['about'];

					$sql ="SELECT * FROM holidays where date='$date'";
					$result=mysqli_query($hrm,$sql);
					$rowcount = mysqli_num_rows($result);
					if ($rowcount){	
						$_SESSION['this_holiday_alreadt_exit']=true;

					}else{

						$sql2 ="insert into holidays values (null, '$date','$holiday','$about')";
						$result2 =	mysqli_query($hrm,$sql2);

						if ($result2) {
							$sql3 ="SELECT * FROM holidays where date='$date'";
							$result3=mysqli_query($hrm,$sql3);
							$rowcount2 = mysqli_num_rows($result3);
							if ($rowcount2){	
								$_SESSION['holiday_add_successfully']=true;
								echo "<script>window.location.href='holidays.php'</script>";
							} else {
								$_SESSION['holiday_add_fail']=true;
							}
						}
						$_SESSION['holiday_add_fail']=true;
					}					
				}
			?>

			<?php if(isset($_SESSION['holiday_add_fail'])) { ?>
           	<?php 
               echo '<script type="text/javascript">
                        alert("Holiday add fail.\nPlease try again.");
                     </script>';
            ?> 
			<?php } ?>
			<?php if(isset($_SESSION['this_holiday_alreadt_exit'])) { ?>
           	<?php 
               echo '<script type="text/javascript">
                        alert("This holiday ['.$date.'] already exit.\nTry another holiday`s date.");
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
														Add Holiday
													</legend>
								            	<form action="" method="POST" enctype="multipart/form-data">
									              	<div class="row">  
										               <div class="col-md-4 col-xs-12">
										                  <div class="form-group" align="center">
										                  	<label class="col-3 col-form-label">Select Date</label>	
										                  </div> 
										               </div>  
										               <div class="col-md-8 col-xs-12">
										                  <div class="form-group" align="center" style="border: 1px solid #fff; padding: 10px;">
										                    	<input  type="date" style="background-color: green; font-size: 17px;" lass="form-control" name="date" required="">
										                  </div> 
										               </div>  
									              	</div>									              

									              	<div class="row">  
										               <div class="col-md-4 col-xs-12">
										                  <div class="form-group" align="center">
										                  	<label for="inputEmail3" class="col-3 col-form-label">Holiday's Name</label>
										                  </div> 
										               </div>  
										               <div class="col-md-8 col-xs-12">
										                  <div class="form-group">
										                    <input type="text" class="form-control" name="holiday" placeholder="Holiday's Name" required>
										                  </div> 
										               </div>  
									              	</div>  

									              	<div class="row">  
										               <div class="col-md-4 col-xs-12">
										                  <div class="form-group" align="center">
										                  	<label   for="inputEmail3" class="col-3 col-form-label">About Holiday</label>
										                  </div> 
										               </div>  
										               <div class="col-md-8 col-xs-12">
										                  <div class="form-group">
																	<textarea type="text" class="form-control" rows="2" name="about" placeholder="About Holiday" required></textarea>
										                  </div> 
										               </div>  
									              	</div>  	

									              	<div class="row">
									              		<div class="col-md-offset-4 col-md-4 col-xs-12">
            												<div class="btn-group pull-right" role="group" aria-label="Basic example">
									                  		<a href="holidays.php" class="btn btn-sm btn-success btn-fill">Back</a>
									                    		<input type="submit" name="addHoliday" value="Add Holiday" class="btn btn-sm btn-primary btn-fill"  tabindex="7" onclick="return confirm('Are you sure?')" style="color: #fff;">
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
<?php unset($_SESSION['holiday_add_fail']); ?>
<?php unset($_SESSION['this_holiday_alreadt_exit']); ?>