<form id="familyCreate">
  <div class="modal-body">
    <div class="row mb-3">
      <div class="col-md-12">
        <label for="member-name">Imię i nazwisko</label>
          <input id="member-name" name="member-name" type="text" class="form-control" required>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-12">
        <label for="member-pesel">PESEL</label>
        <input id="member-pesel" name="member-pesel" type="text" class="form-control" required>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-12">
        <label for="member-sex">Płeć</label>
        <select id="member-sex" name="member-sex" class="custom-select" required>
          <option value="woman">Kobieta</option>
          <option value="man">Mężczyzna</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <label for="memberBorn">Data urodzenia</label>
        <div class="input-group date datepicker" id="memberBorn">
          <span class="input-group-addon"><i data-feather="calendar"></i></span><input type="text" class="form-control" required>
        </div>
      </div>
    </div>
    <div class="my-3" style="text-align:justify;" class="form-group">
      <div>
        <div class="">
          <label for="checkbox_0" class="">
          <input name="consent1" required id="consent1" type="checkbox" class="" value="consent1">
          Zapoznałem/am się z <a target="_blank" href="https://domowypediatra.pl/polityka-prywatnosci/">polityką prywatności</a> oraz <a target="_blank" href="https://domowypediatra.pl/regulamin/">regulaminem</a> platformy DomowyPediatra.pl i wyrażam zgodę na przetwarzanie moich danych osobowych przez firmę MedPartner sp. z.o.o.</label>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Anuluj</button>
    <button type="submit" class="btn btn-success">Dodaj</button>
  </div>
</form>
