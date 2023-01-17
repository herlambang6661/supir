<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <a class="nav-link" href="<?= base_url(); ?>index.php/Home/pengecekan">
                <div class="card text-white bg-primary">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <div class="float-start">
                                        <h1 class="display-1"><i class="fa fa-folder-plus"></i></h1>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <h3>KARTU PENGECEKAN</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a class="nav-link" href="<?= base_url(); ?>index.php/Home/printView">
                <div class="card text-white bg-dark">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <div class="float-start">
                                        <h1 class="display-1"><i class="fa fa-print"></i></h1>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <h3>PRINT KARTU</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a class="nav-link" href="<?= base_url(); ?>index.php/Home/laporan">
                <div class="card text-white bg-success">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-3">
                                    <div class="float-start">
                                        <h1 class="display-1"><i class="fa fa-book"></i></h1>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <h3>LAPORAN</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- <div class="col">
            <a class="nav-link" href="#">
                <div class="card text-white bg-info">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <div class="float-start">
                                        <h1 class="display-1"><i class="fa fa-users"></i></h1>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <h4>USER MANAGEMENT</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div> -->
    </div>
</div>

<?php $this->load->view('template/_footer'); ?>