<?php 
class Task extends MY_Controller{
		function __construct()
 		{
 			parent::__construct();
 			$this->load->model('task_model');
 		}


 		function index()
 		{		
 			$data['query'] = $this->task_model->get_articles();
 			
 			$this->load->view('template/header');
			$this->load->view('home',$data);
			$this->load->view('template/footer');
        }

        function create()
 		{	
 			$this->load->view('template/header');
			$this->load->view('insert');
			$this->load->view('template/footer');
		}

		function list_news()
 		{ 			
 			$data['query'] = $this->task_model->get_articles();
 			
 			$this->load->view('template/header');
			$this->load->view('list_news',$data);
			$this->load->view('template/footer');
        }

		function set_news(){
			$this->task_model->set_news();
			redirect('task/list_news');
		}

		public function edit($article_id)
	    {
	        $data['post'] = $this->task_model->get_news($article_id);

	        $this->load->helper('form');

	        $this->load->view('template/header');
	        $this->load->view('edit', $data);
	        $this->load->view('template/footer');
	    }

	    public function update_news(){
        	$this->task_model->update_news_model();
        	redirect('task/list_news');
    	}

    	public function delete($id)
	    {
	        $this->task_model->delete_news($id);
	        redirect('task/list_news');
	    }
}