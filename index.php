<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Calculator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .calculator {
      background: white;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      text-align: center;
      width: 300px;
    }
    input, select, button {
      margin: 10px 0;
      padding: 10px;
      width: 90%;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
    }
    button {
      background: #4CAF50;
      color: white;
      cursor: pointer;
    }
    button:hover {
      background: #45a049;
    }
    .result {
      margin-top: 15px;
      font-size: 20px;
      color: #333;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="calculator">
    <h2>Simple PHP Calculator</h2>
    <form method="post">
      <input type="number" name="num1" placeholder="Enter first number" required>
      <input type="number" name="num2" placeholder="Enter second number" required>
      <select name="operation" required>
        <option value="add">➕ Add</option>
        <option value="subtract">➖ Subtract</option>
        <option value="multiply">✖ Multiply</option>
        <option value="divide">➗ Divide</option>
      </select>
      <button type="submit" name="submit">Calculate</button>
    </form>

    <div class="result">
      <?php
        if (isset($_POST['submit'])) {
          $num1 = $_POST['num1'];
          $num2 = $_POST['num2'];
          $operation = $_POST['operation'];

          switch ($operation) {
            case "add":
              echo "Result: " . ($num1 + $num2);
              break;
            case "subtract":
              echo "Result: " . ($num1 - $num2);
              break;
            case "multiply":
              echo "Result: " . ($num1 * $num2);
              break;
            case "divide":
              if ($num2 == 0) {
                echo "❌ Cannot divide by zero!";
              } else {
                echo "Result: " . ($num1 / $num2);
              }
              break;
          }
        }
      ?>
    </div>
  </div>
</body>
</html>
