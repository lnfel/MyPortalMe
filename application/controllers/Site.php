<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
        date_default_timezone_set('Asia/Manila');
        $this->load->model('site_model');
        
        //if(!empty($_SESSION['username'])){
        //    redirect('main');
        //}
            
    }

	public function index()
	{
            if (isset($_POST['login'])) {
                $result = $this->site_model->validate_login($_POST);
                if (!empty($result)) {
                    $data = array(
                        'Username' => $result->Username,
                        'Type' => $result->Type,
                        'ThemeID' => $result->ThemeID
                    );
                    $this->session->set_userdata($data);
                    
                    $mysql_select = "SELECT * FROM employee WHERE EmployeeNo = '$result->Username'";
                    $query = $this->site_model->select($mysql_select);
                    $data1 = $query->row();
                    
                    $data1 = array(
                        'EmployeeID' => $data1->EmployeeID
                    );
                    
                    $this->session->set_userdata($data1);
                    
                    $this->load->library('user_agent');

                    if ($this->agent->is_browser()){
                            $agent = $this->agent->browser();
                            $agent_version = $this->agent->version();
                    } else if ($this->agent->is_robot()) {
                            $agent = $this->agent->robot();
                    } else if ($this->agent->is_mobile()) {
                            $agent = $this->agent->mobile();
                    } else {
                            $agent = 'Unidentified User Agent';
                    }

                    //$account_id = $result->ACCOUNT_ID;
                    //$ip_address = $_SERVER['REMOTE_ADDR'];
                    $ip_address = $this->input->ip_address();
                    $device = 'PC';
                    $browser = $agent;
                    $browser_version = $agent_version;
                    $operating_system = $this->agent->platform();

                    $data = array('AccountUsername' => $this->session->userdata('Username'),
                        'IpAddress' => $ip_address,
                        'Device' => $device,
                        'Browser' => $browser,
                        'BrowserVersion' => $browser_version,
                        'OperatingSystem' => $operating_system,
                        'DateLogs' => date('Y-m-d h:i:s'),
                        // Dont Modified It.    
//                        'DATE_CREATED' => date('Y-m-d h:i:s'),
//                        'DATE_MODIFIED' => date('Y-m-d h:i:s')
                    );
                    // Insert Format is : $table, $data
                    $this->site_model->insert('account_logs', $data);  

                    redirect('home');

                } else {
                    $this->session->set_flashdata('flash_data', 'Username or password is wrong!');
                    $data['alert'] = '1';
                    //$data['main_content'] = 'index';
                    //$this->load->view('includes/template_print', $data);
                    $this->load->view('index', $data);
            }
        } else {
            $data['alert'] = '0';
            //$data['main_content'] = 'index';
            //$this->load->view('includes/template_print', $data);
            $this->load->view('index', $data);
        }
	}
}
