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

         <?php if(isset($_SESSION['Application_delete_successfully'])) { ?>
            <?php 
            echo '<script type="text/javascript">
                     alert("Employee application delete successfully.");
                  </script>';
            ?> 
         <?php } ?>

         <?php if(isset($_SESSION['request_approve'])) { ?>
            <?php 
            echo '<script type="text/javascript">
                     alert("Application approve successfully.");
                  </script>';
            ?> 
         <?php } ?>

         <?php if(isset($_SESSION['request_reject'])) { ?>
            <?php 
            echo '<script type="text/javascript">
                     alert("Application reject successfully.");
                  </script>';
            ?> 
         <?php } ?>
         <?php if(isset($_SESSION['Application_delete_fail'])) { ?>
            <?php 
            echo '<script type="text/javascript">
                     alert("Sorry!!! Application delete fail.");
                  </script>';
            ?> 
         <?php } ?>

         <div id="page-wrapper">
            <div class="row">
               <div class="col-lg-12">
                  <div class="panel panel-default">
                     <div class="panel-heading text-center">
                        Leave Application
                     </div>
                     <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                           <thead>
                              <th>Employee Id</th>
                              <th>Full Name</th>
                              <th>Date</th>
                              <th>Action</th>
                           </thead>
                           <?php 
                              include('connection.php'); 
                              $hrm  =  hrm();                     
                              $sql  ="select * from application where type='Leave' ORDER BY date DESC";
                              $result  =  mysqli_query($hrm,$sql);
                           ?>

                           <tbody align="center">
                              <?php while($row = mysqli_fetch_assoc($result)) { ?>
                              <tr>
                                 <td><label> <?= $row['employee_id'] ?></label> </td>
                                 <td><label> <?= $row['full_name'] ?></label> </td>
                                 <td><label> <?= $row['date'] ?></label> </td>
                                 
                                 <td class="text-center">
                                    <?php if ($row['status']=='0') { ?>   

                                       <a class="btn btn-sm btn-info btn-fill pull-center" href="leaveApplicationView.php?id=<?php echo $row['id']; ?>&employee_id=<?php echo $row['employee_id']; ?>&date=<?php echo $row['date']; ?>">New Request</a>

                                      <!--  <a class="btn btn-sm btn-danger btn-fill pull-center" onclick="return confirm('Are you sure?')" href="Delete_Application.php?id=<?php echo $row['id']; ?>&employee_id=<?php echo $row['employee_id']; ?>&date=<?php echo $row['date']; ?>">Delete</a> -->

                                    <?php }elseif ($row['status']=='1') { ?>  
                                       <a class="btn btn-sm btn-success btn-fill pull-center" href="leaveApplicationView.php?id=<?php echo $row['id']; ?>&employee_id=<?php echo $row['employee_id']; ?>&date=<?php echo $row['date']; ?>">Approve</a>

                                    <?php }elseif ($row['status']=='2') { ?>

                                       <a class="btn btn-sm btn-danger btn-fill pull-center" href="leaveApplicationView.php?id=<?php echo $row['id']; ?>&employee_id=<?php echo $row['employee_id']; ?>&date=<?php echo $row['date']; ?>">Reject</a>
                                      
                                    <?php  } ?>
                                    
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
<?php unset($_SESSION['Application_delete_successfully']); ?>
<?php unset($_SESSION['request_approve']); ?>
<?php unset($_SESSION['request_reject']); ?>
<?php unset($_SESSION['Application_delete_fail']); ?>
<?php include('footer.php'); ?>