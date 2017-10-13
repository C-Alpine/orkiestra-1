<?php
require 'connect.php';
if  ($_POST['email'] == "grzegorz0kedzierski@gmail.com" && $_POST['passwd'] == "qwerty123"){
  $statement = $db->query("SELECT * FROM users");

   foreach($statement as $wiersz) {
   echo $wiersz["imie"]." - ".$wiersz["email"]."<br />";
   }
  $statement->closeCursor();


}
else {
  echo "złe dane logowania";
}
?>
