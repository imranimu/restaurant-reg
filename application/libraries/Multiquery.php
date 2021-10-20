<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

    class Multiquery {
        private $CI;

        function __construct() {
            $this->CI = & get_instance();

            $this->Chefonline_DB = $this->CI->load->database('db_new', TRUE);
        }

        public function GetResults($SqlCommand) {
            $k = 0;
            $arr_results_sets = array();

           

            if (mysqli_multi_query($this->Chefonline_DB->conn_id, $SqlCommand)) {
                $k = 0;
                do {
                    $result = mysqli_store_result($this->Chefonline_DB->conn_id);
                    
                    if($result){
                        if ($result->num_rows != 0) {
                            $l = 0;
                            while ($row = $result->fetch_assoc()) {
                                $arr_results_sets[$k][$l] = $row;                        
                                $l++;
                            }
                        }else{
                            $arr_results_sets[$k] = array();
                        }

                    }
                    $k++;
                } while (mysqli_next_result($this->Chefonline_DB->conn_id));

                //print_r($arr_results_sets);exit;
                return $arr_results_sets;
            }
        }


        public function GetSingleResults($SqlCommand) {
            
            $arr_results_sets = array();

            if (mysqli_multi_query($this->Chefonline_DB->conn_id, $SqlCommand)) {
                do {
                    $result = mysqli_store_result($this->Chefonline_DB->conn_id);
                    
                    if($result){
                        if ($result->num_rows != 0) {
                            $l = 0;
                            while ($row = $result->fetch_assoc()) {
                                $arr_results_sets[$l] = $row;                        
                                $l++;
                            }
                        }else{
                            $arr_results_sets = array();
                        }

                    }
                } while (mysqli_next_result($this->Chefonline_DB->conn_id));

                //print_r($arr_results_sets);exit;
                return $arr_results_sets;
            }
        }

}