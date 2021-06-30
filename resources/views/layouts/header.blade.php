@extends('layouts.app')

@section('content')
        
          
	<nav class="header-nav">
		<div class="conten-box">
			 <div class="language-selector-wrapper selector-block">
     <span id="language-selector-label" class="text">
	  <img src="{{asset('public/panel/assets/img/l/1.jpg')}}" alt="" width="16" height="11" />
		Language:
	 </span>
    <div class="language-selector localiz_block  dropdown js-dropdown">
      <button data-toggle="dropdown" class=" btn-unstyle" aria-haspopup="true" aria-expanded="false" aria-label="Language dropdown">
       
		<span class="expand-more">English</span>
		<i class="fa fa-angle-down"></i>
      </button>
	 
      <ul class="dropdown-menu">
                  <li  class="current" >
            <a href="index.html" class="dropdown-item"><img src="{{asset('public/panel/assets/img/l/1.jpg')}}" alt="" width="16" height="11" />English</a>
          </li>
                  <li >
            <a href="http://demo.posthemes.com/pos_sinrato/layout2/fr/" class="dropdown-item"><img src="{{asset('public/panel/assets/img/l/2.jpg')}}" alt="" width="16" height="11" />Français</a>
          </li>
              </ul>
    </div>
  </div>

<div class="currency-selector-wrapper selector-block">
  <span id="currency-selector-label" class="text">Currency:</span>
  <div class="currency-selector localiz_block dropdown js-dropdown">
    <button data-target="#" data-toggle="dropdown" class=" btn-unstyle" aria-haspopup="true" aria-expanded="false" aria-label="Currency dropdown">
      <span class="expand-more _gray-darker">USD $</span>
   	  <i class="fa fa-angle-down"></i>
    </button>
    <ul class="dropdown-menu">
              <li >
          <a title="Euro" rel="nofollow" href="index6edc.html?SubmitCurrency=1&amp;id_currency=2" class="dropdown-item">EUR €</a>
        </li>
              <li  class="current" >
          <a title="US Dollar" rel="nofollow" href="indexe3c8.html?SubmitCurrency=1&amp;id_currency=1" class="dropdown-item">USD $</a>
        </li>
          </ul>
  </div>
</div>     	  	  <div class="box-tags">
<p class="t1"><span>Email:</span> support@posthemes.com</p>
<p class="t2">Free Shipping for all Order of $99</p>
</div>
	       
			<div class="setting_top dropdown js-dropdown">
				<span class="icon ion-android-settings" data-toggle="dropdown">My Account</span>
				 <div class="content-setting dropdown-menu">
				       <div class="user-info-block">
	<a href="loginfd9a.html" rel="nofollow">My account</a>
	<a href="cart75f4.html?action=show">Checkout</a>
	
  <a
	href="loginfd9a.html"
	title="Log in to your customer account"
	rel="nofollow"
  >
	<span class="login">Sign in</span>
  </a>
</div>


				</div>
			</div>
		</div>
	</nav>


  <div class="header-top">
    <div class="conten-box">
       <div class="row">
		<div class="header_logo col-left col col-lg-3 col-md-12 col-xs-12">
		  <a href="http://demo.posthemes.com/pos_sinrato/layout2/">
			<img class="logo img-responsive" src="{{asset('public/panel/assets/img/sinrato-2-responsive-prestashop-theme-logo-15416606652.jpg')}}" alt="Sinrato 2 - Responsive Prestashop Theme">
		  </a>
		</div>
		<div class="col-right col col-xs-12 col-lg-9 col-md-12">
			<div class="seach-cart">
				<div class="blockcart cart-preview" data-refresh-url="//demo.posthemes.com/pos_sinrato/layout2/en/module/ps_shoppingcart/ajax" data-cartitems="0">
  <div class="header">
    <a rel="nofollow" href="cart75f4.html?action=show">
		<span class="item_txt">	My Cart <span class="item_count">0</span></span>
		<span class="item_total">$0.00</span>
	</a>
  </div>
  <div class="body">
    <ul>
          </ul>
	<div class="price_content">
		<div class="cart-subtotals">
		  			<div class="products price_inline">
			  <span class="label">Subtotal</span>
			  <span class="value">$0.00</span>
			</div>
		  			<div class=" price_inline">
			  <span class="label"></span>
			  <span class="value"></span>
			</div>
		  			<div class="shipping price_inline">
			  <span class="label">Shipping</span>
			  <span class="value">Free</span>
			</div>
		  			<div class="tax price_inline">
			  <span class="label">Taxes</span>
			  <span class="value">$0.00</span>
			</div>
		  		</div>
		<div class="cart-total price_inline">
		  <span class="label">Total</span>
		  <span class="value">$0.00</span>
		</div>
    </div>
	<div class="checkout">
		<a href="cart75f4.html?action=show" class="btn btn-primary">Checkout</a>
	</div>
  </div>
