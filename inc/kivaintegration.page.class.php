<?php 


class KivaIntegrationPageClass {
	function __construct() {

	}

	public function exec() 
	{ 
			add_shortcode('kip_page', 'kip_page_func');   
	} 


}