<?php
session_start();

if (isset($_SESSION['username'])) {
    header("location: index.php");
    exit();
}

include("db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;
        header("location: index.php");
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>

<body>
    <header>
        <div><span id="hamburger"></span></div>
        <h1>Online Library</h1>
        <div class="theme-btn"><img src="./assets/light-theme.svg" alt="theme-icon"></div>
    </header>
    <main class="main-container">
        <div class="login-box">
            <img class="book-logo" src="assets/book-logo.svg" alt="book-logo">
            <form class="credential-box" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
                <label for="username">Username: </label><input type="text" name="username">
                <label for="password">Password: </label><input type="password" name="password">
                <button type="submit" value="Login">Login</button>
                <?php if (isset($error)) echo $error; ?>
                <div>Don't have an account? <a href="register.php">SignUp</a></div>
            </form>
        </div>
        </div>
    </main>

    <script src="script.js"></script>
</body>

</html>
