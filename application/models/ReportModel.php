<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class ReportModel extends CI_Model
{	
    public function getRekap()
    {
        $this->db->select('*');
        $this->db->from('sp_kartupengecekan sp');
        // $this->db->join('sp_kartupengecekanitm ip', 'sp.idmuat=ip.idmuat', 'left');
        // $this->db->where('ky.BAGIAN', $unit);
        $query = $this->db->get();
        return $query->result();
    }
    public function personel($id)
    {
        $this->db->select('tujuan');
        $this->db->from('sp_kartupengecekanitm');
        $this->db->where('idmuat', $id);
        $query = $this->db->get();
        return $query->result();
    }
}