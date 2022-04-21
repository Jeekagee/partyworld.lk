
<?php
$CI =& get_instance();
    ?>

<div id="page-content" style="padding-top: 100px;">
    	<!--Page Title-->
    	<div class="page section-header text-center">
		<div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;">Orders Successfully!!</div>
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Order ID: <?php echo $CI->Cart_model->placeorder();?></h1>
				 
				</div>
				<div class="wrapper"><h1 class="page-width">Email ID: <?php echo $CI->Cart_model->customermail();?></h1>
				</div>
      		</div>
		</div>
        <!--End Page Title-->
            
            <!-- <div class="btn" style="display: inline-block;">
                <a href="<?php echo base_url(); ?>Home" value="" type="submit">Go back</a>
			
            </div> -->
			
			<div class="text-center">
				<a href="<?php echo base_url(); ?>Home" class ="btn btn-primary" type="submit">Go Back</a>
				<a href="" class ="btn btn-primary" type="submit">Send Mail</a>
			</div>
           

            