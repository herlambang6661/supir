<?php
$this->load->view('template/_header');
foreach ($pengecekan as $u) { ?>
<div class="card" id='PrintPre' style="border-color: black; border-style: solid;">
    <div class="card-body" style="color: black;">
        <!-- <h2 class="text-center">PT. PINTEX</h2> -->
        <center>
            <img src="https://pintex.co.id/apps/assets/pintex.png" class="text-center" alt="PT. PINTEX" srcset="">
        </center><br>
        <h3 class="text-center">(PLUMBON INTERNATIONAL TEXTILE)</h3>
        <p class="text-center" style="font-size: 12px">Jln. Raya Cirebon-Bandung Km.12 Plumbon-Cirebon</p>
        <hr>
        <u class="text-center">
            <h4>KARTU PENGECEKAN</h4>
        </u>
        <br>
        <i>
            <?php $date = date("d M Y", strtotime($u->tanggal)); ?>
            <div class="row">
                <div class="col">
                    <h6>TANGGAL : <?= $date; ?></h6>
                    <h6>JAM MUAT : <?= $u->jammuat; ?></h6>
                    <h6>JAM SELESAI : <?= $u->jamselesai; ?></h6>
                </div>
                <div class="col">
                    <h6>ITEM : </h6>
                    <h6>TUJUAN : </h6>
                    <h6>PERSONEL MUAT : </h6>
                </div>
                <div class="col">
                    <h6>NO. POL : </h6>
                    <h6>DRIVER : </h6>
                </div>
            </div>
        </i>
        <br>
        <table class="table" border="3" style="font-size: 14px; height: 2px; color: black; border-color: black;">
            <thead class="text-black">
                <th>#</th>
                <th>Kodeseri</th>
                <th>Nama</th>
                <th>Keterangan</th>
                <th>Katalog</th>
                <th>Mesin</th>
                <th>Quantity</th>
                <th>Satuan</th>
                <th>Pemesan</th>
            </thead>
        </table>
        <br><br><br><br><br>
        <div class="row text-center">
            <div class="col">
                Mengetahui / Menyetujui,
            </div>
            <div class="col">
                Mengetahui / Kepala Bagian,
            </div>
            <div class="col">
                Peminta,
            </div>
        </div>
        <br><br><br><br><br>
        <div class="row text-center">
            <div class="col">
                ( Pak Alvin / Pak Brian )
            </div>
            <div class="col">
                ( ......................... )
            </div>
            <div class="col">
                ( ......................... )
            </div>
        </div>
    </div>
</div>

<?php } ?>
<?php
// $this->load->view('template/_footer');
?>
<script>
window.print();
</script>