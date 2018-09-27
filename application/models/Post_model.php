<?php
	class Post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_posts(){
			$this->db->order_by('posts.id', 'DESC');
			$query = $this->db->get('posts');
			return $query->result_array();
		}

	}