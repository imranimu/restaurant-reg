<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Multipledb extends CI_DB {
  var $db = NULL;
  function __construct(){
    $CI = &get_instance();
    $this->db = $CI->load->database('db_new', TRUE);
  }
  
  // Add more functions two use commonly.
  public function save(){
      $sql =("SELECT * FROM `chefol_staff`");
      $query = $this->db->query($sql);
      return $query->result_array();
  }
}