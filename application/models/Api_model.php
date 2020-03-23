<?php
class Api_model extends CI_Model{

  function get_all_person(){
    $result = $this->db->get('persoane');
    return $result->result();
  
  }

  

  function get_judet($judet){
    $result = $this->db->where('judet',$judet);
    $result = $this->db->get('persoane');
    return $result->result();
  
  }

  function user_log($ip,$info,$useragent)
    {
        $data = array(
            'ip' => $ip,
            'info' => $info,
            'useragent' => $useragent,
            'date' => date('Y-m-d')
        );
        $this->db->insert('logs',$data);
    }


    function is_ip_blocked($ip){
      $result = $this->db->where('ip',$ip);
      $result = $this->db->where('blocked',1);
      $result = $this->db->get('ip_block');
      $result = $result->num_rows();

      if($result > 0){
        return true;
      }else{
        return false;
      }
    
    }

    function get_logs(){
   
      $result = $this->db->get('logs');
      return $result->result();
    
    }

    function logs_ip(){

      $sql = "SELECT COUNT(*) as nr,ip FROM logs
      GROUP BY ip
      ORDER BY nr DESC";
      $result = $this->db->query($sql);
      return $result->result();
  
  }

}