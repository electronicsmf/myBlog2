<?php
$DB_USER = 'root';
$DB_HOST = 'localhost';
$DB_PWD ='';
$DB_NAME= 'test3';

$conn=new mysqli($DB_HOST,$DB_USER,$DB_PWD,$DB_NAME)
or die('Could not Connect :' . mysqli_connect_error());

?>