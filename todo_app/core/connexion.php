<?php
include ('config.php');
/*$host="localhost";
$user="root";
$password="";
$dbname="todo_app";
$charset="utf-8";*/

// try
//
// {
//
// $database = new PDO("mysql:host=$host;dbname=$dbname;", $user, $password);
// $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//
//   echo "Connected succesfully";
// }
//
// catch (PDOException $e) {
//
//     echo "Connection failed: " . $e->getMessage;
//   }

try {
    $database = new PDO(
    	"mysql:host=".$db_config['db_host'].";dbname=".$db_config['db_name'].";charset=utf8;",
    	$db_config['db_user'],
    	$db_config['db_pass']
    );
    // set the PDO error mode to exception
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

 ?>
