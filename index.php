<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location: login.php");
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Online Library|HOME</title>
</head>

<body>
    <?php include("components/header.php") ?>

    <div class="divider">

        <?php include("components/sidebar.php") ?>

        <div class="right">
            <div class="card">
                <div class="book-title">Alone</div>
                <img class="book-image" src="./assets/1book.webp" alt="Book Cover">
            </div>
            <div class="card">
                <div class="book-title">A Million To One</div>
                <img class="book-image" src="./assets/2book.jpeg" alt="Book Cover">
            </div>
            <div class="card">
                <div class="book-title">Last Hope</div>
                <img class="book-image" src="./assets/3book.jpg" alt="Book Cover">
            </div>
            <div class="card">
                <div class="book-title">Alone</div>
                <img class="book-image" src="./assets/1book.webp" alt="Book Cover">
            </div>
            <div class="card">
                <div class="book-title">Alone</div>
                <img class="book-image" src="./assets/1book.webp" alt="Book Cover">
            </div>
            <div class="card">
                <div class="book-title">A Million To One</div>
                <img class="book-image" src="./assets/2book.jpeg" alt="Book Cover">
            </div>
            <div class="card">
                <div class="book-title">Last Hope</div>
                <img class="book-image" src="./assets/3book.jpg" alt="Book Cover">
            </div>
            <div class="card">
                <div class="book-title">Alone</div>
                <img class="book-image" src="./assets/1book.webp" alt="Book Cover">
            </div>
            <div class="card">
                <div class="book-title">Alone</div>
                <img class="book-image" src="./assets/1book.webp" alt="Book Cover">
            </div>
            <div class="card">
                <div class="book-title">A Million To One</div>
                <img class="book-image" src="./assets/2book.jpeg" alt="Book Cover">
            </div>
            <div class="card">
                <div class="book-title">Last Hope</div>
                <img class="book-image" src="./assets/3book.jpg" alt="Book Cover">
            </div>
            <div class="card">
                <div class="book-title">Alone</div>
                <img class="book-image" src="./assets/1book.webp" alt="Book Cover">
            </div>
            <div class="card">
                <div class="book-title">Alone</div>
                <img class="book-image" src="./assets/1book.webp" alt="Book Cover">
            </div>
            <div class="card">
                <div class="book-title">A Million To One</div>
                <img class="book-image" src="./assets/2book.jpeg" alt="Book Cover">
            </div>
            <div class="card">
                <div class="book-title">Last Hope</div>
                <img class="book-image" src="./assets/3book.jpg" alt="Book Cover">
            </div>
            <div class="card">
                <div class="book-title">Alone</div>
                <img class="book-image" src="./assets/1book.webp" alt="Book Cover">
            </div>
            <div class="card">
                <div class="book-title">Alone</div>
                <img class="book-image" src="./assets/1book.webp" alt="Book Cover">
            </div>
            <div class="card">
                <div class="book-title">A Million To One</div>
                <img class="book-image" src="./assets/2book.jpeg" alt="Book Cover">
            </div>
            <div class="card">
                <div class="book-title">Last Hope</div>
                <img class="book-image" src="./assets/3book.jpg" alt="Book Cover">
            </div>
            <div class="card">
                <div class="book-title">Alone</div>
                <img class="book-image" src="./assets/1book.webp" alt="Book Cover">
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>