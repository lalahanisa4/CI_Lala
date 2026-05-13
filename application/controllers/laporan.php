<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login')){
            redirect('login');
        }
    }

    public function peminjaman()
    {
        $bulan= $this->input->get('bulan');
        
        $this->db->select('peminjaman.*, anggota.nama');
        $this->db->from('peminjaman');
        $this->db->join('anggota', 'anggota.nomor_anggota = peminjaman.anggota_id');

        if($bulan){
            $this->db->where('DATE_FORMAT(tanggal_pinjam,"%Y-%m")=', $bulan);
        }
        $data['data']= $this->db->get()->result();
        $data['bulan']= $bulan;

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/peminjaman', $data);
        $this->load->view('templates/footer'); 
    }
   public function buku()
{
    // ambil data dari form
    $penulis = $this->input->get('nama_penulis');

    $this->db->select('buku.*, kategori.nama_kategori');
    $this->db->from('buku');
    $this->db->join('kategori', 'kategori.id = buku.id_kategori', 'left');

    // filter penulis
    if($penulis){
        $this->db->where('buku.nama_penulis', $penulis);
    }

    $data['data'] = $this->db->get()->result();
    $data['penulis'] = $penulis;

    // ambil daftar penulis unik
    $data['list_penulis'] = $this->db
        ->query("SELECT nama_penulis FROM buku ORDER BY nama_penulis ASC")
        ->result();

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('laporan/buku', $data);
    $this->load->view('templates/footer');
}
public function anggota()
{
    $data['data'] = $this->db->get('anggota')->result();

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('laporan/anggota', $data);
    $this->load->view('templates/footer');
}

}