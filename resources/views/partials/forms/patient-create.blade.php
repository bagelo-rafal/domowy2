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
  <label for="parentBorn" class="col-3 col-form-label">Data urodzenia</label>
  <div class="col-9">
    <div class="input-group date datepicker" id="parentBorn">
      <span class="input-group-addon"><i data-feather="calendar"></i></span><input type="text" class="form-control">
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="parent-sex" class="col-3 col-form-label">Płeć</label>
  <div class="col-9">
    <select id="parent-sex" name="parent-sex" class="custom-select">
      <option value="woman">Kobieta</option>
      <option value="man">Mężczyzna</option>
    </select>
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
  <label for="patient-pesel" class="col-3 col-form-label">Numer PESEL</label>
  <div class="col-9">
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-at"></i>
        </div>
      </div>
      <input id="patient-pesel" name="patient-pesel" type="number" class="form-control">
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
      <input id="doctor-phone" name="doctor-phone" type="text" class="form-control">
    </div>
  </div>
</div>
<h5 class="my-3">Dane dziecka</h5>
<div class="form-group row">
  <label for="child-name" class="col-3 col-form-label">Imię i nazwisko dziecka</label>
  <div class="col-9">
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-address-card"></i>
        </div>
      </div>
      <input id="child-name" name="child-name" type="text" class="form-control">
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="child-pesel" class="col-3 col-form-label">PESEL dziecka</label>
  <div class="col-9">
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-address-card"></i>
        </div>
      </div>
      <input id="child-pesel" name="child-pesel" type="text" class="form-control">
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="child-sex" class="col-3 col-form-label">Płeć dziecka</label>
  <div class="col-9">
    <select id="child-sex" name="child-sex" class="custom-select">
      <option value="woman">Kobieta</option>
      <option value="man">Mężczyzna</option>
    </select>
  </div>
</div>
<div class="form-group row">
  <label for="childBorn" class="col-3 col-form-label">Data urodzenia dziecka</label>
  <div class="col-9">
    <div class="input-group date datepicker" id="childBorn">
      <span class="input-group-addon"><i data-feather="calendar"></i></span><input type="text" class="form-control">
    </div>
  </div>
</div>

<div class="form-group row">
  <label for="firstInterview" class="col-3 col-form-label">Wstępny wywiad na temat dziecka</label>
  <div class="col-9">
    <textarea rows="6" id="firstInterview" name="firstInterview" class="form-control"> </textarea>
  </div>
</div>

<div class="row mt-3">
  <div class="col-12">
    <button name="submit" type="submit" class="btn btn-primary">Dodaj</button>
  </div>
</div>
</form>
