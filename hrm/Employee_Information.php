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

         <?php if(isset($_SESSION['employee_add_successfully'])) { ?>
            <?php 
            echo '<script type="text/javascript">
                     alert("New employee add successfully.");
                  </script>';
            ?> 
         <?php } ?> 
         <?php if(isset($_SESSION['delete_successfully'])) { ?>
            <?php 
            echo '<script type="text/javascript">
                     alert("Employee account delete successfully.");
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
                              <th>Contact</th>
                              <th>Email</th>
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
                                 <td><label> <?= $row['employee_id'] ?></label> </td>
                                 <td><label> <?= $row['full_name'] ?></label> </td>
                                 <td><label> <?= $row['contact'] ?></label> </td>
                                 <td><label> <?= $row['email'] ?></label> </td>
                                 
                                 <td class="text-center"> 
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                       <a class="btn btn-info btn-sm btn-fill pull-center" href="View_Employee.php?employee_id=<?php echo $row['employee_id']; ?>">View</a>

                                       <a class="btn btn-primary btn-sm btn-fill pull-center" href="Edit_Account.php?employee_id=<?php echo $row['employee_id']; ?>">Edit</a>

                                       <a class="btn btn-danger btn-sm btn-fill pull-center" onclick="return confirm('Are you sure?')" href="Delete_Employee.php?employee_id=<?php echo $row['employee_id']; ?>">Delete</a>
                                    </div>
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
<?php unset($_SESSION['employee_add_successfully']); ?>
<?php unset($_SESSION['delete_successfully']); ?>
<?php include('footer.php'); ?>