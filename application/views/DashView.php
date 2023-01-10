<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <a href="<?= base_url(); ?>index.php/Home/pengecekan">
                <div class="card text-white bg-primary">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-3">
                                    <div class="float-start">
                                        <h1 class="display-1"><i class="fa fa-folder-plus"></i></h1>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <h2>KARTU PENGECEKAN</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
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
                                <h2>LAPORAN</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white bg-dark">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-3">
                                <div class="float-start">
                                    <h1 class="display-1"><i class="fa fa-print"></i></h1>
                                </div>
                            </div>
                            <div class="col-9">
                                <h2>PRINT KARTU</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white bg-info">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-3">
                                <div class="float-start">
                                    <h1 class="display-1"><i class="fa fa-users"></i></h1>
                                </div>
                            </div>
                            <div class="col-9">
                                <h2>USER MANAGEMENT</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('template/_footer'); ?>