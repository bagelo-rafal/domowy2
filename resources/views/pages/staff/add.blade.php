@extends('layout.master')

@push('plugin-styles')
  <!-- Plugin css import here -->
@endpush

@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0">Dodaj pracownika</h4>
  </div>
</div>
<div class="row">
  <div class="col-md-12 stretch-card">
    <div class="card">
      <div class="card-body">
          @include('partials.forms.staff-create')
      </div>
    </div>
  </div>
</div>

@endsection

@push('plugin-scripts')
  <!-- Plugin js import here -->
@endpush

@push('custom-scripts')
<script>
$('.phone, .pwz, .adres, .spec').hide();

$( "#role" ).change(function() {
if($('option[value="lekarz"]').is(':selected')) {
	$('.phone, .pwz, .adres, .spec').show();
	$('.phone input, .pwz input, .adres input .spec input').attr('required','true')
} else if (!$('option[value="lekarz"]').is(':selected')) {
	$('.phone, .pwz, .adres, .spec').hide();
  $('.phone input, .pwz input, .adres input, .spec input').removeAttr('required','true')
}
});
</script>
@endpush
