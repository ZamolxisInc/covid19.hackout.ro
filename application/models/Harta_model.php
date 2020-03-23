<?php
class Harta_model extends CI_Model{


    function get_by_judet(){

        $sql = "SELECT COUNT(*) as nr , judet FROM persoane
        GROUP BY judet
        ORDER BY judet DESC;";
        $result = $this->db->query($sql);
        return  $result->result();
    
    }



}