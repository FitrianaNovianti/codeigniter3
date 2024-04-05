<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Buku extends CI_Controller {
    public function index()
    {
        $this->load->view('Buku/tampil_buku');
    }

    function create()
    {
        $this->load->view('Buku/tambah_buku');
    }
}