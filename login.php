<?php
include 'config.php';
session_start();

$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $res = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        if (password_verify($password, $row['password'])) {
            $_SESSION['user'] = $username;
            header("Location: calculator.php");
            exit();
        } else {
            $msg = "Invalid password!";
        }
    } else {
        $msg = "No user found!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="assets/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Login</h2>
    <form method="post">
        <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
        <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
        <button class="btn btn-success">Login</button>
    </form>
    <p class="text-danger mt-3"><?= $msg ?></p>
</body>
</html>nahh

