@extends('layout.master')

@push('plugin-styles')
<link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />

<style>
.item-content {
  width: 100%;
}
#repeat-dates-row {
  display: none;
}
.input-group-append .input-group-text, .input-group-prepend .input-group-text {
    color: #262626 !important;
}
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
@endpush

@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0">Dodaj terminarz</h4>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-12 col-md-12">
        <div class="card">
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="setDate">Wybierz dzień</label>
                    <div class="input-group date datepicker" id="setDate">
                      <span class="input-group-addon"><i data-feather="calendar"></i></span><input type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <div id="repeater">
                <div class="items" data-group="test">
                  <div class="item-content">
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Od godziny</label>
                            <select class="fromTime" id="fromTime" name="fromTime">
                              <option value="0000">00:00</option>
                              <option value="0030">00:30</option>
                              <option value="0100">01:00</option>
                              <option value="0130">01:30</option>
                              <option value="0200">02:00</option>
                              <option value="0230">02:30</option>
                              <option value="0300">03:00</option>
                              <option value="0330">03:30</option>
                              <option value="0400">04:00</option>
                              <option value="0430">04:30</option>
                              <option value="0500">05:00</option>
                              <option value="0530">05:30</option>
                              <option value="0600">06:00</option>
                              <option value="0630">06:30</option>
                              <option value="0700">07:00</option>
                              <option value="0730">07:30</option>
                              <option value="0800">08:00</option>
                              <option value="0830">08:30</option>
                              <option value="0900">09:00</option>
                              <option value="0930">09:30</option>
                              <option value="1000">10:00</option>
                              <option value="1030">10:30</option>
                              <option value="1100">11:00</option>
                              <option value="1130">11:30</option>
                              <option value="1200">12:00</option>
                              <option value="1230">12:30</option>
                              <option value="1300">13:00</option>
                              <option value="1330">13:30</option>
                              <option value="1400">14:00</option>
                              <option value="1430">14:30</option>
                              <option value="1500">15:00</option>
                              <option value="1530">15:30</option>
                              <option value="1600">16:00</option>
                              <option value="1630">16:30</option>
                              <option value="1700">17:00</option>
                              <option value="1730">17:30</option>
                              <option value="1800">18:00</option>
                              <option value="1830">18:30</option>
                              <option value="1900">19:00</option>
                              <option value="1930">19:30</option>
                              <option value="2000">20:00</option>
                              <option value="2030">20:30</option>
                              <option value="2100">21:00</option>
                              <option value="2130">21:30</option>
                              <option value="2200">22:00</option>
                              <option value="2230">22:30</option>
                              <option value="2300">23:00</option>
                              <option value="2330">23:30</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Do godziny</label>
                            <select class="toTime" id="toTime" name="toTime">
                              <option value="0000">00:00</option>
                              <option value="0030">00:30</option>
                              <option value="0100">01:00</option>
                              <option value="0130">01:30</option>
                              <option value="0200">02:00</option>
                              <option value="0230">02:30</option>
                              <option value="0300">03:00</option>
                              <option value="0330">03:30</option>
                              <option value="0400">04:00</option>
                              <option value="0430">04:30</option>
                              <option value="0500">05:00</option>
                              <option value="0530">05:30</option>
                              <option value="0600">06:00</option>
                              <option value="0630">06:30</option>
                              <option value="0700">07:00</option>
                              <option value="0730">07:30</option>
                              <option value="0800">08:00</option>
                              <option value="0830">08:30</option>
                              <option value="0900">09:00</option>
                              <option value="0930">09:30</option>
                              <option value="1000">10:00</option>
                              <option value="1030">10:30</option>
                              <option value="1100">11:00</option>
                              <option value="1130">11:30</option>
                              <option value="1200">12:00</option>
                              <option value="1230">12:30</option>
                              <option value="1300">13:00</option>
                              <option value="1330">13:30</option>
                              <option value="1400">14:00</option>
                              <option value="1430">14:30</option>
                              <option value="1500">15:00</option>
                              <option value="1530">15:30</option>
                              <option value="1600">16:00</option>
                              <option value="1630">16:30</option>
                              <option value="1700">17:00</option>
                              <option value="1730">17:30</option>
                              <option value="1800">18:00</option>
                              <option value="1830">18:30</option>
                              <option value="1900">19:00</option>
                              <option value="1930">19:30</option>
                              <option value="2000">20:00</option>
                              <option value="2030">20:30</option>
                              <option value="2100">21:00</option>
                              <option value="2130">21:30</option>
                              <option value="2200">22:00</option>
                              <option value="2230">22:30</option>
                              <option value="2300">23:00</option>
                              <option value="2330">23:30</option>
                            </select>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="pull-right repeater-remove-btn">
                      <button class="btn btn-danger remove-btn">
                          Usuń
                      </button>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="row my-3">
                  <div class="col-md-6">
                      <h5>Określ zakres godzin świadczenia e-wizyt w wybranym dniu</h5>
                  </div>
                  <div class="col-md-6">
                      <button type="button" class="btn btn-primary pull-right repeater-add-btn">
                          Dodaj zakres
                      </button>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input show-repeat">
                      Powtórz ten harmonogram
                    </label>
                  </div>
                </div>
              </div>
              <div id="repeat-dates-row">
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">co</div>
                      </div>
                      <input id="repeatInterval" name="repeatInterval" type="number" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                      <select class="intervalDate" id="intervalDate" name="intervalDate">
                        <option value="dni">dni</option>
                        <option value="tygodnie">tygodni</option>
                        <option value="miesiace">miesięcy</option>
                      </select>
                    </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">przez</div>
                      </div>
                      <input id="repeatIntervaltime" name="repeatIntervaltime" type="number" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                      <select class="intervalDatetime" id="intervalDatetime" name="intervalDatetime">
                        <option value="dni">dni</option>
                        <option value="tygodnie">tygodni</option>
                        <option value="miesiace">miesięcy</option>
                      </select>
                    </div>
                </div>
              </div>
            </div>
            </form>
          </div>
          </div>
      </div>
    </div>
  </div>
</div>


@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/jquery-ui-dist/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush

@push('custom-scripts')
<script src="{{ asset('assets/js/datepicker.js') }}"></script>
<script src="{{ asset('assets/js/repeater.js') }}"></script>
<script>
$("#repeater").createRepeater({
    showFirstItemToDefault: true,
});
</script>
<script>
$( ".show-repeat" ).change(function() {
 if ($('.show-repeat').prop('checked')){
   $('#repeat-dates-row').css('display','block')
 } else {
   $('#repeat-dates-row').css('display','none')
 }
});
</script>
@endpush
