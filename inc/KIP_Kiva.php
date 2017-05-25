<?php  
namespace KIP; 

class KIP_Kiva { 

	function __construct() 
	{ 

		print "testing kiva class init...";
		//
	}  

	public function getAllPostFromKivaIntegration() 
	{
		$args = array(
			'numberposts' => 5,
			'category' => 0, 'orderby' => 'date',
			'order' => 'DESC', 'include' => array(),
			'exclude' => array(), 'meta_key' => '',
			'meta_value' =>'', 'post_type' => 'post',
			'suppress_filters' => true
		);

		return get_posts( $args );

		//		print "Test <Br><br><br>";
		//		print "Test";
		//		foreach($posts as $post) {
		//			print "<pre>";
		//			print_r($post);
		//			print "<pre>";
		//		}
		// $posts;
		// return all the post
	}


	public function getProfilePic($lender_id) 
	{  
		return '<img src="http://www.kiva.org/img/s300/' . $image_id . '.jpg" class="kip-profile" />';
	}

	public function getDescription($lender_id)
	{
		return 'Description, Description, Description'; 
	}

	public function getName($lender_id) 
	{
		return 'Jesus Erwin Suarez'; 
	}

	public function getBussinessName($lender_id) 
	{
		return 'bussiness leader'; 
	}

	public function getFund($lender_id) {
		return '$ 2,000'; 
	} 

}
