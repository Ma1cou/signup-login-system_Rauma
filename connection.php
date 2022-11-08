<?php

$dbhost = "localhost";

$dbuser = "root";

$dbpass = "root";

$dbname = "kirjautuminen_esimerkki_1";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
   
    die("failed to connect!");
}

?>