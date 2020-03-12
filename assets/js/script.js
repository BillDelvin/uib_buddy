$(document).ready(function() {
    $('#example').DataTable( {
        "pagingType": "full_numbers"
    } );
    
    $('#myTable').DataTable().columns.adjust();
});
