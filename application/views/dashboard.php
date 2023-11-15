<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <form action="<?= base_url() ?>index.php/Home/input" method="post">
                <div class="card border-success bg-light mb-3">
                    <div class="card-header">
                        <h5 class="text-center fw-bolder">INPUT KARTU PENGECEKAN</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <input type="hidden" class="form-control" name="user" value="<?php echo $this->session->userdata(
                                    'nama'
                                ); ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label fw-bolder">ID</label>
                            <input type="text" class="form-control" name="idform" id="idform"
                                value="<?php echo $kode ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label fw-bolder">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" id="tanggal" require>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label fw-bolder">Security</label>
                            <select name="security" id="security" class="form-control" require>
                                <option value="">-- Pilih Security --</option>
                                <option value="ABDUL NASORI">ABDUL NASORI</option>
                                <option value="ADE SUYONO">ADE SUYONO</option>
                                <option value="AKHMAD RHAMADHAN">AKHMAD RHAMADHAN</option>
                                <option value="AGUS SUTISNA">AGUS SUTISNA</option>
                                <option value="ARIEF MAHFUDIN">ARIEF MAHFUDIN</option>
                                <option value="HARDIMAN">HARDIMAN</option>
                                <option value="HARYADI">HARYADI</option>
                                <option value="KADI TRIHAYUDI">KADI TRIHAYUDI</option>
                                <option value="LIA ZULIARSIH">LIA ZULIARSIH</option>
                                <option value="MAULANA ISHAK">MAULANA ISHAK</option>
                                <option value="M WILDAN">MOHAMMAD WILDAN</option>
                                <option value="NUROKHMAN">NUROKHMAN</option>
                                <option value="ROEIYUDIN">ROEIYUDIN</option>
                                <option value="SUDIRAWAN">SUDIRAWAN</option>
                                <option value="SUJANA">SUJANA</option>
                                <option value="SUMIASIH">SUMIASIH</option>
                                <option value="SUTARNO">SUTARNO</option>
                                <option value="TABRI KUSNADI">TABRI KUSNADI</option>
                                <option value="UDIN KOMARUDIN">UDIN KOMARUDIN</option>
                                <option value="UNIQ AYU w">UNIQ AYU WAHYUNI</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label fw-bolder">Checker
                                Gudang</label>
                            <select name="checker" id="checker" class="form-control" require>
                                <option value="">-- Pilih Checker --</option>
                                <option value="AKMAD AFANDI">AKMAD AFANDI</option>
                                <option value="ASEP BUDIMAN">ASEP BUDIMAN</option>
                                <option value="BAYUDI RAYITNO">BAYUDI RAYITNO</option>
                                <option value="DONI ADIFIYANTO">DONI ADIFIYANTO</option>
                                <option value="EDWIN SAPUTRA">EDWIN SAPUTRA</option>
                                <option value="EKO JOKO">EKO JOKO</option>
                                <option value="FAHMI">FAHMI FAHRURROZI</option>
                                <option value="HADI">HADI IRMAWAN</option>
                                <option value="HERI MULYANA">HERI MULYANA</option>
                                <option value="HERMAN">HERMAN</option>
                                <option value="HERU ISWANTO">HERU ISWANTO</option>
                                <option value="IIP RAMDHANI">IIP RAMDHANI</option>
                                <option value="JOHANI">JOHANI</option>
                                <option value="ROCHMAD SIGIT DN">ROCHMAD SIGIT DN</option>
                                <option value="ROSA PRADEWI">ROSA PRADEWI</option>
                                <option value="SUBARI">SUBARI</option>
                                <option value="SUDARNO">SUDARNO</option>
                                <option value="SUPRIYANTO">SUPRIYANTO I</option>
                                <option value="WARAS LATIF">WARAS LATIF KUSUMA</option>
                                <option value="YAHYA">YAHYA</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label fw-bolder">No. Pol</label>
                            <input list="nopolll" name="nopol" id="nopol" class="form-control">
                            <datalist id="nopolll">
                                <!-- <option value=""></option> -->
                                <option value="E 8057 KV"> E 8057 KV</option>
                                <option value="E 8058 KV"> E 8058 KV</option>
                                <option value="E 8634 KW"> E 8634 KW</option>
                                <option value="E 8807 KW"> E 8807 KW</option>
                                <option value="B 9051 UEN">B 9051 UEN</option>
                                <option value="B 9369 SW"> B 9369 SW</option>
                                <option value="B 9369 UU"> B 9369 UU</option>
                                <option value="B 9369 SB"> B 9369 SB</option>
                                <option value="B 9369 SYM">B 9369 SYM</option>
                                <option value="B 9675 UDF">B 9675 UDF</option>
                            </datalist>
                        </div>
                        <div class="row">
                            <?php for ($i=1; $i < 3; $i++) { ?>
                            <div class="col-6">
                                <label for="formGroupExampleInput2" class="form-label fw-bolder">Driver
                                    <?= $i ?></label>

                                <input list="driverrr" name="driver<?= $i ?>" id="driver<?= $i ?>" class="form-control">
                                <!-- <div class="form-text"><small><em>Gunakan Koma (,) jika lebih Driver
                                dari satu</em></small></div> -->
                            </div>
                            <?php } ?>

                            <datalist id="driverrr">
                                <option value="AGUS KARNADI">AGUS KARNADI</option>
                                <option value="ANDRI TRIA HERMAWAN">ANDRI TRIA HERMAWAN</option>
                                <option value="ARI WIGUNA">ARI WIGUNA</option>
                                <option value="CECEP RAHMAYADI">CECEP RAHMAYADI</option>
                                <option value="DADAN">DADAN</option>
                                <option value="DADANG PRIYATNA">DADANG PRIYATNA</option>
                                <option value="DEDI SETIADI">DEDI SETIADI</option>
                                <option value="DONI MARHADI">DONI MARHADI</option>
                                <option value="HARI PRANATA">HARI PRANATA</option>
                                <option value="HASAN APANDI">HASAN APANDI</option>
                                <option value="KAMID">KAMID</option>
                                <option value="MARAGANTI P MARPAUNG">MARAGANTI PARLAUNGAN MARPAUNG</option>
                                <option value="MASKINA">MASKINA</option>
                                <option value="MOHAMAD ALHAMIR">MOHAMAD ALHAMIR</option>
                                <option value="MOHAMAD GOBANG">MOHAMAD GOBANG</option>
                                <option value="NANA MULIANA">NANA MULIANA</option>
                                <option value="RENOFIAN">RENOFIAN</option>
                                <option value="SUBHAN FARID">SUBHAN FARID</option>
                                <option value="SUDIRMAN 1">SUDIRMAN 1</option>
                                <option value="SUJANA">SUJANA</option>
                                <option value="SUNARTO">SUNARTO</option>
                                <option value="ZIKY RAYENDRA">ZIKY RAYENDRA</option>
                            </datalist>
                        </div>
                        <div class="row">
                            <?php for ($i=1; $i < 3; $i++) { ?>
                            <div class="col-6">
                                <label for="formGroupExampleInput2" class="form-label fw-bolder">Forklift
                                    <?= $i ?></label>
                                <!-- <input type="text" class="form-control" id="formGroupExampleInput2"
                        placeholder="Masukkan Nama Driver" name="driver"> -->
                                <select name="forklift<?= $i ?>" id="forklift<?= $i ?>" class="form-control">
                                    <option value="">-- Pilih Personel --</option>
                                    <option value="AKMAD AFANDI">AKMAD AFANDI</option>
                                    <option value="ASEP BUDIMAN">ASEP BUDIMAN</option>
                                    <option value="BAYUDI RAYITNO">BAYUDI RAYITNO</option>
                                    <option value="DONI ADIFIYANTO">DONI ADIFIYANTO</option>
                                    <option value="EDWIN SAPUTRA">EDWIN SAPUTRA</option>
                                    <option value="EKO JOKO">EKO JOKO</option>
                                    <option value="FAHMI F">FAHMI FAHRURROZI</option>
                                    <option value="HADI I">HADI IRMAWAN</option>
                                    <option value="HERI MULYANA">HERI MULYANA</option>
                                    <option value="HERMAN">HERMAN</option>
                                    <option value="HERU ISWANTO">HERU ISWANTO</option>
                                    <option value="IIP RAMDHANI">IIP RAMDHANI</option>
                                    <option value="IVAN MUBAROK">IVAN MUBAROK</option>
                                    <option value="JOHANI">JOHANI</option>
                                    <option value="ROCHMAD SIGIT DN">ROCHMAD SIGIT DN</option>
                                    <option value="SUBARI">SUBARI</option>
                                    <option value="SUDARNO">SUDARNO</option>
                                    <option value="SUPRIYANTO">SUPRIYANTO</option>
                                    <option value="WARAS LATIF k">WARAS LATIF KUSUMA</option>
                                    <option value="YAHYA">YAHYA</option>
                                </select>
                                <!-- <div class="form-text"><small><em>Gunakan Koma (,) jika lebih Driver
                                dari satu</em></small></div> -->
                            </div>
                            <?php } ?>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label fw-bolder">Jam
                                        Muat</label>
                                    <input type="time" class="form-control" name="jammuat" id="jammuat">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label fw-bolder">Jam
                                        Selesai</label>
                                    <input type="time" class="form-control" name="jamselesai" id="jamselesai">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php for ($i = 1; $i < 5; $i++) { ?>
                            <div class="col-6">
                                <label for="formGroupExampleInput2" class="form-label fw-bolder">Personel Muat
                                    <?= $i ?></label>
                                <select name="personel<?= $i ?>" id="personel<?= $i ?>" class="form-control">
                                    <option value="">-- Pilih Personel --</option>
                                    <option value="AKMAD AFANDI">AKMAD AFANDI</option>
                                    <option value="ASEP BUDIMAN">ASEP BUDIMAN</option>
                                    <option value="BAYUDI RAYITNO">BAYUDI RAYITNO</option>
                                    <option value="DASMAD">DASMAD</option>
                                    <option value="DONI ADIFIYANTO">DONI ADIFIYANTO</option>
                                    <option value="EDWIN SAPUTRA">EDWIN SAPUTRA</option>
                                    <option value="EKO JOKO">EKO JOKO</option>
                                    <option value="FAHMI F">FAHMI FAHRURROZI</option>
                                    <option value="HADI I">HADI IRMAWAN</option>
                                    <option value="HERI MULYANA">HERI MULYANA</option>
                                    <option value="HERMAN">HERMAN</option>
                                    <option value="HERU ISWANTO">HERU ISWANTO</option>
                                    <option value="IIP RAMDHANI">IIP RAMDHANI</option>
                                    <option value="JOHANI">JOHANI</option>
                                    <option value="RASTUN">RASTUN</option>
                                    <option value="ROCHMAD SIGIT DN">ROCHMAD SIGIT DN</option>
                                    <option value="SUBARI">SUBARI</option>
                                    <option value="SUDARNO">SUDARNO</option>
                                    <option value="SUPRIYANTO">SUPRIYANTO</option>
                                    <option value="WARAS LATIF k">WARAS LATIF KUSUMA</option>
                                    <option value="YAHYA">YAHYA</option>
                                </select>
                            </div>
                            <?php } ?>
                        </div>
                        <br>
                        <div class="col text-end">
                            <div class="control-group after-add-more">
                                <button class="btn btn-success btn-sm add-more" type="button">
                                    <i class="fas fa-plus"></i> Muat
                                </button>
                            </div>
                        </div>
                        <div class="copy visually-hidden">
                            <div class="control-group">
                                <br>
                                <div class="card text-white bg-success">
                                    <div class="card-header text-end"><button
                                            class="btn btn-outline-danger btn-sm remove text-white" type="button"><i
                                                class="fas fa-trash "></i> Hapus</button></div>
                                    <div class="card-body">
                                        <table class="table text-white text-start table-sm table-borderless">
                                            <tr>
                                                <td>Tujuan</td>
                                                <td>:</td>
                                                <td><input type="text" name="tujuan[]" id="tujuan[]"
                                                        class="form-control form-control-sm"></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Barang</td>
                                                <td>:</td>
                                                <td><input type="text" name="nama[]" id="nama[]"
                                                        class="form-control form-control-sm"></td>
                                            </tr>
                                            <tr>
                                                <td>Lot</td>
                                                <td>:</td>
                                                <td><input type="text" name="lot[]" id="lot[]"
                                                        class="form-control form-control-sm"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!-- <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jenis"
                                                        id="inlineRadio1" value="Karung">
                                                    <label class="form-check-label" for="inlineRadio1">Karung</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jenis"
                                                        id="inlineRadio2" value="Box">
                                                    <label class="form-check-label" for="inlineRadio2">Box</label>
                                                </div> -->
                                                    <select name="jenis[]" id="jenis[]"
                                                        class="form-control form-control-sm">
                                                        <option value="">-- Pilih Jenis --</option>
                                                        <option value="Karung">Karung</option>
                                                        <option value="Box">Box</option>
                                                    </select>
                                                </td>
                                                <td>:</td>
                                                <td><input type="number" step="any" name="val[]" id="val[]"
                                                        class="form-control form-control-sm">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cones</td>
                                                <td>:</td>
                                                <td><input type="number" step="any" name="cones[]" id="cones[]"
                                                        class="form-control form-control-sm" value='0'></td>
                                            </tr>
                                            <tr>
                                                <td>Bale</td>
                                                <td>:</td>
                                                <td><input type="number" step="any" name="bale[]" id="bale[]"
                                                        class="form-control form-control-sm"></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <!-- <button type="button" class="btn btn-primary">Kirim Data</button> -->
                        <button type="submit" id="btn-simpan" class="btn btn-primary"><i class="fa fa-save"></i>
                            Simpan</button>
                        <div class="float-end">
                            <button type="reset" class="btn btn-dark"><i class="fa fa-arrow-rotate-left"></i>
                                Reset</button>
                            <a href="<?= base_url(); ?>index.php/Home" class="btn btn-outline-dark" type="button"><i
                                    class="fa fa-arrow-left"></i>
                                Kembali</a>
                        </div>

                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-8">
            <div class="card border-primary bg-light mb-3">
                <div class="card-header">
                    <h5 class="text-center fw-bolder">PRINT KARTU PENGECEKAN</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('template/_footer'); ?>

