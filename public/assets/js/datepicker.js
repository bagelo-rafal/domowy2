$(function() {
  'use strict';

  if($('#setDate, #childBorn, #parentBorn, #slotsDateFilter, #memberBorn').length) {
    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    $('#setDate, #childBorn, #parentBorn, #memberBorn').datepicker({
      format: "mm/dd/yyyy",
      todayHighlight: true,
      autoclose: true
    });
    $('#slotsDateFilter').datepicker({
      format: "dd/mm/yyyy",
      todayHighlight: true,
      autoclose: true
    });
    $('#setDate, #childBorn, #parentBorn, #memberBorn').datepicker('setDate', today);
  }
});
