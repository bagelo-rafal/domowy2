<form style="max-width: 400px;margin: auto;">
  <div class="form-group">
    <input id="firstname" name="firstname" placeholder="Imię" type="text" required="required" class="form-control">
  </div>
  <div class="form-group">
    <input id="lastname" name="lastname" placeholder="Nazwisko" type="text" class="form-control">
  </div>
  <div class="form-group">
    <input id="patient-email" name="patient-email" placeholder="Adres e-mail" type="text" class="form-control">
  </div>
  <h4 class="my-3">Podsumowanie</h4>
  @include('partials.tables.summary-payment-plan1')
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
    <button name="submit" type="submit" class="btn btn-primary">Zarejestruj się</button>
  </div>
</form>
