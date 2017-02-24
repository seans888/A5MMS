<?php
   include 'connectDB.php';

   if(isset($_POST['login'])){
      $admin_uname = $_POST['uname'];
      $admin_pass = $_POST['pass'];

      $query = "select * from admin where admin_uname='$admin_uname' AND admin_pass='$admin_pass'";

      $run = mysql_query($query);

      if(mysql_num_rows($run)>0){  
         header('location:adminpanel.php');  
      }
      else{
         echo "Invalid Username and Password";
      }
      
   }
?>