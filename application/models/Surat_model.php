<?php

class Surat_model extends CI_Model {
    function allSurat()
    {
        $query = $this->db->query("SELECT * from surat");
        $data = $query->result();

        return $data;
    }

    function input_data($table,$data){
		$this->db->insert($table,$data);
	}

    function display_row($id_surat){		
		$query = $this->db->query("select * from surat WHERE id_surat = '".$id_surat."'");

        foreach ($query->result_array() as $row)
		{
	       return $row;
		}
	}

    public function updateWarga($data, $id){
        $this->db->where("id_surat", $id);
        $this->db->update("surat", $data);
    }

    function hapus_data($id_surat){
		$this->db->where('id_surat', $id_surat);
		$this->db->delete('surat');
	}
} 