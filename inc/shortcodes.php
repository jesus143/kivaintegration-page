<?php 


function kip_page_func() { 


  $kip_kiva = new KIP\KIP_Kiva();







 
// $partner = wp_remote_get( 'https://api.kivaws.org/v1/lenders/newest.json' ); 
// $partners = json_decode($partner['body']);  
// print "<pre>";
//   print_r($partners->lenders); 
// print "</pre>"; 
// http://www.kiva.org/img/s300/2436621.jpg 

// $lenders = 'http://api.kivaws.org/v1/loans/1234668.json';
// $args = array(
//   'headers' => array( "Content-type" => "application/json" )
// );

// $response = wp_remote_get( $loans,$args ); 
// $data = json_decode($response['body']);

// print "<pre>";
//   print_r($data); 
// print "</pre>"; 

// exit;
//  
	 ?>

 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php print kip_plugin_url; ?>/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <script src="//code.jquery.com/jquery-1.12.4.js"> </script>  
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"> </script>   
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" /> 

   
</head>
<body> 
<div >
  <div class="text-center">
    <h2 class="kip-charity-red">Charity</h2> 
    <hr/> 
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <br/>
  </div> 
  <ul class="nav nav-pills">
    <li class="active"> 
   
      <a data-toggle="pill" href="#home" class="kip_tab" id="kip_tab" >
         <img src="<?php print kip_plugin_url . '/images/Archive/micro_finance.png' ?>" style="height:88px;" /> <br>
        Micro Finance
      </a> 
 
    </li>
    <li>
      <a data-toggle="pill" href="#menu1" class="kip_tab" id="kip_tab" >
        <img src="<?php print kip_plugin_url . '/images/Archive/clean_water.png' ?>" style="height:88px;" />  <br>
        Clean Water
      </a>
      </li>
    <li><a data-toggle="pill" href="#menu2" class="kip_tab" id="kip_tab" >
     <img src="<?php print kip_plugin_url . '/images/Archive/your_charity.png' ?>" style="height:88px;" /> <br>
      Your Charity
      </a></li> 
  </ul> 
  <div class="tab-content">
    <div id="home" class="tab-pane active"> 
      <table id="kip-datatable" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th class="kip-hide" style="width: 100px;" >Profile</th>
                <th class="kip-hide"  >Description</th>
                <th class="kip-hide"  >Fund</th> 
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th class="kip-hide"  >Profile</th>
                <th class="kip-hide"  >Description</th>
                <th class="kip-hide"  >Fund</th> 
            </tr>
        </tfoot>
        <tbody> 
        <?php foreach( $kip_kiva->getAllPostFromKivaIntegration() as $lender) {    ?>
          <tr>
              <td> 
                 <!-- <img src="http://www.bccollege.co.uk/assets/images/Manager.png" class="kip-profile" />  --> 
                 <?php print $kip_kiva->getProfilePic($lender->id); ?> 
            </td>
              <td>  
                <p class="kip-charity-red"> Name: <?php echo $kip_kiva->getName($lender->id); ?></p>
                <p class="kip-charity-red"> Bussiness:  <?php echo $kip_kiva->getBussinessName($lender->id); ?> </p>
                <p><?php echo $kip_kiva->getDescription($lender->id); ?></p> 
              </td>
              <td> 
                <p>Fund</p>
                <p><?php echo $kip_kiva->getFund($lender->id); ?> </p> 
              </td>  
		      </tr>
		<?php } ?>
        </tbody>
    </table>       
    </div>

    <div id="menu1" class="tab-pane fade">
    	<br><br>
       <?php echo get_option('kip_clean_water_message'); ?>
    </div> 
    <div id="menu2" class="tab-pane fade">
    <br><br>
           <h3>Coming soon!</h3>
    </div>  
  </div>
</div> 


 <script>
 	var jq = $.noConflict();
	jq(document).ready(function() {

    $("#kip_tab").click(function(){
        jq("#home").removeClass('show');
        jq("#menu1").removeClass('show');
        jq("#menu2").removeClass('show');  
      })

		  console.log("plugin page loaded kivaintegration page.");
	    jq('#kip-datatable').DataTable({
	       "pageLength": 8
	    });


	} ); 
  </script>
</body>
</html>
	 <?php 
}
