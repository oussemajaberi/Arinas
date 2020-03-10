<?php include('includes/header.php'); ?>
<form class="form-sub-pr">
  <div class="form-row d-flex justify-content-center">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nom <span style="color:red">*</span></label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Prénom <span style="color:red">*</span></label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Adresse <span style="color:red">*</span></label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Insérer votre adresse exacte">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Email <span style="color:red">*</span></label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Insérer votre email">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Télephone <span style="color:red">*</span></label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary"> Commander</button>
</form>
<?php include('includes/footer.php'); ?>