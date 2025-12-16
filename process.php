<?php
include('dbcon.php');

$conn = DbConnector::getConnection();

if(isset($_POST['login'])){
   
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Use prepared statement to avoid SQL injection
    $stmt = $conn->prepare("SELECT id FROM login1 WHERE email = ? AND password = ? LIMIT 1");
    $stmt->bind_param('ss', $email, $password);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows > 0){
        header('Location:home.php');
        exit();
    } else {
        echo "Invalid email or password.";
    }

    $stmt->close();
}
?>