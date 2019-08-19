<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controller_curl extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        
        // $username = 'admin';
        // $password = '1234';
        
        //  Calling cURL Library
        $this->load->library('curl');

        //  Setting URL To Fetch Data From
        $this->curl->create('http://localhost/projects/ci_pro8/task/api/news_api/index/format/json');
        
        // Optional, delete this line if your API is open
        // $this->curl->http_login($username, $password);
    
        // $this->curl->post(array(
        //     'name' => $new_name,
        //     'email' => $new_email
        // ));
        
        $result = json_decode($this->curl->execute());
    
        if(isset($result->status) && $result->status == 'success')
        {
            echo 'User has been updated.';
        }
        
        else
        {
            echo 'Something has gone wrong';
        }
    }

}