</div>
<script type="text/javascript">
var wishlistProductsIds='';
var baseDir ='http://demo.posthemes.com/pos_sinrato/layout2/';
var static_token='f04b41ddf904a9ed406fdf1351becfbd';
var isLogged ='0';
var loggin_required='You must be logged in to manage your wishlist.';
var added_to_wishlist ='The product was successfully added to your wishlist.';
var mywishlist_url='login79ca.html';
	var isLoggedWishlist=false;
</script>
<div class="wishtlist_Top">
<a class="wishtlist_top" href="login79ca.html">
    <i class="lnr lnr-heart"></i>
	<div class="groud-wlist">
		<span class="cart-wishlist-number">0</span>
		<span class="text">Wishlist</span>
	</div>	
	</a>
</div>     <!-- pos search module TOP -->
<div id="pos_search_top">
	<form method="get" action="http://demo.posthemes.com/pos_sinrato/layout2/en/search" id="searchbox" class="form-inline form_search"  data-search-controller-url="/pos_sinrato/layout2/modules/possearchproducts/SearchProducts.php">
		<label for="pos_query_top"><!-- image on background --></label>
        <input type="hidden" name="controller" value="search">  
		<div class="pos_search form-group">
                             <select class="bootstrap-select" name="poscats">
					<option value="0">All categories</option>
													<option value="10">
	 Audio &amp; Home Theater
</option>
						<option value="22">
	- -  Digital Cameras
</option>
						<option value="24">
	- - - -  CD Players &amp; Turntables
</option>
						<option value="25">
	- - - -  Home Theater Systems
</option>
						<option value="26">
	- - - -  Receivers &amp; Amplifiers
</option>
						<option value="27">
	- - - -  Speakers
</option>
						<option value="28">
	- - - -  Stereo Shelf Systems
</option>
						<option value="29">
	- - - -  Wireless &amp; Multiroom Audio
</option>
								<option value="23">
	- -  Camera, Photo
</option>
						<option value="30">
	- - - -  4K UHD Streaming Media Players
</option>
						<option value="31">
	- - - -  Apple TV
</option>
						<option value="32">
	- - - -  Fire TV Streaming Media Devices
</option>
						<option value="33">
	- - - -  Google Chromecast
</option>
						<option value="34">
	- - - -  NVIDIA Shield
</option>
						<option value="35">
	- - - -  Roku
</option>
						<option value="36">
	- - - -  Flashes
</option>
																	<option value="11">
	 Camera, Photo &amp; Video
</option>
						<option value="37">
	- -  Laptops
</option>
						<option value="40">
	- - - -  2-in-1s
</option>
						<option value="41">
	- - - -  Business Laptops
</option>
						<option value="42">
	- - - -  Chromebooks
</option>
						<option value="43">
	- - - -  Gaming Laptops
</option>
						<option value="44">
	- - - -  Laptop Packages
</option>
						<option value="45">
	- - - -  MacBooks
</option>
						<option value="46">
	- - - -  MacBooks
</option>
								<option value="38">
	- -  Tablets
</option>
						<option value="47">
	- - - -  PC Laptops
</option>
						<option value="48">
	- - - -  Refurbished Laptops
</option>
						<option value="49">
	- - - -  4G LTE Tablets
</option>
						<option value="50">
	- - - -  Apple iPad
</option>
						<option value="51">
	- - - -  E-Readers &amp; Accessories
</option>
						<option value="52">
	- - - -  iPad &amp; Tablet Accessories
