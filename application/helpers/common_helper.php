<?php
class common {

    static function getGMapSettings(){
    	$ci = &get_instance();
        $ci->load->model('Frontend_model');
        return $ci->Frontend_model->get_g_map_settings();
    }
 
}

?>
