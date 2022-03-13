<?php include_once("./functions/members.php") ?>

<div class="d-flex justify-content-between mb-5">
  <h1>Members list</h1>
  <a href="./?page=new-member"><button type="button" class="btn btn-outline-primary btn-sm">New member</button></a>
</div>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">First_name</th>
      <th scope="col">Last_name</th>
      <th scope="col">Birthday</th>
      <th scope="col" colspan="2">City</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach  ($members as $member) : ?>
        <tr>
          <td><?= $member["idmembers"]?></td>
          <td><?= $member["first_name"]?></td>
          <td><?= $member["last_name"]?></td>
          <td><?= $member["birthday"]?></td>
          <td><?= $member["city"]?></td>
          <td><button type="button"
          onclick="window.open('./?page=updt-member&user=<?= $member['idmembers'] ?>','_self');"
           class="btn btn-outline-secondary btn-sm">Update</button></td>
        </tr>
    <? endforeach ;?>
  </tbody>
</table>

