<style>
    .header {
        top: 40px;
        width: 100%;
        position: sticky;
        background: transparent;
        backdrop-filter: blur(5px);
    }
</style>



    <div class="header-wrap classicHeader animated d-flex">
        <div class="header"> 
            <div class="container-fluid">        
                <div class="row align-items-center">
                    <!--Desktop Logo-->
                    <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                        <a href="index.html">
                            <img src="<?php echo base_url(); ?>assets/dist/img/pwlogo.png" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                        </a>
                    </div>
                    <!--End Desktop Logo-->
                    <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                        <div class="d-block d-lg-none">
                            <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                                <i class="icon anm anm-times-l"></i>
                                <i class="anm anm-bars-r"></i>
                            </button>
                        </div>
                        <!--Desktop Menu-->
                        <nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
                            <ul id="siteNav" class="site-nav medium center hidearrow">
                                <li class="lvl1 parent megamenu"><a href="<?php echo base_url(); ?>Home">Home <i class="anm anm-angle-down-l"></i></a></li>
                                <li class="lvl1 parent dropdown"><a href="<?php echo base_url(); ?>Shop">Shop <i class="anm anm-angle-down-l"></i></a>
                                    <!-- <ul class="dropdown">
                                        <li><a href="checkout.html" class="site-nav">Checkout</a></li>
                                        <li><a href="about-us.html" class="site-nav">About Us <span class="lbl nm_label1">New</span> </a></li>
                                        <li><a href="contact-us.html" class="site-nav">Contact Us</a></li>
                                        <li><a href="faqs.html" class="site-nav">FAQs</a></li>
                                    </ul> -->
                                </li>
                                <li class="lvl1 parent megamenu"><a href="<?php echo base_url(); ?>Home/About_us">About us <i class="anm anm-angle-down-l"></i></a></li>
                            </ul>
                        </nav>
                        <!--End Desktop Menu-->
                    </div>

                    <!--Mobile Logo-->
                    <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                        <div class="logo">
                            <a href="index.html">
                                <img src="<?php echo base_url(); ?>assets/images/logo.svg" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                            </a>
                        </div>
                    </div>
                    <!--Mobile Logo-->

                    <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                        <div class="site-cart">
                            <a href="#;" class="site-header__cart" title="Cart">
                                <i class="icon anm anm-bag-l"></i>
                                <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">2</span>
                            </a>
                            <!-- <div id="header-cart" class="block block-cart" style="display: block;">
                        	<ul class="mini-products-list">
                                <li class="item">
                                	<a class="product-image" href="#">
                                    	<img src="assets/images/product-images/cape-dress-1.jpg" alt="3/4 Sleeve Kimono Dress" title="">
                                    </a>
                                    <div class="product-details">
                                    	<a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                        <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                        <a class="pName" href="cart.html">Sleeve Kimono Dress</a>
                                        <div class="variant-cart">Black / XL</div>
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                            	<span class="label">Qty:</span>
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="priceRow">
                                        	<div class="product-price">
                                            	<span class="money">$59.00</span>
                                            </div>
                                         </div>
									</div>
                                </li>
                                <li class="item">
                                	<a class="product-image" href="#">
                                    	<img src="assets/images/product-images/cape-dress-2.jpg" alt="Elastic Waist Dress - Black / Small" title="">
                                    </a>
                                    <div class="product-details">
                                    	<a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                        <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                        <a class="pName" href="cart.html">Elastic Waist Dress</a>
                                        <div class="variant-cart">Gray / XXL</div>
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                            	<span class="label">Qty:</span>
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                       	<div class="priceRow">
                                            <div class="product-price">
                                                <span class="money">$99.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="total">
                            	<div class="total-in">
                                	<span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">$748.00</span></span>
                                </div>
                                 <div class="buttonSet text-center">
                                    <a href="cart.html" class="btn btn-secondary btn--small">View Cart</a>
                                    <a href="checkout.html" class="btn btn-secondary btn--small">Checkout</a>
                                </div>
                            </div>
                        </div> -->
                            
                        </div>
                        <div class="site-header__search">
                            <button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <!--End Header-->