<?php
class Navigate extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
        }
           
        public function index(){
            if ( ! file_exists(APPPATH.'views/pages/home.php'))
            {
                // Whoops, we don't have a page for that!
                show_404();
            }

            $data['title'] = 'Home'; // Capitalize the first letter
            
            $this->load->view('templates/header', $data);
            $this->load->view('pages/home', $data);
            $this->load->view('templates/footer', $data);
        }
        
        public function view($page = 'home')
        {
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
            {
                // Whoops, we don't have a page for that!
                show_404();
            }

            $data['title'] = ucfirst($page); // Capitalize the first letter
            
            $this->load->view('pages/'.$page, $data);
        }
}

