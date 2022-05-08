<?php
	include('functions/functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Flower Shop - free website template, HTML CSS</title>
<meta name="keywords" content="free website template, flower shop, website templates, CSS, HTML" />
<meta name="description" content="Flower Shop - free website template, W3C compliant HTML CSS layout" />
<link href="styles/style.css" rel="stylesheet" type="text/css" />

<!--  Free CSS Template | Designed by TemplateMo.com  -->
</head>
<body>
<div id="templatemo_container">
<div id="templatemo_top_panel">
    	<div id="templatemo_language_section">

			<a href="#"><img src="images/templatemo_flag_01.gif" alt="flag 1" /></a>
            <a href="#"><img src="images/templatemo_flag_02.gif" alt="flag 2" /></a>
            <a href="#"><img src="images/templatemo_flag_03.gif" alt="flag 3" /></a>
            <a href="#"><img src="images/templatemo_flag_04.gif" alt="flag 4" /></a>
            <a href="#"><img src="images/templatemo_flag_05.gif" alt="flag 5" /></a>
        </div>
        <div id="templatemo_shopping_cart">
       	    Shopping Cart <span>(<a href="#">3 items</a>)</span>
        </div>
  </div>

     <div id="templatemo_header">
     	<img src="images/templatemo_site_header.jpg" alt="Flower Shop" />
     </div>

     <div id="templatemo_banner">
     	<a href="#"><img src="images/templatemo_banner_image.jpg" alt="Flower Shop - Free Web Template" title="Flower Shop - Free Web Template" border="0" /></a>     </div>

<div id="templatemo_menu_panel">
        <ul>
            <li><a href="#" class="current">خانه</a></li>
            <li><a href="#" target="_parent">همه محصولات</a></li>
            <li><a href="#" target="_parent">حساب من</a></li>
            <li><a href="#" target="_parent">خروج</a></li>
            <li><a href="#">درباره ما</a></li>
            <li><a href="#">تماس با ما</a></li>
        </ul>
    </div> <!-- end of menu -->

    <div id="templatemo_content">

    	<div id="templatemo_content_left">
        	<h1>Welcome to Our Flower Site</h1>
            <p>This is a <a href="http://www.templatemo.com" target="_parent">free CSS template</a> provided by TemplateMo.com website. You may download, modify and apply this CSS layout for your personal or business websites. Credit goes to <a href="http://www.publicdomainpictures.net/" target="_blank">PublicDomainPictures</a> for photos.</p>
          <p>Aliquam tristique lacus in sapien. Suspendisse potenti. Ut sed pede. Nullam vitae tellus. Sed ultrices. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc quis sem nec tellus blandit tincidunt. Aliquam tristique lacus in sapien. Suspendisse potenti. Ut sed pede. Nullam vitae tellus. Sed ultrices. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>

             <div class="cleaner_with_height">&nbsp;</div>

             <h2>New Products</h2>
             <div class="product_box">
             	<h3>Product One</h3>
                <img src="images/templatemo_image_01.jpg" alt="image" />
                <p>Aliquam tristique lacus in sapien. Suspendisse potenti.</p>
                <div class="price">PRICE:<span>$14.00</span></div>
             	<div class="buynow"><a href="shoppingcard.html">Buy Now</a></div><a href="#">Details</a>
             </div>
             <div class="product_box">
             	<h3>Product Title</h3>
                <img src="images/templatemo_image_02.jpg" alt="image" />
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                <div class="price">PRICE:<span>$18.00</span></div>
             	<div class="buynow"><a href="shoppingcard.html">Buy Now</a></div><a href="#">Details</a>
             </div>
             <div class="product_box">
             	<h3>Product Title</h3>
                <img src="images/templatemo_image_03.jpg" alt="image" />
                <p>Suspendisse potenti. Ut sed pede. Nullam vitae tellus. </p>
                <div class="price">PRICE:<span>$26.00</span></div>
             	<div class="buynow"><a href="shoppingcard.html">Buy Now</a></div><a href="#">Details</a>
             </div>

			<div class="cleaner_with_height">&nbsp;</div>
        </div> <!-- end of ocntent left -->

        <div id="templatemo_content_right">
        	<div class="templatemo_right_section">
            	<h4>Search</h4>
                <div class="templatemo_right_section_content">
                    <form method="get" action="#">
                            <input name="keyword" type="text" id="keyword"/>
                            <input type="submit" name="submit" class="button" value="Search" />
                     </form>
                 </div>
            </div>

<div class="templatemo_right_section">
						<h4>دسته بندی ها</h4>
						<div class="templatemo_right_section_content">
							<ul>
								<?php getCat(); ?>

							</ul>
						</div>
					</div>

					<div class="templatemo_right_section">
						<h4>برندها</h4>
						<div class="templatemo_right_section_content">
							<ul>
								<?php getBrand() ?>
							</ul>
						</div>
					</div>



            <div class="templatemo_right_section">
            	<h4>W3C Validations</h4>
            	<div class="templatemo_right_section_content">
                    <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
    <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
				</div>
            </div>
        </div> <!-- end of content right-->

        <div class="cleaner">&nbsp;</div>
    </div>

     <div id="templatemo_footer_panel">
        <div id="footer_left">
            <img src="images/mastercard.gif" alt="Master Card" /><img src="images/visa.gif" alt="Visa Card" /><img src="images/paypal.gif" alt="PayPal" /><img src="images/verisignsecured.gif" alt="Verisign Secured" />
        </div>
        <div id="footer_right">
            Copyright © 2024 <a href="#">Your Company Name</a><br />
			<a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by
            <a href="http://www.templatemo.com" target="_blank">Free CSS Templates</a>
        </div>

        <div class="cleaner">&nbsp;</div>
    </div>
</div>
<!--  Free CSS Template | Designed by TemplateMo.com  -->
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>