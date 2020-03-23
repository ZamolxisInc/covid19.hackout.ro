<?php
class Statistica_model extends CI_Model{

function get_all_person(){
    $result = $this->db->get('persoane');
    return $result->result();
  
  }

  function get_all_person_not_null(){
    $sql = "SELECT * FROM persoane
    WHERE varsta IS NOT NULL;";
    $result = $this->db->query($sql);
    return $result->result();
  }

  function get_connections(){
    $result = $this->db->where('virus_from_persoana !=', NULL);
    $result = $this->db->get('persoane');
    return $result->result();
  
  }

  function get_varste_grup(){
    $sql = "SELECT COUNT(*) as nr , varsta FROM persoane
    WHERE varsta IS NOT NULL
    GROUP BY varsta
    ORDER BY varsta DESC;";
    $result = $this->db->query($sql);
    return $result->result();
    }
}