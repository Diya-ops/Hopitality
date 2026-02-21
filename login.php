
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {

            $_SESSION['user'] = $user['fullname'];

            header("Location: dashboard.php");
            exit();

        } else {
            echo "Wrong Password";
        }

    } else {
        echo "User Not Found";
    }

} else {
    echo "Invalid Request";
}
?>
