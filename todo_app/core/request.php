<?php
include ('config.php');
include ('connexion.php');

$getStuff = $database->query('SELECT task_title FROM task');

while ($data = $getStuff->fetch()) {
  echo ('<p>' . $data['task_title'] . '</p>');
}
 $sendStuff = $database->prepare('INSERT INTO task (task_title) VALUES (?)');
 $sendStuff->execute(array($_POST['task_title']));
 ?>
