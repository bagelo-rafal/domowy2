<form id="payment-form">
  <div class="modal-body">
    <div class="row">
      <div class="col-md-12 mb-3">
        <label>Numer karty:</label>
        <input class="form-control" data-inputmask-alias="9999-9999-9999-9999">
      </div>
      <div class="col-md-6">
        <label>Data ważności:</label>
        <input class="form-control" data-inputmask-alias="99/99">
      </div>
      <div class="col-md-6">
        <label>Kod CVC:</label>
        <input class="form-control" data-inputmask-alias="999">
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Anuluj</button>
    <button type="submit" class="btn btn-success">Zapłać</button>
  </div>
</form>
