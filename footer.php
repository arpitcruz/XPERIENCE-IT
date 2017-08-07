<footer class="bg-dark type-2">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="footer-block">
<img src="img/theme-1/logo.png" alt class="logo-footer">
<div class="f_text color-grey-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore magna aliqua. Ut aliquip ex ea commodo consequat.</div>
<div class="footer-share">
<a href="#"><span class="fa fa-facebook"></span></a>
<a href="#"><span class="fa fa-twitter"></span></a>
<a href="#"><span class="fa fa-google-plus"></span></a>
<a href="#"><span class="fa fa-pinterest"></span></a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-sm-6 no-padding">
<div class="footer-block">
<h6>Travel News</h6>
<div class="f_news clearfix">
<a class="f_news-img black-hover" href="#">
<img class="img-responsive" src="img/home_6/news_1.jpg" alt>
<div class="tour-layer delay-1"></div>
</a>
<div class="f_news-content">
<a class="f_news-tilte color-white link-red" href="#">amazing place</a>
<span class="date-f">Mar 18, 2015</span>
<a href="#" class="r-more">read more</a>
</div>
</div>
<div class="f_news clearfix">
<a class="f_news-img black-hover" href="#">
<img class="img-responsive" src="img/home_6/news_2.jpg" alt>
<div class="tour-layer delay-1"></div>
</a>
<div class="f_news-content">
<a class="f_news-tilte color-white link-red" href="#">amazing place</a>
<span class="date-f">Mar 18, 2015</span>
<a href="#" class="r-more">read more</a>
</div>
</div>
<div class="f_news clearfix">
<a class="f_news-img black-hover" href="#">
<img class="img-responsive" src="img/home_6/news_1.jpg" alt>
<div class="tour-layer delay-1"></div>
</a>
<div class="f_news-content">
<a class="f_news-tilte color-white link-red" href="#">amazing place</a>
<span class="date-f">Mar 18, 2015</span>
<a href="#" class="r-more">read more</a>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="footer-block">
<h6>Tags:</h6>
<a href="#" class="tags-b">flights</a>
<a href="#" class="tags-b">traveling</a>
<a href="#" class="tags-b">sale</a>
<a href="#" class="tags-b">cruises</a>
<a href="#" class="tags-b">cars</a>
<a href="#" class="tags-b">hotels</a>
<a href="#" class="tags-b">tours</a>
<a href="#" class="tags-b">booking</a>
<a href="#" class="tags-b">countries</a>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="footer-block">
<h6>Contact Info</h6>
<div class="contact-info">
<?php
require_once "mysql_db_connect.php";


$query1 = "select * from contact where id = 1";

$result = $conn->query($query1);

$rows = Array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
	require_once "mysql_db_disconnect.php";
}  ?>
<div class="contact-line color-grey-3"><i class="fa fa-map-marker"></i><span>  <?php
                            foreach ($rows as $row){ echo $row['address'];?></span></div>
<div class="contact-line color-grey-3"><i class="fa fa-phone"></i><a href="#"><?php echo $row['phone'];?></a></div>
							<div class="contact-line color-grey-3"><i class="fa fa-envelope-o"></i><a href="#"><?php echo $row['address'];}?></a></div>
<!-- div class="contact-line color-grey-3"><i class="fa fa-envelope-o"></i><a href="mailto:"><span class="__cf_email__" data-cfemail="422e27363136302334272e022f232b2e6c212d2f">[email&#160;protected]</span><script data-cfhash="f9e31" type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></div>
<div class="contact-line color-grey-3"><i class="fa fa-globe"></i><a href="#"><span class="__cf_email__" data-cfemail="a7cbc2d345273ed4f8d3d5c6d1c2cbe7d0c8d5cbc389c4c8ca">[email&#160;protected]</span><script data-cfhash="f9e31" type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></div-->
</div>
</div>
</div>
</div>
</div>
<div class="footer-link bg-black">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="copyright">
<span>&copy; 2017 All rights reserved. XPERIENCE IT</span>
</div>
<ul>
<li><a class="link-aqua" href="#">Privacy Policy </a></li>
<li><a class="link-aqua" href="#">About Us</a></li>
<li><a class="link-aqua" href="#">Support </a></li>
<li><a class="link-aqua" href="#">FAQ</a></li>
<li><a class="link-aqua" href="#">Blog</a></li>
<li><a class="link-aqua" href="#"> Forum</a></li>
</ul>
</div>
</div>
</div>
</div>
</footer>