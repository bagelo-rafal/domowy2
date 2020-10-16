@extends('layout.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0">Szczegóły transakcji</h4>
  </div>
</div>
<div class="row">
  <div class="col-md-6 stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="mb-3">Informacje o transakcji</h6>
        @include('partials.tables.orders-details-list')
      </div>
    </div>
  </div>

  <div class="col-md-6 stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="mb-3">Dane pacjenta</h6>
        @include('partials.tables.orders-patient-details-list')
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
