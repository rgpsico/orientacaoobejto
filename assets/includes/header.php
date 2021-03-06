<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Classified Plus</title>
<link rel="stylesheet" href="css/font-awesome.min.css" />
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="css/owlcarousel/owl.carousel.min.css" />
<link rel="stylesheet" href="css/owlcarousel/owl.theme.default.min.css" />
</head>
<body>
<div class="topbar"> 
  <!-- Header  -->
  <div class="header">
    <div class="container po-relative">
      <nav class="navbar navbar-expand-lg hover-dropdown header-nav-bar"> <a href="01-Home-Page.html" class="navbar-brand"><img src="images/logo.png" alt="Classified Plus"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#h5-info" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="h5-info">
          <ul class="navbar-nav">
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Home </a>
              <ul class="b-none dropdown-menu font-14 animated fadeInUp">
                <li><a class="dropdown-item" href="01-Home-Page.html">Home1 </a></li>
                <li><a class="dropdown-item" href="02-Home-Page.html">Home2</a></li>
                <li><a class="dropdown-item" href="03-Home-Page.html">Home3</a></li>
              </ul>
            <li class="nav-item"> <a class="nav-link"  href="04-Category-Page.html">Category</a></li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Classified</a>
              <ul class="b-none dropdown-menu font-14 animated fadeInUp">
                <li><a class="dropdown-item" href="08-Listing_Top_serch-Page.html">Listing Top serch</a></li>
                <li><a class="dropdown-item" href="09-Listing_left-sidebar-Page.html">Listing left sidebar</a></li>
                <li><a class="dropdown-item" href="10-Listing_Top_serchbar-Page.html">Listing Top serchbar</a></li>
                
                <li><a class="dropdown-item" href="11-List_View_Listing-Page.html">List View Listing</a></li>
                <li><a class="dropdown-item" href="12-Datile_banner-Page.html">Datile Banner</a></li>
                <li><a class="dropdown-item" href="13-Datile_Without_banner-Page.html">Datile Without Banner</a></li>
                
                                <li><a class="dropdown-item" href="14-Datile_banner_in_slider-Page.html">Datile banner In slider</a></li>
              </ul>
            </li>
            
            <li class="nav-item"> <a class="nav-link"  href="28-Contact_Us-Page.html">Help/Support</a></li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
              <ul class="b-none dropdown-menu font-14 animated fadeInUp">
              <li><a class="dropdown-item" href="05-About_Us-Page.html">About Us</a></li>
                <li><a class="dropdown-item" href="06-Blog-Page.html">Blog </a></li>
                <li><a class="dropdown-item" href="07-Blog_Detail-Page.html">Blog Detail</a></li>
                <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#login">Register/Sign In</a></li>
                <li><a class="dropdown-item" href="26-Faq-Page.html">Faq</a></li>
                <li><a class="dropdown-item" href="27-Faq_Right-Category-Page.html">Faq Right Category</a></li>
                <li><a class="dropdown-item" href="29-404-Page.html">404</a></li>
                <li><a class="dropdown-item" href="30-404_With_Banner-Page.html">404 With Banner</a></li>
              </ul>
            </li>
          </ul>
          <div class="header_r d-flex">
            <div class="loin"> <a class="nav-link" href="#" data-toggle="modal" data-target="#login"><i class="fa fa-user m-r-5"></i>Register/Sign In</a>  </div>
            <ul class="ml-auto post_ad">
              <li class="nav-item search"><a class="nav-link" href="20-Post_Ad-Page.html">Post Your Ad</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>

   <!-- Modal -->
   <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Login to Classifieds Plus</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true"><img src="images/close.png"  alt="Classified Plus"></span> </button>
        </div>
        <div class="modal-body">
        <div class="list-unstyled list-inline social-login">
        <a href="#" class="facebook"> <img src="images/fb.png" alt="Classified Plus">Continue wiith Facbook</a>
        <a href="#" class="google"> <img src="images/google_p.png" alt="Classified Plus"> <span>Continue with Google</span></a>
        </div>
          <div class="or-divider">
            <h6>or</h6>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" name="log_username" placeholder="Email/Username">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="password" class="form-control" name="log_password" placeholder="Password">
              </div>
            </div>
          </div>
          <div class="form-group">
			<button type="submit" class="buttons login_btn" name="login" value="Login">
				Continue 
			</button>
		</div>
          <div class="form-info">
			<div class="md-checkbox">
				<input type="checkbox" name="rememberme" id="rememberme" value="forever">
				<label for="rememberme" class="">Remember me</label>
			</div>
			<div class="forgot-password">
				<a href="#">Forgot password?</a>
			</div>
		</div>
          
        </div>
        <div class="register text-center">Not a member yet? <a href="#" data-toggle="modal" data-target="#register">Register</a></div>
      </div>
    </div>
  </div>
  
    <!-- Modal -->
  <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Login to Classifieds Plus</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true"><img src="images/close.png" alt="Classified Plus"></span> </button>
        </div>
        <div class="modal-body">
        <div class="list-unstyled list-inline social-login">
        <a href="#" class="facebook"> <img src="images/fb.png" alt="Classified Plus">Continue wiith Facbook</a>
        <a href="#" class="google"> <img src="images/google_p.png" alt="Classified Plus"> <span>Continue with Google</span></a>
        </div>
          <div class="or-divider">
            <h6>or</h6>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" name="log_username" placeholder="Name">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="number" class="form-control" id="Phone_No" name="log_password" placeholder="Number">
              </div>
            </div>
            
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="Email" class="form-control" id="Email" name="Email" placeholder="Email">
              </div>
            </div>
            
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="password" class="form-control" name="log_password" placeholder="Password">
              </div>
            </div>
            
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="password" class="form-control" id="Confirm_password" name="Confirm_password" placeholder="Confirm Password">
              </div>
            </div>
            
          </div>
          <div class="form-group">
			<button type="submit" class="buttons login_btn" name="login" value="Login">
				Continue 
			</button>
		</div>
          <div class="form-info">
			<p class="text-center p-b-10">By Register I agree to receive emails.</p>
		</div>
          
        </div>
        <div class="register text-center">Already a member? <a href="#">Login</a></div>
      </div>
    </div>
  </div>
  <!-- End Header  --> 
</div>