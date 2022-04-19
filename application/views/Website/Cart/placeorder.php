
<?php
$CI =& get_instance();
    
    ?>

<div id="page-content" style="padding-top: 100px;">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Order ID:</h1><?php echo $CI->Cart_model->place_order($order_id->order_id); ?></div>
      		</div>
		</div>
        <!--End Page Title-->
        
       
        	<div class="row">
                
            <div class="order-button-payment">
                <a href="<?php echo base_url(); ?>Home" class="btn" style="justify-content: center;" value="" type="submit">Go back</a>
            </div>
            </div>

            