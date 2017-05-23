<?php 


function kip_page_func() {
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
   
      <a data-toggle="pill" href="#home" class="kip_tab" >
         <img src="<?php print kip_plugin_url . '/images/Archive/micro_finance.png' ?>" style="height:88px;" /> 
        Micro Finance
      </a> 
 
    </li>
    <li>
      <a data-toggle="pill" href="#menu1" class="kip_tab" >
        <img src="<?php print kip_plugin_url . '/images/Archive/clean_water.png' ?>" style="height:88px;" /> 
        Clean Water
      </a>
      </li>
    <li><a data-toggle="pill" href="#menu2" class="kip_tab" >
     <img src="<?php print kip_plugin_url . '/images/Archive/your_charity.png' ?>" style="height:88px;" /> 
      Your Charity
      </a></li> 
  </ul> 
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active"> 
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
        <?php for($i=0; $i<20; $i++) {   ?>
          <tr>
              <td> 
                 <img src="http://www.bccollege.co.uk/assets/images/Manager.png" class="kip-profile" /> 
            </td>
              <td>  
                <p class="kip-charity-red"> Name: Jesus Erwin Suarez</p>
                <p class="kip-charity-red"> Bussiness: Elite Source</p>
                <p> This is the description for the specific task o this....</p> 
              </td>
              <td> 
                <p>Fund</p>
                <p>$ 2,000</p> 
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