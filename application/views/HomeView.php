<body>

    <div class="container col-lg-4">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url(); ?>index.php/Home">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Input Kartu Pengecekan</li>
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

        <?php
    $in = $this->uri->segment(3);
    $value = !empty($in) ? $in : '';
    if ($value) { ?>
        <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>
                Data Berhasil disimpan
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        <?php } ?>

        <form action="<?= base_url() ?>index.php/Home/input" method="post">
            <div class="card border-success bg-light mb-3">
                <div class="card-header">
                    <h5 class="text-center fw-bolder">KARTU PENGECEKAN</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <input type="hidden" class="form-control" name="user" value="<?php echo $this->session->userdata(
                                    'nama'
                                ); ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label fw-bolder">ID</label>
                        <input type="text" class="form-control" name="idform" value="<?php echo $kode ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label fw-bolder">Tanggal</label>
                        <input type="date" class="form-control" value="<?php echo date(
                        'd/m/Y'
                    ); ?>" name="tanggal">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label fw-bolder">No. Pol</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2"
                            placeholder="Masukkan Nomor Kendaraan" name="nopol" id='car1'
                            style="text-transform: uppercase">
                    </div>
                    <div class="row">
                        <?php for ($i=1; $i < 3; $i++) { ?>
                        <div class="col-6">
                            <label for="formGroupExampleInput2" class="form-label fw-bolder">Driver <?= $i ?></label>
                            <!-- <input type="text" class="form-control" id="formGroupExampleInput2"
                        placeholder="Masukkan Nama Driver" name="driver"> -->
                            <select name="driver<?= $i ?>" id="driver<?= $i ?>" class="form-control">
                                <option value="">-- Pilih Driver --</option>
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
                                <option value="MARAGANTI PARLAUNGAN MARPAUNG">MARAGANTI PARLAUNGAN MARPAUNG</option>
                                <option value="MASKINA">MASKINA</option>
                                <option value="MOHAMAD ALHAMIR">MOHAMAD ALHAMIR</option>
                                <option value="NANA MULIANA">NANA MULIANA</option>
                                <option value="RENOFIAN">RENOFIAN</option>
                                <option value="SUBHAN FARID">SUBHAN FARID</option>
                                <option value="SUDIRMAN 1">SUDIRMAN 1</option>
                                <option value="SUJANA">SUJANA</option>
                                <option value="SUNARTO">SUNARTO</option>
                                <option value="ZIKY RAYENDRA">ZIKY RAYENDRA</option>
                            </select>
                            <!-- <div class="form-text"><small><em>Gunakan Koma (,) jika lebih Driver
                                dari satu</em></small></div> -->
                        </div>
                        <?php } ?>
                    </div>
                    <div class="row">
                        <?php for ($i=1; $i < 3; $i++) { ?>
                        <div class="col-6">
                            <label for="formGroupExampleInput2" class="form-label fw-bolder">Forklift <?= $i ?></label>
                            <!-- <input type="text" class="form-control" id="formGroupExampleInput2"
                        placeholder="Masukkan Nama Driver" name="driver"> -->
                            <select name="forklift<?= $i ?>" id="forklift<?= $i ?>" class="form-control">
                                <option value="" hidden>-- Pilih Personel --</option>
                                <option value="AKMAD AFANDI">AKMAD AFANDI</option>
                                <option value="ASEP BUDIMAN">ASEP BUDIMAN</option>
                                <option value="BAYUDI RAYITNO">BAYUDI RAYITNO</option>
                                <option value="DADANG KOMAR">DADANG KOMAR</option>
                                <option value="DONI ADIFIYANTO">DONI ADIFIYANTO</option>
                                <option value="EDWIN SAPUTRA">EDWIN SAPUTRA</option>
                                <option value="EKO JOKO">EKO JOKO</option>
                                <option value="FAHMI FAHRURROZI">FAHMI FAHRURROZI</option>
                                <option value="HADI IRMAWAN">HADI IRMAWAN</option>
                                <option value="HERI MULYANA">HERI MULYANA</option>
                                <option value="HERMAN">HERMAN</option>
                                <option value="HERU ISWANTO">HERU ISWANTO</option>
                                <option value="IIP RAMDHANI">IIP RAMDHANI</option>
                                <option value="JOHANI">JOHANI</option>
                                <option value="MOHAMAD JAYUS">MOHAMAD JAYUS</option>
                                <option value="ROCHMAD SIGIT DN">ROCHMAD SIGIT DN</option>
                                <option value="SUBARI">SUBARI</option>
                                <option value="SUDARNO">SUDARNO</option>
                                <option value="SUPRIYANTO I">SUPRIYANTO I</option>
                                <option value="WARAS LATIF KUSUMA">WARAS LATIF KUSUMA</option>
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
                                <label for="formGroupExampleInput" class="form-label fw-bolder">Jam Muat</label>
                                <input type="time" class="form-control" name="jammuat">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label fw-bolder">Jam Selesai</label>
                                <input type="time" class="form-control" name="jamselesai">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php for ($i = 1; $i < 5; $i++) { ?>
                        <div class="col-6">
                            <label for="formGroupExampleInput2" class="form-label fw-bolder">Personel Muat
                                <?= $i ?></label>
                            <select name="personel<?= $i ?>" id="personel<?= $i ?>" class="form-control">
                                <option value="" hidden>-- Pilih Personel --</option>
                                <option value="AKMAD AFANDI">AKMAD AFANDI</option>
                                <option value="ASEP BUDIMAN">ASEP BUDIMAN</option>
                                <option value="BAYUDI RAYITNO">BAYUDI RAYITNO</option>
                                <option value="DADANG KOMAR">DADANG KOMAR</option>
                                <option value="DONI ADIFIYANTO">DONI ADIFIYANTO</option>
                                <option value="EDWIN SAPUTRA">EDWIN SAPUTRA</option>
                                <option value="EKO JOKO">EKO JOKO</option>
                                <option value="FAHMI FAHRURROZI">FAHMI FAHRURROZI</option>
                                <option value="HADI IRMAWAN">HADI IRMAWAN</option>
                                <option value="HERI MULYANA">HERI MULYANA</option>
                                <option value="HERMAN">HERMAN</option>
                                <option value="HERU ISWANTO">HERU ISWANTO</option>
                                <option value="IIP RAMDHANI">IIP RAMDHANI</option>
                                <option value="JOHANI">JOHANI</option>
                                <option value="MOHAMAD JAYUS">MOHAMAD JAYUS</option>
                                <option value="ROCHMAD SIGIT DN">ROCHMAD SIGIT DN</option>
                                <option value="SUBARI">SUBARI</option>
                                <option value="SUDARNO">SUDARNO</option>
                                <option value="SUPRIYANTO I">SUPRIYANTO I</option>
                                <option value="WARAS LATIF KUSUMA">WARAS LATIF KUSUMA</option>
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
                                            <td><input type="number" name="val[]" id="val[]"
                                                    class="form-control form-control-sm">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bale</td>
                                            <td>:</td>
                                            <td><input type="number" name="bale[]" id="bale[]"
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
                        <button class="btn btn-outline-dark" type="button"><i class="fa fa-arrow-left"></i>
                            Kembali</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
</body>

<?php $this->load->view('template/_footer'); ?>

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