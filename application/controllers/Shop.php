<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Shop extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Shop_model');
    }
    public function index()
    {
        $data['title'] = "Party World - Home";
        // $data['products'] = $this->Home_model->products();
        // $data['categories'] = $this->Home_model->categories();

        $this->load->view('Website/header',$data);
        $this->load->view('Website/nav',$data);    
        $this->load->view('shop',$data);
        $this->load->view('Website/footer',$data);
    }

}

/* End of file Home.php and path /application/controllers/Home.php */


