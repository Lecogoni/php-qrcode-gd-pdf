<?php

if (isset($_POST)) {
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

$sql = "INSERT INTO members (first_name, last_name, birthday, city) VALUES (?,?,?,?)";
$stmt= $dbh->prepare($sql);
$stmt->execute([$_POST['first-name'], $_POST['last-name'], $_POST['birthday'], $_POST['city']]);

header('Location: http://0.0.0.0:70?page=members');

}

?>
