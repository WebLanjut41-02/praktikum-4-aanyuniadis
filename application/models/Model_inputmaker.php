<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_inputmaker extends CI_Model {

	public function getmaker()
	{
		$this->db->from('project');
		$query = $this->db->get();
		return $query->result();
	}
	public function inputproject($ID_project,$namaproject,$danaproject,$jatuhtempo,$detailproject)
	{

		$data = array(
		'id_project' => $ID_project,
		'nama_project' => $namaproject,
		'dana_dibutuhkan' => $danaproject,
		'jatuh_tempo'=> $jatuhtempo,
		'detail_project' => $detailproject,
	);
		$this->db->insert('project', $data);
	}
	public function carijudul()
	{
		$cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query("SELECT * from project where nama_project like '%$cari%' ");
		return $data->result();
	}
	 public function datamaker($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("project");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }

}

/* End of file Model_inputmaker.php */
/* Location: ./application/models/Model_inputmaker.php */