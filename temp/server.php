<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="server.php" method="post">
        <input type="text" name="text">
        <button type="submit">submit</button>
    </form>
    <?php
    include("db.php");

    $sql = "INSERT INTO users (user, password) VALUE ('vaibhav', 'abc')";

    mysqli_query($conn, $sql);

    mysqli_close($conn);
    echo "hello";
    ?>
</body>

</html>