
<?php
include 'mydatabase.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        echo " Login successful. Welcome, $username!";
    } else {
        echo " Invalid username or password.";
    }
}
?>

