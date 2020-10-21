<!--
W tym widoku lekarz widzi swój kalendarz wolnych terminów oraz zamówionych e-wizyt.
-->

@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/fullcalendar/main.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
  <div class="row mb-3">
    <div class="col-md-6">
      <h4 class=" mb-md-0">Mój terminarz</h4>
    </div>
    <div class="col-md-6">
      <button type="button" class="btn btn-primary pull-right">
          Dodaj terminarz
      </button>
    </div>
  </div>

<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-12 col-md-12">
        <div class="card">
          <div class="card-body">
            <div id='calendar'></div>
          </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/jquery-ui-dist/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/fullcalendar/main.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/fullcalendar/locales/pl.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/fullcalendar.js') }}"></script>
@endpush
