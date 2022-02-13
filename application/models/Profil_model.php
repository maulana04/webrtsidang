<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_model extends CI_Model
{
    //fungsi check login
   public function get_relasi()
    {
        $this->db->select('*');
        $this->db->from('detail_warga b');
        $this->db->join('user a', 'a.nkk = b.nkk', 'left');
        $return = $this->db->get('');
        return $return->result();
    }
}