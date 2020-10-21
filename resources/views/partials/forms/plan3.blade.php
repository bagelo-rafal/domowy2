<form style="max-width: 400px;margin: auto;">
  <div class="row">
    <div class="form-group col-md-6">
      <input id="firstname" name="firstname" placeholder="Imię" type="text" required="required" class="form-control">
    </div>
    <div class="form-group col-md-6">
      <input id="lastname" name="lastname" placeholder="Nazwisko" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <input id="patient-email" name="patient-email" placeholder="Adres e-mail" type="text" class="form-control">
  </div>
  <div class="row">
    <div class="col-md-12 mb-3">
      <label>Numer karty:</label>
      <input required id="card-number" name="card-number" class="form-control" data-inputmask-alias="9999-9999-9999-9999">
    </div>
    <div class="col-md-6">
      <label>Data ważności:</label>
      <input required id="card-date" name="card-date" class="form-control" data-inputmask-alias="99/99">
    </div>
    <div class="col-md-6">
      <label>Kod CVC:</label>
      <input required id="card-cvc" name="card-cvc" class="form-control" data-inputmask-alias="999">
    </div>
  </div>
  <h4 class="my-3">Podsumowanie</h4>
  @include('partials.tables.summary-payment-plan3')
  <div class="my-3" style="text-align:justify;" class="form-group">
    <div>
      <div class="">
        <label for="checkbox_0" class="">
        <input name="consent1" required id="consent1" type="checkbox" checked="checked" class="" value="consent1">
        Zapoznałem/am się z <a target="_blank" href="https://domowypediatra.pl/polityka-prywatnosci/">polityką prywatności</a> oraz <a target="_blank" href="https://domowypediatra.pl/regulamin/">regulaminem</a> platformy DomowyPediatra.pl i wyrażam zgodę na przetwarzanie moich danych osobowych przez firmę MedPartner sp. z.o.o.</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">Zamów pakiet</button>
  </div>
</form>
