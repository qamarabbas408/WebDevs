<?php 
// step1: Connect with the DB 
$database = "blogging_db";
$host = "localhost";
$username ="root";
$password = "";
$conn = mysqli_connect($host,$username,$password,$database);
// var_dump($conn);
if ($conn == true) {
    echo "Your are connected Successfuly";
}
else{
    echo "Error in connecion";
}



?>