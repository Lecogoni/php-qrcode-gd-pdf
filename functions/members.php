<?php 

  $host = 'db'; //Nom donné dans le docker-compose.yml
  $user = 'myuser'; // user et pwd du docker compose
  $password = 'monpassword';
  $db = 'php-decouverte';

  try {
    $dbh = new PDO("mysql:host=" . $host . ";dbname=" . $db, $user, $password);
  } catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
  }

  $members =  $dbh->query('SELECT * FROM members');
 
?>