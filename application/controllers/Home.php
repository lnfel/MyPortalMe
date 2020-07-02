<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

        public function __construct() {
            parent::__construct();
            // Your own constructor code
            date_default_timezone_set('Asia/Manila');
            $this->load->model('site_model');
            $this->load->helper(array('form', 'url'));
            $this->load->helper('file');
            $this->load->helper('download');
            $this->load->helper('language');

            $username = $this->session->userdata('Username');
            $type = $this->session->userdata('Type');
            if(empty($username) && empty($type)) {
                //$this->session->set_flashdata('flash_data', 'You don\'t have access!');
                redirect('site');
            }

        }
        
	public function index()
	{
            
                $mysql_select = "SELECT * FROM list_announcement ORDER BY date";
                $query = $this->site_model->select($mysql_select);
                $data['annoucement'] = $query->result();
            
            
		$data['title'] = 'Home';
                $data['main_content'] = 'home/index.php';
                $this->load->view('layout/template_content.php', $data);
	}
        
        public function settings()
	{
		$data['title'] = 'Settings';
                $data['main_content'] = 'home/settings.php';
                $this->load->view('layout/template_content.php', $data);
	}
}