</option>
						<option value="53">
	- - - -  Kids&#039; Tablets
</option>
						<option value="54">
	- - - -  Kids&#039; Tablets
</option>
						<option value="55">
	- - - -  Kids&#039; Tablets

										</select>
             
        </div>
		<input type="text" name="s" value="" placeholder="Enter your search key ... " id="pos_query_top" class="search_query form-control ac_input" >
		<button type="submit" class="btn btn-default search_submit">
			<span>Search</span>
		</button>
    </form>
</div>

<!-- /pos search module TOP -->

			</div>
		</div>
      </div>
    </div>
  </div>
	<div class="header-bottom">
		<div class="conten-box">
			<!-- Block categories module -->
	<div class="ma-nav-mobile-container hidden-lg-up">
		<div class="pt_custommenu_mobile">
		<div class="navbar">
			<div id="navbar-inner" class="navbar-inner navbar-inactive">
				<a class="btn-navbar">Category</a>
				<ul id="pt_custommenu_itemmobile" class="tree dhtml  mobilemenu nav-collapse collapse">
											<li><a href="10-audio-home-theater.html">Audio &amp; Home Theater </a>
												<ul class="dhtml">
													<li><a href="22-digital-cameras.html">Digital Cameras </a>
								<ul>
																	<li><a href="24-cd-players-turntables.html">CD Players &amp; Turntables </a>
																	<li><a href="25-home-theater-systems.html">Home Theater Systems </a>
																	<li><a href="26-receivers-amplifiers.html">Receivers &amp; Amplifiers </a>
																	<li><a href="27-speakers.html">Speakers </a>
																	<li><a href="28-stereo-shelf-systems.html">Stereo Shelf Systems </a>
																	<li><a href="29-wireless-multiroom-audio.html">Wireless &amp; Multiroom Audio </a>
																</ul>
													<li><a href="23-camera-photo.html">Camera, Photo </a>
								<ul>
																	<li><a href="30-4k-uhd-streaming-media-players.html">4K UHD Streaming Media Players </a>
																	<li><a href="31-apple-tv.html">Apple TV </a>
																	<li><a href="32-fire-tv-streaming-media-devices.html">Fire TV Streaming Media Devices </a>
																	<li><a href="33-google-chromecast.html">Google Chromecast </a>
																	<li><a href="34-nvidia-shield.html">NVIDIA Shield </a>
																	<li><a href="35-roku.html">Roku </a>
																	<li><a href="36-flashes.html">Flashes </a>
																</ul>
												</ul>
												</li>
											<li><a href="11-camera-photo-video.html">Camera, Photo &amp; Video </a>
												<ul class="dhtml">
													<li><a href="37-laptops.html">Laptops </a>
								<ul>
																	<li><a href="40-2-in-1s.html">2-in-1s </a>
																	<li><a href="41-business-laptops.html">Business Laptops </a>
																	<li><a href="42-chromebooks.html">Chromebooks </a>
																	<li><a href="43-gaming-laptops.html">Gaming Laptops </a>
																	<li><a href="44-laptop-packages.html">Laptop Packages </a>
																	<li><a href="45-macbooks.html">MacBooks </a>
																	<li><a href="46-macbooks.html">MacBooks </a>
																</ul>
													<li><a href="38-tablets.html">Tablets </a>
								<ul>
																	<li><a href="47-pc-laptops.html">PC Laptops </a>
																	<li><a href="48-refurbished-laptops.html">Refurbished Laptops </a>
																	<li><a href="49-4g-lte-tablets.html">4G LTE Tablets </a>
																	<li><a href="50-apple-ipad.html">Apple iPad </a>
																	<li><a href="51-e-readers-accessories.html">E-Readers &amp; Accessories </a>
																	<li><a href="52-ipad-tablet-accessories.html">iPad &amp; Tablet Accessories </a>
																	<li><a href="53-kids-tablets.html">Kids&#039; Tablets </a>
																	<li><a href="54-kids-tablets.html">Kids&#039; Tablets </a>
																	<li><a href="55-kids-tablets.html">Kids&#039; Tablets </a>
																</ul>
													<li><a href="39-desktops.html">Desktops </a>
								<ul>
																	<li><a href="56-microsoft-surface-go.html">Microsoft Surface Go </a>
																	<li><a href="57-microsoft-surface-pro.html">Microsoft Surface Pro </a>
																	<li><a href="58-refurbished-tablets.html">Refurbished Tablets </a>
																	<li><a href="59-all-in-one-computers.html">All-in-One Computers </a>
																	<li><a href="60-apple-imac-mini-mac-pro.html">Apple iMac, Mini &amp; Mac Pro </a>
																	<li><a href="61-desktop-packages.html">Desktop Packages </a>
																	<li><a href="62-gaming-desktops.html">Gaming Desktops </a>
																</ul>
												</ul>
												</li>
											<li><a href="12-laptop-computer.html">Laptop &amp; Computer </a>
												<ul class="dhtml">
													<li><a href="63-cell-phones-with-service.html">Cell Phones with Service </a>
								<ul>
																	<li><a href="65-flickr.html">Flickr </a>
																	<li><a href="66-flip-box.html">Flip Box </a>
																	<li><a href="67-frame.html">Frame </a>
																	<li><a href="68-cocktail.html">Cocktail </a>
																</ul>
													<li><a href="64-security-cameras.html">Security Cameras </a>
								<ul>
																	<li><a href="69-flickrq.html">Flickrq </a>
																	<li><a href="70-platform-beds.html">Platform Beds </a>
																	<li><a href="71-storage-beds.html">Storage Beds </a>
																	<li><a href="72-regular-beds.html">Regular Beds </a>
																</ul>
												</ul>
												</li>
											<li><a href="14-video-games-consoles.html">Video Games Consoles </a>
												</li>
											<li><a href="15-business-office.html">Business &amp; Office </a>
												</li>
											<li><a href="16-headphones-accessories.html">Headphones &amp; Accessories </a>
												</li>
											<li><a href="17-quadcopters-accessories.html">Quadcopters &amp; Accessories </a>
												</li>
											<li><a href="18-network-devices.html">Network Devices </a>
												</li>
											<li><a href="21-smart-watches-accessories.html">Smart Watches &amp; Accessories </a>
												</li>
										     
															<li class="cms">
									<a href="content/1-delivery.html" title="Contains Subs">Delivery</a>
								</li>
															<li class="cms">
									<a href="content/2-legal-notice.html" title="Contains Subs">Legal Notice</a>
								</li>
															<li class="cms">
									<a href="content/4-about-us.html" title="Contains Subs">About us</a>
								</li>
															<li class="cms">
									<a href="content/5-secure-payment.html" title="Contains Subs">Secure payment</a>
								</li>
																			 
																			 
																			 
																			 
																			 
																													</ul>
			</div>
		</div>
		</div>
