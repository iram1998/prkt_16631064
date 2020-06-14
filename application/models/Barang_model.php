<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{
    //fungsi untuk mengambil semua isi dari tabel barang
    function getAllBarang()
    {
        //query untuk mengambil semua data dengan cara query biasa
        //$query = $this->db->query('SELECT * FROM barang INNER JOIN jenis ON jenis.id_jenis = barang.id_jenis INNER JOIN satuan ON satuan.id_satuan = barang.id_satuan');
        //return $query->result();

        //query untuk mengambil semua data dengan cara query builder
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('jenis', 'jenis.id_jenis = barang.id_jenis');
        $this->db->join('satuan', 'satuan.id_satuan = barang.id_satuan');
        return $this->db->get()->result();
    }
}
