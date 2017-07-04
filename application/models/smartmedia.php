<?php 
	Class Agama extends CI_Model{
		var $table = 'db_agama'; 

		function save($data){
			$this->db->insert($this->table, $data);
			return true;
		}

		function getAgama($where = []){
			$query = $this->db->from($this->table);

			if(count($where) > 0) { $query->where($where); }

			return $query->get()->result();
		}
/*
		function getAgama($where,$clause){
			$this->db->from($this->table);
			$this->db->where($where,$clause);

			return $this->db->get();
		}*/
	}
?>