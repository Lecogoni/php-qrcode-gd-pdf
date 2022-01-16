<form action="../functions/create-member.php"  method="post">
  <div class="mb-3">
    <label for="first-name" class="form-label">First-name</label>
    <input type="text" name="first-name" class="form-control" id="first-name" placeholder="first name">
  </div>
  <div class="mb-3">
    <label for="last-name" class="form-label">Last-name</label>
    <input type="text" name="last-name" class="form-control" id="last-name" placeholder="last name">
  </div>
  <div class="mb-3">
    <label for="birthday" class="form-label">birthday</label>
    <input type="text" name="birthday" class="form-control" id="birthday" placeholder="birthday">
  </div>
  <div class="mb-3">
    <select class="city" name="city" aria-label=".form-select-sm example">
      <option selected>choose your city</option>
      <option value="montpellier">montpellier</option>
      <option value="lyon">lyon</option>
      <option value="nîmes">nîmes</option>
    </select>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>