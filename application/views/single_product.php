
        
        <!--Body Content-->
        <div id="page-content">
            <!--MainContent-->
            <div id="MainContent" class="main-content" role="main">
                <!--Breadcrumb-->
                <div class="bredcrumbWrap">
                    <div class="container breadcrumbs">
                        <a href="" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span><?php echo $product->name; ?></span>
                    </div>
                </div>
                <!--End Breadcrumb-->
                
                <div id="ProductSection-product-template" class="product-template__container prstyle1 container">
                    <!--product-single-->
                    <div class="product-single">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-details-img">
                                    
                                    <div class="zoompro-wrap product-zoom-right pl-20">
                                        <div class="zoompro-span" id="product_img">
                                            <img class="zoompro blur-up lazyload" data-zoom-image="<?php echo base_url(); ?>uploads/<?php echo $product->image; ?>" alt="" src="<?php echo base_url(); ?>uploads/<?php echo $product->image; ?>" />
                                        </div>
                                        <div class="product-labels"><span class="lbl on-sale">Sale</span><span class="lbl pr-label1">new</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product-single__meta">
                                        <h1 class="product-single__title"><?php echo $product->name; ?></h1>
                                        <div class="product-nav clearfix">					
                                            <a href="#" class="next" title="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="prInfoRow">
                                            <div class="product-stock"> <span class="instock ">In Stock</span></div>
                                            <div class="product-sku">CODE: <span class="variant-sku"><?php echo $product->product_id; ?></span></div>
                                            <div class="product-review"><a class="reviewLink" href="#tab2"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><span class="spr-badge-caption">6 reviews</span></a></div>
                                        </div>
                                        <p class="product-single__price product-single__price-product-template">
                                            <span class="visually-hidden">Regular price</span>
                                            <s id="ComparePrice-product-template"><span class="money">LKR <?php echo ($product->price)*110/100; ?></span></s>
                                            <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                                <span id="ProductPrice-product-template"><span class="money">LKR <?php echo $product->price; ?></span></span>
                                            </span>
                                            <span class="discount-badge"> <span class="devider">|</span>&nbsp;
                                                <span>You Save</span>
                                                <span id="SaveAmount-product-template" class="product-single__save-amount">
                                                <span class="money">LKR <?php echo ($product->price)*110/100 - $product->price; ?></span>
                                                </span>
                                                <span class="off">(<span>10</span>%)</span>
                                            </span>  
                                        </p>
                                        <div class="orderMsg" data-user="23" data-time="24">
                                            <img src="<?php echo base_url(); ?>assets/images/order-icon.jpg" alt="" /> <strong class="items">5</strong> sold in last <strong class="time">26</strong> hours</div>
                                        </div>
                                    <div class="product-single__description rte">
                                        <ul>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                            <li>Sed ut perspiciatis unde omnis iste natus error sit</li>
                                            <li>Neque porro quisquam est qui dolorem ipsum quia dolor</li>
                                            <li>Lorem Ipsum is not simply random text.</li>
                                        </ul>
                                        <p><?php echo $product->description; ?></p>
                                    </div>
                                    <div id="quantity_message">Hurry! Only  <span class="items">4</span>  left in stock.</div>
                                    <form method="post" action="http://annimexweb.com/cart/add" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
                                        <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                            <div class="product-form__item">
                                              <label class="header">Color:</label>
                                                <?php
                                                    $CI =& get_instance();
                                                    foreach ($colors as $clr) {
                                                        $color = $CI->Home_model->color_code($clr->color);
                                                        
                                                        ?>
                                                        <div data-value="<?php echo $color->id; ?>" class="swatch-element color <?php echo $color->id; ?> available">
                                                            <input onclick="select_color(<?php echo $color->id; ?>,<?php echo $product->id; ?>)" class="swatchInput" id="swatch-0-<?php echo $color->id; ?>" type="radio" name="option-0" value="<?php echo $color->id; ?>">
                                                            <label class="swatchLbl color small" for="swatch-0-<?php echo $color->id; ?>" style="background-color:<?php echo $color->hex; ?>;" title="Black"></label>
                                                        </div>
                                                        <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                            <div class="product-form__item">
                                              <label class="header">Size:</label>

                                                <?php
                                                    foreach ($sizes as $size) {
                                                            $sz = $CI->Home_model->size($size->size);
                                                        
                                                        ?>
                                                            <div data-value="<?php echo $sz->size; ?>" class="swatch-element <?php echo $sz->size; ?> available">
                                                                <input class="swatchInput" id="swatch-1-<?php echo $sz->size; ?>" type="radio" name="option-1" value="<?php echo $sz->size; ?>">
                                                                <label class="swatchLbl medium rectangle" for="swatch-1-<?php echo $sz->size; ?>" title="<?php echo $sz->size; ?>"><?php echo $sz->size; ?></label>
                                                            </div>
                                                        <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <!-- Product Action -->
                                        <div class="product-action clearfix">
                                            <div class="product-form__item--quantity">
                                                <div class="wrapQtyBtn">
                                                    <div class="qtyField">
                                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                        <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>                                
                                            <div class="product-form__item--submit">
                                                <button type="button" name="add" class="btn product-form__cart-submit">
                                                    <span>Add to cart</span>
                                                </button>
                                            </div>
                                            <div class="shopify-payment-button" data-shopify="payment-button">
                                                <button type="button" class="shopify-payment-button__button shopify-payment-button__button--unbranded">Buy it now</button>
                                            </div>
                                        </div>
                                        <!-- End Product Action -->
                                    </form>
                                   
                                    <p id="freeShipMsg" class="freeShipMsg" data-price="199"><i class="fa fa-truck" aria-hidden="true"></i> GETTING CLOSER! ONLY <b class="freeShip"><span class="money" data-currency-usd="$199.00" data-currency="USD">$199.00</span></b> AWAY FROM <b>FREE SHIPPING!</b></p>
                                    <p class="shippingMsg"><i class="fa fa-clock-o" aria-hidden="true"></i> ESTIMATED DELIVERY BETWEEN <b id="fromDate">Wed. May 1</b> and <b id="toDate">Tue. May 7</b>.</p>
                                    <div class="userViewMsg" data-user="20" data-time="11000"><i class="fa fa-users" aria-hidden="true"></i> <strong class="uersView">14</strong> PEOPLE ARE LOOKING FOR THIS PRODUCT</div>
                                </div>
                        </div>
                    </div>
                    <!--End-product-single-->
                    <!--Product Fearure-->
                    <div class="prFeatures">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature">
                                <img src="<?php echo base_url(); ?>assets/images/credit-card.png" alt="Safe Payment" title="Safe Payment" />
                                <div class="details"><h3>Safe Payment</h3>Pay with the world's most payment methods.</div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature">
                                <img src="<?php echo base_url(); ?>assets/images/shield.png" alt="Confidence" title="Confidence" />
                                <div class="details"><h3>Confidence</h3>Protection covers your purchase and personal data.</div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature">
                                <img src="<?php echo base_url(); ?>assets/images/worldwide.png" alt="Worldwide Delivery" title="Worldwide Delivery" />
                                <div class="details"><h3>Worldwide Delivery</h3>FREE &amp; fast shipping to over 200+ countries &amp; regions.</div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature">
                                <img src="<?php echo base_url(); ?>assets/images/phone-call.png" alt="Hotline" title="Hotline" />
                                <div class="details"><h3>Hotline</h3>Talk to help line for your question on 4141 456 789, 4125 666 888</div>
                            </div>
                        </div>
                    </div>
                    <!--End Product Fearure-->
                    <!--Product Tabs-->
                    <div class="tabs-listing">
                            <div id="tab2" class="tab-content">
                                <div id="shopify-product-reviews">
                                    <div class="spr-container">
                                        <div class="spr-header clearfix">
                                            <div class="spr-summary">
                                                <span class="product-review"><a class="reviewLink"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i> </a><span class="spr-summary-actions-togglereviews">Based on 6 reviews456</span></span>
                                                <span class="spr-summary-actions">
                                                    <a href="#" class="spr-summary-actions-newreview btn">Write a review</a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="spr-content">
                                            <div class="spr-form clearfix">
                                                <form method="post" action="#" id="new-review-form" class="new-review-form">
                                                    <h3 class="spr-form-title">Write a review</h3>
                                                    <fieldset class="spr-form-contact">
                                                        <div class="spr-form-contact-name">
                                                          <label class="spr-form-label" for="review_author_10508262282">Name</label>
                                                          <input class="spr-form-input spr-form-input-text " id="review_author_10508262282" type="text" name="review[author]" value="" placeholder="Enter your name">
                                                        </div>
                                                        <div class="spr-form-contact-email">
                                                          <label class="spr-form-label" for="review_email_10508262282">Email</label>
                                                          <input class="spr-form-input spr-form-input-email " id="review_email_10508262282" type="email" name="review[email]" value="" placeholder="john.smith@example.com">
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="spr-form-review">
                                                      <div class="spr-form-review-rating">
                                                        <label class="spr-form-label">Rating</label>
                                                        <div class="spr-form-input spr-starrating">
                                                          <div class="product-review"><a class="reviewLink" href="#"><i class="fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></a></div>
                                                        </div>
                                                      </div>
                                                
                                                      <div class="spr-form-review-title">
                                                        <label class="spr-form-label" for="review_title_10508262282">Review Title</label>
                                                        <input class="spr-form-input spr-form-input-text " id="review_title_10508262282" type="text" name="review[title]" value="" placeholder="Give your review a title">
                                                      </div>
                                                
                                                      <div class="spr-form-review-body">
                                                        <label class="spr-form-label" for="review_body_10508262282">Body of Review <span class="spr-form-review-body-charactersremaining">(1500)</span></label>
                                                        <div class="spr-form-input">
                                                          <textarea class="spr-form-input spr-form-input-textarea " id="review_body_10508262282" data-product-id="10508262282" name="review[body]" rows="10" placeholder="Write your comments here"></textarea>
                                                        </div>
                                                      </div>
                                                    </fieldset>
                                                    <fieldset class="spr-form-actions">
                                                        <input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" value="Submit Review">
                                                    </fieldset>
                                                </form>
                                            </div>
                                            <div class="spr-reviews">
                                                <div class="spr-review">
                                                    <div class="spr-review-header">
                                                        <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                        <h3 class="spr-review-header-title">Lorem ipsum dolor sit amet</h3>
                                                        <span class="spr-review-header-byline"><strong>dsacc</strong> on <strong>Apr 09, 2019</strong></span>
                                                    </div>
                                                    <div class="spr-review-content">
                                                        <p class="spr-review-content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                    </div>
                                                </div>
                                                <div class="spr-review">
                                                  <div class="spr-review-header">
                                                    <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                    <h3 class="spr-review-header-title">Lorem Ipsum is simply dummy text of the printing</h3>
                                                    <span class="spr-review-header-byline"><strong>larrydude</strong> on <strong>Dec 30, 2018</strong></span>
                                                  </div>
                                            
                                                  <div class="spr-review-content">
                                                    <p class="spr-review-content-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                                    </p>
                                                  </div>
                                                </div>
                                                <div class="spr-review">
                                                  <div class="spr-review-header">
                                                    <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                    <h3 class="spr-review-header-title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</h3>
                                                    <span class="spr-review-header-byline"><strong>quoctri1905</strong> on <strong>Dec 30, 2018</strong></span>
                                                  </div>
                                            
                                                  <div class="spr-review-content">
                                                    <p class="spr-review-content-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.<br>
                                                    <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <!--End Product Tabs-->
                    
                    <!--Related Product Slider-->
                    <div class="related-product grid-products">
                        <header class="section-header">
                            <h2 class="section-header__title text-center h2"><span>Related Products</span></h2>
                            <p class="sub-heading">You can stop autoplay, increase/decrease aniamtion speed and number of grid to show and products from store admin.</p>
                        </header>
                        <div class="productPageSlider">
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image1.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image1.jpg" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image1-1.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image1-1.jpg" alt="image" title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->
        
                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="#">Edna Dress</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="old-price">$500.00</span>
                                        <span class="price">$600.00</span>
                                    </div>
                                    <!-- End product price -->
                                    
                                    <div class="product-review">
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                    </div>
                                    <!-- Variant -->
                                    <ul class="swatches">
                                        <li class="swatch medium rounded"><img src="<?php echo base_url(); ?>assets/images/product-images/variant1.jpg" alt="image" /></li>
                                        <li class="swatch medium rounded"><img src="<?php echo base_url(); ?>assets/images/product-images/variant2.jpg" alt="image" /></li>
                                        <li class="swatch medium rounded"><img src="<?php echo base_url(); ?>assets/images/product-images/variant3.jpg" alt="image" /></li>
                                        <li class="swatch medium rounded"><img src="<?php echo base_url(); ?>assets/images/product-images/variant4.jpg" alt="image" /></li>
                                        <li class="swatch medium rounded"><img src="<?php echo base_url(); ?>assets/images/product-images/variant5.jpg" alt="image" /></li>
                                        <li class="swatch medium rounded"><img src="<?php echo base_url(); ?>assets/images/product-images/variant6.jpg" alt="image" /></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image2.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image2.jpg" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image2-1.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image2-1.jpg" alt="image" title="product">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->
        
                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->
        
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="#">Elastic Waist Dress</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$748.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <div class="product-review">
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                    </div>
                                    <!-- Variant -->
                                    <ul class="swatches">
                                        <li class="swatch medium rounded"><img src="<?php echo base_url(); ?>assets/images/product-images/variant2-1.jpg" alt="image" /></li>
                                        <li class="swatch medium rounded"><img src="<?php echo base_url(); ?>assets/images/product-images/variant2-2.jpg" alt="image" /></li>
                                        <li class="swatch medium rounded"><img src="<?php echo base_url(); ?>assets/images/product-images/variant2-3.jpg" alt="image" /></li>
                                        <li class="swatch medium rounded"><img src="<?php echo base_url(); ?>assets/images/product-images/variant2-4.jpg" alt="image" /></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image3.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image3.jpg" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image3-1.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image3-1.jpg" alt="image" title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels rectangular"><span class="lbl pr-label2">Hot</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->
        
                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->
        
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="#">3/4 Sleeve Kimono Dress</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$550.00</span>
                                    </div>
                                    <!-- End product price -->
                                    
                                    <div class="product-review">
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                    </div>
                                    <!-- Variant -->
                                    <ul class="swatches">
                                        <li class="swatch medium rounded"><img src="<?php echo base_url(); ?>assets/images/product-images/variant3-1.jpg" alt="image" /></li>
                                        <li class="swatch medium rounded"><img src="<?php echo base_url(); ?>assets/images/product-images/variant3-2.jpg" alt="image" /></li>
                                        <li class="swatch medium rounded"><img src="<?php echo base_url(); ?>assets/images/product-images/variant3-3.jpg" alt="image" /></li>
                                        <li class="swatch medium rounded"><img src="<?php echo base_url(); ?>assets/images/product-images/variant3-4.jpg" alt="image" /></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image4.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image4.jpg" alt="image" title="product" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image4-1.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image4-1.jpg" alt="image" title="product" />
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->
        
                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->
        
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="#">Cape Dress</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="old-price">$900.00</span>
                                        <span class="price">$788.00</span>
                                    </div>
                                    <!-- End product price -->
                                    
                                    <div class="product-review">
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                    </div>
                                    <!-- Variant -->
                                    <ul class="swatches">
                                        <li class="swatch medium rounded"><img src="<?php echo base_url(); ?>assets/images/product-images/variant4-1.jpg" alt="image" /></li>
                                        <li class="swatch medium rounded"><img src="<?php echo base_url(); ?>assets/images/product-images/variant4-2.jpg" alt="image" /></li>
                                        <li class="swatch medium rounded"><img src="<?php echo base_url(); ?>assets/images/product-images/variant4-3.jpg" alt="image" /></li>
                                        <li class="swatch medium rounded"><img src="<?php echo base_url(); ?>assets/images/product-images/variant4-4.jpg" alt="image" /></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image5.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image5.jpg" alt="image" title="product" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image5-1.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image5-1.jpg" alt="image" title="product" />
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->
        
                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->
        
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="#">Paper Dress</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$550.00</span>
                                    </div>
                                    <!-- End product price -->
                                    
                                    <div class="product-review">
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                    </div>
                                    <!-- Variant -->
                                    <ul class="swatches">
                                        <li class="swatch medium rounded"><img src="<?php echo base_url(); ?>assets/images/product-images/variant3-1.jpg" alt="image" /></li>
                                        <li class="swatch medium rounded"><img src="<?php echo base_url(); ?>assets/images/product-images/variant3-2.jpg" alt="image" /></li>
                                        <li class="swatch medium rounded"><img src="<?php echo base_url(); ?>assets/images/product-images/variant3-3.jpg" alt="image" /></li>
                                        <li class="swatch medium rounded"><img src="<?php echo base_url(); ?>assets/images/product-images/variant3-4.jpg" alt="image" /></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="#">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image6.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image6.jpg" alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image6-1.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image6-1.jpg" alt="image" title="product">
                                                        <!-- End hover image -->
                                                        <!-- product label -->
                                                        <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                                        <!-- End product label -->
                                                    </a>
                                                    <!-- end product image -->
            
                                                    <!-- Start product button -->
                                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                                    </form>
                                                    <div class="button-set">
                                                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                                                            <i class="icon anm anm-search-plus-r"></i>
                                                        </a>
                                                        <div class="wishlist-btn">
                                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                                <i class="icon anm anm-heart-l"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- end product button -->
                                                </div>
                                                <!-- end product image -->
            
                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product name -->
                                                    <div class="product-name">
                                                        <a href="#">Zipper Jacket</a>
                                                    </div>
                                                    <!-- End product name -->
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price">$788.00</span>
                                                    </div>
                                                    <!-- End product price -->
                                                    
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                            <div class="col-12 item">
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="#">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image7.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image7.jpg" alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image7-1.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image7-1.jpg" alt="image" title="product">
                                                        <!-- End hover image -->
                                                    </a>
                                                    <!-- end product image -->
            
                                                    <!-- Start product button -->
                                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                                    </form>
                                                    <div class="button-set">
                                                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                                                            <i class="icon anm anm-search-plus-r"></i>
                                                        </a>
                                                        <div class="wishlist-btn">
                                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                                <i class="icon anm anm-heart-l"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- end product button -->
                                                </div>
                                                <!-- end product image -->
            
                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product name -->
                                                    <div class="product-name">
                                                        <a href="#">Zipper Jacket</a>
                                                    </div>
                                                    <!-- End product name -->
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price">$748.00</span>
                                                    </div>
                                                    <!-- End product price -->
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                        </div>
                        </div>
                    <!--End Related Product Slider-->
                    
                    <!--Recently Product Slider-->
                    <div class="related-product grid-products">
                            <header class="section-header">
                                <h2 class="section-header__title text-center h2"><span>Recently Viewed Product</span></h2>
                                <p class="sub-heading">You can manage this section from store admin as describe in above section</p>
                            </header>
                            <div class="productPageSlider">
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image6.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image6.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image6-1.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image6-1.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">Zipper Jacket</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image7.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image7.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image7-1.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image7-1.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">Zipper Jacket</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image8.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image8.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image8-1.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image8-1.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                    </div>

                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">Workers Shirt Jacket</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image9.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image9.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image9-1.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image9-1.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">Watercolor Sport Jacket in Brown/Blue</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image10.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image10.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image10-1.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image10-1.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">Washed Wool Blazer</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image13.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image13.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image13-1.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image13-1.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                    </div>

                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">Ashton Necklace</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image14.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image14.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image14-1.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image14-1.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">Ara Ring</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image15.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image15.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/product-images/product-image15-1.jpg" src="<?php echo base_url(); ?>assets/images/product-images/product-image15-1.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">Ara Ring</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                        </div>
                    <!--End Recently Product Slider-->
                    </div>
                <!--#ProductSection-product-template-->
            </div>
            <!--MainContent-->
        </div>
    	<!--End Body Content-->
    
    <!--Footer-->
    <footer id="footer">
        <div class="newsletter-section">
            <div class="container">
                <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7 w-100 d-flex justify-content-start align-items-center">
                            <div class="display-table">
                                <div class="display-table-cell footer-newsletter">
                                    <div class="section-header text-center">
                                        <label class="h2"><span>sign up for </span>newsletter</label>
                                    </div>
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                                            <span class="input-group__btn">
                                                <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe"><span class="newsletter__submit-text--large">Subscribe</span></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 d-flex justify-content-end align-items-center">
                            <div class="footer-social">
                                <ul class="list--inline site-footer__social-icons social-icons">
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i class="icon icon-pinterest"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Tumblr"><i class="icon icon-tumblr-alt"></i> <span class="icon__fallback-text">Tumblr</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Vimeo"><i class="icon icon-vimeo-alt"></i> <span class="icon__fallback-text">Vimeo</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>    
        </div>
        <div class="site-footer">
        	<div class="container">
     			<!--Footer Links-->
            	<div class="footer-top">
                	<div class="row">
                    	<div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Quick Shop</h4>
                            <ul>
                            	<li><a href="#">Women</a></li>
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Kids</a></li>
                                <li><a href="#">Sportswear</a></li>
                                <li><a href="#">Sale</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Informations</h4>
                            <ul>
                            	<li><a href="#">About us</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Terms &amp; condition</a></li>
                                <li><a href="#">My Account</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Customer Services</h4>
                            <ul>
                            	<li><a href="#">Request Personal Data</a></li>
                                <li><a href="#">FAQ's</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Orders and Returns</a></li>
                                <li><a href="#">Support Center</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                        	<h4 class="h4">Contact Us</h4>
                            <ul class="addressFooter">
                            	<li><i class="icon anm anm-map-marker-al"></i><p>55 Gallaxy Enque,<br>2568 steet, 23568 NY</p></li>
                                <li class="phone"><i class="icon anm anm-phone-s"></i><p>(440) 000 000 0000</p></li>
                                <li class="email"><i class="icon anm anm-envelope-l"></i><p>sales@yousite.com</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Footer Links-->
                <hr>
                <div class="footer-bottom">
                	<div class="row">
                    	<!--Footer Copyright-->
	                	<div class="col-12 col-sm-12 col-md-6 col-lg-6 order-1 order-md-0 order-lg-0 order-sm-1 copyright text-sm-center text-md-left text-lg-left"><span></span> <a href="templateshub.net">Templates Hub</a></div>
                        <!--End Footer Copyright-->
                        <!--Footer Payment Icon-->
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 order-0 order-md-1 order-lg-1 order-sm-0 payment-icons text-right text-md-center">
                        	<ul class="payment-icons list--inline">
                        		<li><i class="icon fa fa-cc-visa" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-mastercard" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-discover" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-paypal" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-amex" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-credit-card" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                        <!--End Footer Payment Icon-->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Footer-->
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->
    
     <!-- Including Jquery -->
     <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-3.3.1.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/vendor/jquery.cookie.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-3.6.0.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/vendor/wow.min.js"></script>
     <!-- Including Javascript -->
     <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/lazysizes.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
     <!-- Photoswipe Gallery -->
     <script src="<?php echo base_url(); ?>assets/js/vendor/photoswipe.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/vendor/photoswipe-ui-default.min.js"></script>