</div>
<!-- /Block categories module -->
<div class="nav-container ">
	<div class="nav-inner">
		<div id="pt_custommenu" class="pt_custommenu">
		    <div id="pt_menu_home" class="pt_menu act"><div class="parentMenu"><a class="fontcustom2" href="http://demo.posthemes.com/pos_sinrato/layout2/"><span>Home</span></a></div></div><div class ="pt_menu pt_menu_cms"><div class="parentMenu" ><a class="fontcustom2" href="content/1-delivery.html"><span>Delivery</span></a></div></div>
<div class ="pt_menu pt_menu_cms"><div class="parentMenu" ><a class="fontcustom2" href="content/2-legal-notice.html"><span>Legal Notice</span></a></div></div>
<div class ="pt_menu pt_menu_cms"><div class="parentMenu" ><a class="fontcustom2" href="content/4-about-us.html"><span>About us</span></a></div></div>
<div class ="pt_menu pt_menu_cms"><div class="parentMenu" ><a class="fontcustom2" href="content/5-secure-payment.html"><span>Secure payment</span></a></div></div>

		</div>
	</div>
</div>
<script type="text/javascript">
//<![CDATA[
var CUSTOMMENU_POPUP_EFFECT = 0;
var CUSTOMMENU_POPUP_TOP_OFFSET = 55;
//]]>
</script>
			     	  	  <p class="static-menu">Hotline: 1-001-234-5678</p>
	       
		</div>	
	</div>
  

        
      @endsection