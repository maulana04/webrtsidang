<?php

class RT_model extends CI_Model {

    function Wilayah()
    {
        $this->db->order_by('id', 'ASC');
        return $this->db->from('wilayah_provinsi')->get()->result();
    }

    function Wilayah_kabupaten($provinsi_id)
    {
        $this->db->where('provinsi_id', $provinsi_id);
        $this->db->order_by('id', 'ASC');
        return $this->db->from('wilayah_kabupaten')->get()->result();
    }

    function Wilayah_kecamatan($kabupaten_id)
    {
        $this->db->where('kabupaten_id', $kabupaten_id);
        $this->db->order_by('id', 'ASC');
        return $this->db->from('wilayah_kecamatan')->get()->result();
    }

    function Wilayah_desa($kecamatan_id)
    {
        $this->db->where('kecamatan_id', $kecamatan_id);
        $this->db->order_by('id', 'ASC');
        return $this->db->from('wilayah_desa')->get()->result();
    }

    function Wilayah_rw($desa_id)
    {
        $this->db->where('desa_id', $desa_id);
        $this->db->order_by('id', 'ASC');
        return $this->db->from('wilayah_rw')->get()->result();
    }

    function input_wilayah($data)
    {   
        $input = array(
        'id' => $data['id'],
        'rw_id' => $data['rw_id'],
        'nama_rt' => $data['nama_rt'],
        );
        $this->db->insert('wilayah_rt', $input);
    }

    function getAllWilayah()
    {
        $query = $this->db->query("SELECT * from wilayah_rw");
        $query = $this->db->query("SELECT * from wilayah_rt");
        $data = $query->result();

        return $data;
    }

    function display_row($id){		
		$query = $this->db->query("select * from wilayah_rw WHERE id = '".$id."'");

        foreach ($query->result_array() as $row)
		{
	       return $row;
		}
	}

    public function updateRT($data, $id){
        $this->db->where("id", $id);
        $this->db->update("wilayah_rt", $data);
    }

    function hapus_data($id){
		$this->db->where('id', $id);
		$this->db->delete('wilayah_rt');
	}
    
    function joinWilayah()
    {
        $query = $this->db->query("SELECT A.nama, B.nama AS nama_kabupaten, C.nama AS nama_kecamatan, D.nama AS nama_desa, E.nama_rw, F.nama_rt,
        F.id 
        FROM wilayah_provinsi A 
        INNER JOIN wilayah_kabupaten B ON A.id = provinsi_id
        INNER JOIN wilayah_kecamatan C ON B.id = C.kabupaten_id
        INNER JOIN wilayah_desa D ON C.id = D.kecamatan_id
        INNER JOIN wilayah_rw E ON D.id = E.desa_id
        INNER JOIN wilayah_rt F ON E.id = F.rw_id");

        $data = $query->result();

        return $data;
    }

    public function getAllRt()
    {
        return $query = $this->db->get('wilayah_rt')->result();
    }
    
}