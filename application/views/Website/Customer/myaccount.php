<div id="page-content" style="padding-top: 100px;">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">My Account</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
            <div class="dashboard-upper-info">
            	<div class="row align-items-center no-gutters">
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="d-single-info">
                        <p class="user-name">Hello <span class="font-weight-600"><?php echo $this->session->username; ?></span></p>
                        
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="d-single-info">
                        <p>Need Assistance? Customer service at.</p>
                        <p>admin@yoursite.com.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="d-single-info">
                        <p>E-mail them at </p>
                        <p>support@yoursite.com</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-12">
                    <div class="d-single-info text-lg-center">
                        <a class="view-cart" href=""><i class="icon anm anm-bag-l"></i> View Cart</a>
                    </div>
                </div>
            </div>
	        </div>
            <div class="row margin-30px-bottom">
                <div class="col-xl-2 col-lg-2 col-md-12 md-margin-20px-bottom">
                    <!-- Nav tabs -->
                    <ul class="nav flex-column dashboard-list" role="tablist">
                        <li><a class="nav-link active show" data-toggle="tab" href="#orders">Orders</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#address">Addresses</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#account-details">Account details</a></li>
                        <li><a class="nav-link" href="<?php echo base_url(); ?>Customer/logout">logout</a></li>
                    </ul>
                    <!-- End Nav tabs -->
                </div>

                <div class="col-xs-10 col-lg-10 col-md-12">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard-content padding-30px-all md-padding-15px-all" style="">
                        <!-- Dashboard -->
                        <div id="dashboard" class="tab-pane fade">
                            <h3>Dashboard </h3>
                            <p>From your account dashboard. you can easily check &amp; view your
                                <a class="text-decoration-underline" href="#">recent orders</a>, manage your
                                <a class="text-decoration-underline" href="#">shipping and billing addresses</a> and
                                <a class="text-decoration-underline" href="#">edit your password and account details.</a>
                            </p>
                        </div>
                        <!-- End Dashboard -->

                        <!-- Orders -->
                        <div id="orders" class="product-order tab-pane fade active show">
                            <h3>Orders</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="alt-font">
                                        <tr>
                                            <th>Order</th>
                                            <th>Product</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Minerva Dress black</td>
                                            <td>March 04, 2018</td>
                                            <td>Processing</td>
                                            <td>$165.00 for 1 item </td>
                                            <td><a class="view" href="cart-variant1.html">view</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Sueded Cotton Pant in Khaki</td>
                                            <td>May 19, 2018</td>
                                            <td>Processing</td>
                                            <td>$150.00 for 1 item </td>
                                            <td><a class="view" href="cart-variant1.html">view</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End Orders -->

                        <!-- Downloads -->
                        <div id="downloads" class="product-order tab-pane fade">
                            <h3>Downloads</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Downloads remaining</th>
                                            <th>Expires</th>
                                            <th>Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Minerva Dress black</td>
                                            <td>July 22, 2018</td>
                                            <td>never</td>
                                            <td><a class="view" href="#">Click Here To Download Your File</a></td>
                                        </tr>
                                        <tr>
                                            <td>Sueded Cotton Pant in Khaki</td>
                                            <td>Dec 17, 2018</td>
                                            <td>never</td>
                                            <td><a class="view" href="#">Click Here To Download Your File</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End Downloads -->

                        <!-- Address -->
                        <div id="address" class="address tab-pane">
                            <p class="xs-fon-13 margin-10px-bottom">The following addresses will be used on the checkout page by default.</p>
                            <h4 class="billing-address">Billing address</h4>
                            <a class="view margin-5px-bottom" href="#">edit</a>
                            <p>No 40 Baria Sreet <br> 133/2 NewYork City, <br> NY, United States.</p>
                        </div>
                        <!-- End Address -->

                        <!-- Account Details -->
                        <div id="account-details" class="tab-pane fade">
                            <h3>Account details </h3>
                            <div class="account-login-form bg-light-gray padding-20px-all">
                                <form>
                                    <fieldset>
                                        <p>Already have an account? <a href="login.html"> Log in instead!</a></p>

                                        <div class="row">
                                            <div class="form-group">
                                                <div class="form-group margin-15px-top col-md-12 col-lg-12 col-xl-12">
                                                    <label class="control-label padding-10px-right"><strong>Title</strong></label>
                                                    <label class="radio-inline">
                                                        <input name="Mr" value="1" checked="checked" type="radio" class="padding-10px-right"> Mr. &nbsp;
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input name="Mrs" value="0" type="radio" class="padding-10px-right"> Mrs.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-firstname">First Name <span class="required-f">*</span></label>
                                                <input name="firstname" value="" id="input-firstname" class="form-control" type="text">
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-lastname">Last Name <span class="required-f">*</span></label>
                                                <input name="lastname" value="" id="input-lastname" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-email">E-Mail <span class="required-f">*</span></label>
                                                <input name="email" value="" id="input-email" class="form-control" type="email">
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-password">Password <span class="required-f">*</span></label>
                                                <input name="password" value="" id="input-password" class="form-control" type="password">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label for="input-telephone">Telephone <span class="required-f">*</span></label>
                                                <input name="telephone" value="" id="input-telephone" class="form-control" type="tel">
                                            </div>
                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                <label>Birthdate <span class="required-f">*</span></label>
                                                <input name="birthdate" max="3000-12-31" min="1000-01-01" class="form-control" type="date">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 col-lg-12 col-xl-12 required">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" value="">Receive offers from our partners
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" value="">Sign up for our newsletter 
                                                    </label>
                                                    <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</p><br>

                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <button type="submit" class="btn margin-15px-top btn-primary">Save</button>
                                </form>

                            </div>

                        </div>
                        <!-- End Account Details -->
                    </div>
                    <!-- End Tab panes -->
                </div>
            </div>
        </div>
    </div>