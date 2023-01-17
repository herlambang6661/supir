<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class ReportModel extends CI_Model
{	
    // public function getRekap()
    // {
        
    //     // $today = date('Y-m-d');
    //     // //add custom filter here
    //     // if ($this->input->post('dateStart') == NULL) {
    //     //     $this->db->where('tanggal', $today);
    //     // } elseif ($this->input->post('dateStart') && $this->input->post('dateEnd')) {
    //     //     $t1 = $this->input->post('dateStart');
    //     //     $t2 = $this->input->post('dateEnd');
    //     //     $this->db->where("tanggal BETWEEN '$t1' AND '$t2'");
    //     // }
    //     // //add custom filter here

    //     $this->db->select('*');
    //     $this->db->from('sp_kartupengecekan sp');
    //     $query = $this->db->get();
    //     return $query->result();
    // }
    
    
    // ======== DATATABLES KUPON ===========================================================================================================================
    var $column_order = array('tanggal'); //set column field database for datatable orderable
    var $column_search = array('tanggal'); //set column field database for datatable searchable 
    var $order = array('tanggal' => 'desc'); // default order

    private function _get_datatables_kupon_server()
    {
        $today = date('Y-m-d');
        //add custom filter here
        if ($this->input->post('dateStart') == NULL) {
            $this->db->where('tanggal', $today);
        } elseif ($this->input->post('dateStart') && $this->input->post('dateEnd')) {
            $t1 = $this->input->post('dateStart');
            $t2 = $this->input->post('dateEnd');
            $this->db->where("tanggal BETWEEN '$t1' AND '$t2'");
        }
        //add custom filter here

        $this->db->select('*');
        $this->db->from('sp_kartupengecekan sp');
        // $query = $this->db->get();
        // return $query->result();

        $i = 0;

        foreach ($this->column_search as $item) // loop column 
        {
            if ($_POST['search']['value']) // if datatable send POST for search
            {
                if ($i === 0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    public function getRekap()
    {
        $this->_get_datatables_kupon_server();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered()
    {
        $this->_get_datatables_kupon_server();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->_get_datatables_kupon_server();
        // $this->db->from('kupon kp');
        return $this->db->count_all_results();
    }
    // ======== DATATABLES KUPON ===========================================================================================================================

}