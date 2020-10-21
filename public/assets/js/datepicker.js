$(function() {
  'use strict';

  if($('#setDate').length) {
    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    $('#setDate').datepicker({
      format: "mm/dd/yyyy",
      todayHighlight: true,
      autoclose: true
    });
    $('#setDate').datepicker('setDate', today);
  }
});
