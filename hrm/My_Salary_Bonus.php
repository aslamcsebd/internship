<?php  
   session_start(); 
   include('connection.php'); 
   $hrm  =  hrm();

   date_default_timezone_set("Asia/Dhaka");
   $today= date("Y-m-d");
?>
<?php include('header.php'); ?>
<div class="wrapper">   
   <?php include('left_header.php'); ?>   
   <div class="main-panel">
      <?php include('nav_bar.php'); ?>
      <div class="container"><br>
         <div class="topHead">
            <a href="employeeHome.php" class="btn btn-sm btn-success btn-fill">Back</a>
            <div class="btn-group pull-right" role="group" aria-label="Basic example">
               <a href="employeeHome.php" class="btn btn-sm btn-info btn-fill">Home</a>
               <a href="logout.php" class="btn btn-sm btn-danger btn-fill">Logout</a>     
            </div>
         </div>

         <div class="text-center" style="margin: -35px 0px 5px;">
            <h5>
               <?php
                  date_default_timezone_set("Asia/Dhaka");
                  echo "Name this Month".' : '. $today= date("M-Y"); 
                                                         
                     $sql  ="select * from employee where employee_id='$_SESSION[employee_id]' AND full_name='$_SESSION[employeeName]'";
                     $result  =  mysqli_query($hrm,$sql);
                     $row = mysqli_fetch_assoc($result); 
                        $row['job_type']; 
               ?>

               <table class="table table-striped table-bordered table-hover" align="center" style="width: auto; ">
                  <thead align="center" style="background: #00b894; font-size: 0.9em;">                
                     <th>Employee Id</th>
                     <th>Full Name</th>
                     <th>Job Post</th>

                  </thead>
                  <tbody align="center" style="font-size: 0.8em;">
                     <tr>
                        <td><?= $_SESSION['employee_id']; ?></td>
                        <td><?= $_SESSION['employeeName']; ?></td>
                        <td><?= $row['job_type']; ?></td>
                     </tr>
                  </tbody>
               </table>
            </h5>             
         </div>

         <?php if(isset($_SESSION['salary_update_successfully'])) { ?>
            <?php 
            echo '<script type="text/javascript">
                     alert("salary_update_successfully.");
                  </script>';
            ?> 
         <?php } ?>  

         <div id="page-wrapper">
            <div class="row">
               <div class="col-lg-12">
                  <div class="panel panel-default">
                     <div class="panel-heading text-center">
                        Your salary Information
                     </div>
                     <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                           <thead>
                              <th>Salary Month</th>
                              <th>Salary</th>
                              <th>Bonus</th>
                              <th>Total</th>
                           </thead>
                           <?php                              
                              $employee_id=$_SESSION['employee_id'];             
                              $sql  ="select * from salary_bonus where employee_id=$employee_id";
                              $result  =  mysqli_query($hrm,$sql);
                           ?>

                           <tbody align="center">
                              <?php while($row = mysqli_fetch_assoc($result)) { ?>
                                 <?php $salary_month = date('Y-M', strtotime($row['salary_month'])); ?>
                              <tr>
                                 <td><label> <?= $salary_month; ?></label> </td>
                                 <td><label> <?= $row['salary'] ?></label> </td>
                                 <td><label> <?= $row['bonus'] ?></label> </td>
                                 <td><label> <?= $row['salary']+$row['bonus'] ?></label> </td>
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
<?php unset($_SESSION['salary_update_successfully']); ?>
<?php include('footer.php'); ?>