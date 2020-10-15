<?php 

class model_kategori extends CI_Model{
	public function data_smartphone()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'smartphone'));
	}

	public function data_pakaian_pria()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'pakaian pria'));
	}

	public function data_komputer_laptop()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'komputer & laptop'));
	}

	public function data_otomotif()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'otomotif'));
	}

	public function data_makanan()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'makanan'));
	}

	public function data_perlengkapan_anak()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'perlengkapan anak'));
	}

	public function data_perlengkapan_rumah()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'perlengkapan rumah'));
	}
}