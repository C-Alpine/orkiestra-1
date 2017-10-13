<?php

try {

  $host = 'https://databases.000webhost.com/index.php';
  $db_user ='id3244367_root';
  $db_password ='admin';
  $db_name = 'id3244367_orkiestra';

 $db = new PDO("mysql:host=$host;dbname=$db_name",$db_user, $db_password);
}
catch(PDOException $e) {
 echo $e->getMessage();
}




 ?>
