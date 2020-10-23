<form id="create-patient" action="">
<h5 class="my-3">Dane właściciela konta</h5>
<div class="form-group row">
  <label for="patient-name" class="col-3 col-form-label">Imię i nazwisko</label>
  <div class="col-9">
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-address-card"></i>
        </div>
      </div>
      <input id="patient-name" name="patient-name" type="text" class="form-control">
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="patient-email" class="col-3 col-form-label">Adres e-mail</label>
  <div class="col-9">
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-at"></i>
        </div>
      </div>
      <input id="patient-email" name="patient-email" type="email" class="form-control">
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="patient-phone" class="col-3 col-form-label">Numer telefonu</label>
  <div class="col-9">
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-phone"></i>
        </div>
      </div>
      <input id="patient-phone" name="patient-phone" type="text" class="form-control">
    </div>
  </div>
</div>
<div class="row mt-3">
  <div class="col-12">
    <button name="submit" type="submit" class="btn btn-primary">Dodaj</button>
  </div>
</div>
</form>
