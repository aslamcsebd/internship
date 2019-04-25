<?php 
	session_start(); 
   include('connection.php'); 
	$hrm  =  hrm();
   date_default_timezone_set("Asia/Dhaka");
  	$today= date("Y-m-d");
  	

	if (isset($_POST['salary_bonus'])) {
		$row['employee_id']=$_POST['salary_bonus'];
		$employee_id=$row['employee_id'];

		$row['full_name']=$_POST['full_name'];		
		$full_name=$row['full_name'];		

		$salary_month=$_POST['salary_month'];
		$month = date('m', strtotime($salary_month));
  		$year = date('Y', strtotime($salary_month));								
		$salary=$_POST['salary'];										
		$bonus=$_POST['bonus'];
	}

	$sql="SELECT * FROM salary_bonus where (employee_id='$employee_id' AND full_name='$full_name') AND (month(salary_month)='$month' AND year(salary_month)='$year')";
	$result 	=	mysqli_query($hrm,$sql);
	$rowcount = mysqli_num_rows($result);
	if ($rowcount) {				
		$row = mysqli_fetch_assoc($result);
		$salary_month=$row['salary_month'];
		$salary2=$row['salary'];
		$bonus2=$row['bonus'];
		if ($salary2==null) {
			$sql2 ="update salary_bonus set salary='$salary' where employee_id='$employee_id' AND salary_month='$salary_month'";
			$result2 =	mysqli_query($hrm,$sql2);
			header("Location: Salary_Bonus.php");
		}else{
			$_SESSION['salary_already_add']=true;
			header("Location: Salary_Bonus.php");
		}
		if ($bonus2==null) {
			$sql2 ="update salary_bonus set bonus='$bonus' where employee_id='$employee_id' AND salary_month='$salary_month'";
			$result2 =	mysqli_query($hrm,$sql2);
			header("Location: Salary_Bonus.php");
		}else{
			$_SESSION['bonus_already_add']=true;
			// echo "<script>window.location.href='Salary_Bonus.php'</script>";
			header("Location: Salary_Bonus.php");			
		}
			
	}else{
		$sql2 ="insert into salary_bonus values (null,'$employee_id','$full_name','$salary_month','$salary','$bonus')";
		$result2 	=	mysqli_query($hrm,$sql2);
		if ($result2) {
         $_SESSION['salary_add_successfully']=true;
	      header("Location: Salary_Bonus.php");
		}
	}
?>