<?php
    $in = $this->uri->segment(3);
    $value = !empty($in) ? $in : '';
    if ($value) { ?>
<!-- <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill" />
        </svg>
        <div>
            Data Berhasil disimpan
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div> -->
<script>
Swal.fire({
    icon: 'success',
    title: 'Data Berhasil disimpan',
    showConfirmButton: false,
    timer: 2000
})
</script>
<?php } ?>

<script type="text/javascript">
$(document).ready(function() {
    $(".add-more").click(function() {
        var html = $(".copy").html();
        $(".after-add-more").after(html);
    });

    // // saat tombol remove dklik control group akan dihapus 
    $("body").on("click", ".remove", function() {
        $(this).parents(".control-group").remove();
    });

    $("#btn-simpan").click(function() {

        // var tanggal = $("#tanggal").val();
        // var idform = $("#idform").val();
        // var security = $("#security").val();
        // var checker = $("#checker").val();
        // var nopol = $("#nopol").val();

        // <?php //for ($i=1; $i < 3; $i++) { ?>
        //     var driver<?= $i ?> = $("#driver<?= $i ?>").val();
        // <?php // } ?>

        // if (tanggal.length == "") {
        //     Swal.fire({
        //         icon: 'warning',
        //         title: 'Oops...',
        //         text: 'Kolom Username Wajib Diisi !'
        //     });
        // } else {
        let timerInterval
        Swal.fire({
            title: 'Mohon Menunggu',
            html: 'Data Sedang Dikirim',
            timer: 100000,
            // timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft()
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('I was closed by the timer')
            }
        })
        // } else {
        //     $.ajax({
        //         url: "<?= base_url() ?>index.php/Home/input",
        //         type: "POST",
        //         beforeSend: function() {
        //             let timerInterval
        //             Swal.fire({
        //                 title: 'Mohon Menunggu...',
        //                 html: 'Sedang Koneksi dengan Basis Data',
        //                 showConfirmButton: false,
        //                 timerProgressBar: true,
        //                 didOpen: () => {
        //                     Swal.showLoading()
        //                     const b = Swal.getHtmlContainer().querySelector('b')
        //                     timerInterval = setInterval(() => {
        //                         b.textContent = Swal.getTimerLeft()
        //                     }, 100)
        //                 },
        //                 willClose: () => {
        //                     clearInterval(timerInterval)
        //                 }
        //             });
        //         },
        //         data: {
        //             "selUser": selUser,
        //             "pass": pass
        //         },
        //         success: function(response) {
        //             if (response == "success") {
        //                 Swal.fire({
        //                         type: 'success',
        //                         title: 'Username & Password Cocok',
        //                         text: 'Anda akan di arahkan ke Halaman Dashboard',
        //                         timer: 1000,
        //                         showCancelButton: false,
        //                         showConfirmButton: false
        //                     })
        //                     .then(function() {
        //                         window.location.href = "<?php //echo base_url() ?>index.php/EK/Dashboard";
        //                     });
        //             } else {
        //                 Swal.fire({
        //                     type: 'error',
        //                     title: 'Gagal Masuk',
        //                     text: 'Username & Password tidak cocok'
        //                 });
        //             }
        //             console.log(response);
        //         },
        //         error: function(response) {
        //             Swal.fire({
        //                 type: 'error',
        //                 title: 'Opps!',
        //                 text: 'server error!'
        //             });
        //             console.log(response);
        //         }
        //     });
        // }
    });

    // var spOptions = {
    //     onKeyPress: function(val, e, field, options) {
    //         console.log(val.length)
    //         var mask = "";

    //         if (val.length === 8) {
    //             mask = 'A-AAAA-AAA'
    //         } else {
    //             mask = 'A-AAAA-AAA'
    //         }
    //         oldLength = val.length;
    //         $('#car1').mask(mask, options);
    //     },
    //     translation: {
    //         'Z': {
    //             pattern: /[.]?/,
    //             optional: true
    //         }
    //     }
    // };

    // $('#car1').mask('AAA-AAAA', spOptions);
});
</script>