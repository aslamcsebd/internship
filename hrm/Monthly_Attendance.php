<?php  session_start(); ?>
<?php include('header.php'); ?>
<div class="wrapper">   
   <?php include('left_header.php');   ?>
   
   <div class="main-panel">
      <?php include('nav_bar.php'); ?>  
      <div class="container"><br>
         <div class="topHead">
         	<?php 
            	if (isset($_SESSION['adminLogin'])) { ?>
 						<a href="Create_Account.php" class="btn btn-sm btn-success btn-fill">Add Employee</a>
            <?php } ?> 
           
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
         <?php 
         	if (isset($_SESSION['adminLogin'])) { ?>
  					<div class="text-center" style="margin: -35px 0px 5px;">
         <?php }else{ ?>
  					<div class="text-center" style="margin: -20px 0px 5px;">
			<?php } ?> 
		  				<h5>
			  				<?php
			  					date_default_timezone_set("Asia/Dhaka");
			  					echo "Name this Month".' : '. $today= date("M-Y");
			  					echo "<br>Full Information".' : '.' ['.date("Y-m-d-D").']'; 
			  				 ?> 
			  			</h5> 				
		  			</div>

         <div id="page-wrapper">
            <div class="row">
               <div class="col-lg-12">
                  <div class="panel panel-default">
                     <div class="panel-heading text-center">
                        Employee Information
                     </div>
                     <div class="panel-body">
                     	<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
				  					<thead align="center">
				  						<th>Employee Id</th>
				  						<th>Full Name</th>
				  						<th>Contact</th>
				  						<th>Email</th>
				  						<th>Total office day</th>
				  						<th>Present</th>
				  						<th>Absent</th>
				  					</thead>

				  					<tbody align="center">
				  						<?php 
									   	$month = date('m', strtotime($today));
									 		$year = date('Y', strtotime($today));

											include('connection.php'); 
											$hrm  =  hrm();
											if (isset($_SESSION['adminLogin'])) {
												$sql 	="select * from employee";
											}else{
												$sql 	="select * from employee where employee_id='$_SESSION[employee_id]'";
											}
											$result 	=	mysqli_query($hrm,$sql);								
								   	 ?> 	


				  						<?php while($row = mysqli_fetch_assoc($result)) { ?>
				  							<?php 
				  								$employee_id=$row['employee_id'];
				  								$full_name=$row['full_name'];
				  								$contact=$row['contact'];
				  								$email=$row['email'];
									 		
										 		$sql2="SELECT * FROM attendance where employee_id='$employee_id' AND (month(attendance_date)='$month' AND year(attendance_date)='$year') AND status='P'";							 		
												$result2=mysqli_query($hrm,$sql2);
												$Present = mysqli_num_rows($result2);

												$sql3="SELECT * FROM attendance where employee_id='$employee_id' AND (month(attendance_date)='$month' AND year(attendance_date)='$year') AND status='A'";							 		
												$result3=mysqli_query($hrm,$sql3);
												$Absent = mysqli_num_rows($result3);
												$office_Day=$Present + $Absent;
				  							 ?>
				  						<tr>
				  							<td><label> <?= $employee_id; ?></label> </td>
				  							<td><label> <?= $full_name; ?></label> </td>
				  							<td><label> <?= $contact; ?></label> </td>
				  							<td><label> <?= $email; ?></label> </td>
				  							<td><label> <?= $office_Day ?></label> </td> 
				  							<td><label> <?= $Present ?></label> </td> 
				  							<td><label> <?= $Absent ?></label> </td> 
				  							</form>
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