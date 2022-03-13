<?php

  if (isset($_GET)) {
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

    $user_id = $_GET['user'];
    
    $sql = "SELECT * FROM members WHERE idmembers = :userid ";
    $query = $dbh->prepare($sql);
    $query->bindParam('userid', $user_id, PDO::PARAM_STR);
    $query->execute();
    $member = $query->fetchAll(PDO::FETCH_ASSOC);
  
  }


?>

<form action="../functions/update-member.php" method="post">
  <input type="hidden" id="id" name="id" value="<?= $member[0]['idmembers'] ?>">
  <div class="mb-3">
    <label for="first-name" class="form-label">First-name</label>
    <input type="text" name="first-name" class="form-control" id="first-name" value="<?= $member[0]['first_name'] ?>" placeholder="first name">
  </div>
  <div class="mb-3">
    <label for="last-name" class="form-label">Last-name</label>
    <input type="text" name="last-name" class="form-control" id="last-name" value="<?= $member[0]['last_name'] ?>" placeholder="last name">
  </div>
  <div class="mb-3">
    <label for="birthday" class="form-label">birthday</label>
    <input type="text" name="birthday" class="form-control" id="birthday" value="<?= $member[0]['birthday'] ?>" placeholder="birthday">
  </div>
  <div class="mb-3">
    <select class="city" name="city"  value="<?= $member[0]['city'] ?>" aria-label=".form-select-sm example">
      <option selected><?= $member[0]['city'] ?></option>
      <option value="montpellier">montpellier</option>
      <option value="lyon">lyon</option>
      <option value="nîmes">nîmes</option>
    </select>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Modifier</button>
  </div>
</form>