@extends('layout.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0">Ustawienia subskrypcji</h4>
  </div>
</div>
<div class="row">
  <div class="col-md-12 stretch-card">
    <div class="card">
      <div class="card-body">
        @include('partials.tables.active-subscription')
      </div>
    </div>
  </div>
</div>
<div class="mt-4 d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0">Zmień plan</h4>
  </div>
</div>
<div class="row">
  <div style="text-align:center;" class="col-md-4 stretch-card">
    <div class="card">
      <div class="card-body">
        <h5 class="mb-1">Jednorazowa wizyta</h5>
        <h5 style="color:#9791DA" class="mb-3"><b>0 zł</b></h5>
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td>
                <p>
                  Pomoc dzień + noc w dni robocze
                </p>
                <b><p>
                  TAK
                </p></b>
              </td>
            </tr>
            <tr>
              <td>
                <p>
                  Pomoc dzień+noc w weekendy i święta
                </p>
                <p><b>
                  TAK
                </b></p>
              </td>
            </tr>
            <tr>
              <td>
                <p>
                  Gwarancja 15 min oczekiwania<br>na wsparcie medyczne
                </p>
                <p><b>
                  NIE
                </b></p>
              </td>
            </tr>
            <tr>
              <td>
                <p>
                  Obowiązujące godziny wizyt
                </p>
                <p><b>
                  24h/7 dni
                </b></p>
              </td>
            </tr>
            <tr>
              <td>
                <p>
                  Cena za wizytę
                </p>
                <p><b>
                  119 - 349 zł
                </b></p>
              </td>
            </tr>
            <tr>
              <td>
                <p>
                  Ilość wizyt w pakiecie
                </p>
                <p><b>
                  Nie dotyczy
                </b></p>
              </td>
            </tr>
            <tr>
              <td>
                <p>
                  Cena subskrypcji
                </p>
                <p><b>
                  Nie dotyczy
                </b></p>
              </td>
            </tr>
            <tr>
              <td>
                <!-- Downgrade button -->
                <a class="confirm-downgrade" href="">
                  <button type="button" style="margin-right:auto;" class="btn btn-primary">Wybierz</button>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div style="text-align:center;" class="col-md-4 stretch-card">
    <div class="card">
      <div class="card-body">
        <h5 class="mb-1">Pakiet Comfort</h5>
        <h5 style="color:#9791DA" class="mb-3"><b>19 zł / miesiąc</b></h5>
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td>
                <p>
                  Pomoc dzień + noc w dni robocze
                </p>
                <b><p>
                  TAK
                </p></b>
              </td>
            </tr>
            <tr>
              <td>
                <p>
                  Pomoc dzień+noc w weekendy i święta
                </p>
                <p><b>
                  TAK
                </b></p>
              </td>
            </tr>
            <tr>
              <td>
                <p>
                  Gwarancja 15 min oczekiwania<br>na wsparcie medyczne
                </p>
                <p><b>
                  TAK
                </b></p>
              </td>
            </tr>
            <tr>
              <td>
                <p>
                  Obowiązujące godziny wizyt
                </p>
                <p><b>
                  24h/7 dni
                </b></p>
              </td>
            </tr>
            <tr>
              <td>
                <p>
                  Cena za wizytę
                </p>
                <p><b>
                  8:00-19:00 - 69 zł
                </b></p>
                <p><b>
                  19:00-8:00 - 119 zł
                </b></p>
              </td>
            </tr>
            <tr>
              <td>
                <p>
                  Ilość wizyt w pakiecie
                </p>
                <p><b>
                  Nie dotyczy
                </b></p>
              </td>
            </tr>
            <tr>
              <td>
                <p>
                  Cena subskrypcji
                </p>
                <p><b>
                  19 zł / miesiąc
                </b></p>
              </td>
            </tr>
            <tr>
              <td>
                <!-- Downgrade button -->
                <a class="confirm-downgrade" href="">
                  <button type="button" style="margin-right:auto;" class="btn btn-primary">Wybierz</button>
                </a>
                <!-- Upgrade button -->
                  <button type="button" style="margin-right:auto;" class="btn btn-primary" data-toggle="modal" data-target="#comfortUp">Wybierz</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div style="text-align:center;" class="col-md-4 stretch-card">
    <div class="card">
      <div class="card-body">
        <h5 class="mb-1">Pakiet No limits</h5>
        <h5 style="color:#9791DA" class="mb-3"><b>216 zł / miesiąc</b></h5>
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td>
                <p>
                  Pomoc dzień + noc w dni robocze
                </p>
                <b><p>
                  TAK
                </p></b>
              </td>
            </tr>
            <tr>
              <td>
                <p>
                  Pomoc dzień+noc w weekendy i święta
                </p>
                <p><b>
                  TAK
                </b></p>
              </td>
            </tr>
            <tr>
              <td>
                <p>
                  Gwarancja 15 min oczekiwania<br>na wsparcie medyczne
                </p>
                <p><b>
                  TAK
                </b></p>
              </td>
            </tr>
            <tr>
              <td>
                <p>
                  Obowiązujące godziny wizyt
                </p>
                <p><b>
                  24h/7 dni
                </b></p>
              </td>
            </tr>
            <tr>
              <td>
                <p>
                  Cena za wizytę
                </p>
                <p><b>
                  0 zł
                </b></p>
              </td>
            </tr>
            <tr>
              <td>
                <p>
                  Ilość wizyt w pakiecie
                </p>
                <p><b>
                  Nie dotyczy
                </b></p>
              </td>
            </tr>
            <tr>
              <td>
                <p>
                  Cena subskrypcji
                </p>
                <p><b>
                  216 zł / miesiąc
                </b></p>
              </td>
            </tr>
            <tr>
              <td>
                <!-- Downgrade button -->
                <a class="confirm-downgrade" href="">
                  <button type="button" style="margin-right:auto;" class="btn btn-primary">Wybierz</button>
                </a>
                <!-- Upgrade button -->
                  <button type="button" style="margin-right:auto;" class="btn btn-primary" data-toggle="modal" data-target="#nlUp">Wybierz</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="editSub" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edycja metody płatności</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @include('partials.forms.subs-edit')
    </div>
  </div>
</div>

<!-- Modal upgrade to plan Comfort -->
<div class="modal fade" id="comfortUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Przejdź na plan Comfort</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @include('partials.forms.comfort-upgrade-modal')
    </div>
  </div>
</div>

<!-- Modal upgrade to plan No Limits -->
<div class="modal fade" id="nlUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Przejdź na plan No Limits</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @include('partials.forms.nl-upgrade-modal')
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('assets/plugins/inputmask/jquery.inputmask.bundle.min.js') }}"></script>
@endpush

@push('custom-scripts')
<script>
$(".confirm").click(function(ev) {
  if (!confirm("Uwaga, anulując subskrypcję stracisz możliwość rezerwacji e-wizyt w niższych cenach. Czy mimo to kontynuować?")) {
  return false;
  }
});
$(".confirm-downgrade").click(function(ev) {
  if (!confirm("Czy na pewno chcesz przejść na niższy plan?")) {
  return false;
  }
});
</script>
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
  <script src="{{ asset('assets/js/inputmask.js') }}"></script>
@endpush
