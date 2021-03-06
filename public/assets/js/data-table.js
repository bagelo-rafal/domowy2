$(function() {
  'use strict';

  $(function() {
    $('#stafflist, #orders, #ochwaiting, #ochactive, #patientslist, #accountlist, #costly, #visitswaiting, #visitsactive, #visitshistory').DataTable({
      "aLengthMenu": [
        [10, 30, 50, -1],
        [10, 30, 50, "All"]
      ],
      "iDisplayLength": 10,
      "language": {
        search: "Szukaj"
      }
    });
    $('#stafflist, #orders, #ochwaiting, #patientcard, #patientdetails, #ochactive, #patientslist, #accountlist, #costly, #visitswaiting, #visitsactive, #visitshistory').each(function() {
      var datatable = $(this);
      // SEARCH - Add the placeholder for Search and Turn this into in-line form control
      var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
      search_input.attr('placeholder', 'Search');
      search_input.removeClass('form-control-sm');
      // LENGTH - Inline-Form control
      var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
      length_sel.removeClass('form-control-sm');
    });
    $('#doctors').DataTable();
    $('#doctor-review').DataTable();
    $('#familylist').DataTable();
    $('#patientvisitshistory').DataTable();
    $('#userInfo').DataTable();
    $('#paymentHistory').DataTable();
    $('#userPayments').DataTable();
    $('#Visitpatientcard').DataTable();
    $('#visitInfo').DataTable();
  });

});
