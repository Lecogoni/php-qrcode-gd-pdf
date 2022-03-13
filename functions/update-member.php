<?php


  if (isset($_POST)){

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
    
    $data = [
      'firstname' => $_POST['first-name'],
      'lastname' => $_POST['last-name'],
      'birthday' => $_POST['birthday'],
      'city' => $_POST['city'],
      'id' => $_POST['id']
    ];

    $sql = 'UPDATE members 
            SET first_name=:firstname, last_name=:lastname, birthday=:birthday, city=:city 
            WHERE idmembers=:id';
    $query= $dbh->prepare($sql);
    $query->execute($data);

    
    // $sql = "UPDATE members 
    //         SET first_name = :firstname, last_name = :last_name, birthday = :birthday, city = :city 
    //         WHERE idmembers = :id";

    // $query = $dbh->prepare($sql);
    
    // $query->bindParam('id', $_POST['id'], PDO::PARAM_INT);
    // $query->bindParam('first_name', $_POST['first-name'], PDO::PARAM_STR);
    // $query->bindParam('last_name', $_POST['last-name'], PDO::PARAM_STR);
    // $query->bindParam('birthday', $_POST['birthday'], PDO::PARAM_STR);
    // $query->bindParam('city', $_POST['city'], PDO::PARAM_STR);
    
    // $query->execute();
    

    header('Location: http://0.0.0.0:70?page=members');

  };

?>  