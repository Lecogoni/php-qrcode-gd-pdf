<?php include_once("./functions/members.php") ?>

<div class="d-flex justify-content-between mb-5">
  <h1>Members list</h1>
  <a href="./pages/new-member.php"><button type="button" class="btn btn-outline-primary btn-sm">New member</button></a>
</div>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">First_name</th>
      <th scope="col">Last_name</th>
      <th scope="col">Birthday</th>
      <th scope="col">City</th>
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
        </tr>
    <? endforeach ;?>
  </tbody>
</table>