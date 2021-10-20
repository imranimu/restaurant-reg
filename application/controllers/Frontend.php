<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {
	
	private $getMetaDesSettings;
	private $getOtherCMSPages;
	public function __construct(){

		parent::__construct();
		$this->load->model('Frontend_model');
		$this->load->model('Common_model');
		$this->getMetaDesSettings = $this->Frontend_model->get_meta_des_settings();
		$this->getOtherCMSPages = $this->Frontend_model->get_other_meta_des_cms_page();
	}

	/**
	 * @return mixed 
	 */
	public function index() {
		
		$restaurant_full_schedule = $this->Frontend_model->get_schedule();
		$scheduleArr = [];
		$days   	 = [ 1 => "Monday", 2 => "Tuesday", 3 => "Wednesday", 4 => "Thursday", 5 => "Friday", 6 => "Saturday", 7 => "Sunday" ];
		foreach ( $restaurant_full_schedule as $key => $restScheduleValue ):
			$scheduleArr[] = '{ "@type": "OpeningHoursSpecification", "dayOfWeek": [ "'.$days[$restScheduleValue->weekday].'" ], "opens": "'.date('g:i A', $restScheduleValue->opening_time).'", "closes": "'.date('g:i A', $restScheduleValue->closing_time).'" }';
		endforeach;	
		
		$data['page_title']     	= '';
		$data['page_description']   = '';
		
		if (!empty($this->getMetaDesSettings)) :
			foreach ($this->getMetaDesSettings as $getMetaDesSetting) :
				$data['page_title']     	.= $getMetaDesSetting['key_flag'] == 'site_title' ? $getMetaDesSetting['key_value'] : '';
				$data['page_description']   .= $getMetaDesSetting['key_flag'] == 'meta_description' ? $getMetaDesSetting['key_value'] : '';
			endforeach;
		endif;
		
		$data['scheduleArr']		= $scheduleArr;
		$data['main_content'] 		= 'frontend/home';
		$this->load->view('includes/template', $data);
	}
	
	public function gallery() {
		
        $pageNum    = 0;

        if( $this->uri->segment(2) != '' ):
            $pageNum = $this->uri->segment(2);
        endif;

        $totalRows 					= $this->Frontend_model->get_gallery_count();

        $config                     = [];
        $config["base_url"]         = base_url() . 'gallery/';
        $config["total_rows"]       = $totalRows;
        $config["per_page"]         = 10;
        $config['use_page_numbers'] = FALSE;
        $config['num_links']        = 8;
        $config['cur_tag_open']     = '&nbsp;<a class="current active">';
        $config['cur_tag_close']    = '</a>';
        $config['next_link']        = '<i class="fa fa-angle-double-right"></i>';
        $config['prev_link']        = '<i class="fa fa-angle-double-left"></i>';

        $this->pagination->initialize($config);
        $str_links                  = $this->pagination->create_links();
        $data["links"]              = explode('&nbsp;',$str_links );
		$data['get_gallerys'] 		= $this->Frontend_model->get_gallery($config["per_page"], $pageNum);
		
		$data['page_title']     	= '';
		$data['page_description']   = '';
		
		if (!empty($this->getOtherCMSPages)) :
			foreach ($this->getOtherCMSPages as $getOtherCMSPage) :
				$data['page_title']     	.= $getOtherCMSPage->page_url == 'gallery' ? $getOtherCMSPage->seo_page_title : '';
				$data['page_description']   .= $getOtherCMSPage->page_url == 'gallery' ? $getOtherCMSPage->content : '';
			endforeach;
		endif;
		
		$data['main_content'] 		= 'frontend/gallery';
		$this->load->view('includes/template', $data);
	}
	
	public function contact_us() {
		
		$data['page_title']     	= '';
		$data['page_description']   = '';
		
		if (!empty($this->getOtherCMSPages)) :
			foreach ($this->getOtherCMSPages as $getOtherCMSPage) :
				$data['page_title']     	.= $getOtherCMSPage->page_url == 'contact-us' ? $getOtherCMSPage->seo_page_title : '';
				$data['page_description']   .= $getOtherCMSPage->page_url == 'contact-us' ? $getOtherCMSPage->content : '';
			endforeach;
		endif;
		
		$data['main_content'] 		= 'frontend/contact_us';
		$this->load->view('includes/template', $data);
	}

	
	
	public function about() {
		$data['page_title']     	= '';
		$data['page_description']   = '';
		
		if (!empty($this->getOtherCMSPages)) :
			foreach ($this->getOtherCMSPages as $getOtherCMSPage) :
				$data['page_title']     	.= $getOtherCMSPage->page_url == 'about' ? $getOtherCMSPage->seo_page_title : '';
				$data['page_description']   .= $getOtherCMSPage->page_url == 'about' ? $getOtherCMSPage->content : '';
			endforeach;
		endif;
		
		$data['main_content'] 		= 'frontend/about';
		$this->load->view('includes/template', $data);
	}

	

}