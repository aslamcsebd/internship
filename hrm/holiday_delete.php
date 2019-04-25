<?php
   session_start(); 
   include('connection.php'); 
   $hrm  =  hrm();

   if (isset($_GET['id'])){
      $id = $_GET['id'];                           
      $sql  ="delete from holidays where id='$id' ";
      $result  =  mysqli_query($hrm,$sql);
         if ($result) { 
            $sql2 ="SELECT * FROM holidays where id='$id'";
            $result2=mysqli_query($hrm,$sql2);
            $rowcount = mysqli_num_rows($result2);
               if ($rowcount){
                  $_SESSION['holiday_delete_fail']=true;
               }else {
                  $_SESSION['holiday_delete_successfully']=true;
                  header("Location: holidays.php");   
               }
         }
   } 
?>