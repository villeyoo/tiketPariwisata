<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

        $this->load->model('M_pesanTiket');
        $this->load->model('TiketModel');
    }
    public function index()
    {
        $this->load->view('beranda/home');
    }

    public function bookingTiketPariwisata()
    {

        $data['kota_list'] = $this->M_pesanTiket->getKotaList(); 
        $harga = $this->TiketModel->getHarga();
        $data['harga'] = $harga;
        $data['wisata'] = $this->TiketModel->harga()->result();
        $this->load->view('beranda/orderPariwisata', $data); 
    }

    public function bookingTiketBus()
    {

        $data['kelas_list'] = $this->TiketModel->getKelasList();

        $this->load->view('beranda/orderBus', $data);
    }

    public function munculHarga()
    {
        $wisata = $this->input->post('Wisata');
        $result = $this->TiketModel->cekHarga($wisata);

       
        if ($result->num_rows() > 0) {
            $harga = $result->row_array(); 

            echo json_encode($harga);
        } else {
           
            echo json_encode(array('error' => 'Data harga tidak ditemukan'));
        }
    }


}
