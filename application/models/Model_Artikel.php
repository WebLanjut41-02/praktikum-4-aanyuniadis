<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Artikel extends CI_Model {

	public function getArtikel()
	{
		// $query = $this->db->query("SELECT judul_artikel, tgl_terbit, pengarang, isi, foto_artikel from artikel")->result();
		// return $query;

		$this->db->from('artikel');
		$query = $this->db->get();
		return $query->result();
	}

	public function inputArtikel($id, $judul, $terbit, $pengarang, $isi, $file)
	{
		$data = array(
			'id_artikel' => $id,
			'judul_artikel' => $judul,
			'tgl_terbit' => $terbit,
			'pengarang' => $pengarang, 
			'isi' => $isi,
			'foto_artikel' => $file

		);

		$this->db->insert('artikel', $data);
	}

}

/* End of file Model_Artikel.php */
/* Location: ./application/models/Model_Artikel.php */