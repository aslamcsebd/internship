<?php  
	session_start(); 
   include('connection.php'); 
	$hrm  =  hrm();

   date_default_timezone_set("Asia/Dhaka");
  	$today= date("Y-m-d");
?>
<?php include('header.php'); ?>
<div class="wrapper">   
   <?php include('left_header.php');   ?>   
   <div class="main-panel">
      <?php include('nav_bar.php'); ?>  
      <div class="container"><br>
         <div class="topHead">
            <a href="Attendance_Details.php" class="btn btn-sm btn-success btn-fill">Back</a>
            <div class="btn-group pull-right" role="group" aria-label="Basic example">
               <a href="adminHome.php" class="btn btn-sm btn-info btn-fill">Home</a>
               <a href="logout.php" class="btn btn-sm btn-danger btn-fill">Logout</a>
            </div>
         </div>
  			<div class="text-center" style="margin: -35px 0px 5px;">
  				<h5>
	  				<?php
	  					date_default_timezone_set("Asia/Dhaka");
	  					echo "Name this Month".' : '. $today= date("M-Y"); 

	  					if (isset($_POST['viewFull'])) {
							$employee_id=$_POST['viewFull'];														
							$sql 	="select * from employee where employee_id='$employee_id'";
							$result 	=	mysqli_query($hrm,$sql);
							$row = mysqli_fetch_assoc($result); 				
						}		
	  				?>
	  				<table class="table table-striped table-bordered table-hover" align="center" style="width: auto; ">
	  					<thead align="center" style="background: #00b894; font-size: 0.9em;">
	  						<th>Employee Id</th>
	  						<th>Full Name</th>
	  						<th>Job Post</th>
	  					</thead>
	  					<tbody align="center" style="font-size: 0.8em;">
	  						<tr class="bg-success">
	  							<td><?= $row['employee_id'] ?></td>
	  							<td><?= $row['full_name'] ?></td>
	  							<td><?= $row['job_type'] ?></td>
	  						</tr>
	  					</tbody>
	  				</table>
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
				  						<th>Office date</th>
				  						<th>Day</th>
				  						<th>[Present/Absent]</th>
				  					</thead>
				  					<tbody align="center">
				  						<?php 
									   	$month = date('m', strtotime($today));
									 		$year = date('Y', strtotime($today));						
								   	?>

								   	<?php 							

											if (isset($_POST['viewFull'])) {
												$employee_id=$_POST['viewFull'];
												$firstDay=$_POST['firstDay'];
												$lastDay=$_POST['lastDay'];

										      $sql= "SELECT * FROM attendance WHERE attendance_date between DATE_FORMAT(CURDATE() ,'$firstDay') AND DATE_FORMAT(CURDATE() ,'$lastDay') AND employee_id='$employee_id'";					
										      $result=mysqli_query($hrm,$sql);							     
											}
										?>
				  						<?php while($row = mysqli_fetch_assoc($result)) { ?> 
				  						<tr>
				  							<?php 
												date_default_timezone_set("Asia/Dhaka");
				                        $date=$row['attendance_date'];
				                        $day=date('l', strtotime($date));
                              	 ?>

					  						<form action="Attendance_Details_Confirm.php" method="POST">
					  							<td><label> <?= $row['attendance_date'] ?></label> </td>
					  							<td><label> <?= $day; ?></label> </td>

					  							<?php if ($row['status']=='P'){ ?>
					  								<td><label style="background-color: #2ecc71; padding: 0px 15px;"> <?= $row['status'] ?></label> </td>
					  							<?php } elseif($row['status']=='A'){ ?>
					  								<td><label style="background-color: #d63031; padding: 0px 15px;"> <?= $row['status'] ?></label> </td>
					  							<?php } ?>

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