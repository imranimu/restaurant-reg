<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_model extends CI_Model
{
    /**
     * Common_models constructor.
     */
    private $IP;
    private $machine;
    private $browser;

    function __construct(){

        parent::__construct();
        $this->IP       = $_SERVER['REMOTE_ADDR'];
        $this->machine  = php_uname('n');
        $this->browser  = $_SERVER['HTTP_USER_AGENT'];
		$this->Chefonline_DB = $this->load->database('db_new', TRUE);
    }
	
	public function get_gallery($limit, $offset){
		
		$this->db->select('*');
		$this->db->from('restaurant_images');
		$this->db->where([ 'restaurant_id' => RESTAURANT_ID, 'type' => 1, 'status' => 1]);
		$this->db->limit( $limit, $offset );
		$this->db->order_by('id','DESC');
		$query = $this->db->get();

        if( $query->num_rows() > 0 ):
            return $query->result();
        endif;
		
	}
	
	public function get_gallery_count(){
		
		$this->db->select('*');
		$this->db->from('restaurant_images');
		$this->db->where([ 'restaurant_id' => RESTAURANT_ID, 'type' => 1, 'status' => 1]);
		$query = $this->db->get();

        if( $query->num_rows() > 0 ):
            return $query->num_rows();
        endif;
		
	}
	
	public function get_schedule(){
		
		$this->Chefonline_DB->select('*');
		$this->Chefonline_DB->from('restaurant_schedule');
		$this->Chefonline_DB->where([ 'restaurant_id' => RESTAURANT_ID, 'type' => 3, 'status' => 1 ]);
		$query = $this->Chefonline_DB->get();

        if( $query->num_rows() > 0 ):
            return $query->result();
        endif;
		
	}
	
	public function get_meta_des_settings(){
		
		$this->db->select('*');
		$this->db->from('settings s');
		$this->db->where("(s.restaurant_id= ".RESTAURANT_ID." AND (s.key_flag='site_title' OR s.key_flag='meta_description'))", NULL, FALSE);
		$query = $this->db->get();
		
		$arr = [];
        if( $query->num_rows() > 0 ):

			foreach ($query->result() as $key => $result) :
			
				if ($result->key_flag == 'site_title') :
					$arr[$key]['restaurant_id'] = $result->restaurant_id;
					$arr[$key]['setting_id'] 	= $result->setting_id;
					$arr[$key]['key_flag'] 		= $result->key_flag;
					$arr[$key]['key_value'] 	= $result->key_value;
				endif;
				
				if ($result->key_flag == 'meta_description') :
					$homeDescription = self::get_home_meta_descrition($result->restaurant_id);
					$arr[$key]['restaurant_id'] = $result->restaurant_id;
					$arr[$key]['setting_id'] 	= $result->setting_id;
					$arr[$key]['key_flag'] 		= $result->key_flag;
					$arr[$key]['key_value'] 	= $homeDescription->content;
				endif;
				
			endforeach;
            
        endif;
		
		return $arr;
		
	}
	
	public function get_home_meta_descrition($rest_id){
		
		$this->db->select('*');
		$this->db->from('meta_field');
		$this->db->where([ 'restaurant_id' => $rest_id, 'page_id' => 0 ]);
		$query = $this->db->get();

        if( $query->num_rows() > 0 ):
            return $query->row();
        endif;
		
	}
	
	public function get_other_meta_des_cms_page(){
		
		$this->db->select('cp.id, cp.restaurant_id,cp.cms_page_title, cp.page_heading, cp.page_heading_h2, cp.seo_page_title, cp.page_url, cp.cms_meta_tag, cp.cms_meta_desc, cp.cms_content, cp.status,mf.id as meta_field_id, mf.page_id, mf.name, mf.content');
		$this->db->from('cms_page cp');
		$this->db->where(['cp.restaurant_id' => RESTAURANT_ID, 'cp.status' => 1]);
		$this->db->join('meta_field mf', 'cp.id = mf.page_id', 'left');
		$query = $this->db->get();
		//echo $this->db->last_query();exit;
		
        if( $query->num_rows() > 0 ):
            return $query->result();
        endif;
		
	}

}