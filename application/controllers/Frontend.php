<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

    public function index()
    {
        $this->load->view('frontend/theme/header');
        $this->load->view('frontend/index');
        $this->load->view('frontend/theme/footer');
    }

     public function product()
    {
        $this->load->view('frontend/theme/header');
        $this->load->view('frontend/product');
        $this->load->view('frontend/theme/footer');
    }

    public function store()
    {
        $this->load->view('frontend/theme/header');
        $this->load->view('frontend/store');
        $this->load->view('frontend/theme/footer');
    }

    public function blank()
    {
        $this->load->view('frontend/theme/header');
        $this->load->view('frontend/blank');
        $this->load->view('frontend/theme/footer');
    }

    public function checkout()
    {
        $this->load->view('frontend/theme/header');
        $this->load->view('frontend/checkout');
        $this->load->view('frontend/theme/footer');
    }
}