<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/dashboard');
    }
    public function dataPariwisata()
    {
        $this->load->view('admin/tablePariwisata');
    }

}
