<?php
 $host = 'db'; //Nom donné dans le docker-compose.yml
 $user = $_ENV['MYSQL_USER'];
 $password = $_ENV['MYSQL_PASSWORD'];
 $db = $_ENV['MYSQL_DATABASE'];
 $conn = new mysqli($host,$user,$password,$db);
 if(!$conn) {echo "Erreur de connexion à MSSQL<br />";}
 else{
 echo "Connexion à MySQL ok<br />";
 mysqli_close($conn);
 }
 