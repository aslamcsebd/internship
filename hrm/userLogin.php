<?php 


 		$sql2="select * from employee where email='$email' AND password='$password' ";
      $result2=mysqli_query($hrm,$sql2);
      $rowcount2=mysqli_num_rows($result2);

      if($rowcount2) {
         $allEmployee=mysqli_fetch_assoc($result2);
         $employeeName=  $allEmployee['full_name'];
         $_SESSION['employeeName']=$employeeName;
         
         $_SESSION['employeeLogin']=true;   
         header("Location: employeeHome.php");
      }else{
          $_SESSION['id_pass_fail']=true;
      }















 ?>