<form style="max-width: 400px;margin: auto;">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group row">
        <label for="parentBorn" class="col-md-12">Data urodzenia</label>
          <div class="col-md-12">
            <div class="input-group date datepicker" id="parentBorn">
            <input type="text" class="form-control">
            </div>
          </div>
        </div>
    </div>
      <div class="col-md-6">
      <div class="form-group row">
          <label for="parent-sex" class="col-md-12">Płeć</label>
          <div class="col-md-12">
            <select id="parent-sex" name="parent-sex" class="custom-select">
              <option value="woman">Kobieta</option>
              <option value="man">Mężczyzna</option>
            </select>
          </div>
        </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="patient-pesel" class="col-md-12">Numer PESEL</label>
    <div class="col-md-12">
      <div class="input-group">
        <input id="patient-pesel" name="patient-pesel" type="number" class="form-control">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group row">
        <label for="address" class="col-md-12">Adres</label>
          <div class="col-md-12">
            <input type="text" id="address" name="address" class="form-control">
          </div>
        </div>
    </div>
      <div class="col-md-6">
      <div class="form-group row">
          <label for="postcode" class="col-md-12">Kod pocztowy</label>
          <div class="col-md-12">
            <input type="text" id="postcode" name="postcode" class="form-control">
          </div>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="form-group row">
        <label for="city" class="col-md-12">Miasto</label>
          <div class="col-md-12">
            <input type="text" id="city" name="city" class="form-control">
          </div>
        </div>
    </div>
  </div>
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">Kontynuuj</button>
  </div>
</form>
