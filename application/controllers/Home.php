<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // if ($this->session->userdata('status') != 'login') {
        //     redirect(base_url());
        // }
        
        $models = array(
            'HomeModel' => 'home',
        );
        // Load Multiple Models
        foreach ($models as $file => $object_name) {
            $this->load->model($file, $object_name);
        }

        $this->load->library('session');
    }

    public function index()
    {
        $data['kode'] = $this->home->kode();
        $this->load->view('/template/_header.php', $data);
        $this->load->view('HomeView');
    }

    public function input()
    {
        $post = $this->input->post();

        $idform = $_POST['idform'];
        $tanggal = $_POST['tanggal'];
        $nopol = $_POST['nopol'];
        $driver1 = $_POST['driver1'];
        $driver2 = $_POST['driver2'];
        $driver3 = $_POST['driver3'];
        $driver4 = $_POST['driver4'];
        $jammuat = $_POST['jammuat'];
        $jamselesai = $_POST['jamselesai'];
        $personel1 = $_POST['personel1'];
        $personel2 = $_POST['personel2'];

        $dataMuat = array(
            'idmuat' => $idform,
            'tanggal' => $tanggal,
            'nopol' => $nopol,
            'driver1' => $driver1,
            'driver2' => $driver2,
            'driver3' => $driver3,
            'driver4' => $driver4,
            'jammuat' => $jammuat,
            'jamselesai' => $jamselesai,
            'personel1' => $personel1,
            'personel2' => $personel2
        );

        $tujuan = $_POST['tujuan'];
        $karung = $_POST['karung'];
        $box = $_POST['box'];
        $bale = $_POST['bale'];
        
        $jml_mbl = count($tujuan);

        $jml = $jml_mbl - 1;

        $result = $this->home->saveitm('sp_kartupengecekan', $dataMuat);
        for ($i = 0; $i < $jml; $i++) {
            
            $data = array(
                'idmuat' => $idform,
                'tujuan' => $tujuan[$i],
                'karung' => $karung[$i],
                'box' => $box[$i],
                'bale' => $bale[$i]
            );
            $this->home->saveitm('sp_kartupengecekanitm', $data);
        }

        if ($result == 1) {
            $data['kode'] = $this->home->kode();
            $data['status'] = 'sukses';
            redirect('Home', $data);
        } else {
            # code...
        }
    }
}