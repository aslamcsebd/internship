<?php
	session_start(); 
	include('connection.php'); 
	$hrm  =  hrm();

	if (isset($_GET['employee_id'])) {
      $id=$_GET['id'];		
		$employee_id = $_GET['employee_id'];									
		$date = $_GET['date'];									
		$sql 	="delete from application where id='$id'";
		$result	=	mysqli_query($hrm,$sql);

		$sql3 	="update application_status set status='2' where employee_id='$employee_id' AND date='$date' ";
		$result3	=	mysqli_query($hrm,$sql3);

	 	if ($result) {	
	 		$sql2 ="SELECT * FROM application where employee_id='$employee_id' AND id='$id'";
			$result2=mysqli_query($hrm,$sql2);
		 	$rowcount = mysqli_num_rows($result2);
				if ($rowcount){
					$_SESSION['Application_delete_fail']=true;
		 			header("Location: leaveApplicationConfirm.php");
				}else {
					$_SESSION['Application_delete_successfully']=true;
		 			header("Location: leaveApplicationConfirm.php");	
				}
		}
	} 
?>