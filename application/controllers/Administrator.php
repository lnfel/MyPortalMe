<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

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
    }

    public function logout() {

        $data = array('Username', 'Type', 'ThemeID');
        $this->session->unset_userdata($data);
        //window.localStorage.clear();
        redirect('site');
    }

    public function index() {

        echo $this->session->userdata('EmployeeID');

        $data['title'] = 'Administrator Main Site';
        $data['main_content'] = 'administrator/index.php';
        $this->load->view('layout/template_content.php', $data);
    }

    public function account_employee() {
        
        $data['title'] = 'Manage Account Employee';
        $data['main_content'] = 'administrator/account_employee.php';
        $this->load->view('layout/template_content.php', $data);
    }

    public function account_student() {
        
        $data['title'] = 'Manage Account Student';
        $data['main_content'] = 'administrator/account_student.php';
        $this->load->view('layout/template_content.php', $data);
    }

    public function employee() {
        if (isset($_POST['add_employee'])) {

            $data = array('FirstName' => strtoupper($this->input->post('first_name')),
                'MiddleName' => strtoupper($this->input->post('middle_name')),
                'LastName' => strtoupper($this->input->post('last_name')),
                'EmployeeTypeID' => $emptype->EmployeeTypeID,
                'ActiveStatus' => 1
            );
            //Add employeeTypeID
            $this->site_model->insert('employee', $data);
            redirect('administrator/employee/');
        }

        if ($this->input->post('keyword')) {
            $mysql_select = "SELECT * FROM employee where " . $this->input->post('cat_keyword') . " like '" . $this->input->post('keyword') . "%' order by " . $this->input->post('cat_keyword');
            $query = $this->site_model->select($mysql_select);
            $data['employee'] = $query->result();
        } else {
            $data['employee'] = $this->site_sp->employee_list();
            mysqli_next_result($this->db->conn_id);
        }

        $data['employee_type'] = $this->site_sp->employee_type_list();

        $data['title'] = 'Administrator Employee View';
        $data['main_content'] = 'administrator/employee.php';
        $this->load->view('layout/template_content.php', $data);
    }

    public function employee_view($emp_id) {
        $data['emp'] = $this->site_sp->employee_list_ByID($emp_id);

        $data['title'] = 'Administrator Employee Profile';
        $data['main_content'] = 'administrator/employee_view.php';
        $this->load->view('layout/template_content.php', $data);
    }

    public function employee_edit($emp_id) {
        
        if (isset($_POST['save_info'])) {

            $data = array('FirstName' => strtoupper($this->input->post('FirstName')),
                'MiddleName' => strtoupper($this->input->post('MiddleName')),
                'LastName' => strtoupper($this->input->post('LastName')),
                'Address' => strtoupper($this->input->post('Address')),
//                                       'provCode' => strtoupper($this->input->post('provCode')),
//                                       'citymunCode' => strtoupper($this->input->post('citymunCode')),
//                                       'brgyCode' => strtoupper($this->input->post('brgyCode')),
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
                'CompanyEmailAddress' => strtoupper($this->input->post('CompanyEmailAddress')),
                'PersonalEmailAddress' => strtoupper($this->input->post('PersonalEmailAddress')),
                'FacebookEmailAddress' => strtoupper($this->input->post('FacebookEmailAddress')),
                'TelephoneNo' => strtoupper($this->input->post('TelephoneNo')),
                'ContactNo' => strtoupper($this->input->post('ContactNo')),
                'Tin' => strtoupper($this->input->post('Tin')),
                'Sss' => strtoupper($this->input->post('Sss')),
                'Philhealth' => strtoupper($this->input->post('Philhealth')),
                'Pagibig' => strtoupper($this->input->post('Pagibig'))
            );
            $this->db->where('EmployeeID', $this->input->post('EmployeeID'));
            $this->db->update('employee', $data);
            redirect('administrator/employee/');
        }

        $data['emp'] = $this->site_sp->employee_list_ByID($emp_id);

        $data['title'] = 'Administrator Employee Update';
        $data['main_content'] = 'administrator/employee_edit.php';
        $this->load->view('layout/template_content.php', $data);
    }

    public function employee_delete($id) {
        //Delete
        $this->db->where('EmployeeID', $id);
        $this->db->delete('employee');
        redirect('administrator/employee/');
    }

    public function student() {
        if (isset($_POST['add_student'])) {

            $data = array('FirstName' => strtoupper($this->input->post('first_name')),
                'MiddleName' => strtoupper($this->input->post('middle_name')),
                'LastName' => strtoupper($this->input->post('last_name')),
                'ActiveStatus' => 1
            );
            $this->site_model->insert('student', $data);
            redirect('administrator/student/');
        }

        if ($this->input->post('keyword')) {
            $mysql_select = "SELECT * FROM student where " . $this->input->post('cat_keyword') . " like '" . $this->input->post('keyword') . "%' order by " . $this->input->post('cat_keyword');
            $query = $this->site_model->select($mysql_select);
            $data['student'] = $query->result();
        } else {
            $mysql_select = "SELECT * FROM student";
            $query = $this->site_model->select($mysql_select);
            $data['student'] = $query->result();
        }

        $mysql_select = "SELECT * FROM cat_educational_level";
        $query = $this->site_model->select($mysql_select);
        $data['educational_level'] = $query->result();

        $mysql_select = "SELECT * FROM cat_acad_program";
        $query = $this->site_model->select($mysql_select);
        $data['academic_program'] = $query->result();


        $data['title'] = 'Administrator Student View';
        $data['main_content'] = 'administrator/student.php';
        $this->load->view('layout/template_content.php', $data);
    }

    public function student_view($emp_id) {
        $mysql_select = "SELECT * FROM student emp left join cat_address_barangay rb on emp.brgyCode = rb.brgyCode left join cat_address_city rcm on emp.citymunCode = rcm.citymunCode left join cat_address_province rp on emp.provCode = rp.provCode left join cat_address_region rr on emp.regCode = rr.regCode WHERE StudentID = '$emp_id'";
        $query = $this->site_model->select($mysql_select);
        $data['emp'] = $query->row();


        $data['title'] = 'Administrator Student Profile';
        $data['main_content'] = 'administrator/student_view.php';
        $this->load->view('layout/template_content.php', $data);
    }

    public function student_edit($emp_id) {
        //Create
        if (isset($_POST['save_info'])) {

            $data = array('FirstName' => strtoupper($this->input->post('FirstName')),
                'MiddleName' => strtoupper($this->input->post('MiddleName')),
                'LastName' => strtoupper($this->input->post('LastName')),
                'Address' => strtoupper($this->input->post('Address')),
                'provCode' => strtoupper($this->input->post('provCode')),
                'citymunCode' => strtoupper($this->input->post('citymunCode')),
                'brgyCode' => strtoupper($this->input->post('brgyCode')),
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

        $mysql_select = "SELECT * FROM student emp left join cat_address_barangay rb on emp.brgyCode = rb.brgyCode left join cat_address_city rcm on emp.citymunCode = rcm.citymunCode left join cat_address_province rp on emp.provCode = rp.provCode left join cat_address_region rr on emp.regCode = rr.regCode WHERE StudentID = '$emp_id'";
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
        $data['main_content'] = 'administrator/student_edit.php';
        $this->load->view('layout/template_content.php', $data);
    }

    public function student_delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('student');
        redirect('administrator/student/');
    }

    public function academic_program() {
        //Create
        if (isset($_POST['add_academic_program'])) {

            $data = array('AcaProgramCode' => strtoupper($this->input->post('AcaProgramCode')),
                'AcaProgramName' => strtoupper($this->input->post('AcaProgramName')),
                'AcaProgramNameDiploma' => strtoupper($this->input->post('AcaProgramNameDiploma')),
                'ActiveForAdmission' => 1,
                'ActiveStatus' => 1
            );
            $this->site_model->insert('cat_acad_program', $data);
            redirect('administrator/academic_program/');
        }

        if ($this->input->post('keyword')) {
            //Search
            $mysql_select = "SELECT * FROM cat_acad_program where " . $this->input->post('cat_keyword') . " like '" . $this->input->post('keyword') . "%' order by " . $this->input->post('cat_keyword');
            $query = $this->site_model->select($mysql_select);
            $data['cat_acad_program'] = $query->result();
            //redirect('site');
        } else {
            //Read
            $mysql_select = "SELECT * FROM cat_acad_program";
            $query = $this->site_model->select($mysql_select);
            $data['cat_acad_program'] = $query->result();
        }

        $data['title'] = 'Administrator Academic Program View';
        $data['main_content'] = 'administrator/academic_program.php';
        $this->load->view('layout/template_content.php', $data);
    }

    public function academic_program_delete($id) {
        //Delete
        $this->db->where('AcaProgramCode', $id);
        $this->db->delete('cat_acad_program');
        redirect('administrator/academic_program/');
    }

    public function subject() {
        if (isset($_POST['add_subject'])) {

            $data = array('SubjectCode' => strtoupper($this->input->post('SubjectCode')),
                'SubjectName' => strtoupper($this->input->post('SubjectName')),
                'Unit' => strtoupper($this->input->post('Unit')),
                'Component_SubjectID' => strtoupper($this->input->post('Component_SubjectID')),
                'ActiveStatus' => 1
            );
            $this->site_model->insert('cat_subject', $data);
            redirect('administrator/subject/');
        }

        if ($this->input->post('keyword')) {
            $mysql_select = "SELECT * FROM cat_subject where " . $this->input->post('cat_keyword') . " like '" . $this->input->post('keyword') . "%' order by " . $this->input->post('cat_keyword');
            $query = $this->site_model->select($mysql_select);
            $data['cat_subject'] = $query->result();
        } else {
            $mysql_select = "SELECT * FROM cat_subject";
            $query = $this->site_model->select($mysql_select);
            $data['cat_subject'] = $query->result();
        }

        $mysql_select = "SELECT * FROM cat_educational_level";
        $query = $this->site_model->select($mysql_select);
        $data['educational_level'] = $query->result();


        $data['title'] = 'Administrator Subject View';
        $data['main_content'] = 'administrator/subject.php';
        $this->load->view('layout/template_content.php', $data);
    }

    public function subject_delete($id) {
        $this->db->where('SubjectID', $id);
        $this->db->delete('cat_subject');
        redirect('administrator/subject/');
    }

    public function section_schedule() {
        if (isset($_POST['add_section'])) {

            $data = array('SectionName' => strtoupper($this->input->post('SectionName')),
                'CurriculumID' => strtoupper($this->input->post('CurriculumID')),
                'PeriodID' => strtoupper($this->input->post('PeriodID')),
                'GradeYear' => strtoupper($this->input->post('GradeYear'))
            );
            $this->site_model->insert('cat_section', $data);
            redirect('administrator/section_schedule/');
        }

        if ($this->input->post('keyword')) {
            //Search
            $mysql_select = "SELECT * FROM cat_section where " . $this->input->post('cat_keyword') . " like '" . $this->input->post('keyword') . "%' order by " . $this->input->post('cat_keyword');
            $query = $this->site_model->select($mysql_select);
            $data['section'] = $query->result();
            //redirect('site');
        } else {
            //Read
            $mysql_select = "SELECT * FROM cat_section";
            $query = $this->site_model->select($mysql_select);
            $data['section'] = $query->result();
        }


        $data['title'] = 'Administrator Section and Schedule View';
        $data['main_content'] = 'administrator/section_schedule.php';
        $this->load->view('layout/template_content.php', $data);
    }

    public function section_delete($id) {
        $this->db->where('SectionID', $id);
        $this->db->delete('cat_section');
        redirect('administrator/section_schedule/');
    }

    public function room() {
        if (isset($_POST['add_room'])) {

            $data = array('RoomName' => strtoupper($this->input->post('RoomName')),
                'Building' => strtoupper($this->input->post('Building')),
                'Capacity' => $this->input->post('Capacity'),
                'AirCondition' => $this->input->post('AirCondition'),
                'ActiveStatus' => 1
            );
            $this->site_model->insert('cat_room', $data);
            redirect('administrator/room/');
        }

        if ($this->input->post('keyword')) {

            $mysql_select = "SELECT * FROM cat_room where " . $this->input->post('cat_keyword') . " like '" . $this->input->post('keyword') . "%' order by " . $this->input->post('cat_keyword');
            $query = $this->site_model->select($mysql_select);
            $data['cat_room'] = $query->result();
        } else {
            $mysql_select = "SELECT * FROM cat_room";
            $query = $this->site_model->select($mysql_select);
            $data['cat_room'] = $query->result();
        }

        $data['title'] = 'Administrator Room View';
        $data['main_content'] = 'administrator/room.php';
        $this->load->view('layout/template_content.php', $data);
    }

    public function room_delete($id) {
        $this->db->where('RoomID', $id);
        $this->db->delete('cat_room');
        redirect('administrator/room/');
    }

    public function department() {
        if (isset($_POST['add_department'])) {

            $data = array('DepartmentAcronym' => strtoupper($this->input->post('DepartmentAcronym')),
                'DepartmentName' => strtoupper($this->input->post('DepartmentName')),
                'AcademicDept' => $this->input->post('AcademicDept')
            );
            $this->site_model->insert('cat_department', $data);
            redirect('administrator/department/');
        }

        if ($this->input->post('keyword')) {

            $mysql_select = "SELECT * FROM cat_department where " . $this->input->post('cat_keyword') . " like '" . $this->input->post('keyword') . "%' order by " . $this->input->post('cat_keyword');
            $query = $this->site_model->select($mysql_select);
            $data['cat_department'] = $query->result();
        } else {
            $mysql_select = "SELECT * FROM cat_department";
            $query = $this->site_model->select($mysql_select);
            $data['cat_department'] = $query->result();
        }


        $data['title'] = 'Administrator Department View';
        $data['main_content'] = 'administrator/department.php';
        $this->load->view('layout/template_content.php', $data);
    }

    public function department_delete($id) {
        $this->db->where('DepartmentID', $id);
        $this->db->delete('cat_department');
        redirect('administrator/department/');
    }

    public function curriculum() {

        //Create
        if (isset($_POST['add_academic_curriculum'])) {

            $data = array('AcaProgramCode' => strtoupper($this->input->post('AcaProgramCode')),
                'AcaProgramName' => strtoupper($this->input->post('AcaProgramName')),
                'AcaProgramNameDiploma' => strtoupper($this->input->post('AcaProgramNameDiploma')),
                'ActiveForAdmission' => 1,
                'ActiveStatus' => 1
            );
            $this->site_model->insert('cat_acad_curriculum', $data);
            redirect('administrator/curriculum/');
        }

        if ($this->input->post('keyword')) {
            //Search
            $mysql_select = "SELECT * FROM cat_acad_curriculum where " . $this->input->post('cat_keyword') . " like '" . $this->input->post('keyword') . "%' order by " . $this->input->post('cat_keyword');
            $query = $this->site_model->select($mysql_select);
            $data['cat_acad_curriculum'] = $query->result();
            //redirect('site');
        } else {
            //Read
            $mysql_select = "SELECT * FROM cat_acad_curriculum";
            $query = $this->site_model->select($mysql_select);
            $data['cat_acad_curriculum'] = $query->result();
        }

        $data['title'] = 'Administrator Curriculum View';
        $data['main_content'] = 'administrator/curriculum.php';
        $this->load->view('layout/template_content.php', $data);
    }

    public function curriculum_delete($id) {
        //Delete
        $this->db->where('AcaProgramID', $id);
        $this->db->delete('cat_acad_curriculum');
        redirect('administrator/curriculum/');
    }

    public function schoolyear() {

        $data['title'] = 'Administrator School Year View';
        $data['main_content'] = 'administrator/schoolyear.php';
        $this->load->view('layout/template_content.php', $data);
    }

    public function list_announcement() {
        //Create
        if (isset($_POST['add_announcement'])) {

            $data = array('Announcement' => $this->input->post('Announcement'),
                'Description' => $this->input->post('Description'),
                'Date' => $this->input->post('Date')
            );
            $this->site_model->insert('list_announcement', $data);
            redirect('administrator/list_announcement/');
        }

        if ($this->input->post('keyword')) {
            //Search
            $mysql_select = "SELECT * FROM list_announcement where " . $this->input->post('cat_keyword') . " like '" . $this->input->post('keyword') . "%' order by " . $this->input->post('cat_keyword');
            $query = $this->site_model->select($mysql_select);
            $data['list_announcement'] = $query->result();
            //redirect('site');
        } else {
            //Read
            $mysql_select = "SELECT * FROM list_announcement";
            $query = $this->site_model->select($mysql_select);
            $data['list_announcement'] = $query->result();
        }

        $data['title'] = 'Administrator Announcement View';
        $data['main_content'] = 'administrator/list_announcement.php';
        $this->load->view('layout/template_content.php', $data);
    }

    public function list_announcement_delete($id) {
        //Delete
        $this->db->where('AnnouncementID', $id);
        $this->db->delete('list_announcement');
        redirect('administrator/list_announcement/');
    }

    public function list_holidays() {
        //Create
        if (isset($_POST['add_holiday'])) {

            $data = array('Holiday' => strtoupper($this->input->post('Holiday')),
                'DESCRIPTION' => strtoupper($this->input->post('DESCRIPTION')),
                'DAY' => strtoupper($this->input->post('DAY')),
                'DATE' => strtoupper($this->input->post('DATE'))
            );
            $this->site_model->insert('list_holiday', $data);
            redirect('administrator/list_holidays/');
        }

        if ($this->input->post('keyword')) {
            //Search
            $mysql_select = "SELECT * FROM list_holiday where " . $this->input->post('cat_keyword') . " like '" . $this->input->post('keyword') . "%' order by " . $this->input->post('cat_keyword');
            $query = $this->site_model->select($mysql_select);
            $data['list_holiday'] = $query->result();
            //redirect('site');
        } else {
            //Read
            $mysql_select = "SELECT * FROM list_holiday";
            $query = $this->site_model->select($mysql_select);
            $data['list_holiday'] = $query->result();
        }
        $data['title'] = 'Administrator Holidays View';
        $data['main_content'] = 'administrator/list_holidays.php';
        $this->load->view('layout/template_content.php', $data);
    }

    public function list_holiday_delete($id) {
        //Delete
        $this->db->where('ID', $id);
        $this->db->delete('list_holiday');
        redirect('administrator/list_holidays/');
    }

    public function School_Year() {
        //Create
        if (isset($_POST['add_school_year'])) {

            $data = array('SchoolYearName' => strtoupper($this->input->post('SchoolYearName')),
                'PeriodUD' => strtoupper($this->input->post('PeriodID')),
                'PeriodName' => strtoupper($this->input->post('PeriodName')),
                'EducLevelID' => strtoupper($this->input->post('EducLevelID'))
            );
            $this->site_model->insert('cat_school_year', $data);
            redirect('administrator/school_year/');
        }

        if ($this->input->post('keyword')) {
            //Search
            $mysql_select = "SELECT * FROM cat_school_year where " . $this->input->post('cat_keyword') . " like '" . $this->input->post('keyword') . "%' order by " . $this->input->post('cat_keyword');
            $query = $this->site_model->select($mysql_select);
            $data['cat_school_year'] = $query->result();
            //redirect('site');
        } else {
            //Read
            $mysql_select = "SELECT * FROM cat_school_year";
            $query = $this->site_model->select($mysql_select);
            $data['cat_school_year'] = $query->result();
        }
        $data['title'] = 'Administrator School Year View';
        $data['main_content'] = 'administrator/school_year';
        $this->load->view('layout/template_content.php', $data);
    }

    public function school_year_delete($id) {
        //Delete
        $this->db->where('SchoolYearID', $id);
        $this->db->delete('cat_school_year');
        redirect('administrator/school_year/');
    }

}
