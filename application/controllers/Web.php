<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Web extends CI_Controller {
     function _construct(){
        parent::_construct();
        $this->load->helper('url');
     }
     public function index()
    {
        $data['judul'] = 'Halaman Depan';
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    }
    public function about()
    {
        $data['judul'] = 'Halaman Depan';
        $this->load->view('v_header',$data);
        $this->load->view('v_about',$data);
        $this->load->view('v_footer',$data); 
    }
    public function login()
    {
        $data['judul'] = 'Halaman Depan';
        $this->load->view('v_header',$data);
        $this->load->view('v_login',$data);
        $this->load->view('v_footer',$data); 
    }
}