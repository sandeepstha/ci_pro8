<?php
require APPPATH.'/libraries/rest/REST_Controller.php';

class News_api extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('task_model');
     }
        
     /**
      * Get All Data from this method.
      *
      * @return Response
     */
     public function index_get($id = 0)
     {
         if(!empty($id)){
             $data = $this->db->get_where("article", ['article_id' => $id])->row_array();
         }else{
             $data = $this->db->get("article")->result();
         }
      
         $this->response($data, self::HTTP_OK);
     }
       
     /**
      * Get All Data from this method.
      *
      * @return Response
     */
     public function index_post()
     {
        //  $input = $this->input->post();
        
        $input = array(
            'article_title'=>$this->input->post('article_title'),
            'content'=>$this->input->post('content'),
            'category'=>$this->input->post('category'),
            'postdate'=>$this->input->post('postdate'),
            'author'=>$this->input->post('author')
        );
        var_dump($input); exit;
        
        // $this->db->insert('article',$input);
      
        $this->response(['Item created successfully.'], self::HTTP_OK);
     } 
      
     /**
      * Get All Data from this method.
      *
      * @return Response
     */
    
     public function index_put($id)
     {
         $input = $this->put();
    //      $input = array(
    //         'article_title'=>$this->put('article_title'),
    //         'content'=>$this->put('content'),
    //         'category'=>$this->put('category'),
    //         'postdate'=>$this->put('postdate'),
    //         'author'=>$this->put('author')
    //     );
         var_dump($input); exit;
         $this->db->update('article', $input, array('article_id'=>$id));
      
         $this->response(['Item updated successfully.'], self::HTTP_OK);
     }

    
      
     /**
      * Get All Data from this method.
      *
      * @return Response
     */
     public function index_delete($id)
     {
         $this->db->delete('article', array('article_id'=>$id));
        
         $this->response(['Item deleted successfully.'], self::HTTP_OK);
     }
} 
?>