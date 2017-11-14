<?php include ('config.php');

try

{

$bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $password);
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}

catch (Exception $e)

{

    die('Erreur : ' . $e->getMessage());

?>
