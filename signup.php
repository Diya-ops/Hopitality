<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (fullname, email, phone, password)
            VALUES ('$fullname', '$email', '$phone', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Account Created Successfully!');
                window.location.href='home.php';
              </script>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
} else {
    die("Access denied");
}
?>
