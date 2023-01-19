<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class HomeModel extends CI_Model
{
    public function kode(){
		  $this->db->select('RIGHT(sp_kartupengecekan.idmuat,4) as kode_barang', FALSE);
		  $this->db->order_by('id','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('sp_kartupengecekan');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->kode_barang) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  $tgl=date('dmY'); 
			  $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);    
			  $kodetampil = "BR".$tgl.$batas;  //format kode
			//   $kodetampil = $data->kode_barang;  //format kode
			  return $kodetampil;  
		 }
    public function saveitm($table, $data)
    {
        return $this->db->insert($table, $data);
    }
	
    // ======== DATATABLES SERVERSIDE 2 ================================================================================================================================
    var $column_order2 = array('sp.tanggal', 'sp.nopol', 'sp.driver1'); //set column field database for datatable orderable
    var $column_search2 = array('sp.tanggal', 'sp.nopol', 'sp.driver1', 'sp.driver2'); //set column field database for datatable searchable
    var $order2 = array('sp.tanggal' => 'desc'); // default order
    private function _get_datatables_query()
    {
        $this->db->select('*');
        $this->db->from('sp_kartupengecekan sp');
        $i = 0;
        foreach ($this->column_search2 as $item) // loop column 
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
                if (count($this->column_search2) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order2[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order2)) {
            $order2 = $this->order2;
            $this->db->order_by(key($order2), $order2[key($order2)]);
        }
    }

    public function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->_get_datatables_query();
        return $this->db->count_all_results();
    }

    // ======== DATATABLES SERVERSIDE 2 ================================================================================================================================

    public function printPengecekan($table, $id, $isiID)
    {
        $this->db->from($table);
        $this->db->where($id, $isiID);
        return $this->db->get();
    }
}