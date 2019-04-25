<?php
	session_start(); 
	include('connection.php'); 
	$hrm  =  hrm();
	date_default_timezone_set("Asia/Dhaka");
	$today= date("Y-m-d-D");

	if (isset($_GET['employee_id'])){
		$employee_id = $_GET['employee_id'];									
		$sql 	="delete from employee where employee_id='$employee_id' ";
		$result	=	mysqli_query($hrm,$sql);
		$sql2 	="delete from  attendance where employee_id='$employee_id' AND attendance_date='$today' ";
		$result2	=	mysqli_query($hrm,$sql2);

		 	if ($result) {	
		 		$sql2 ="SELECT * FROM employee where employee_id='$employee_id'";
				$result2=mysqli_query($hrm,$sql2);
			 	$rowcount = mysqli_num_rows($result2);
					if ($rowcount){
						$_SESSION['fail']=true;
					}else {
						$_SESSION['delete_successfully']=true;
			 			header("Location: Employee_Information.php");	
					}
			}
	} 
?>