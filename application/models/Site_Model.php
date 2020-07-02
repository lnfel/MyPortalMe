<?php

class Site_Model extends CI_Model{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function select($mysql_select){
        $query = $this->db->query($mysql_select);
        return $query;
    }
    
    public function insert($table, $data){
        $this->db->insert($table, $data); 
    }
    
    public function update($table, $data, $field_name, $field_value_unique){
        
        $this->db->where($field_name, $field_value_unique);
        $this->db->update($table, $data); 
        
    }
    
    public function delete($table, $field_name, $field_value_unique){
        if(!empty($field_value_unique)){

            $this->db->where($field_name, $field_value_unique);
            $this->db->delete($table); 
            
            if($this->db->affected_rows() > 0)
            return true;
            else
            return false;

        }
        return false;
    }
    
    public function validate_login($get_post_data) {
        $this->db->where('Username', $get_post_data['username']);
        $this->db->where('Password', sha1($get_post_data['password']));
        $this->db->where('ActiveStatus', 1);
        return $this->db->get('account')->row();
    }

}
    
    
    
    

