<?php
// $con=mysqli_connect("localhost","root","","scholarship_admin_db");
($GLOBALS["___mysqli_ston"] = mysqli_connect("scholarshipadmindb.cbcou7uylokn.us-east-2.rds.amazonaws.com","admin","Sibasish7844","scholarship_admin_db"));  //host,user,password,database
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 ?>