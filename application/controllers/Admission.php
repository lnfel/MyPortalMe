<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admission extends CI_Controller {

    private $global_username;  
    private $global_type;  
    
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
            $this->global_type = $this->session->userdata('Type');

            if (empty($this->global_username) && empty($this->global_type)) {
                //$this->session->set_flashdata('flash_data', 'You don\'t have access!');
                redirect('site');
            }

        }
        
        public function logout() {
        
            $data = array('Username', 'Type', 'ThemeID'); 
            $this->session->unset_userdata($data);
            //window.localStorage.clear();
            redirect('site');
            
        }
            
	public function index()
	{
		$data['title'] = 'Administrator Main Site';
                $data['main_content'] = 'administrator/index.php';
                $this->load->view('layout/template_content.php', $data);
	}
       
       
        public function applicant_list()    
	{
                //Create
                if(isset($_POST['add_student_application'])){

                        $data = array( 'ApplicantNo' => strtoupper($this->input->post('ApplicantNo')),
                                       'YearGraduate' => strtoupper($this->input->post('YearGraduate')),
                                       'PeriodID' => strtoupper($this->input->post('PeriodID')),
                                       'StudentType' => strtoupper($this->input->post('StudentType')),
                                       'FirstName' => strtoupper($this->input->post('FirstName')),
                                       'MiddleName' => strtoupper($this->input->post('MiddleName')),
                                       'LastName' => strtoupper($this->input->post('LastName')),
                                       'Address' => strtoupper($this->input->post('Address')),
                                       'provCode' => strtoupper($this->input->post('provCode')),
                                       'citymunCode' => strtoupper($this->input->post('citymunCode')),
                                       'ZipCode' => strtoupper($this->input->post('ZipCode')),
                                       'BirthDate' => strtoupper($this->input->post('BirthDate')),
                                       'BirthPlace' => strtoupper($this->input->post('BirthPlace')),
                                       'CivilStatus' => strtoupper($this->input->post('CivilStatus')),
                                       'Gender' => strtoupper($this->input->post('Gender')),
                                       'Height' => strtoupper($this->input->post('Height')),
                                       'BloodType' => strtoupper($this->input->post('BloodType')),
                                       'Weight' => strtoupper($this->input->post('Weight')),
                                       'Nationality' => strtoupper($this->input->post('Nationality')),
                                       'Religion' => strtoupper($this->input->post('Religion')),
                                       'PersonalEmailAddress' => strtoupper($this->input->post('PersonalEmailAddress')),
                                       'FacebookEmailAddress' => strtoupper($this->input->post('FacebookEmailAddress')),
                                       'TelephoneNo' => strtoupper($this->input->post('TelephoneNo')),
                                       'ContactNo' => strtoupper($this->input->post('ContactNo')),
                                       'FatherName' => strtoupper($this->input->post('FatherName')),
                                       'FatherContactNo' => strtoupper($this->input->post('FatherContactNo')),
                                       'MotherName' => strtoupper($this->input->post('MotherName')),
                                       'MotherContactNo' => strtoupper($this->input->post('MotherContactNo')),
                                       'GuardianName' => strtoupper($this->input->post('GuardianName')),
                                       'GuardianContactNo' => strtoupper($this->input->post('GuardianContactNo'))
                                     );
                        $this->site_model->insert('student_application', $data);
                        redirect('admission/applicant_list/');

                } 
                
                if ($this->input->post('keyword')) {
                    //Search
                    $mysql_select = "SELECT * FROM student_application where " . $this->input->post('cat_keyword') . " like '" . $this->input->post('keyword') . "%' order by " . $this->input->post('cat_keyword');
                    $query = $this->site_model->select($mysql_select);
                    $data['student_application'] = $query->result();
                    //redirect('site');
                } else {
                    //Read
                    $mysql_select = "SELECT * FROM student_application sa left join cat_address_city rcm on sa.citymunCode = rcm.citymunCode left join cat_address_province rp on sa.provCode = rp.provCode left join cat_address_region rr on sa.regCode = rr.regCode ORDER BY ApplicantNo";
                    $query = $this->site_model->select($mysql_select);
                    $data['student_application'] = $query->result();

                }

                $mysql_select = "SELECT * FROM cat_address_region ORDER BY regDesc";
                $query = $this->site_model->select($mysql_select);
                $data['refregion'] = $query->result();

                $mysql_select = "SELECT * FROM cat_address_province ORDER BY provDesc";
                $query = $this->site_model->select($mysql_select);
                $data['refprovince'] = $query->result();

                $mysql_select = "SELECT * FROM cat_address_city ORDER BY citymunDesc";
                $query = $this->site_model->select($mysql_select);
                $data['refcitymun'] = $query->result();

                $mysql_select = "SELECT * FROM cat_address_barangay ORDER BY brgyDesc";
                $query = $this->site_model->select($mysql_select);
                $data['refbrgy'] = $query->result();  

		$data['title'] = 'Administrator New Student Application';
                $data['main_content'] = 'admission/applicant_list';
                $this->load->view('layout/template_content.php', $data);
        }

        public function applicant_list_view($emp_id)
	{
                $mysql_select = "SELECT * FROM student_application emp left join cat_address_city rcm on emp.citymunCode = rcm.citymunCode left join cat_address_province rp on emp.provCode = rp.provCode left join cat_address_region rr on emp.regCode = rr.regCode WHERE ApplicantNo = '$emp_id'";
                $query = $this->site_model->select($mysql_select);
                $data['emp'] = $query->row();

                
		$data['title'] = 'Administrator Student Application Profile';
                $data['main_content'] = 'administrator/applicant_list_view.php';
                $this->load->view('layout/template_content.php', $data);
        }

        
        public function applicant_list_edit($emp_id)
	{
            //Create
                if(isset($_POST['save_info'])){
                        
                        $data = array( 'FirstName' => strtoupper($this->input->post('FirstName')),
                                       'MiddleName' => strtoupper($this->input->post('MiddleName')),
                                       'LastName' => strtoupper($this->input->post('LastName')),
                                       'Address' => strtoupper($this->input->post('Address')),
                                       'provCode' => strtoupper($this->input->post('provCode')),
                                       'citymunCode' => strtoupper($this->input->post('citymunCode')),
                                       'ZipCode' => strtoupper($this->input->post('ZipCode')),
                                       'BirthDate' => strtoupper($this->input->post('BirthDate')),
                                       'BirthPlace' => strtoupper($this->input->post('BirthPlace')),
                                       'CivilStatus' => strtoupper($this->input->post('CivilStatus')),
                                       'Gender' => strtoupper($this->input->post('Gender')),
                                       'Height' => strtoupper($this->input->post('Height')),
                                       'BloodType' => strtoupper($this->input->post('BloodType')),
                                       'Weight' => strtoupper($this->input->post('Weight')),
                                       'Nationality' => strtoupper($this->input->post('Nationality')),
                                       'Religion' => strtoupper($this->input->post('Religion')),
                                       'PersonalEmailAddress' => strtoupper($this->input->post('PersonalEmailAddress')),
                                       'FacebookEmailAddress' => strtoupper($this->input->post('FacebookEmailAddress')),
                                       'TelephoneNo' => strtoupper($this->input->post('TelephoneNo')),
                                       'ContactNo' => strtoupper($this->input->post('ContactNo')),
                                       'FatherName' => strtoupper($this->input->post('FatherName')),
                                       'FatherContactNo' => strtoupper($this->input->post('FatherContactNo')),
                                       'MotherName' => strtoupper($this->input->post('MotherName')),
                                       'MotherContactNo' => strtoupper($this->input->post('MotherContactNo')),
                                       'GuardianName' => strtoupper($this->input->post('GuardianName')),
                                       'GuardianContactNo' => strtoupper($this->input->post('GuardianContactNo'))
                                     );
                                     //Add employeeTypeID
                        $this->db->where('StudentID', $this->input->post('StudentID'));
                        $this->db->update('student', $data); 
                        redirect('administrator/student/');

                } 
            
                $mysql_select = "SELECT * FROM student_application emp left join cat_address_city rcm on emp.citymunCode = rcm.citymunCode left join cat_address_province rp on emp.provCode = rp.provCode left join cat_address_region rr on emp.regCode = rr.regCode WHERE ApplicantNo = '$emp_id'";
                $query = $this->site_model->select($mysql_select);
                $data['emp'] = $query->row();

                $mysql_select = "SELECT * FROM cat_address_region ORDER BY regDesc";
                $query = $this->site_model->select($mysql_select);
                $data['refregion'] = $query->result();

                $mysql_select = "SELECT * FROM cat_address_province ORDER BY provDesc";
                $query = $this->site_model->select($mysql_select);
                $data['refprovince'] = $query->result();

                $mysql_select = "SELECT * FROM cat_address_city ORDER BY citymunDesc";
                $query = $this->site_model->select($mysql_select);
                $data['refcitymun'] = $query->result();

                $mysql_select = "SELECT * FROM cat_address_barangay ORDER BY brgyDesc";
                $query = $this->site_model->select($mysql_select);
                $data['refbrgy'] = $query->result();  
                
		$data['title'] = 'Administrator Student Update';
                $data['main_content'] = 'administrator/applicant_list_edit.php';
                $this->load->view('layout/template_content.php', $data);
        }

        public function applicant_list_delete($id)
	{
                //Delete
                $this->db->where('ApplicantNo', $id);
                $this->db->delete('student_application'); 
                redirect('administrator/applicant_list/');
        
        }
}
