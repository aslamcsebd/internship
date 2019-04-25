<?php  session_start(); ?>
<?php include('header.php'); ?>
<div class="wrapper">   
   <?php include('left_header.php');   ?>
   
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
				include('connection.php'); 
				$hrm  =  hrm();
			   if (isset($_GET['employee_id'])) {
			      $employee_id=$_GET['employee_id']; 
			      $sql  ="select * from employee where employee_id='$employee_id'";
			      $result  =  mysqli_query($hrm,$sql);
			      $row = mysqli_fetch_assoc($result);
			   }

			   if (isset($_POST['addEmployee'])) {	

					// $employee_id		=	$_POST['employee_id'];
					$full_name		=	$_POST['full_name'];
					$father_name		=	$_POST['father_name'];		
					$mother_name 	=	$_POST['mother_name'];
					$dob 				=	$_POST['dob'];
					$gender 			=	$_POST['gender'];
					$contact 			=	$_POST['contact'];
					$email				=	$_POST['email'];
					$blood_group		=	$_POST['blood_group'];		
					$education 		=	$_POST['education'];
					$present_address=	$_POST['present_address'];
					$permanent_address=	$_POST['permanent_address'];
					$password 		=	$_POST['password'];
					$job_type 		=	$_POST['job_type'];
					$photo 		=$_FILES["Profile_Picture"]["name"];
					
					
					// Profile picture
						$location = 'assets/profilePicture/';			
						
						$without_extension = pathinfo($photo, PATHINFO_FILENAME);

						if ($photo!=null) {
							$fullFileName= $location . $password . str_replace($without_extension, '_'.$full_name, basename($photo));		
						}else{
							$fullFileName='';
						}	

						$sql3="SELECT * FROM employee where email='$email'";
						$result3=mysqli_query($hrm,$sql3);
						$rowcount2 = mysqli_num_rows($result3);
						if ($rowcount2){
							$_SESSION['email_exit']=true;
						}else{
							move_uploaded_file($_FILES["Profile_Picture"]["tmp_name"],$fullFileName);

							$sql4 ="insert into employee values (null,'$full_name','$father_name','$mother_name','$dob','$gender','$contact','$email','$blood_group','$education','$present_address','$permanent_address','$password','$job_type','$fullFileName')";
							$result4 =	mysqli_query($hrm,$sql4);

							if ($result4) {
									$sql5 ="SELECT * FROM employee where email='$email' AND full_name='$full_name' ";
									$result5=mysqli_query($hrm,$sql5);
									$rowcount3 = mysqli_num_rows($result5);

									if ($rowcount3) {
										$_SESSION['employee_add_successfully']=true;
										echo "<script>window.location.href='Employee_Information.php'</script>";
									} else {
											$_SESSION['employee_add_fail']=true;
									}					
							}
						}
				}
			?>

			<?php if(isset($_SESSION['employee_add_successfully'])) { ?>
           	<?php 
               echo '<script type="text/javascript">
                        alert("New employee [ '.$full_name.' ] add successfully.");
                     </script>';
            ?> 
			<?php } ?> 

			<?php if(isset($_SESSION['employee_add_fail'])) { ?>
           	<?php 
               echo '<script type="text/javascript">
                        alert("Employee add fail.\nPlease try again.");
                     </script>';
            ?> 
			<?php } ?> 

			<?php if(isset($_SESSION['email_exit'])) { ?>
           	<?php 
               echo '<script type="text/javascript">
                        alert("This [ '.$email.' ] id already exit.\nUse another email id.");
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
													Employee's Registration Form
												</legend>
							            	<form action="" method="POST" enctype="multipart/form-data">
								              	<div class="row">  
									               <div class="col-md-4 col-xs-12">
									                  <div class="form-group" >
									                  	<label for="inputEmail3" class="col-3 col-form-label">Employee's name</label>
									                  </div> 
									               </div>  
									               <div class="col-md-8 col-xs-12">
									                  <div class="form-group">
									                    <input type="text" name="full_name" class="form-control" placeholder=" Employee's full name" required>
									                  </div> 
									               </div>  
								              	</div>  

								              	<div class="row">  
									               <div class="col-md-4 col-xs-12">
									                  <div class="form-group" >
									                  	<label   for="inputEmail3" class="col-3 col-form-label">Father's name</label>
									                  </div> 
									               </div>  
									               <div class="col-md-8 col-xs-12">
									                  <div class="form-group">
									                    	<input type="text" name="father_name" class="form-control" placeholder=" Employee's father name" required>      
									                  </div> 
									               </div>  
								              	</div> 
								              	 
								              	<div class="row">  
									               <div class="col-md-4 col-xs-12">
									                  <div class="form-group" >
									                  	<label   for="inputEmail3" class="col-3 col-form-label">Mother's name</label>
									                  </div> 
									               </div>  
									               <div class="col-md-8 col-xs-12">
									                  <div class="form-group">
									                    <input type="text" name="mother_name" class="form-control" placeholder="Employee's mother name" required>  
									                  </div> 
									               </div>  
								              	</div>  

								              	<div class="row">  
									               <div class="col-md-4 col-xs-12">
									                  <div class="form-group" >
									                  	<label class="col-3 col-form-label">Date of Birth</label>	
									                  </div> 
									               </div>  
									               <div class="col-md-8 col-xs-12">
									                  <div class="form-group"  style="border: 1px solid #fff; padding: 10px;">
									                    	<input  type="date" style="background-color: green; font-size: 17px;" lass="form-control" name="dob">
									                  </div> 
									               </div>  
								              	</div>

								              	<div class="row">  
									               <div class="col-md-4 col-xs-12">
									                  <div class="form-group" >
									                  	<label for="inputEmail3" class="col-3 col-form-label">Gender</label>
									                  </div> 
									               </div>  
									               <div class="col-md-8 col-xs-12">
									                  <div class="form-group"  tyle="border: 1px solid #fff; padding: 8px;">
									                  	<div class="gender" >
																  	<label class="btn btn-secondary ">
																    	<input type="radio" name="gender" value="Male" autocomplete="off" required> Male
																  	</label>

																  	<label class="btn btn-secondary">
																    	<input type="radio" name="gender" value="Female" autocomplete="off" required> Female
																  	</label>

																  	<label class="btn btn-secondary">
																    	<input type="radio" name="gender" value="Other" autocomplete="off" required>Other
																  	</label>
																</div>		                    
									                  </div> 
									               </div>  
								              	</div> 

								              	<div class="row">  
									               <div class="col-md-4 col-xs-12">
									                  <div class="form-group" >
									                  	<label   for="inputEmail3" class="col-3 col-form-label">Contact Number</label>
									                  </div> 
									               </div>  
									               <div class="col-md-8 col-xs-12">
									                  <div class="form-group">
									                    <input type="text" class="form-control" name="contact" placeholder=" Employee's contact number" required>
									                  </div> 
									               </div>  
								              	</div>  

								              	<div class="row">  
									               <div class="col-md-4 col-xs-12">
									                  <div class="form-group" >
									                  	<label   for="inputEmail3" class="col-3 col-form-label">Email</label>
									                  </div> 
									               </div>  
									               <div class="col-md-8 col-xs-12">
									                  <div class="form-group">
																<input type="email" class="form-control" name="email" placeholder=" Employee's email" required>		
									                  </div> 
									               </div>  
								              	</div>  

								              	<div class="row">  
									               <div class="col-md-4 col-xs-12">
									                  <div class="form-group" >
									                  	<label for="inputPassword3" class="col-3 col-form-label">Blood Group</label>	
									                  </div> 
									               </div>  
									               <div class="col-md-8 col-xs-12">
									                  <div class="form-group"   >
									                  	<div class="gender">
									                  
															  	<label class="btn btn-secondary ">
															    	<input type="radio" name="blood_group" value="O+" autocomplete="off" required> O+
															  	</label>

															  	<label class="btn btn-secondary">
															    	<input type="radio" name="blood_group" value="O-" autocomplete="off" required> O-
															  	</label>

															  	<label class="btn btn-secondary">
															    	<input type="radio" name="blood_group" value="A+" autocomplete="off" required> A+
															  	</label>

															  	<label class="btn btn-secondary">
															    	<input type="radio" name="blood_group" value="A-" autocomplete="off" required> A-
															  	</label>
															  	
															  	<label class="btn btn-secondary">
															    	<input type="radio" name="blood_group" value="B+" autocomplete="off" required> B+
															  	</label>

															  	<label class="btn btn-secondary">
															    	<input type="radio" name="blood_group" value="B-" autocomplete="off" required> B-
															  	</label>

															  	<label class="btn btn-secondary">
															    	<input type="radio" name="blood_group" value="AB+" autocomplete="off" required> AB+
															  	</label>
															  	<label class="btn btn-secondary">
															    	<input type="radio" name="blood_group" value="AB-" autocomplete="off" required> AB-
															  	</label>
															  	<label class="btn btn-secondary">
															    	<input type="radio" name="blood_group" value="N/A" autocomplete="off" required> Unknown
															  	</label>
															  	</div>
									                  </div> 
									               </div>  
								              	</div> 

								              	<div class="row">  
									               <div class="col-md-4 col-xs-12">
									                  <div class="form-group" >
									                  	<label for="inputEmail3" class="col-3 col-form-label">Education</label>
									                  </div> 
									               </div>  
									               <div class="col-md-8 col-xs-12">
									                  <div class="form-group">
									                   	<textarea type="text" class="form-control" rows="2" name="education" placeholder=" Employee's education [SSC, HSC, Hons, Other..]" required></textarea>	
									                  </div> 
									               </div>  
								              	</div>  

								              	<div class="row">  
									               <div class="col-md-4 col-xs-12">
									                  <div class="form-group" >
									                  	<label for="inputEmail3" class="col-3 col-form-label">Present Address</label>
									                  </div> 
									               </div>  
									               <div class="col-md-8 col-xs-12">
									                  <div class="form-group">
									                   	<textarea type="text" class="form-control" rows="2" name="present_address" placeholder=" Employee's present address" required></textarea>
									                  </div> 
									               </div>  
								              	</div>  

								              	<div class="row">  
									               <div class="col-md-4 col-xs-12">
									                  <div class="form-group" >
									                  	<label for="inputEmail3" class="col-3 col-form-label">Permanent Address</label>
									                  </div> 
									               </div>  
									               <div class="col-md-8 col-xs-12">
									                  <div class="form-group">
									                    <textarea type="text" class="form-control" rows="2" name="permanent_address" placeholder=" Employee's permanent address" required></textarea>
									                  </div> 
									               </div>  
								              	</div> 

								              	<?php
														// $str = 'abcdefghijklmnopqrstuvwxyz01234567891011121314151617181920212223242526';
														$str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
														$shuffled = str_shuffle($str);
														$password = substr($shuffled,1,10);
													?>

								              	<div class="row">  
									               <div class="col-md-4 col-xs-12">
									                  <div class="form-group" >
									                  	<label for="inputPassword3" class="col-3 col-form-label">Password</label>
									                  </div> 
									               </div>  
									               <div class="col-md-8 col-xs-12">
									                  <div class="form-group">
									                   <input type="text" class="form-control" name="<?php echo "password" ; ?>" placeholder="Password" value="<?= $password; ?>">
									                  </div> 
									               </div>  
								              	</div>

								              	<div class="row">
									               <div class="col-md-4 col-xs-12">
									                  <div class="form-group" >
									                  	<label class="col-3 col-form-label">Job post</label>	
									                  </div> 
									               </div>  
									               <div class="col-md-8 col-xs-12">	
									                  <div class="form-group">		
									                    	<select class="custom-select form-control" name="job_type" value="O+" style="background-color: #1abc9c; font-size: 17px;" required>
														        <option value="">Choose Job Type</option>
														        <option value="Web Developer">Web Developer</option>
														        <option value="Software Developer">Software Developer</option>
														        <option value=" Database Administrator "> Database Administrator </option>
														        <option value="Systems Analyst ">Systems Analyst </option>
														        
														        <option value="Security Analyst ">Security Analyst </option>
														        <option value="Network Architect ">Network Architect </option>
														        <option value="IT Project Manager ">IT Project Manager </option>
														      </select>
									                  </div> 
									               </div>
									            </div>

									            <div class="row">  
									               <div class="col-md-4 col-xs-12">
									                  <div class="form-group" >
									                  	<label class="col-3 col-form-label">Profile Picture</label>	
									                  </div> 
									               </div>  
									               <div class="col-md-8 col-xs-12">
									                  <div class="form-group"  style="border: 1px solid #fff; padding: 10px;">
									                    	<input  type="file" id="uploadImage" name="Profile_Picture">
									                  </div> 
									               </div>  
								              	</div>

								              	<div class="row">
								              		<div class="col-md-offset-4 col-md-6 col-xs-12">
            											<div class="btn-group" role="group" aria-label="Basic example">
								                  		<a href="Employee_Information.php" class="btn btn-success btn-fill">Back</a>

									                  	<input type="submit" name="addEmployee" value="Add Employee" class="btn btn-primary btn-fill" abindex="7">

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
<?php unset($_SESSION['employee_add_fail']); ?>
<?php unset($_SESSION['employee_name_exit']); ?>
<?php unset($_SESSION['email_exit']); ?>