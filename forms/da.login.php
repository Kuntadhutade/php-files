<?php
$host = "localhost";
$username = "root";
$password = "1234"
$database = "mydatabase.php";

$conn = new mysqli($host,$username, $password, $database);

if($conn->connect_error) {
    die("connection failed " . $conn->connect_error);

}else{
    echo"database connected";
}
?>