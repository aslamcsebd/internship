<?php  session_start(); ?>
<?php include('header.php'); ?>
<div class="wrapper">   
   <?php include('left_header.php');   ?>
   
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
         <div class="text-center">
            <h5 style="margin: -35px 0px 5px;">
               <?php
                  date_default_timezone_set("Asia/Dhaka");
                  echo "Name this Month".' : '. $today= date("M-Y"); 
                  echo "<br>Full Information".' : '.' ['.date("Y-m-d-D").']'; 
                ?> 
            </h5>             
         </div>

         <?php if(isset($_SESSION['salary_already_add'])) { ?>
            <?php 
            echo '<script type="text/javascript">
                     alert("Sorry !!! \nSalary already added that month");
                  </script>';
            ?> 
         <?php } ?> 
         <?php if(isset($_SESSION['bonus_already_add'])) { ?>
            <?php 
            echo '<script type="text/javascript">
                     alert("Sorry !!! \nBonus already added that month");
                  </script>';
            ?> 
         <?php } ?>
         <?php if(isset($_SESSION['salary_add_successfully'])) { ?>
            <?php 
            echo '<script type="text/javascript">
                     alert("Salary add successfully.");
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
                              <th>Action</th>
                           </thead>
                              <?php 
                                 include('connection.php'); 
                                 $hrm  =  hrm();                     
                                 $sql  ="select * from employee";
                                 $result  =  mysqli_query($hrm,$sql);
                              ?>
                           <tbody align="center">
                              <?php while($row = mysqli_fetch_assoc($result)) { ?>
                              <tr>
                                 <form action="Salary_Bonus_Confirm.php" method="POST">   
                                    <td><label><?= $row['employee_id']; ?></label> </td>

                                    <td><label><input type="hidden" name="full_name" value="<?= $row['full_name']; ?>"> <?= $row['full_name']; ?></label> </td>

                                    <td><label><input type="date" name="salary_month" required=""></label> </td>
                                    <td><label><input type="text" name="salary"></label> </td>

                                    <td><label> <input type="text" name="bonus"></label> </td>

                                    <td class="text-center">
                                       <button type="submit" class="btn btn-sm btn-success btn-fill pull-center" name="salary_bonus" value='<?="$row[employee_id]"; ?>'>Add Now</button>
                                    </td> 
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
<?php unset($_SESSION['salary_already_add']); ?>
<?php unset($_SESSION['bonus_already_add']); ?>
<?php unset($_SESSION['salary_add_successfully']); ?>
<?php include('footer.php');   ?>