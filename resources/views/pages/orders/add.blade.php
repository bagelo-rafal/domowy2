@extends('layout.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0">Wystaw rachunek za świadczone usługi</h4>
  </div>
</div>
<!-- Faktura B2B -->
<div class="row">
  <div class="col-md-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <p>Za miesiąc październik 2020 zarobiłeś/aś łącznie na e-wizytach 497 zł.<br>Prosimy o wystawienie faktury na taką kwotę i udostępnienie jej nam klikając przycisk poniżej</p>
        <form class="mt-4" id="addInvoice">
          <label>Dodaj plik faktury</label>
          <input id="addInvoice" name="addInvoice" type="file" class="form-control">
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Rachunek UZ -->
<div class="row">
  <div class="col-md-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <p>Za miesiąc październik 2020 zarobiłeś/aś łącznie na e-wizytach 497 zł.<br><a href="">Kliknij tutaj aby pobrać szablon rachunku</a>, wydrukuj go, uzupełnij i udostępnij go nam poniżej.</p>
        <form class="mt-4" id="addBill">
          <label>Dodaj plik faktury</label>
          <input id="addBill" name="addBill" type="file" class="form-control">
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
@endpush
