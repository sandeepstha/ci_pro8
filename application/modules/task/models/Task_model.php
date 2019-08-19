<?php
class Task_model extends My_Controller{

        public function __construct()
        {
                $this->load->database();
        }

        public function get_articles(){
        		$query = $this->db->get('article');
        		return $query;
        }

        public function set_news($value='')
		{
			$data = array(
		        'article_title' => $this->input->post('article_title'),
		        'category' => $this->input->post('category'),
		        'author' => $this->input->post('author'),
		        'postdate' => $this->input->post('postdate'),
		        'content' => $this->input->post('content')
	   		 );

		    return $this->db->insert('article', $data);
		}

		public function get_news($slug= FALSE)
		{
			if($slug === FALSE){
				$query = $this->db->get('article');
				return $query->result_array();
			}
			$query = $this->db->get_where('article', array('article_id' => $slug));
			return $query->row_array();
		}

		public function update_news_model(){
			// echo $this->input->post('article_title');
	        $data = array(
		        'article_title' => $this->input->post('article_title'),
		        'category' => $this->input->post('category'),
		        'author' => $this->input->post('author'),
		        'postdate' => $this->input->post('postdate'),
		        'content' => $this->input->post('content')
	   		 );

	        $this->db->where('article_id', $this->input->post('id'));
		    return $this->db->update('article', $data);
	    }

	    public function delete_news($id)
		{
			$this->db->where('article_id', $id);
			$this->db->delete('article');
			return true;
		}
}
