<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('Barang_model', 'bm');
        }

	function index()
	{
		$data['title'] = "Data Barang";
		$data['barang'] = $this->db->get('tb_barang')->result();
		$this->load->view('barang/index',$data);
	}
	function tambah_barang()
	{
		$data['title'] = "Tambah Barang";
		$this->load->view('barang/tambah_barang',$data);

		if(isset($_POST['submit'])){
			$barang_id = $this->input->post('kode_barang');
			$barang_nama = $this->input->post('nama_barang');
			$barang_stok = $this->input->post('stok_barang');
			$barang_harga = $this->input->post('harga_barang');

			$data = [
				'barang_id' => $barang_id,
				'barang_nama' => $barang_nama,
				'barang_stok' => $barang_stok,
				'barang_harga' => $barang_harga,
			];
			$this->bm->insertData('tb_barang', $data);
			redirect('barang');
		}
	}
	function edit_barang($id)
	{
		$data['title'] = "Edit Barang";
		$data ['barang'] = $this->bm->queryData("SELECT * FROM `tb_barang` WHERE barang_id ='$id'")->result();
		$this->load->view('barang/edit_barang',$data);

		if(isset($_POST['submit'])){
			$barang_id = $this->input->post('kode_barang');
			$barang_nama = $this->input->post('nama_barang');
			$barang_stok = $this->input->post('stok_barang');
			$barang_harga = $this->input->post('harga_barang');

			$data = [
				'barang_id' => $barang_id,
				'barang_nama' => $barang_nama,
				'barang_stok' => $barang_stok,
				'barang_harga' => $barang_harga,
			];
			$where = 'barang_id';
			$this->bm->updateData('tb_barang', $data, $where, $id );
			redirect('barang');
		}
		
	}
	function hapus_barang($id)
		{
			$this->bm->deleteData('tb_barang', 'barang_id', $id);
			redirect('barang');
		}
}
