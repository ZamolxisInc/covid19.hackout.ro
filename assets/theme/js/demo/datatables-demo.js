// Call the dataTables jQuery plugin
$(document).ready(function() {

  $('#dataTable').DataTable( {
    dom: "Blfrtip",
    buttons: [
        'csv', 'excel', 'pdf', 'print'
    ],
    "lengthChange": true,
    "language": {
      "lengthMenu": "Show _MENU_ rows",
      "zeroRecords": "No results",
      "info": "Showing page _PAGE_ of _PAGES_",
      "infoEmpty": "No records available",
      "infoFiltered": "(filtered from _MAX_ total records)",
      "search" : "Search:",
      "paginate": {
        "first":      "First",
        "last":       "Last",
        "next":       "Next",
        "previous":   "Previous"
    }
  }
} );
});

$(document).ready(function() {
  $('#dataTableActivity').DataTable();
});