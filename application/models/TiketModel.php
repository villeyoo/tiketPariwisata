<?php

defined('BASEPATH') or exit('No direct script access allowed');

class TiketModel extends CI_Model
{

    public function tambahRuteBus($rute)
    {
        $this->db->insert('rutebus', $rute);
    }
    public function tambahKelasBus($bus)
    {
        $this->db->insert('kelasBus', $bus);
    }
    public function tambahOrder($data)
    {
        $this->db->insert('orderpariwisata', $data);
    }

    public function getAllTiket()
    {
        return $this->db->get("parwis")->result();
    }
    public function getAllRute()
    {
        return $this->db->get("rutebus")->result();
    }

    public function getAllKelas()
    {
        return $this->db->get("kelasBus")->result();
    }
    public function deleteBus($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("rutebus");
    }

    public function deleteKelas($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("kelasBus");
    }
    public function deletePariwisata($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("parwis");
    }

    public function getRuteByID($id)
    {
        $query = $this->db->get_where('rutebus', array('id' => $id));
        return $query->row_array();
    }
    public function getParwisByID($id)
    {
        $query = $this->db->get_where('parwis', array('id' => $id));
        return $query->row_array();
    }
    public function getKelasByID($id)
    {
        $query = $this->db->get_where('kelasBus', array('id' => $id));
        return $query->row_array();
    }
    public function tambah($data)
    {

        if (is_array($data)) {
            $this->db->insert('parwis', $data);
        }
    }
    public function getKelasList()
    {
        $query = $this->db->query("SELECT Kelas FROM kelasbus");

        return $query->result_array();
    }

    public function getHarga()
    {
        $this->db->select('Harga');
        $query = $this->db->get('parwis');


        if ($query->num_rows() > 0) {
            $row = $query->row();

            return $row->Harga;
        } else {
            return 0;
        }
    }

    public function getHargaTiket($tempatWisata)
    {
        $this->db->select('Harga');
        $this->db->where('id', $tempatWisata);
        $query = $this->db->get('parwis');

        if ($query->num_rows() > 0) {
            return $query->row()->harga;
        } else {
            return 0;
        }
    }



    function cekHarga($kode)
    {
        $this->db->select('Harga');
        $this->db->where("Wisata", $kode);
        return $this->db->get("parwis");
    }

    function harga()
    {

        return $this->db->get('parwis');
    }

}
