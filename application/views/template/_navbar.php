<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php if (!($this->session->userdata('level') == '4')) { ?>
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="<?= base_url() ?>EPROC/Dashboard">
                <div class="sidebar-brand-icon">
                    <!-- <div class="sidebar-brand-icon rotate-n-15"> -->
                    <!-- <i class="fas fa-warehouse"></i> -->
                    <!-- <i class="fas fa-cash-register"></i> -->
                    <img src="<?= base_url() ?>assets/assets.png" width="50pc">
                    <!-- <link rel="shortcut icon" href="<?= base_url() ?>assets/assets.png"> -->
                </div>
                <div class="sidebar-brand-text mx-3">E - PROC<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url() ?>EPROC/Dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Master Menu -->
            <?php if (
                $this->session->userdata('level') == '0' ||
                $this->session->userdata('level') == '1' ||
                $this->session->userdata('level') == '2'
            ) { ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMaster"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-tools"></i>
                    <span>Data Master</span>
                </a>
                <div id="collapseMaster" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu Data Master:</h6>
                        <a class="collapse-item" href="<?= base_url() ?>EPROC/Uang"><i class="fas fa-fw fa-dollar"></i>
                            Mata Uang</a>
                        <a class="collapse-item" href="<?= base_url() ?>EPROC/Pajak"><i class="fa fa-paper-plane"></i>
                            Tarif Pajak</a>
                        <a class="collapse-item" href="<?= base_url() ?>EPROC/Suplier"><i
                                class="fas fa-fw fa-users"></i> Suplier</a>
                        <a class="collapse-item" href="<?= base_url() ?>EPROC/Barangjasa"><i
                                class="fas fa-fw fa-boxes"></i> Barang / Jasa</a>
                        <a class="collapse-item" href="<?= base_url() ?>EPROC/Mesin"><i
                                class="fas fa-fw fa-dolly-flatbed"></i> Mesin / Unit</a>
                        <!-- <a class="collapse-item" href="<?= base_url() ?>EPROC/Lokasi"><i class="fas fa-fw fa-dolly-flatbed"></i> Lokasi</a> -->
                    </div>
                </div>
            </li>
            <?php } ?>
            <!-- Nav Item - Stok Barang Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStok" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-box"></i>
                    <span>Stok Barang</span>
                </a>
                <div id="collapseStok" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu Stok Barang:</h6>
                        <a class="collapse-item" href="<?= base_url() ?>EHRD/Lamaran"><i class='far fa-address-book'></i> Stok Barang</a>
                        <a class="collapse-item" href="<?= base_url() ?>EHRD/Wawancara"><i class='far fa-address-book'></i> Barang Masuk</a>
                        <a class="collapse-item" href="<?= base_url() ?>EHRD/Wawancara"><i class='far fa-address-book'></i> Barang Keluar</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Report Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePengadaan"
                    aria-expanded="true" aria-controls="collapsePengadaan">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Pengadaan</span>
                </a>
                <div id="collapsePengadaan" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu Pengadaan:</h6>
                        <?php if (
                            $this->session->userdata('level') == '0' ||
                            $this->session->userdata('level') == '1' ||
                            $this->session->userdata('level') == '2'
                        ) { ?>
                        <a class="collapse-item" href="<?= base_url() ?>EPROC/Permintaan"><i
                                class="fas fa-fw fa-truck"></i> Permintaan</a>
                        <a class="collapse-item" href="<?= base_url() ?>EPROC/Persetujuan"><i
                                class="far fa-fw fa-handshake"></i> Persetujuan</a>
                        <a class="collapse-item" href="<?= base_url() ?>EPROC/Pembelian"><i
                                class="fas fa-fw fa-dolly"></i> Pembelian</a>
                        <a class="collapse-item" href="<?= base_url() ?>EPROC/Status"><i
                                class="fas fa-fw fa-code-branch"></i> Status Barang</a>
                        <?php } elseif (
                            $this->session->userdata('level') == '3'
                        ) { ?>
                        <a class="collapse-item" href="<?= base_url() ?>EPROC/Permintaan"><i
                                class="fas fa-fw fa-truck"></i> Permintaan</a>
                        <a class="collapse-item" href="<?= base_url() ?>EPROC/Status"><i
                                class="fas fa-fw fa-code-branch"></i> Status Barang</a>
                        <?php } ?>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Report Menu -->
            <?php if (
                $this->session->userdata('level') == '0' ||
                $this->session->userdata('level') == '1' ||
                $this->session->userdata('level') == '2'
            ) { ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGudang"
                    aria-expanded="true" aria-controls="collapseGudang">
                    <i class="fas fa-fw fa-truck"></i>
                    <span>Gudang</span>
                </a>
                <div id="collapseGudang" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu Gudang:</h6>
                        <a class="collapse-item" href="<?= base_url() ?>EPROC/Penerimaan"><i
                                class="fas fa-fw fa-box-open"></i> Penerimaan</a>
                        <a class="collapse-item" href="<?= base_url() ?>EPROC/Mutasi"><i class="fas fa-fw fa-users"></i>
                            Mutasi</a>
                        <a class="collapse-item" href="<?= base_url() ?>EPROC/ACCAmbil"><i
                                class="fas fa-fw fa-spell-check"></i> ACC Ambil</a>
                    </div>
                </div>
            </li>
            <?php } ?>

            <!-- Nav Item - Report Menu -->
            <?php if (
                $this->session->userdata('level') == '0' ||
                $this->session->userdata('level') == '1' ||
                $this->session->userdata('level') == '2'
            ) { ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTeknik"
                    aria-expanded="true" aria-controls="collapseTeknik">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Teknik</span>
                </a>
                <div id="collapseTeknik" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu Teknik:</h6>
                        <a class="collapse-item" href="utilities-color.html"><i class="fas fa-upload"></i>
                            Pengambilan</a>
                        <a class="collapse-item" href="utilities-border.html"><i class="fas fa-gears"></i>
                            Pemasangan</a>
                    </div>
                </div>
            </li>
            <?php } ?>

            <!-- Nav Item - Report Menu -->
            <?php if (
                $this->session->userdata('level') == '0' ||
                $this->session->userdata('level') == '1' ||
                $this->session->userdata('level') == '2'
            ) { ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdministrasi"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Administrasi</span>
                </a>
                <div id="collapseAdministrasi" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu Administrasi:</h6>
                        <a class="collapse-item" href="utilities-color.html"><i class="fas fa-fw fa-file-excel"></i>
                            Pembelian</a>
                        <a class="collapse-item" href="utilities-color.html"><i class="fas fa-fw fa-book"></i> Retur</a>
                        <a class="collapse-item" href="utilities-border.html"><i class="fas fa-fw fa-book"></i>
                            Persediaan</a>
                        <a class="collapse-item" href="utilities-border.html"><i class="fas fa-fw fa-book"></i>
                            Laporan</a>
                    </div>
                </div>
            </li>

            <?php } ?>
            <?php if (
                $this->session->userdata('level') == '0' ||
                $this->session->userdata('level') == '1' ||
                $this->session->userdata('level') == '2'
            ) { ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAccess"
                    aria-expanded="true" aria-controls="collapseAccess">
                    <i class="fas fa-fw fa-globe"></i>
                    <span>Menu Access</span>
                </a>
                <div id="collapseAccess" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu Access:</h6>
                        <a class="collapse-item" href="<?= base_url() ?>index.php/GD/Access"><i
                                class="fas fa-fw fa-file-excel"></i>
                            Barang</a>
                    </div>
                </div>
            </li>

            <?php } ?>
            <!-- Nav Item - Charts -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
        <?php } ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search is Under Maintenance..." aria-label="Search"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a href="javascript:void(0);" class="nav-link dropdown-toggle"
                                onClick="document.location.reload(true)" style="margin-bottom: -4px;"
                                data-toggle="tooltip" data-placement="bottom" title="REFRESH HALAMAN">
                                <!-- <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
                                <i class="fa fa-refresh"></i>
                                <span class="badge badge-danger badge-counter"></span>
                            </a>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdownPermintaan" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-toggle="tooltip"
                                data-placement="bottom" title="PERMINTAAN">
                                <i class="fas fa-fw fa-truck"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdownPermintaan">
                                <h6 class="dropdown-header">
                                    NOTIFIKASI PERMINTAAN
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Lihat Semua
                                    Permintaan</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdownPembelian" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-toggle="tooltip"
                                data-placement="bottom" title="PEMBELIAN">
                                <i class="fas fa-fw fa-dolly"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>

                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdownPembelian">
                                <h6 class="dropdown-header">
                                    NOTIFIKASI PEMBELIAN
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Lihat Semua
                                    Pembelian</a>
                            </div>
                        </li>

                        <!-- AJAX NOTIFIKASI -->
                        <script>
                        // $(document).ready(function() {
                        //     function load_notification(view = '') {
                        //         $.ajax({
                        //             url: "fetch.php",
                        //             method: "POST",
                        //             data: {
                        //                 view: view
                        //             },
                        //             dataType: "json",
                        //             success: function(data) {
                        //                 $('.dropdown-menu').html(data.notification);
                        //                 if (data.unseen_notification > 0) {
                        //                     $('.count').html(data.unseen_notification);
                        //                 }
                        //             }
                        //         });
                        //     }

                        //     load_notification();
                        // });
                        </script>

                        <!-- AJAX NOTIFIKASI -->

                        <?php
/* ?>
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>
                        <?php */
?>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white-600 small"><?php echo $this->session->userdata(
                                    'nama'
                                ); ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?= base_url() ?>assets/sbadmin2/img/icon2.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0);" class="dropdown-item btn-logout" href="#" data-user="<?php echo $this->session->userdata(
                                    'nama'
                                ); ?>" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->