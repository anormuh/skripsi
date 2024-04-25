<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_calon','mc');
	}

	public function index()
	{
		$x['data']=$this->mc->show_calon();
		$this->load->view('formpemilihan',$x);
	}
	public function pilih($id){
		$result=$this->mc->pilihcalon($id);
		// if($result){
		// 	$this->session->set_flashdata('success_msg','Data berhasil diubah');
		// }else{
		// 	$this->session->set_flashdata('error_msg','Gagal mengubah data');
		// }
		redirect(base_url("?pesan=terimakasih"));
	}
}

class Hasilpilih extends CI_Controller {
	function __construct(){
            parent::__construct();
            $this->load->model('M_calon','mc');
            $this->load->model('M_pemilih','mp');
      }
      public function index(){
            $x['data']=$this->mc->show_calon();
            $x['datapemilih']=$this->mp->show_pemilih();
            $this->load->view('hasilpemilihan',$x);
      }
      public function export(){
            $x['data']=$this->mc->show_calon();
            $x['datapemilih']=$this->mp->show_pemilih();
            $this->load->view('hasilpemilihanexport',$x);
      }
}
