$(function() {
  'use strict';

  if($('#setDate, #childBorn, #parentBorn, #slotsDateFilter').length) {
    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    $('#setDate, #childBorn, #parentBorn').datepicker({
      format: "mm/dd/yyyy",
      todayHighlight: true,
      autoclose: true
    });
    $('#slotsDateFilter').datepicker({
      format: "dd/mm/yyyy",
      todayHighlight: true,
      autoclose: true
    });
    $('#setDate, #childBorn, #parentBorn').datepicker('setDate', today);
  }
});
