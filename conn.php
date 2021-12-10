<?php 
$conn=new mysqli("localhost","root","","share_car");
if($conn->connect_error){
    die("Could not connect to database!");
}
