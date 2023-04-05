<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"> -->

<div class="container">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>index.php/Home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Laporan</li>
        </ol>
    </nav>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>

    <form action="<?= base_url() ?>index.php/Home/input" method="post">
        <div class="card border-success bg-light mb-3">
            <div class="card-header">
                <h5 class="text-center">LIST LAPORAN PENGECEKAN</h5>
            </div>
            <div class="card-body">
                <div class="col-lg-4">
                    <form id="form-filter" class="form-horizontal" style="visibility: hidden;">
                        <div class="input-group mb-3">
                            <label class="input-group-text">Tanggal : </label>
                            <input type="date" class="form-control form-control-sm" name="dateStart" id="dateStart">
                            <label class="input-group-text">-</label>
                            <input type="date" class="form-control form-control-sm" name="dateEnd" id="dateEnd">
                            <a href="javascript:void(0);" id="btn-filter" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></a>
                            <button type="button" id="btn-reset-kabag" class="btn btn-primary">Reset</button>
                        </div>
                    </form>
                </div>
                <table style="text-decoration-color: black; text-transform:uppercase;font-size: 13px;width:100%" id="tablesss" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">TANGGAL</th>
                            <th scope="col">JAM MULAI</th>
                            <th scope="col">JAM SELESAI</th>
                            <th scope="col">JUMLAH PERSONEL</th>
                            <th scope="col">DURASI (JAM)</th>
                            <th scope="col">MAN HOUR</th>
                            <th scope="col">TOTAL BALE DAY</th>
                            <th scope="col">MH / BALE</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </form>
</div>

<?php $this->load->view('template/_footer'); ?>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js">
</script>


<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

<script>
// tables2 ====================================================================================================================================================================
table2 = $('#tablesss').DataTable({

    "processing": true, //Feature control the processing indicator.
    "serverSide": true, //Feature control DataTables' server-side processing mode.
    "order": [], //Initial no order.
    // Load data for the table's content from an Ajax source
    "ajax": {
        "url": "<?php echo base_url(); ?>index.php/Home/jsonLaporan",
        "type": "POST",
        "data": function(data) {
            data.start = $('#dateStart').val();
            data.end = $('#dateEnd').val();
        }
    },

    lengthMenu: [
        [-1, 10, 25, 50, -1],
        ['5', '10', '25', '50', 'Show all']
    ],
    // "dom": 'fBrtlip',
    "dom": 'Bt',
    "buttons": [{
        "extend": 'excel',
        "className": 'btn btn-success',
        "text": '<i class="fa fa-file-excel text-white"></i> Simpan ke Excel',
        "titleAttr": 'Excel',
        "action": newexportaction
    }],

    //Set column definition initialisation properties.
    "columns": [
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        null
        // {
        //     mRender: function(data, type, row) {
        //         var bindHtml = '';
        //         bindHtml +=
        //             '<a class="btn btn-outline-dark btn-sm" href="<?= base_url() ?>index.php/Home/print/' +
        //             row[0] + '" target="_blank" data-id="' + row[0] +
        //             '"><i class="fas fa-print fa-fw"></i></a> ';
        //         return bindHtml;
        //     }
        // },

    ],

});

$('#tablesss').on('click', '.print', function() {
    $("#menus").hide(500);
    $("#printPreview").show(500);

    var varId = $(this).data('id');

    document.getElementById("letsPrint").value = varId;
});

$('#btn-filter').click(function() { //button filter event click
    table2.ajax.reload(); //just reload table
});
$('#btn-reset').click(function() { //button reset event click
    $('#form-filter')[0].reset();
    table2.ajax.reload(); //just reload table
});

function newexportaction(e, dt, button, config) {
    var self = this;
    var oldStart = dt.settings()[0]._iDisplayStart;
    dt.one('preXhr', function(e, s, data) {
        // Just this once, load all data from the server...
        data.start = 0;
        data.length = 2147483647;
        dt.one('preDraw', function(e, settings) {
            // Call the original action function
            if (button[0].className.indexOf('buttons-copy') >= 0) {
                $.fn.dataTable.ext.buttons.copyHtml5.action.call(self, e, dt, button, config);
            } else if (button[0].className.indexOf('buttons-excel') >= 0) {
                $.fn.dataTable.ext.buttons.excelHtml5.available(dt, config) ?
                    $.fn.dataTable.ext.buttons.excelHtml5.action.call(self, e, dt, button, config) :
                    $.fn.dataTable.ext.buttons.excelFlash.action.call(self, e, dt, button, config);
            } else if (button[0].className.indexOf('buttons-csv') >= 0) {
                $.fn.dataTable.ext.buttons.csvHtml5.available(dt, config) ?
                    $.fn.dataTable.ext.buttons.csvHtml5.action.call(self, e, dt, button, config) :
                    $.fn.dataTable.ext.buttons.csvFlash.action.call(self, e, dt, button, config);
            } else if (button[0].className.indexOf('buttons-pdf') >= 0) {
                $.fn.dataTable.ext.buttons.pdfHtml5.available(dt, config) ?
                    $.fn.dataTable.ext.buttons.pdfHtml5.action.call(self, e, dt, button, config) :
                    $.fn.dataTable.ext.buttons.pdfFlash.action.call(self, e, dt, button, config);
            } else if (button[0].className.indexOf('buttons-print') >= 0) {
                $.fn.dataTable.ext.buttons.print.action(e, dt, button, config);
            }
            dt.one('preXhr', function(e, s, data) {
                // DataTables thinks the first item displayed is index 0, but we're not drawing that.
                // Set the property to what it was before exporting.
                settings._iDisplayStart = oldStart;
                data.start = oldStart;
            });
            // Reload the grid with the original page. Otherwise, API functions like table.cell(this) don't work properly.
            setTimeout(dt.ajax.reload, 0);
            // Prevent rendering of the full data to the DOM
            return false;
        });
    });
    // Requery the server with the new one-time export settings
    dt.ajax.reload();
}
// tables2 ====================================================================================================================================================================
</script>