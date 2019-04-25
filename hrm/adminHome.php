<?php  session_start();
      include('connection.php'); 
      $hrm  =  hrm();
      date_default_timezone_set("Asia/Dhaka");
      $today= date("Y-m-d");

      $lastMonth = date ("Y-m-d", strtotime("-1 month", strtotime($today))); 

      $month = date('m', strtotime($lastMonth));
      $year = date('Y', strtotime($lastMonth));    

      $attendance='A';

      $sql ="SELECT * FROM attendance where attendance_date='$today'"; 
      $result    =  mysqli_query($hrm,$sql);
      $rowcount = mysqli_num_rows($result);
      if ($rowcount) {
      }else{
         $sql2 ="select*from employee";
         $result2 = mysqli_query($hrm,$sql2);
         while($row = mysqli_fetch_assoc($result2)) {
            $employee_id=$row['employee_id'];
            $full_name=$row['full_name'];         
            $sql3="insert into attendance values(null, '$employee_id','$full_name','$today','$attendance')";
            $result3 = mysqli_query($hrm,$sql3);
         }
      }

      // Total salary
      $sql ="SELECT SUM(salary)+SUM(bonus) as total_salary FROM salary_bonus WHERE (month(salary_month)='$month' AND year(salary_month)='$year')";

      $result = mysqli_query($hrm,$sql);
      $row = mysqli_fetch_assoc($result);
      $total_salary= $row['total_salary'];

      
      $sql ="select*from  employee";
      $result    =  mysqli_query($hrm,$sql);
      $total_employee = mysqli_num_rows($result);


      $sql2 ="SELECT * FROM attendance where attendance_date='$today' AND status='P'"; 
      $result2    =  mysqli_query($hrm,$sql2);
      $total_present = mysqli_num_rows($result2);

      $sql3 ="SELECT * FROM attendance where attendance_date='$today' AND status='A'"; 
      $result3    =  mysqli_query($hrm,$sql3);
      $total_absent = mysqli_num_rows($result3);
?>
<?php include('header.php');   ?>

<div class="wrapper"> 
   <?php include('left_header.php');   ?>
    <div class="main-panel">

      <?php include('nav_bar.php'); ?>  
      <div class="pull-right">
         <a href="logout.php" class="btn btn-sm btn-danger btn-fill" style="margin: 8px 16px;">Logout</a>     
      </div>
         <div class="container">  
            <div class="col-md-12 row adminHome" align="center">
               <div class="col-md-offset-2 col-md-4">
                  <section class="menu-section">
                     <ul >                     
                        <li class="menu-item">
                           <div class="image-thumbnail">                           
                              <h3><?php echo $total_employee; ?></h3>
                              <h5>Total Employee</h5>
                           </div>                           
                        </li>   
                        <li class="menu-item">
                           <div class="image-thumbnail">
                              <h3><?php echo $total_salary."/="; ?></h3>
                              <h5>Last Month's paid salary</h5>
                           </div>                           
                        </li>                                           
                     </ul>
                  </section>
               </div>
               <div class="col-md-4">
                  <section class="menu-section">
                     <ul>                     
                        <li class="menu-item">
                           <div class="image-thumbnail">
                              <h3><?php echo $total_absent; ?></h3>                           
                              <h5>Absent Employee</h5>
                           </div>                           
                        </li>   
                        <li class="menu-item">
                           <div class="image-thumbnail">
                              <h3><?php echo  $total_present; ?></h3>
                              <h5>Present Employee</h5>
                           </div>                           
                        </li>                     
                     </ul>
                  </section>
               </div>           
            </div> 
        </div>
    </div>
</div>
<?php include('footer.php');   ?>