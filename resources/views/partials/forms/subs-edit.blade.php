<form id="sub-edit-form">
  <div class="modal-body">
    <div class="row">
      <div class="col-md-12 mb-3">
        <label>Numer karty:</label>
        <input id="card-number" name="card-number" class="form-control" data-inputmask-alias="9999-9999-9999-9999">
      </div>
      <div class="col-md-6">
        <label>Data ważności:</label>
        <input id="card-date" name="card-date" class="form-control" data-inputmask-alias="99/99">
      </div>
      <div class="col-md-6">
        <label>Kod CVC:</label>
        <input id="card-cvc" name="card-cvc" class="form-control" data-inputmask-alias="999">
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <a class="confirm" href="https://google.com">
      <button type="button" style="margin-right:auto;" class="btn btn-danger" data-dismiss="modal">Anuluj subskrypcję</button>
    </a>
    <button type="submit" class="btn btn-success">Aktualizuj</button>
  </div>
</form>
