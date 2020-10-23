@extends('layout.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0">E-wizyta</h4>
  </div>
</div>
<div class="row">
  <div class="col-md-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h5 class="mb-3">Podstawowe informacje</h5>
        @include('partials.tables.visit-patient-info')
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <div id="video-place">
          Tutaj będzie player połączenia video
        </div>
      </div>
    </div>
  </div>
</div>
<div class="mt-4 d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0">Karta pacjenta</h4>
  </div>
</div>
<div class="row">
  <div class="col-md-12 stretch-card">
    <div class="card">
      <div class="card-body">
          @include('partials.tables.patient-card')
      </div>
    </div>
  </div>
</div>
<div class="mt-4 d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0">Dodaj informacje do karty pacjenta</h4>
  </div>
</div>
<div class="row">
  <div class="col-md-12 stretch-card">
    <div class="card">
      <div class="card-body">
          @include('partials.forms.add-patient-card')
      </div>
    </div>
  </div>
</div>

@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>

@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/datepicker.js') }}"></script>
@endpush
