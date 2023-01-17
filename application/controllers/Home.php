<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != 'login') {
            redirect(base_url());
        }
        
        $models = array(
            'HomeModel' => 'home',
            'ReportModel' => 'report'
        );
        // Load Multiple Models
        foreach ($models as $file => $object_name) {
            $this->load->model($file, $object_name);
        }

        $this->load->library('session');
    }

    public function index()
    {
        // $data['kode'] = $this->home->kode();
        $this->load->view('/template/_header.php');
        // $this->load->view('HomeView');
        $this->load->view('DashView');
    }

    public function pengecekan()
    {
        $data['kode'] = $this->home->kode();
        $this->load->view('/template/_header.php', $data);
        $this->load->view('HomeView');
    }
    public function printView()
    {
        $this->load->view('/template/_header.php');
        $this->load->view('PrintView');
    }

    public function input()
    {
        $post = $this->input->post();

        $idform = $_POST['idform'];
        $diinput = $_POST['user'];
        $tanggal = $_POST['tanggal'];
        $nopol = $_POST['nopol'];
        $security = $_POST['security'];
        $checker = $_POST['checker'];
        $driver1 = $_POST['driver1'];
        $driver2 = $_POST['driver2'];
        $forklift1 = $_POST['forklift1'];
        $forklift2 = $_POST['forklift2'];
        $jammuat = $_POST['jammuat'];
        $jamselesai = $_POST['jamselesai'];
        $personel1 = $_POST['personel1'];
        $personel2 = $_POST['personel2'];
        $personel3 = $_POST['personel3'];
        $personel4 = $_POST['personel4'];

        $tujuan = $_POST['tujuan'];
        $nama = $_POST['nama'];
        $lot = $_POST['lot'];
        $jenis = $_POST['jenis'];
        $val = $_POST['val'];
        $bale = $_POST['bale'];
        
        $jml_mbl = count($tujuan);

        $jml = $jml_mbl - 1;
        for ($i = 0; $i < $jml; $i++) {
            $tot[] = $bale[$i];
            // $totbale[] = array_sum($tot);
            $data = array(
                'idmuat' => $idform,
                'tujuan' => $tujuan[$i],
                'nama' => $nama[$i],
                'lot' => $lot[$i],
                'jenis' => $jenis[$i],
                'val_jenis' => $val[$i],
                'bale' => $bale[$i],
                'diinput' => $diinput
            );
            
            $this->home->saveitm('sp_kartupengecekanitm', $data);
        }

        $totbale = array_sum($tot);
        // die();
        
        $dataMuat = array(
            'idmuat' => $idform,
            'tanggal' => $tanggal,
            'nopol' => $nopol,
            'security' => $security,
            'checker' => $checker,
            'driver1' => $driver1,
            'driver2' => $driver2,
            'forklift1' => $forklift1,
            'forklift2' => $forklift2,
            'jammuat' => $jammuat,
            'jamselesai' => $jamselesai,
            'personel1' => $personel1,
            'personel2' => $personel2,
            'personel3' => $personel3,
            'personel4' => $personel4,
            'totbale' => $totbale,
            'diinput' => $diinput
        );
        $result = $this->home->saveitm('sp_kartupengecekan', $dataMuat);

        if ($result == 1) {
            $status = 'sukses';
            redirect('Home/pengecekan/'.$status);
        } else {
            $status = 'error';
            redirect('Home/pengecekan/'.$status);
        }
    }
    public function list_item()
    {
        // error_reporting(0);
        $list = $this->home->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $itmdata) {
            $no++;
            $row = array();
            $row[] = $itmdata->idmuat;
            $row[] = date("d M Y", strtotime($itmdata->tanggal));
            $row[] = $itmdata->nopol;
            $row[] = $itmdata->driver1."".$itmdata->driver2=""?"":", ".$itmdata->driver2;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->home->count_all(),
            "recordsFiltered" => $this->home->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
    public function print($id)
    {
        $data['pengecekan'] = $this->home->printPengecekan('sp_kartupengecekan', 'idmuat', $id)->result();
        $data['pengecekanitm'] = $this->home->printPengecekan('sp_kartupengecekanitm', 'idmuat', $id)->result();
        $this->load->view('template/_print', $data);
    }

    public function laporan()
    {

        $this->load->view('/template/_header.php');
        $this->load->view('LaporanView');
    }
    public function jsonLaporan()
    {
        error_reporting(0);
        $list = $this->report->getRekap();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $x) {
            $no++;
            $r = array();
            $r[] = $x->idmuat;
            $r[] = date("d M Y", strtotime($x->tanggal));
            $r[] = $x->jammuat;
            $r[] = $x->jamselesai;

            $awal  = strtotime($x->jammuat);
            $akhir = strtotime($x->jamselesai);
            $diff  = $akhir - $awal;
            $jam   = floor($diff / (60 * 60));
            $menit = $diff - ( $jam * (60 * 60) );
            $hours = $jam + (floor( $menit / 60 ) / 60);

            
            $person1 = ($x->security == "") ? 0 : 1;
            $person2 = ($x->checker == "") ? 0 : 1;
            $person3 = ($x->forklift1 == "") ? 0 : 1;
            $person4 = ($x->forklift2 == "") ? 0 : 1;
            $person5 = ($x->personel1 == "") ? 0 : 1;
            $person6 = ($x->personel2 == "") ? 0 : 1;
            $person7 = ($x->personel3 == "") ? 0 : 1;
            $person8 = ($x->personel4 == "") ? 0 : 1;
            $personall = $person1 + $person2 + $person3 + $person4 + $person5 + $person6 + $person7 + $person8;
            $mh = $personall * $hours;
            $r[] = $personall;
            $r[] = $hours;
            $r[] = $mh;
            $r[] = $mh / $x->totbale;
            $data[] = $r;
        }
        // $data['hasil'] = $r;
        
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->report->count_all(),
            "recordsFiltered" => $this->report->count_filtered(),
            "data" => $data,
        );
        echo json_encode($output);
        // die();
    }

    public function laporanDatatable()
    {
        // error_reporting(0);
        $list = $this->report->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $itmdata) {
            $no++;
            $row = array();
            $row[] = $itmdata->idmuat;
            $row[] = date("d M Y", strtotime($itmdata->tanggal));
            $row[] = $itmdata->nopol;
            $row[] = $itmdata->driver1."".$itmdata->driver2=""?"":", ".$itmdata->driver2;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->report->count_all(),
            "recordsFiltered" => $this->report->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
}