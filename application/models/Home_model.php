<?php
class Home_model extends CI_Model{

function get_all_infections_count(){
  $sql = "SELECT COUNT(*) AS nr FROM persoane";
  $result = $this->db->query($sql)->row();
  return $result->nr;
  }

  
function get_today_count($date){
  $sql = "SELECT COUNT(*) AS nr FROM persoane
  WHERE data_infectiei = '".$date."'";
  $result = $this->db->query($sql)->row();
  return $result->nr;
  }

  function get_vindecati_count(){
    $sql = "SELECT COUNT(*) AS nr FROM persoane
    WHERE vindecat = 1";
    $result = $this->db->query($sql)->row();
    return $result->nr;
    }
      
    function get_decedati_count(){
      $sql = "SELECT COUNT(*) AS nr FROM persoane
      WHERE decedat = 1";
      $result = $this->db->query($sql)->row();
      return $result->nr;
    }

    function get_infectii_chart(){

        $sql = "SELECT COUNT(*) as nr , data_infectiei FROM persoane
        GROUP BY data_infectiei
        ORDER BY data_infectiei DESC
        LIMIT 7;";
        $result = $this->db->query($sql);
        return $result->result();
    
    }

    function get_infectii_by_country(){

      $sql = "SELECT COUNT(*) as nr , from_country FROM persoane
      WHERE from_country != 'Nu'
      GROUP BY from_country
      ORDER BY from_country DESC
      LIMIT 15;";
      $result = $this->db->query($sql);
      return $result->result();
  
  }


}