<?php
/*include ('config.php');
include ('connexion.php');

$getStuff = $database->query('SELECT task_title FROM task');

while ($data = $getStuff->fetch()) {
  //echo ('<p>' . $data['task_title'] . '</p>');
}
  $sendStuff = $database->prepare('INSERT INTO task (task_title) VALUES (?)');

  if (!empty($_POST)){
  $sendStuff->execute(array($_POST['task_title']));
}*/
/*if (isset($_POST['insertTask'])) {

define("DS", DIRECTORY_SEPARATOR);
require dirname(__FILE__).DS.'config.php';
require dirname(__FILE__).DS.'connexion';

$title = "My Title";
$description = "My Description";
$date = new DateTime();
$startat = $date->getTimestamp();
$endat = $startat + (24*60*60*7);

$q = "INSERT INTO task (
  task, title, task_description, task_start_at, task_end_at) VALUES
  (:title, :description, :startat, :endat)";
$q = $db->prepare($q);

$q->blindParam(":title",$title,PDO::PARAM_STR);
$q->blindParam(":description",$title,PDO::PARAM_STR);
$q->blindParam(":startat",$title,PDO::PARAM_STR);
$q->blindParam(":endat",$title,PDO::PARAM_STR);

$q->execute();

  if ($q->rowCount() > 0) {
    echo true;
  } else {
    echo false;
  }

}
if (isset($POST[updateTask])) {

}

if (isset($POST[selectTask])) {
  $task = $_POST['selectTask'];
}

if ($task == "*") {
  //SELECT ALL TASKS
} else {
  //SELECT BY ID
}

if (isset($_POST['deleteTask'])) {
    $task = $_POST['deleteTask'];
    if (is_array($task)) {
        # code...
    }
} else {
  # code...
}*/




  ?>
