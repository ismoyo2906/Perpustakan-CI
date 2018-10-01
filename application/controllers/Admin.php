<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class Admin extends CI_Controller{
function __construct(){
parent::__construct();
//Cek Login
	if($this->session->userdata('status') != "login"){
		redirect(base_url().'welcome?pesan=belumlogin');
	}
}
	
function index(){
	$data['peminjaman'] = $this->db->query("select * from peminjaman order by id_pinjam desc limit 10")->result();
	$data['anggota'] = $this->db->query("select * from anggota order by id_anggota desc limit 10")->result();
	$data['buku'] = $this->db->query("select * from buku order by id_buku desc limit 10")->result();
	

$this->load->view("admin/header");
$this->load->view("admin/index",$data);
$this->load->view("admin/footer");
}
}
?>