<form id="create-staff" action="">
  <div class="form-group row">
  <label for="name" class="col-3 col-form-label">Imię i nazwisko</label>
  <div class="col-9">
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-address-card"></i>
        </div>
      </div>
      <input id="name" name="name" type="text" class="form-control">
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="email" class="col-3 col-form-label">Adres e-mail</label>
  <div class="col-9">
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-at"></i>
        </div>
      </div>
      <input id="email" name="email" type="text" class="form-control">
    </div>
  </div>
</div>
<div class="form-group row phone">
  <label for="doctor-phone" class="col-3 col-form-label">Numer telefonu</label>
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
<div class="form-group row pwz">
  <label class="col-3 col-form-label" for="pwz">Numer PWZ</label>
  <div class="col-9">
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-barcode"></i>
        </div>
      </div>
      <input id="pwz" name="pwz" type="text" class="form-control">
    </div>
  </div>
</div>
<div class="form-group row spec">
   <label for="spec" class="col-3 col-form-label">Specjalizacja</label>
   <div class="col-9">
     <div class="input-group">
       <div class="input-group-prepend">
         <div class="input-group-text">
           <i class="fa fa-briefcase"></i>
         </div>
       </div>
       <input id="spec" name="spec" type="text" class="form-control">
     </div>
   </div>
 </div>
<div class="form-group row adres">
  <label for="doctor-address" class="col-3 col-form-label">Pełny adres lekarza</label>
  <div class="col-9">
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-home"></i>
        </div>
      </div>
      <input id="doctor-address" name="doctor-address" type="text" class="form-control">
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="role" class="col-3 col-form-label">Rola</label>
  <div class="col-9">
    <select id="role" name="role" class="custom-select">
      <option value="administrator">Administrator</option>
      <option value="pielegniarka">Pielęgniarka</option>
      <option value="pacjent">Pacjent</option>
      <option value="lekarz">Lekarz</option>
    </select>
  </div>
</div>
<div class="form-group row">
  <div class="offset-3 col-9">
    <button name="submit" type="submit" class="btn btn-primary">Dodaj</button>
  </div>
</div>
</form>
