<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kendaraan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != 'login') {
            redirect(base_url());
        }
        
        $models = array(
            'KendaraanModel' => 'KM',
        );
        // Load Multiple Models
        foreach ($models as $file => $object_name) {
            $this->load->model($file, $object_name);
        }

        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('/template/_header.php');
        $this->load->view('kendaraan/index');
    }
    public function fetchBarcode()
	{
		date_default_timezone_set('Asia/Jakarta');

		$plat = $this->input->post('code');
		$cekKendaraan = $this->KM->f_kendaraan($plat);

		if (empty($cekKendaraan)) {
			echo '<center><lottie-player src="https://lottie.host/6d4fb050-bff9-4266-9c4f-6bdbfb9887ad/jcfD6aR2Df.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player></center><center>Data '.$plat.' Tidak Ditemukan</center>';
		} else {
            foreach ( $cekKendaraan as $s ):
            ?>
<h6>Data Kendaraan</h6>
<table class="table table-sm table-hover text-center text-nowrap table-bordered h5 border-dark">
    <thead>
        <tr>
            <th scope="col">PLAT NOMOR</th>
            <th scope="col">KENDARAAN</th>
            <th scope="col">MERK</th>
            <th scope="col">JENIS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th><?php echo $s->plat ?></th>
            <td><?php echo $s->type ?></td>
            <td><?php echo $s->merk ?></td>
            <td><?php echo $s->jenis ?></td>
        </tr>
    </tbody>
</table>
<div class="row">
    <div class="col-md-6">
        <h6>Jenis Informasi</h6>
        <select class="form-control border-primary" name="" id="">
            <option value="" hidden>-- Pilih Jenis --</option>
            <option value="Masuk">Masuk</option>
            <option value="Keluar">Keluar</option>
            <option value="Transit Masuk">Transit Masuk</option>
            <option value="Transit Keluar">Transit Keluar</option>
        </select>
    </div>
    <div class="col-md-3">
        <h6>Jam</h6>
        <input type="time" value="<?php echo date('H:i:s');?>" class="form-control border-primary" readonly>
    </div>
    <div class="col-md-3">
        <h6>Tanggal</h6>
        <input type="date" value="<?php echo date('Y-m-d');?>" class="form-control border-primary" readonly>
    </div>
</div>
<h6>Keterangan Tambahan</h6>
<textarea class="form-control border-primary" name="" id="" cols="30" rows="10"></textarea>
<?php
                endforeach;
        }
    }
}