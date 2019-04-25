<?php  session_start(); ?>
<?php include('header.php'); ?>
<div class="wrapper">   
   <?php include('left_header.php'); ?>   
   <div class="main-panel">
      <?php include('nav_bar.php'); ?>
      <div class="container"><br>
         <div class="topHead">
            <a href="Create_Account.php" class="btn btn-sm btn-success btn-fill">Add Employee</a>
            <div class="btn-group pull-right" role="group" aria-label="Basic example">
               <a href="adminHome.php" class="btn btn-sm btn-info btn-fill">Home</a>
               <a href="logout.php" class="btn btn-sm btn-danger btn-fill">Logout</a>  
            </div> 
         </div>

         <?php if(isset($_SESSION['salary_update_successfully'])) { ?>
            <?php 
            echo '<script type="text/javascript">
                     alert("Salary update successfully.");
                  </script>';
            ?> 
         <?php } ?>  

         <div id="page-wrapper">
            <div class="row">
               <div class="col-lg-12">
                  <div class="panel panel-default">
                     <div class="panel-heading text-center">
                        Employee Information
                     </div>
                     <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                           <thead>
                              <th>Employee Id</th>
                              <th>Full Name</th>
                              <th>Salary Month</th>
                              <th>Salary</th>
                              <th>Bonus</th>
                              <th>Total</th>
                              <th>Action</th>
                           </thead>
                           <?php
                           	date_default_timezone_set("Asia/Dhaka");
  										$today= date("Y-m-d");                       
                              include('connection.php'); 
                              $hrm  =  hrm();                     
                              $sql  ="select * from salary_bonus";
                              $result  =  mysqli_query($hrm,$sql);
                           ?>

                           <tbody align="center">
                              <?php while($row = mysqli_fetch_assoc($result)) { ?>
                              	<?php $salary_month = date('Y-M', strtotime($row['salary_month'])); ?>
                              <tr>
                                 <td><label> <?= $row['employee_id'] ?></label> </td>
                                 <td><label> <?= $row['full_name'] ?></label> </td>
                                 <td><label> <?= $salary_month; ?></label> </td>
                                 <td><label> <?= $row['salary'] ?></label> </td>
                                 <td><label> <?= $row['bonus'] ?></label> </td>
                                 <td><label> <?= $row['salary']+$row['bonus'] ?></label> </td>
                                 
                                 <td class="text-center">  
                                    <a class="btn btn-sm btn-primary btn-fill pull-center" href="Salary_Edit.php?employee_id=<?php echo $row['employee_id']; ?>&salary_month=<?php echo $row['salary_month']; ?>">Edit</a>                                                
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
      </div>
   </div>
</div>
<?php unset($_SESSION['salary_update_successfully']); ?>
<?php include('footer.php'); ?>