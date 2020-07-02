<?php

class Site_Sp extends CI_Model{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function address_region_list(){
        
        $query = $this->db->query("SELECT * FROM cat_address_region ORDER BY RegionDescription");
        return $query->result();
    }
    
    public function address_province_list(){
        
        $query = $this->db->query("SELECT * FROM cat_address_province ORDER BY ProvinceDescription");
        return $query->result();
    }
    
    public function address_city_list(){
        
        $query = $this->db->query("SELECT * FROM cat_address_city ORDER BY CityDescription");
        return $query->result();
    }
    
    public function address_barangay_list(){
        
        $query = $this->db->query("SELECT * FROM cat_address_barangay ORDER BY BarangayDescription");
        return $query->result();
    }

    // EMPLOYEE
    public function employee_list(){
        
        $query = $this->db->query("CALL Sp_Employee_List()");
        return $query->result();
    }
    
    public function employee_list_ByNo($employee_no){
        
        $sql = "CALL Sp_Employee_List_ByID($employee_no)";
        $query = $this->db->query($sql); 

        return $query->row();
    }
    
    public function employee_list_ByID($employee_id){
        
        $sql = "CALL Sp_Employee_List_ByID($employee_id)";
        $query = $this->db->query($sql); 

        return $query->row();
    }
    
    public function employee_type_list(){
        
        $query = $this->db->query("SELECT * FROM employee_type");
        return $query->result();
    }
    
    
    
    
    
    
    
    //STUDENT
    
    public function student_list(){
        
        $query = $this->db->query("CALL Sp_Student_List()");
        return $query->result();
    }
    

}
    
    
    
    

