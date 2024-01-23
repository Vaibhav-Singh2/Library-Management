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

    // Check if the username already exists
    $checkUserExists = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($checkUserExists);

    if ($result->num_rows > 0) {
        $msg = "Username already exists";
    } else {
        // Insert the new user
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

        if ($conn->query($sql) === TRUE) {
            $msg = "Registration successful";
            $_SESSION['username'] = $username;
            header("location: index.php");
        } else {
            $msg = "Error";
        }
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
    <title>Register</title>
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
                <button type="submit" value="Register">Register</button>
                <?php if (isset($msg)) echo $msg; ?>
                <div>Already have an account? <a href="login.php">Login</a></div>
            </form>
        </div>
        </div>
    </main>

    <script src="script.js"></script>
</body>

</html>
