<?php

// check if origin of the request is the URL corresponding to the page with the form
if ($_SERVER["HTTP_REFERER"] == "http://0.0.0.0:70/pages/new-member.php") {

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


    // First method do not protect from SQL injection 

    // $sql = "INSERT INTO members (first_name, last_name, birthday, city) VALUES (?,?,?,?)";
    // $stmt= $dbh->prepare($sql);
    // $stmt->execute([$_POST['first-name'], $_POST['last-name'], $_POST['birthday'], $_POST['city']]);
   
  
    // Second method protect from SQL injection 

    // $sql = "INSERT INTO members (first_name, last_name, birthday, city) VALUES (?,?,?,?)";


    // sanitize, check first-name input : check if empty and is a string, if longer than 50 char
    if (empty($_POST['first-name']) and is_string($_POST['first-name'])) {
      echo "le first-name est vide ou n'est pas une string";
    } else {
      if(strlen($_POST['first-name']) > 50){
        echo 'le first-name est trop long';
      } else {
        $first_name = $_POST['first-name'];
      }
      
    }
  
    $last_name = $_POST['last-name'];
    $birthday = $_POST['birthday'];
    $city = $_POST['city'];
  
    $sql = 'INSERT INTO members (first_name, last_name, birthday, city) VALUES (:first_name, :last_name, :birthday, :city)';
    $query = $dbh->prepare($sql);
  
    $query->bindParam('first_name', $_POST['first-name'], PDO::PARAM_STR);
    $query->bindParam('last_name', $last_name, PDO::PARAM_STR);
    $query->bindParam('birthday', $birthday, PDO::PARAM_STR);
    $query->bindParam('city', $city, PDO::PARAM_STR);
  
    $query->execute();
  
    header('Location: http://0.0.0.0:70?page=members');
  
  }
  


// if origin of the request doesn't match the form page url, return to home page
} else {

  // => ajouter un message d'erreur
  header('Location: http://0.0.0.0:70');
}


?>
