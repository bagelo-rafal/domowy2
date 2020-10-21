@extends('layout.master')

@push('plugin-styles')
<link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />

@endpush

@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0">Zmiana hasła</h4>
  </div>
</div>
<div class="row">
  <div class="col-md-12 stretch-card">
    <div class="card">
      <div class="card-body">
          @include('partials.forms.change-password')
      </div>
    </div>
  </div>
</div>
<div class="mt-4 d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0">Usuń konto</h4>
  </div>
</div>
<div class="row">
  <div class="col-md-12 stretch-card">
    <div class="card">
      <div class="card-body">
          Jeśli chcesz bezpowrotnie usunąć swoje konto, naciśnij przycisk poniżej. Uwaga! Ta operacja jest nieodwracalna - wszystkie Twoje dane zostaną usunięte, w tym członkowie rodziny, historia transakcji i karta pacjenta.
          <a style="display:block;" class="mt-2" href="">
            <button type="button" class="btn btn-danger">Usuń moje konto</button>
          </a>
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

<script>
$('.phone, .pwz, .adres, .spec, .worktype, .nip').hide();

$( "#role" ).change(function() {
if($('option[value="lekarz"]').is(':selected')) {
	$('.phone, .pwz, .adres, .spec, .worktype, .nip').show();
	$('.phone input, .pwz input, .adres input .spec input,').attr('required','true')
} else if (!$('option[value="lekarz"]').is(':selected')) {
	$('.phone, .pwz, .adres, .spec, .worktype, .nip').hide();
  $('.phone input, .pwz input, .adres input, .spec input').removeAttr('required','true')
}
});
</script>
@endpush
