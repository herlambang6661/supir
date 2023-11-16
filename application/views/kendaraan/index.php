<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-success bg-light mb-3">
                        <div class="card-header">
                            <h5 class="text-center fw-bolder">SCAN KENDARAAN</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="barcode" class="form-label">Scan Barcode</label>
                                <input type="text" class="form-control border-primary" name="code" id="code"
                                    autofocus="autofocus" placeholder="scan barcode disini">
                                <i id="emailHelp" class="form-text">Arahkan kursor ke form diatas dan scan barcode.</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card border-success bg-light mb-3">
                        <div class="card-header">
                            <h5 class="text-center fw-bolder">RIWAYAT KENDARAAN</h5>
                        </div>
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card border-success bg-light mb-3">
                <div class="card-header">
                    <h5 class="text-center fw-bolder">HASIL SCAN KENDARAAN</h5>
                </div>
                <div class="card-body">
                    <div id="hasil_cari">
                        <center>

                            <lottie-player
                                src="https://lottie.host/a82b3e9f-82a4-47d9-940c-a51806114eb7/JNhio0fApB.json"
                                background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay>
                            </lottie-player>
                            <br><br>
                        </center>
                    </div>
                    <div id="tunggu"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('template/_footer'); ?>

<script>
function cariReportPembelian() {
    let startDate11 = $('#startDateLapPem').val();
    let endDate11 = $('#endDateLapPem').val();
    // alert(str);
}
$('#code').keypress(function(event) {
    var code = document.getElementById("code").value;

    if (event.keyCode == 13) {
        // alert('Entered' + code);
        $.ajax({
            // cache: false,
            type: "POST",
            url: "<?php echo base_url() ?>index.php/Kendaraan/fetchBarcode",
            data: {
                code: code,
            },
            beforeSend: function() {
                $("#hasil_cari").hide();
                $("#tunggu").html(
                    '<center><lottie-player src="https://lottie.host/ea775243-b1a7-4b55-aa94-7888aa73ceca/YZ795KPWrt.json" background="#fff" speed="1" style="width: 300px; height: 300px" loop autoplay direction="1" mode="normal"></lottie-player><i class="fa-solid fa-spinner fa-spin"></i> Mohon Menunggu, Sedang Menarik Data...</center>'
                );
            },
            success: function(html) {
                $("#tunggu").html('');
                $("#hasil_cari").show();
                $("#hasil_cari").html(html);
            }
        });

        document.getElementById("code").value = "";
    }
});
</script>