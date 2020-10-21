<!--
W tym widoku lekarz widzi swój kalendarz wolnych terminów oraz zamówionych e-wizyt.
-->

@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/fullcalendar/main.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush

@section('content')
  <div class="row mb-3">
    <div class="col-md-6">
      <h4 class=" mb-md-0">Mój terminarz</h4>
    </div>
    <div class="col-md-6">
      <a href="/calendar/add">
        <button type="button" class="btn btn-primary pull-right">
            Dodaj terminarz
        </button>
      </a>
    </div>
  </div>

<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-6 col-md-6">
        <div class="card">
          <div class="card-body">
            <div id='calendar'></div>
          </div>
          </div>
      </div>
      <div class="col-6 col-md-6">
        <div class="card">
          <div class="card-body">
            <h4 class="mb-4">Edytuj wolne terminy</h4>
            @include('partials.tables.edit-free-slots')
          </div>
          <div class="card-body">
            <h4 class="mb-4">Zaplanowane e-wizyty</h4>
            @include('partials.tables.edit-events-slots')
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="postponeVisit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Przełóż wizytę</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @include('partials.forms.postpone-visit')
    </div>
  </div>
</div>
</div>
@endsection

@push('plugin-scripts')
<script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/plugins/inputmask/jquery.inputmask.bundle.min.js') }}"></script>
<script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets/plugins/fullcalendar/main.min.js') }}"></script>
<script src="{{ asset('assets/plugins/fullcalendar/locales/pl.js') }}"></script>

@endpush

@push('custom-scripts')
<script>
$('#postponeDate').datepicker();
$('#free-slots').DataTable();
$('#event-slots').DataTable();
</script>

<script src="{{ asset('assets/js/data-table.js') }}"></script>
<script src="{{ asset('assets/js/fullcalendar.js') }}"></script>
@endpush
