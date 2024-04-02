<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class M_pesanTiket extends CI_Model
{
    public function getKotaList()
    {
        $query = $this->db->query("SELECT Harga, Wisata FROM parwis");
        return $query->result_array();

    }
    public function getBusLIst()
    {
        $query = $this->db->query("SELECT Kelas FROM rutebus");
        return $query->result_array();
    }
}
