<?php
include ('config.php');
/*$host="localhost";
$user="root";
$password="";
$dbname="todo_app";
$charset="utf-8";*/

try

{

$database = new PDO("mysql:host=$host;dbname=$dbname;", $user, $password);
$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  //echo "Connected succesfully";
}

catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage;
  }

?>
