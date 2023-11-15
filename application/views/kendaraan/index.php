<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <form action="<?= base_url() ?>index.php/Home/input" method="post">
                <div class="card border-success bg-light mb-3">
                    <div class="card-header">
                        <h5 class="text-center fw-bolder">SCAN KENDARAAN</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="barcode" class="form-label">Scan Barcode</label>
                            <input type="text" class="form-control border-primary" id="barcode"
                                placeholder="scan barcode disini">
                            <i id="emailHelp" class="form-text">Arahkan kursor ke form diatas dan scan barcode.</i>
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