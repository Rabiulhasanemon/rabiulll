<?php

$DB_name='arclab';
$DB_host='localhost';
$DB_password='';
$DB_defuser='root';
$con=mysqli_connect($DB_host,$DB_defuser,$DB_password,$DB_name);
if(!$con){
  echo "Database connection failed";
}
 ?>
