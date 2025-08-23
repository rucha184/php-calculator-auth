<?php
include 'config.php';

$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $checkUser = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    if (mysqli_num_rows($checkUser) > 0) {
        $msg = "Username already taken!";
    } else {
        $sql = "INSERT INTO users (username, password) VALUES ('$username','$password')";
        if (mysqli_query($conn, $sql)) {
            $msg = "Registration successful! <a href='login.php'>Login here</a>";
        } else {
            $msg = "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="assets/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Register</h2>
    <form method="post">
        <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
        <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
        <button class="btn btn-primary">Register</button>
    </form>
    <p class="text-danger mt-3"><?= $msg ?></p>
</body>
</html>
