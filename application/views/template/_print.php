<?php
$this->load->view('template/_header');
foreach ($permintaan as $u) { ?>
    <div class="card" id='PrintPre' style="border-color: black; border-style: solid;">
        <div class="card-body" style="color: black;">
            <!-- <h2 class="text-center">PT. PINTEX</h2> -->
            <center>
                <img src="<?= base_url(); ?>assets/pintex.png" class="text-center" alt="PT. PINTEX" srcset="">
            </center><br>
            <h3 class="text-center">(PLUMBON INTERNATIONAL TEXTILE)</h3>
            <h5 class="text-center">Jln. Raya Cirebon-Bandung Km.12 Plumbon-Cirebon</h5>
            <h5 class="text-center">Phone : 62-231-321366 (HUNTING) Faximile : 62-231-321389</h5>
            <hr>
            <u class="text-center">
                <h4>FORM PERMINTAAN BARANG</h4>
            </u>
            <br>
            <i>
                <?php $date = date("d M Y", strtotime($u->tanggal)); ?>
                <h6>Tanggal : <?= $date ?></h6>
                <br>
                <h6>No Form : <?= $u->noform ?></h6>
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

                <?php $no1 = 1; ?>
                <?php foreach ($permintaanitm as $w) { ?>
                    <tr>
                        <td><?php echo $no1++ ?></td>
                        <td><?php echo $w->kodeseri ?></td>
                        <td><?php echo $w->namaBarang ?></td>
                        <td><?php echo $w->keterangan ?></td>
                        <td><?php echo $w->katalog ?></td>
                        <td><?php echo $w->mesin ?></td>
                        <td><?php echo $w->qty ?></td>
                        <td><?php echo $w->satuan ?></td>
                        <td><?php echo $w->pemesan ?></td>
                    </tr>
                <?php } ?>
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