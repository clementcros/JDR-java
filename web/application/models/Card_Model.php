<?php
class Card_Model extends CI_Model {
    public function __construct() {

        $this->load->database();

    }
    
    public function get_card() {
        
        $query = $this->db->get('card');
                
    }     
        
                
        
                
}