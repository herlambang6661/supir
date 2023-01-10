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
}