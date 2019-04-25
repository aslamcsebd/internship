<?php  session_start(); ?>
<?php include('header.php'); ?>
<div class="wrapper">   
   <?php include('left_header.php'); ?>   
   <div class="main-panel">
      <?php include('nav_bar.php'); ?> 
      <div class="container"><br>
         <div class="topHead">
         	<a href="Create_Account.php" class="btn btn-sm btn-success btn-fill">Add Employee</a>
            <div class="btn-group pull-right" role="group" aria-label="Basic example">
            	<?php
            		if (isset($_SESSION['adminLogin'])) { ?>
						<a href="adminHome.php" class="btn btn-sm btn-info btn-fill">Home</a>	
					<?php } elseif (isset($_SESSION['employeeLogin'])) { ?>
						<a href="employeeHome.php" class="btn btn-sm btn-info btn-fill">Home</a>
					<?php } ?>               
               	<a href="logout.php" class="btn btn-sm btn-danger btn-fill">Logout</a> 
            </div>
         </div>
  			<div class="text-center" style="margin: -35px 0px 5px;">         
	  			<h5>
		  			<?php
		  				date_default_timezone_set("Asia/Dhaka");
		  				echo "Today".' : '. $today= date("Y-m-d- D"); 
		  			?> 
		  		</h5>
		  	</div>	
			<?php if(isset($_SESSION['attendance_fail'])) { ?>
	        	<?php 
	            echo '<script type="text/javascript">
	                     alert("Sorry!!! Employee attendance_fail.");
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
			               <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
			               	<?php 
					   				include('connection.php'); 
										$hrm  =  hrm();
				  						if (isset($_SESSION['adminLogin'])) {
											$sql 	="select * from employee";
										}else{
											$sql 	="select * from employee where employee_id='$_SESSION[employee_id]'";
										}

										$result 	=	mysqli_query($hrm,$sql);
									?>
				  					<thead align="center">
				  						<th>Employee Id</th>
				  						<th>Full Name</th>
				  						<th>Contact</th>
				  						<th>Email</th>
				  						<?php if (isset($_SESSION['adminLogin'])) {?>
				  							<th>Attendance</th>
				  						<?php } ?>				  						
				  						<th>Today</th>
				  					</thead>

				  					<tbody align="center">
				  						<?php while($row = mysqli_fetch_assoc($result)) { ?>
				  						<tr>
				  							<td><label> <?= $row['employee_id'] ?></label> </td>
				  							<td><label> <?= $row['full_name'] ?></label> </td>
				  							<td><label> <?= $row['contact'] ?></label> </td>
				  							<td><label> <?= $row['email'] ?></label> </td> 

				  							<?php if (isset($_SESSION['adminLogin'])) {?>	
						  						<td class="text-center">
               								<div class="btn-group" role="group" aria-label="Basic example">

						  							<?php
							  							$sql2 = "select*from attendance where employee_id='$row[employee_id]' AND attendance_date='$today' AND status='A'";
							  							$result2 = mysqli_query($hrm,$sql2);
							  							$rowcount = mysqli_num_rows($result2);
								  							if ($rowcount) { ?>
								  								<a class="btn btn-sm btn-success btn-fill pull-center" href="Attendance_Confirm.php?employee_id=<?php echo $row['employee_id']; ?>&full_name=<?php echo $row['full_name']; ?>&attendance=present"> Present</a>	

								  							<?php }else{ 

								  								$sql3 = "select*from attendance where employee_id='$row[employee_id]' AND attendance_date='$today' AND status='P'";
									  							$result3 	=	mysqli_query($hrm,$sql3);
									  							$rowcount2 = mysqli_num_rows($result3);

									  							if ($rowcount2) { ?>

																	<a class="btn btn-sm btn-info btn-fill pull-center" href="Attendance_Confirm.php?employee_id=<?php echo $row['employee_id']; ?>&full_name=<?php echo $row['full_name']; ?>&attendance=absent">Absent</a>
																<?php } else {?>
																	<a class="btn btn-sm btn-success btn-fill pull-center" href="Attendance_Confirm.php?employee_id=<?php echo $row['employee_id']; ?>&full_name=<?php echo $row['full_name']; ?>&attendance=present"> Present</a>

																	<a class="btn btn-sm btn-info btn-fill pull-center" href="Attendance_Confirm.php?employee_id=<?php echo $row['employee_id']; ?>&full_name=<?php echo $row['full_name']; ?>&attendance=absent">Absent</a>

																<?php }
															} ?>	
															</div>											
						  						</td>
					  						<?php } ?>
					  						<td>
						  						<?php
						  							$sql3 ="select*from attendance where employee_id='$row[employee_id]' AND attendance_date='$today'";
						  							$result3 	=	mysqli_query($hrm,$sql3);
						  							$rowcount2 = mysqli_num_rows($result3);
							  							if ($rowcount2){
															$row = mysqli_fetch_assoc($result3);

															if ($row['status']=='P'){ ?>
					  											<label style="background-color: #2ecc71; padding: 0px 15px;"> <?= $row['status'] ?></label>
					  										<?php } elseif($row['status']=='A'){ ?>
					  											<label style="background-color: #d63031; padding: 0px 15px;"> <?= $row['status'] ?></label>
					  										<?php } 

														}else {													 			
														}
						  						 ?>	
					  						</td>	  							
				  						</tr>
				  						<?php } ?>
				  					</tbody>
			  					</table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php unset($_SESSION['attendance_fail']); ?>
<?php unset($_SESSION['delete_successfully']); ?>
<?php include("footer.php"); ?>