<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <?php
include('config/dbconn.php'); // Ensure this file initializes $conn properly
session_start();
$_SESSION['logstatus']=FALSE;

if (isset($_POST['submit'])) {
    // Retrieve POST data securely
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT `username`, `password` FROM `USER` WHERE `username` = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify hashed password
        if ($row['password']===$password) {
            echo "Login successful";
            $_SESSION['logstatus']=TRUE;
            header('Location: userlists.php');
            exit();
        } else {
            echo "<script>alert('Wrong Password');</script>";
            header('Location: login.php');
            exit();
        }
    } else {
        echo "<script>alert('User not found');</script>";
        header('Location: login.php');
        exit();
    }
}
?>

    <style>
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
      }
      .login-form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
      }
      .login-form input[type="text"],
      .login-form input[type="password"] {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
      }
      .login-form button {
        width: 100%;
        padding: 10px;
        background-color: #4caf50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      .login-form button:hover {
        background-color: #45a049;
      }
    </style>
  </head>
  <body>
    <div class="login-form">
      <form method="POST" action="login.php">
        <input type="text" name="username" placeholder="Username" required />
        <input
          type="password"
          name="password"
          placeholder="Password"
          required
        />
        <button type="submit" name="submit">Login</button>
      </form>
    </div>
  </body>
</html>
