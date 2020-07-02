<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

    var $global_username;
    var $global_emp_id;
    var $global_type;

    public function __construct() {
        parent::__construct();
        // Your own constructor code
        date_default_timezone_set('Asia/Manila');
        $this->load->model('site_model');
        $this->load->model('site_sp');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('file');
        $this->load->helper('download');
        $this->load->helper('language');

        $this->global_username = $this->session->userdata('Username');
        $this->global_emp_id = $this->session->userdata('EmployeeID');
        $this->global_type = $this->session->userdata('Type');

        if (empty($this->global_username) && empty($this->global_type)) {
            //$this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('site');
        }

        //        FOR DEBUGGING PURPOSES
        //        echo '<pre>';
        //        print_r($query->result_array());
        //        echo '</pre>';
        //        TO PASS VALUE 1 List To Another  
        //        $row = $this->employee_list_ByID();
        //        echo $employeeid = $row->EmployeeID;
        //        if ($query->num_rows() > 0){
        //            $row = $query->row(); 
        //            //echo $row->EmployeeID;
        //            $employeeid = $row->EmployeeID;
        //         }
    }

    public function index() {

        $data['emp'] = $this->site_sp->employee_list_ByID($this->global_emp_id);

        $data['menu'] = 1;
        $data['title'] = 'Employee Main Site';
        $data['main_content'] = 'employee/index.php';
        $this->load->view('layout/template_content.php', $data);
    }

    public function profile() {

        $data['emp'] = $this->site_sp->employee_list_ByID($this->global_emp_id);

        $data['menu'] = 2;
        $data['title'] = 'Administrator Employee View';
        $data['main_content'] = 'employee/profile.php';
        $this->load->view('layout/template_content.php', $data);
    }

    public function attendance() {

        $data['emp'] = $this->site_sp->employee_list_ByID($this->global_emp_id);

        $data['menu'] = 3;
        $data['title'] = 'Administrator Employee View';
        $data['main_content'] = 'employee/attendance.php';
        $this->load->view('layout/template_content.php', $data);
    }

    public function activity() {

        $data['emp'] = $this->site_sp->employee_list_ByID($this->global_emp_id);

        $data['menu'] = 4;
        $data['title'] = 'Administrator Employee View';
        $data['main_content'] = 'employee/activity.php';
        $this->load->view('layout/template_content.php', $data);
    }

    public function payroll() {

        $data['emp'] = $this->site_sp->employee_list_ByID($this->global_emp_id);

        $data['menu'] = 5;
        $data['title'] = 'Administrator Employee View';
        $data['main_content'] = 'employee/payroll.php';
        $this->load->view('layout/template_content.php', $data);
    }

    public function document_training() {

        $data['emp'] = $this->site_sp->employee_list_ByID($this->global_emp_id);

        $data['menu'] = 6;
        $data['title'] = 'Administrator Employee View';
        $data['main_content'] = 'employee/document_training.php';
        $this->load->view('layout/template_content.php', $data);
    }

}
