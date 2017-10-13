<?php

try {

  $host = 'localhost';
  $db_user = 'root';
  $db_password = '';
  $db_name = 'orkiestra';

 $db = new PDO("mysql:host=$host;dbname=$db_name",$db_user, $db_password);
}
catch(PDOException $e) {
 echo $e->getMessage();
}




 ?>
