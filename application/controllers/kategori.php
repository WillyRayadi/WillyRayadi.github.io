<?php 

class Kategori extends CI_Controller{
	public function smartphone()
	{
		$data['smartphone'] =$this->model_kategori->data_smartphone()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('smartphone', $data);
		$this->load->view('templates/footer');
	}

	public function pakaian_pria()
	{
		$data['pakaian_pria'] =$this->model_kategori->data_pakaian_pria()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pakaian_pria', $data);
		$this->load->view('templates/footer');
	}

	public function komputer_laptop()
	{
		$data['komputer_laptop'] =$this->model_kategori->data_komputer_laptop()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('komputer_laptop', $data);
		$this->load->view('templates/footer');
	}

	public function otomotif()
	{
		$data['otomotif'] =$this->model_kategori->data_otomotif()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('otomotif', $data);
		$this->load->view('templates/footer');
	}

	public function makanan()
	{
		$data['makanan'] =$this->model_kategori->data_makanan()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('makanan', $data);
		$this->load->view('templates/footer');
	}

	public function perlengkapan_anak()
	{
		$data['perlengkapan_anak'] =$this->model_kategori->data_perlengkapan_anak()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('perlengkapan_anak', $data);
		$this->load->view('templates/footer');
	}

	public function perlengkapan_rumah()
	{
		$data['perlengkapan_rumah'] =$this->model_kategori->data_perlengkapan_rumah()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('perlengkapan_rumah', $data);
		$this->load->view('templates/footer');
	}
}