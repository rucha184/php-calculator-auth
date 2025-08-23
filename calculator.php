<?php include 'auth.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <link href="assets/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Welcome, <?= $_SESSION['user'] ?> 👋</h2>
    <a href="logout.php" class="btn btn-danger mb-3">Logout</a>

    <form method="post">
        <input type="number" name="num1" class="form-control mb-2" placeholder="Enter first number" required>
        <input type="number" name="num2" class="form-control mb-2" placeholder="Enter second number" required>
        <select name="operation" class="form-control mb-2" required>
            <option value="add">Addition (+)</option>
            <option value="sub">Subtraction (-)</option>
            <option value="mul">Multiplication (×)</option>
            <option value="div">Division (÷)</option>
        </select>
        <button class="btn btn-primary">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['operation'];
        $result = "";

        switch ($op) {
            case "add": $result = $num1 + $num2; break;
            case "sub": $result = $num1 - $num2; break;
            case "mul": $result = $num1 * $num2; break;
            case "div": $result = $num2 != 0 ? $num1 / $num2 : "Cannot divide by zero!"; break;
        }

        echo "<h3 class='mt-3'>Result: $result</h3>";
    }
    ?>
</body>
</html>
