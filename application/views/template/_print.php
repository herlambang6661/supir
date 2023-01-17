<?php
$this->load->view('template/_header_print');
foreach ($pengecekan as $u) { ?>
<div class="card" id='PrintPre' style="border-color: black; border-style: solid;">
    <div class="card-body" style="color: black;">
        <u class="text-center">
            <h4>KARTU PENGECEKAN</h4>
        </u>
        <?php $date = date("d M Y", strtotime($u->tanggal)); ?>
        <div class="row">
            <div class="col">
                <table>
                    <tr>
                        <td style="width:100px" class="h6">TANGGAL</td>
                        <td> :</td>
                        <td><?= $date; ?></td>
                    </tr>
                    <tr>
                        <td class="h6">JAM MUAT</td>
                        <td> :</td>
                        <td><?= $u->jammuat; ?></td>
                    </tr>
                    <tr>
                        <td class="h6">JAM SELESAI</td>
                        <td> :</td>
                        <td><?= $u->jamselesai; ?></td>
                    </tr>
                    <tr style="text-transform: uppercase">
                        <td class="h6">NO. POL</td>
                        <td> :</td>
                        <td><?= $u->nopol; ?></td>
                    </tr>
                </table>
            </div>
            <div class="col">
                <h6>SECURITY :</h6>
                <ol>
                    <li><?= $u->security ?></li>
                </ol>
                <h6>PERSONEL :</h6>
                <ol>
                    <li><?= $u->personel1 ?></li>
                    <?= $u->personel2==""?"":"<li>".$u->personel2."</li>" ?>
                    <?= $u->personel3==""?"":"<li>".$u->personel3."</li>" ?>
                    <?= $u->personel4==""?"":"<li>".$u->personel4."</li>" ?>
                </ol>
            </div>
            <div class="col">
                <h6>FORKLIFT :</h6>
                <ol>
                    <li><?= $u->forklift1 ?></li>
                    <?= $u->forklift2==" "?"":"<li>".$u->forklift2."</li>" ?>
                </ol>

                <h6>DRIVER :</h6>
                <ol>
                    <li><?= $u->driver1 ?></li>
                    <?= $u->driver2==""?"":"<li>".$u->driver2."</li>" ?>
                </ol>

            </div>
        </div>
        <table class="table table-bordered text-center" border="3"
            style="font-size: 14px; height: 2px; color: black; border-color: black;">
            <thead class="text-black">
                <th>#</th>
                <th>TUJUAN</th>
                <th>BARANG</th>
                <th>LOT</th>
                <th>KARUNG</th>
                <th>BOX</th>
                <th>BALE</th>
            </thead>
            <?php 
            $no1 = 1; 
            foreach ($pengecekanitm as $w) { ?>
            <tr>
                <td><?php echo $no1++ ?></td>
                <td><?php echo $w->tujuan ?></td>
                <td><?php echo $w->nama ?></td>
                <td><?php echo $w->lot ?></td>
                <td>
                    <?php if ($w->jenis == "Karung") {
                        echo $w->val_jenis;
                    } else {
                        echo "-"; 
                    } ?>
                </td>
                <td>
                    <?php if ($w->jenis == "Box") {
                        echo $w->val_jenis;
                    } else {
                        echo "-"; 
                    } ?>
                </td>
                <td><?php echo $w->bale ?></td>
            </tr>
            <?php } ?>
        </table>
        <div class="row text-center">
            <div class="col h6">
                CHECKER GUDANG,
            </div>
            <div class="col h6">
                SUPIR,
            </div>
            <div class="col h6">
                SECURITY,
            </div>
        </div>
        <br><br><br><br>
        <div class="row text-center">
            <div class="col h6">
                ( <?= $u->checker ?> )
            </div>
            <div class="col h6">
                ( <?= $u->driver1 ?> )
            </div>
            <div class="col h6">
                ( <?= $u->security ?> )
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