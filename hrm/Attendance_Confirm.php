<?php
	session_start(); 
	include('connection.php'); 
	$hrm  =  hrm();

	if (isset($_GET['employee_id'])) {
		$employee_id = $_GET['employee_id'];
		$full_name= $_GET['full_name'];

		date_default_timezone_set("Asia/Dhaka");
  		$today= date("Y-m-d");

  		$attendance= $_GET['attendance'];

		if($attendance=='present'){
			$attendance='P';			
			$inverse='A';
		}elseif ($attendance=='absent') {
			$attendance='A';
			$inverse='P';
		}

		$sql = "select*from attendance where employee_id='$employee_id' AND attendance_date='$today' AND status='$inverse'";
		$result = mysqli_query($hrm,$sql);
		$rowcount = mysqli_num_rows($result);
			if ($rowcount) {
				$sql2 ="update attendance set status='$attendance' where employee_id='$employee_id' AND attendance_date='$today'";
				 $result2 = mysqli_query($hrm,$sql2);
				 if ($result2) {
				 	header("Location: Daily_Attendance.php");		
				 }
			}else{
				$sql3="insert into attendance values(null, '$employee_id','$full_name','$today','$attendance')";
				$result3 = mysqli_query($hrm,$sql3);
			 	if ($result3) { 
			 		$sql4 ="SELECT * FROM attendance where employee_id='$employee_id' AND attendance_date='$today'";
					$result4=mysqli_query($hrm,$sql4);
				 	$rowcount2 = mysqli_num_rows($result4);
					if ($rowcount2){
						header("Location: Daily_Attendance.php");						
					}else {
						$_SESSION['attendance_fail']=true;			 			
					}	
				}
			}
		}
?>