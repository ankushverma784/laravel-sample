// java script

$(document).ready( function () {
	$('#table_id').DataTable();
} );;


    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('.dashboard-menu').toggleClass('btn-none');
        })
    });
