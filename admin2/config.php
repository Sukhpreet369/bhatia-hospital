<?php 
//$base_url="https://bhatiahospital.in/bhatiahospital";
$servername="localhost";
$db="bhatia-data";
//$username="bhatia_data";
//$password="Pass@123#@";

$conn = new mysqli("localhost", $username, $password,$db);
if($conn->connect_error)
{
    echo "unable to established connection";
}else{
    
}
?>