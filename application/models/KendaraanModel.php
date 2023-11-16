<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class KendaraanModel extends CI_Model
{
    public function f_kendaraan($plat){
        $this->db->select('*');
        $this->db->from('sp_kendaraan');
        $this->db->where('plat', $plat);
        // $this->db->order_by("namaBarang", "ASC");
        $query = $this->db->get();
        return $query->result();
    }
}