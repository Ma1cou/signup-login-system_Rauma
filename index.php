<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login-Signup-System</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>Tervetuloa etusivulle <?php echo $user_data['user_name']; ?> </h1> 

    <br>
    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vero atque nobis sunt, doloremque eius magnam minus at. Asperiores assumenda veritatis suscipit explicabo aliquam soluta enim a quae voluptatem modi!</p>
</body>
</html>