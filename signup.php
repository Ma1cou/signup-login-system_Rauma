<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)) 
        {

        //Tallennetaan mySQL Database
        $user_id = random_num(20);
        $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

        mysqli_query($con, $query);

        header("Location: login.php");
        die;
    }else 
    {
        echo "Please enter some valid information!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
</head>
<body>
    <style type="text/css">

        #text {
            height: 25px;
            border-radius: 5px;
            padding: 5px;
            text-align: left;
            border: solid thin #aaa;
            width: 100%;
            text-decoration: none;
            margin: -3px;
            transition: all .2s ease-in-out;    
        }

        #text:hover {
            transform: scale(1.05);
        }

        #button {
            padding: 10px;
            width: 250px;
            color: white;
            text-align: center;
            background-color: lightblue;
            border: none;
            border-radius: 5px;
            transition: all .2s ease-in-out;
            margin: auto;
            display: block;
        }

        #button:hover {
            transform: scale(1.1);
        }

        #box {
            background-color: lightslategray;
            margin: auto;
            width: 300px;
            padding: 20px;
            border-radius: 5px;
            margin: auto;
            display: block;
        }
        a {
            color: white;
            transition: all .2s ease-in-out;
        }
        a:link {
            text-decoration: none;
            color: white;
        }
        a:active {
            color: hotpink;
        }
        a:hover {
            color: lightblue;
            transform: scale(1.1);
        }
    </style>

    <div id="box">
    <form method="POST">
        <div style="font-size: 25px;margin::10px;color:white;text-align:center;-webkit-text-stroke-width: 0.1px;
  -webkit-text-stroke-color: black;">Rekisteröinti</div>
        <br>
        <br>

        <input id="text" type="text" placeholder="Käyttäjätunnus..."  name="user_name"><br><br>
        <input id="text" type="password" placeholder="Salasana..."  name="password"><br><br>

        <input id="button" type="submit" value="Rekisteröidy"><br><br>

        <a href="login.php">Omistatko jo tunnukset?
            <br>
            Klikkaa Kirjautuaksesi
        </a><br><br>
    </form>
    </div>
</body>
</html>
