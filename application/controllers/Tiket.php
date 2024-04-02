<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tiket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

        $this->load->model('TiketModel');
    }
    public function index()
    {
        $data['tiket'] = $this->TiketModel->getAllTiket();
        $this->load->view('admin/tablePariwisata', $data);
    }

    public function tambahPariwisata()
    {
        $this->load->view('admin/tambahPariwisata');
    }
    public function simpanPariwisata()
    {
        $wisata = $this->input->post('wisata');
        $harga = $this->input->post('harga');

        $data = array();
        if (is_array($wisata)) {
            $wisata_string = implode(', ', $wisata);

            $data['Wisata'] = $wisata_string;
        } else {

            $data['Wisata'] = $wisata;
        }


        $data['Harga'] = $harga;

        $this->TiketModel->tambah($data);

        redirect('tiket?save_success=true');
    }


    public function tambahRute()
    {
        $data['kelas_list'] = $this->TiketModel->getKelasList();
        $this->load->view('admin/TambahRuteBus', $data);
    }

    public function tambahKelas()
    {
        $this->load->view('admin/tambahKelasBus');
    }
    public function dataRuteBus()
    {
        $data['rute'] = $this->TiketModel->getAllRute();
        $this->load->view('admin/TableRuteBus', $data);
    }

    public function simpanRute()
    {
        $data = array(
            'Kelas' => $this->input->post('Kelas'),
            'Harga' => $this->input->post('harga'),
        );
        $this->TiketModel->tambahRuteBus($data);
        redirect('tiket/dataRuteBus?save_success=true');

    }

    public function hapus_rute($id)
    {
        $this->TiketModel->deleteBus($id);
        redirect('tiket/dataRuteBus?delete_success=true');
    }

    public function hapus_pariwisata($id)
    {
        $this->TiketModel->deletePariwisata($id);
        redirect('tiket?delete_success=true');
    }

    public function hapus_kelasBus($id)
    {
        $this->TiketModel->deleteKelas($id);
        redirect('tiket/kelasBus?delete_success=true');
    }

    public function editBus($id)
    {
        $data['rute'] = $this->TiketModel->getRuteByID($id);
        $this->load->view('admin/editBus', $data);
    }
    public function editPariwisata($id)
    {
        $data['tiket'] = $this->TiketModel->getParwisByID($id);
        $this->load->view('admin/editPariwisata', $data);
    }
    public function editKelasBus($id)
    {
        $data['kelas'] = $this->TiketModel->getKelasByID($id);
        $this->load->view('admin/editKelasBus', $data);
    }

    function updateBus()
    {
        $id = $this->input->post('id');
        $kelas = $this->input->post('Kelas');
        $harga = $this->input->post('harga');


        $data = array(
            'id' => $id,
            'Kelas' => $kelas,
            'Harga' => $harga,
        );

        $this->db->where('id', $id);
        $this->db->update('rutebus', $data);
        redirect('tiket/dataRuteBus?edit_success=true');
    }
    public function updatePariwisata()
    {
        $id = $this->input->post('id');
        $wisata = $this->input->post('wisata');
        $harga = $this->input->post('harga');

        $data = array();

        if (is_array($wisata)) {
            $wisata_string = implode(', ', $wisata);
            $data['Wisata'] = $wisata_string;
        } else {
            $data['Wisata'] = $wisata;
        }

        $data['Harga'] = $harga;
        $this->db->where('id', $id);
        $this->db->update('parwis', $data);

        redirect('tiket?edit_success=true');
    }

    public function kelasBus()
    {
        $data['bus'] = $this->TiketModel->getAllKelas();
        $this->load->view('admin/tableKelasBus', $data);
    }

    public function simpanKelasBus()
    {
        $data = array(
            'id' => $this->input->post('id'),
            'Kelas' => $this->input->post('kelas'),
        );

        $this->TiketModel->tambahKelasBus($data);
        redirect('tiket/kelasBus?save_success=true');
    }

    function updateKelasBus()
    {
        $id = $this->input->post('id');
        $kelas = $this->input->post('kelas');



        $data = array(
            'id' => $id,
            'Kelas' => $kelas,
        );

        $this->db->where('id', $id);
        $this->db->update('kelasBus', $data);
        redirect('tiket/kelasBus?edit_success=true');
    }


    public function orderTiketParwis()
    {
        $data = array(
            'namaLengkap' => $this->input->post('namaLengkap'),
            'email' => $this->input->post('email'),
            'NIK' => $this->input->post('NIK'),
            'no_telepon' => $this->input->post('telp'),
            'tempat_wisata' => $this->input->post('Wisata'),
            'tanggal_kunjungan' => $this->input->post('tanggalKunjungan'),
            'dewasa' => $this->input->post('adults'),
            'anak' => $this->input->post('children'),
            'harga' => $this->input->post('harga'),
            'totalHarga' => $this->input->post('totalHarga'),
        );


        $this->TiketModel->tambahOrder($data);


        redirect('home/bookingTiketPariwisata?save_success=true');
    }






}
