<?php  session_start(); 
   include("head.php");
   include("Nav_Bar.php");
   date_default_timezone_set("Asia/Dhaka");
  	$today= date("Y-m-d");
?>

 <div class="row">
   <div class="col-3">
      <?php include("header.php");?>                    
   </div>
   <div class="col">

   	
		<?php if(isset($_SESSION['attendance_fail'])) { ?>
        	<?php 
            echo '<script type="text/javascript">
                     alert("Sorry!!! Employee attendance_fail.");
                  </script>';
         ?> 
		<?php } ?> 

  		<div id="page-wrapper">
  			<div class="text-center" style="color: #fff; margin-bottom: -35px; weight: bold;">
  				<h4>
	  				<?php
	  					date_default_timezone_set("Asia/Dhaka");
	  					echo "Today".' : '. $today= date("Y-m-d-D"); 
	  				 ?> 
	  			</h4> 				
  			</div>
         <div class="panel panel-default" tyle="margin-left: -30px; padding-right: 50px;">
            <div class="panel-heading " style="margin: 50px 0px -28px 0px;">

            	<h3 class="text-center" style="margin: 30px 0 -35px 0px; color: white;">
            		Employee Information
            	</h3>
            	<a href="Create_Account.php" class="btn btn-success btn-fill pull-center">Add Employee</a>  
            </div>
            <?php 
   				include('include/connection.php'); 
					$hrm  =  hrm();							
					$sql 	="select * from employee";
					$result 	=	mysqli_query($hrm,$sql);
					?>
            <div class="panel-body">
               <table class="table" id="search">
	  					<thead align="center">
	  						<th>Employee Id</th>
	  						<th>Full Name</th>
	  						<th>Input Month</th>
	  						<th>Input Salary</th>
	  						<th>Bonus</th>
	  					</thead>

	  					<tbody align="center">
	  						<?php while($row = mysqli_fetch_assoc($result)) { ?>
	  						<tr>
	  							<td><label> <?= $row['employee_id'] ?></label> </td>
	  							<td><label> <?= $row['full_name'] ?></label> </td>
	  							<td><label> <?= $row['contact'] ?></label> </td>					

		  						<td class="text-center">
		  							<?php
			  							$sql2 = "select*from attendance where employee_id='$row[employee_id]' AND attendance_date='$today' AND status='A'";
			  							$result2 = mysqli_query($hrm,$sql2);
			  							$rowcount = mysqli_num_rows($result2);
				  							if ($rowcount) { ?>
				  								<a class="btn btn-success btn-fill pull-center" href="Attendance_Confirm.php?employee_id=<?php echo $row['employee_id']; ?>&full_name=<?php echo $row['full_name']; ?>&attendance=present"> Present</a>	

				  							<?php } else { 

				  								$sql3 = "select*from attendance where employee_id='$row[employee_id]' AND attendance_date='$today' AND status='P'";
					  							$result3 	=	mysqli_query($hrm,$sql3);
					  							$rowcount2 = mysqli_num_rows($result3);

					  							if ($rowcount2) { ?>				
													<a class="btn btn-info btn-fill pull-center" href="Attendance_Confirm.php?employee_id=<?php echo $row['employee_id']; ?>&full_name=<?php echo $row['full_name']; ?>&attendance=absent">Absent</a>
												<?php } else {?>
													<a class="btn btn-success btn-fill pull-center" href="Attendance_Confirm.php?employee_id=<?php echo $row['employee_id']; ?>&full_name=<?php echo $row['full_name']; ?>&attendance=present"> Present</a>

													<a class="btn btn-info btn-fill pull-center" href="Attendance_Confirm.php?employee_id=<?php echo $row['employee_id']; ?>&full_name=<?php echo $row['full_name']; ?>&attendance=absent">Absent</a>
												<?php }
											} ?>	
		  						</td>
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
<?php unset($_SESSION['attendance_fail']); ?>
<?php unset($_SESSION['delete_successfully']); ?>
<?php include("footer.php"); ?>