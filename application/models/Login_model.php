<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{
    //fungsi check login
   public function get_user_data($data)
    {
       $result = "no";
        $query = $this->db->query("select * from user WHERE email = '".$this->db->escape_like_str($data['email'])."' AND password = '".$this->db->escape_like_str($data['password'])."'");

        $row = $query->row();
        
        if ($query->num_rows() > 0){
            $result = "ok";
            $user['email']     = $row->email;
            $user['password']  = $row->password;
            $user['role']      = $row->role;
            $this->session->set_userdata($user);
        }   
        
        return $result;
    }
}