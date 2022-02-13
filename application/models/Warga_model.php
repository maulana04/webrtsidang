<?php

class Warga_model extends CI_model {
    public function getAllWarga()
    {
        return $query = $this->db->get('detail_warga')->result();
    }

    public function all(){
        $query = $this->db->query("SELECT * from user");
        $data = $query->result();

        return $data;
    }

    function input_data($table,$data){
		$this->db->insert($table,$data);
	}

    function display_row($nik){		
		$query = $this->db->query("select * from detail_warga WHERE nik = '".$nik."'");

        foreach ($query->result_array() as $row)
		{
	       return $row;
		}
	}

    public function updateWarga($data, $id){
        $this->db->where("nik", $id);
        $this->db->update("detail_warga", $data);
    }

    function hapus_data($nik){
		$this->db->where('nik', $nik);
		$this->db->delete('detail_warga');
	}
 
}