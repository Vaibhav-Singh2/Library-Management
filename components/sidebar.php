<aside class="left">
    <nav class="navigation">
        <ul>
            <a href="index.php">
                <li>Home</li>
            </a><a href="about.php">
                <li>About</li>
            </a>
        </ul>
    </nav>
    <hr>
    <p class="category">Categories</p>
    <div class="navigation">
        <ul>
            <li>Literary fiction</li>
            <li>History</li>
            <li>Mystery</li>
            <li>Horror</li>
            <li>Adventure</li>
        </ul>
    </div>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="account">
   <div><?php echo "<p>$username</p>" ?></div>
    <div><button type="submit" name="logout">Logout</button></div>
    </form>
</aside>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['logout'])) {
        
        session_start();
        session_destroy();
        header("location: login.php");
    }
}
?>