<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $muistio = $_POST['muistio'];

        if(!empty($muistio) && !is_numeric($muistio)) 
        {

        //Tallennetaan mySQL Database
        $query = "insert into users (users,) values ('$muistio')";

        mysqli_query($con, $query);

        echo "Tallennettu";
        die;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <html lang="fi"></html>
    <link rel="stylesheet" href="style.css">
    <title>Login-Signup-System</title>
</head>
<body>

<header id="pageHeader">
    <nav class="nav" id="myNav">
        <div class="container">
          <h1 class="logo"><a href="index.php" class="otsikko">Tervetuloa <?php echo $user_data['user_name']; ?></a></h1>
          <ul>
            <li><a href="index.html" class="current">Muistio</a></li>
            <li><a href="logout.php">Logout</a></li>
            <i class="fa fa-bars"></i>
            <div class="menu">
              <span class="bar"></span>
              <span class="bar"></span>
            </div>
          </ul>
        </div>
      </nav>
</header>

<article id="mainArticle">
    <h1 class="first">
        Muistio
    </h1>
    <form method="POST">
        <input id="text" type="text" placeholder="Tietoa | Muistiinlaitettavaa"  name="muistio"><br><br>
        <input id="button" type="submit" value="Tallenna"><br><br>
    </form>


  </article>
        
</body>
</html>