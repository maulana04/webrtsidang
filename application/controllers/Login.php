<?php

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }


    public function index()
    {
        $session = $this->session->all_userdata();
        if(isset($session["Email"])){
            redirect("warga/Dashboard", "refresh");
        }
        $this->load->view('login');
    }

    public function submit()
    {
       $input['email']= $this->input->post('Email');
       $input['password'] = $this->input->post('password');
       $login = $this->Login_model->get_user_data($input);

       if($login =='ok'){
        $role = $this->session->userdata('role');
        if($role == 'admin'){
            redirect('Dashboard', 'refresh');
        }
        if($role == 'rt'){
            redirect('Dashboard', 'refresh');
        }
        if($role == 'warga'){
            redirect('Dashboard', 'refresh');
        }
       }
       else{
        redirect('Login', 'refresh');
       }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('Login', 'refresh');
    }
}