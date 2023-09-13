<?php
$host = "localhost";
$user = "vbp";
$password = "vbp_bd";
$dbname = "document_details";

// Create connection
$con = mysqli_connect($host, $user, $password, $dbname);
//check connection
if(!$con){
  die("Connection failed: ".mysqli_connect_error());
}
echo "connected naah";