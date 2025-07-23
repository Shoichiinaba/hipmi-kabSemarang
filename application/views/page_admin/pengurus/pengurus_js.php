<!-- datatables -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.3/js/dataTables.bootstrap4.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.bootstrap4.js"></script>

<script>
$(document).ready(function() {
    var table = $('#data-kategori').DataTable({
        responsive: true,
        paging: true,
        autoWidth: false,
        searching: true,
        processing: true,
        serverSide: true,
        ajax: {
            url: "<?= site_url('Dewan_pengurus/get_pengurus') ?>",
            type: "POST"
        },
        lengthMenu: [
            [10, 25, 50, 75, 100, -1],
            [10, 25, 50, 75, 100, "All"]
        ],
        pageLength: -1,
        columnDefs: [{
                targets: 0,
                width: "5%",
                orderable: false
            },
            {
                targets: 1,
                width: "70%"
            },
            {
                targets: 2,
                width: "25%"
            }
        ]
    });
});
</script>