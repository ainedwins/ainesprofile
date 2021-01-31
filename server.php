<?php
$servername = "localhost";
$user = "root";
$pass = "";
$db = "edwins";

$conn = new mysqli($servername,$user,$pass,$db);

if($conn->error){
    echo "DB error ".$conn->error."";
}
else{
    // echo "Connection successful";
}
?>