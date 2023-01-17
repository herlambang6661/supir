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
    
    public function count_filtered()
    {
        $this->getRekap();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->getRekap();
        return $this->db->count_all_results();
    }
}