<form id="payment-form">
  <div class="modal-body">
    <h4 class="my-3">Podstawowe informacje</h4>
    <div class="row">
      <div class="col-md-12 mb-3">
        <label for="patient-visit">Którego członka rodziny dotyczy wizyta?</label>
        <select id="patient-visit" name="patient-visit" class="custom-select">
          <option value="">Jan Kowalski (#PESEL)</option>
          <option value="">Zuzia Kowalska (#PESEL)</option>
        </select>
      </div>
      <div class="col-md-12">
        <label for="visit-reason">Czego dotyczy wizyta? Opisz dokładnie swój przypadek</label>
        <textarea class="form-control" id="visit-reason" name="visit-reason" rows="6" required></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <label>Masz kod rabatowy? Wpisz go poniżej</label>
        <div class="row">
          <div class="col-md-10">
            <input id="coupon" name="coupon" class="form-control" type="text">
          </div>
          <div class="col-md-2">
            <button style="height: 35px;" type="submit" class="btn btn-success">Zatwierdź</button>
          </div>
        </div>
      </div>
    </div>
    <h4 class="my-3">Podsumowanie</h4>
    @include('partials.tables.summary-visit-payment')
    <div class="my-3" style="text-align:justify;" class="form-group">
      <div>
        <div class="">
          <label for="checkbox_0" class="">
          <input name="consent1" required id="consent1" type="checkbox" class="" value="consent1">
          Zapoznałem/am się z <a target="_blank" href="https://domowypediatra.pl/polityka-prywatnosci/">polityką prywatności</a> oraz <a target="_blank" href="https://domowypediatra.pl/regulamin/">regulaminem</a> platformy DomowyPediatra.pl i wyrażam zgodę na przetwarzanie moich danych osobowych przez firmę MedPartner sp. z.o.o.</label>
        </div>
      </div>
    </div>
    <div class="my-3" style="text-align:justify;" class="form-group">
      <div>
        <div class="">
          <label for="checkbox_0" class="">
          <input name="consent2" required id="consent2" type="checkbox" class="" value="consent2">
          Wyrażam zgodę na obciążenie mojej karty kwotą price w ramach rezerwacji wideowizyty w portalu DomowyPediatra.pl</label>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Anuluj</button>
    <button type="submit" class="btn btn-success">Zapłać</button>
  </div>
</form>
