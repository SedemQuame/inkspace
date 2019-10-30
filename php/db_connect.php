<?php
// TODO: Make script, object oriented, and add extra layer of security.
$db_password = "@Cs&KNORytn4LlwvTtnN";
$db_username = "id11401872_game";
$host_name = "localhost";
$db_name = "id11401872_game";

try{
  $pdo = new PDO("mysql:host=".$host_name.";dbname=".$db_name, $db_username, $db_password);
  echo $pdo;
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $output = 'Database connection successful.';
}catch(PDOException $e){
  /* NOTE: $e isn't a string but rather an object.*/
  $error = $e->getMessage();
  $output = 'Database connection failed. \nError mEssage: '. $error;
}

echo $output;
// Utility Functions

?>
