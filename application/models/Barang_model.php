<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_model {

	function queryData($data)
	{
		return $this->db->query($data);
	}
	function insertData($table, $data)
	{
		$this->db->insert($table, $data);
	}
	function updateData($table, $data, $where, $id)
	{
		$this->db->where($where, $id);
		$this->db->update($table, $data);
	}
	function deleteData($table, $where, $id)
	{
		$this->db->where($where, $id);
		$this->db->delete($table);
	}
}
