<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WebProduct extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function show_image(){
    $pro_id = $this->input->post('pro_id');
    $clr_id = $this->input->post('clr_id');

    $varient = $this->WebProduct_model->get_var_img($pro_id,$clr_id);

    ?>
    <img class="zoompro blur-up lazyload" data-zoom-image="<?php echo base_url(); ?>uploads/<?php echo $varient->image; ?>" alt="" src="<?php echo base_url(); ?>uploads/<?php echo $varient->image; ?>" />
    <?php
  }

}


/* End of file WebProduct.php */
/* Location: ./application/controllers/WebProduct.php */