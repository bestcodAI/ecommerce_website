<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

     public function register()
    {
        $this->load->view('admin/them/header');
        $this->load->view('admin/regiter');
        $this->load->view('admin/them/footer');
    }

    public function login()
    {
        $this->load->view('admin/them/header');
        $this->load->view('admin/login');
        $this->load->view('admin/them/footer');
    }

    public function dashboard()
    {
        $this->load->view('admin/them/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/them/footer');
    }
}