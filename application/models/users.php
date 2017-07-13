<?php  


	class Users extends CI_Controller{

		public function get_list(){
			return $this->db->get('Users')->result_array();
		}

		public function get_detail_row($sort){
			$this->db->select('*');
			$this->db->join('Answers', 'Answers.user_id = Users.sort','left');

			$query = $this->db->get_where('Users', array('Users.sort' => $sort));
			return $query->row_array();
		}

		public function get_detail_list(){
			$this->db->join('Questions','Questions.id = Answers.questions_id','left');
			$this->db->where('Answers.user_id',$this->id);
			$data = $this->db->get('Answers')->result_array();
			return $data;
		}

		public function get_reportage($job){
			$this->db->select('*');
			$this->db->like('job', $job);
			$this->db->or_like('name', $job); 
			return $this->db->get('Users')->result_array();
		}

		public function total_reportage(){
			$query = $this->db->query('SELECT id FROM Users');
			return $query->num_rows();
		}

		

	}


?>