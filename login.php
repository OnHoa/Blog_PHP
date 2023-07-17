<?php
  $conn = mysqli_connect("localhost", "root", "", "blog-php");
  session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Đăng nhập thành công!";
        $_SESSION['login'] = true;
        header("Location: index.php?info=logged-in");
    } else {
        echo "Sai tên đăng nhập hoặc mật khẩu.";
    }
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form action="login.php" method="post">
  <h1>Login</h1>
  <div class="mb-3 mt-3">
    <label for="username" class="form-label">Username:</label>
    <input type="username" class="form-control" required placeholder="Enter username" name="username">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input type="password" class="form-control" required placeholder="Enter password" name="password">
  </div>
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
    
</body>
</html>
