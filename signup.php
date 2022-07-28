<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- SITE TITLE -->
		<title>Future - Multipurpose HTML5 Template</title>			
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">		
		<!-- Google Font -->
		<link href='http://fonts.googleapis.com/css?family=Cousine:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Merriweather:400,700,900,300' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
		<!-- animate CSS -->
		<link rel="stylesheet" href="assets/css/animate.css">		
		<!-- Style CSS -->
		<link rel="stylesheet" href="assets/css/style.css">	
		<!-- CSS FOR COLOR SWITCHER -->
		<link rel="stylesheet" href="assets/css/switcher/switcher.css"> 	
		<link rel="stylesheet" href="assets/css/switcher/style1.css" id="colors">			
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
    <body>

		<!-- START PRELOADER -->
		<div class="preloader">
			<div class="status">
				<div class="status-mes"></div>
			</div>
		</div>
		<!-- END PRELOADER -->	
		
		<!-- START NAVBAR -->
		<div class="navbar navbar-default navbar-fixed-top menu-top menu_dropdown">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt="logo"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <nav>
						 <ul class="nav navbar-nav navbar-right">
							<li><a href="index.html">Home</a>
								<ul class="sub-menu">
									<li><a href="index.html">Home One</a></li>
									<li><a href="index2.html">Home Two</a></li>
								</ul>
							</li>
							<li><a href="about.html">About Us</a>
								<ul class="sub-menu">
									<li><a href="about.html">About One</a></li>
									<li><a href="about2.html">About Two</a></li>
								</ul>
							</li>
							<li><a href="service.html">Services</a>
								<ul class="sub-menu">
									<li><a href="service.html">Service One</a></li>
									<li><a href="service2.html">Service Two</a></li>
								</ul>
							</li>
							<li><a href="portfolio_two_col.html" target="_blank">Portfolios</a>
								<ul class="sub-menu">
									<li><a href="portfolio-2-col.html">Two columns</a></li>
									<li><a href="portfolio-3-col.html">Three columns</a></li>
									<li><a href="portfolio-4-col.html">Four columns</a></li>
									<li><a href="single_project.html">Single Project</a></li>
								</ul>
							</li>
							<li><a href="#">Pages</a>
								<ul class="sub-menu">
									<li><a href="faq.html">Faq page</a></li>
									<li><a href="404.html">404 page</a></li>
									<li><a href="coming-soon.html">Coming Soon</a></li>
								</ul>
							</li>
							<li><a href="blog.html">Blog</a>
								<ul class="sub-menu">
									<li><a href="blog.html">Blog Post</a></li>
									<li><a href="blog-post.html">Blog Single</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact</a>
								<ul class="sub-menu">
									<li><a href="contact.html">Contact One</a></li>
									<li><a href="contact2.html">Contact Two</a></li>
								</ul>
							</li>
						</ul>
					</nav>
                </div> 
            </div><!--- END CONTAINER -->
        </div> 	
		<!-- END NAVBAR -->		
		
		<!-- START  HOME DESIGN -->
		<section class="section-top" style="background-image: url(assets/img/bg/section-bg.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;">
			<div class="overlay">
				<div class="container">
					<div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
						<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
							<h1>報名研討會</h1>
							<ol class="breadcrumb">
							  <li><a href="index.php">首頁</a></li>
							  <li class="active">報名參與</li>
							</ol>
						</div><!-- //.HERO-TEXT -->
					</div><!--- END COL -->
				</div><!--- END CONTAINER -->
			</div><!--- END HOME OVERLAY -->
		</section>	
		<!-- END  HOME DESIGN -->	

		<!-- START FAQ -->
		<section class="faq">
			<div class="container">
				<div class="row">
					<div class="section-title text-center wow zoomIn">
						<h1>填寫報名相關資料</h1>
						<p>本研討會時間2022年12月15-17日<br>於國立臺北商業大學桃園校區舉行</p>
						<span></span>
					</div>						
					<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="faq_desc">
							<p class="question"><span>基本資料:</span></p>
							<p class="ans">
								姓名：<input type="text" class="form-control" name="" required="required"></input>	
								服務單位/就讀學校：<input type="text" class="form-control" name="" required="required"></input>	
								身份別：<input type="text" class="form-control" name="" required="required"></input>	
								職稱：<input type="text" class="form-control" name="" required="required"></input>	
								電子信箱：<input type="text" class="form-control" name="" required="required"></input>	
								連絡電話：<input type="text" class="form-control" name="" required="required"></input>	
								論文篇數：<input type="text" class="form-control" name="" required="required"></input>	
								論文篇數(主編)：<input type="text" class="form-control" name="" required="required"></input>	
								論文編號：<input type="text" class="form-control" name="" required="required"></input>	
							</p>
						</div>
					</div><!--- END COL -->
					<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="faq_desc">
							<p class="question"><span>報名資訊:</span></p>
							收據抬頭：<input type="text" class="form-control" name="" required="required"></input>	
							統一編號：<input type="text" class="form-control" name="" required="required"></input>	
							繳費方式：<input type="text" class="form-control" name="" required="required"></input>	
							繳費日期：<input type="text" class="form-control" name="" required="required"></input>	
							繳款金額：<input type="text" class="form-control" name="" required="required"></input>	
							收據號碼?：<input type="text" class="form-control" name="" required="required"></input>	
							交易序號?：<input type="text" class="form-control" name="" required="required"></input>	
							特殊身份：<input type="text" class="form-control" name="" required="required"></input>	
						</div>
					</div><!--- END COL -->
					<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="faq_desc">
							<p class="question"><span>研討會相關:</span></p>
							交通方式：<input type="text" class="form-control" name="" required="required"></input>	
							12/15(四)接駁車班次：<input type="text" class="form-control" name="" required="required"></input>	
							12/16(五)接駁車班次：<input type="text" class="form-control" name="" required="required"></input>	
							12/17(六)接駁車班次：<input type="text" class="form-control" name="" required="required"></input>	
							入校車號：<input type="text" class="form-control" name="" required="required"></input>	
							<table class="table">
								<thead class="thead-dark">
									<tr>
									<th scope="col">用餐調查</th>
									<th scope="col">葷</th>
									<th scope="col">素</th>
									<th scope="col">不需要</th>
									</tr>
								</thead>
  								<tbody>
									<tr>
      									<th scope="row">12/15(四)午餐</th>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
									</tr>
									<tr>
      									<th scope="row">12/15(四)晚餐</th>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
									</tr>
									<tr>
      									<th scope="row">12/16(五)午餐</th>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
									</tr>
									<tr>
      									<th scope="row">12/16(五)晚餐</th>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
									</tr>
									<tr>
      									<th scope="row">12/17(六)午餐</th>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
									</tr>
									<tr>
      									<th scope="row">12/17(六)晚餐</th>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
									</tr>
								</tbody>
							</table>
							<table class="table">
								<thead class="thead-dark">
									<tr>
									<th scope="col">用餐調查</th>
									<th scope="col">葷</th>
									<th scope="col">素</th>
									<th scope="col">不需要</th>
									</tr>
								</thead>
  								<tbody>
									<tr>
      									<th scope="row">12/15(四)午餐</th>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
									</tr>
									<tr>
      									<th scope="row">12/15(四)晚餐</th>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
									</tr>
									<tr>
      									<th scope="row">12/16(五)午餐</th>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
										<td>
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										</td>
									</tr>
								</tbody>
							</table>
							其他：<input type="text" class="form-control" name="" required="required"></input>	
						</div>
					</div><!--- END COL -->
					<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="faq_desc">
							<p class="question"><span>12345:</span></p>
							<p class="ans">這裡放東西</p>
						</div>
					</div><!--- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END FAQ -->
	
		<!-- START FOOTER TOP-->
		<section class="footer-top">
			<div class="footer_overlay section-padding">	
				<div class="container">
					<div class="row">					
						<div class="col-md-4 col-sm-6  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
							<div class="single_footer">
								<h1>About us</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum justo vitae convallis varius. Nulla tristique risus ut justo pulvinar mattis.</p>
								<div class="footer_contact">
									<ul>
										<li><i class="fa fa-phone"></i> Call Us -  (+1) 517 397 7100</li>
										<li><i class="fa fa-envelope"></i> info@future.com</li>
										<li><i class="fa fa-rocket"></i> 3481 Melrose Place, Beverly Hills, CA 90210</li>
									</ul>
								</div>
							</div>
						</div><!--- END COL -->
						<div class="col-md-2 col-sm-6  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
							<div class="single_footer">
								<h1>Our Service</h1>
								<ul>
									<li><a href="#">Web Design</a></li>
									<li><a href="#">Development</a></li>
									<li><a href="#">Graphics Design</a></li>
									<li><a href="#">Social Media</a></li>
									<li><a href="#">Photography</a></li>
									<li><a href="#">100% Responsive</a></li>
								</ul>
							</div>
						</div><!--- END COL -->
						<div class="col-md-3 col-sm-6  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
							<div class="single_footer">
								<h1>Tags</h1>
								<a href="#" class="btn btn-lg btn-footer-dark-bg">Web Design</a>
								<a href="#" class="btn btn-lg btn-footer-dark-bg">Creative</a>
								<a href="#" class="btn btn-lg btn-footer-dark-bg">Seo</a>
								<a href="#" class="btn btn-lg btn-footer-dark-bg">Developed</a>
								<a href="#" class="btn btn-lg btn-footer-dark-bg">Photos</a>
								<a href="#" class="btn btn-lg btn-footer-dark-bg">Creative</a>
								<a href="#" class="btn btn-lg btn-footer-dark-bg">Travels</a>
								<a href="#" class="btn btn-lg btn-footer-dark-bg">Event</a>
								<a href="#" class="btn btn-lg btn-footer-dark-bg">Quality</a>
								<a href="#" class="btn btn-lg btn-footer-dark-bg">Color</a>
								<a href="#" class="btn btn-lg btn-footer-dark-bg">Business</a>
								<a href="#" class="btn btn-lg btn-footer-dark-bg">Theme</a>
							</div>
						</div><!--- END COL -->
						<div class="col-md-3 col-sm-6  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
							<div class="single_footer">
								<h1>Latest Blog</h1>
								<div class="footer_blog">							
									<a href="#"><img src="assets/img/blog/recent-1.jpg" class="img-responsive" alt="image" /></a>
									<a href="#"><h2>Blog Title Here</h2></a>
									<span>20 Mar 2016</span>									
								</div>
								<div class="footer_blog">
									<a href="#"><img src="assets/img/blog/recent-2.jpg" class="img-responsive" alt="image" /></a>
									<a href="#"><h2>Blog Title Here</h2></a>
									<span>20 Mar 2016</span>			
								</div>
							</div>
						</div><!--- END COL -->						
					</div><!--- END ROW -->
				</div><!--- END CONTAINER -->
			</div><!--- END OVERLAY -->
		</section>
		<!-- END FOOTER TOP -->
		
		<!-- START FOOTER BOTTOM -->
		<footer class="footer section-padding">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<div class="footer_social">
							<ul>
								<li><a class="f_facebook  wow bounceInDown" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="f_twitter wow bounceInDown" data-wow-delay=".1s" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a class="f_google wow bounceInDown" data-wow-delay=".2s" href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a class="f_linkedin wow bounceInDown" data-wow-delay=".3s" href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a class="f_youtube wow bounceInDown" data-wow-delay=".4s" href="#"><i class="fa fa-youtube"></i></a></li>
								<li><a class="f_skype wow bounceInDown" data-wow-delay=".5s" href="#"><i class="fa fa-skype"></i></a></li>
							</ul>
						</div>
						<p class="footer_copyright">Copyright &copy; 2020.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>						
					</div><!--- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</footer>
		<!-- END FOOTER BOTTOM-->				

		<!-- STYLE SWITCHER -->
		 <div id="style-switcher">
			<h2>Your Awesome Color<a href="#"><i class="fa fa-cog fa-spin"></i></a></h2>
			<div>
			  <ul class="colors" id="color1">
				<li><a href="#" class="style1"></a></li>
				<li><a href="#" class="style2"></a></li>
				<li><a href="#" class="style3"></a></li>
				<li><a href="#" class="style4"></a></li>
				<li><a href="#" class="style5"></a></li>
				<li><a href="#" class="style6"></a></li>
				<li><a href="#" class="style7"></a></li>
				<li><a href="#" class="style8"></a></li>
				<li><a href="#" class="style9"></a></li>
				<li><a href="#" class="style10"></a></li>
				<li><a href="#" class="style11"></a></li>
				<li><a href="#" class="style12"></a></li>
				<li><a href="#" class="style13"></a></li>
				<li><a href="#" class="style14"></a></li>
				<li><a href="#" class="style15"></a></li>
				<li><a href="#" class="style16"></a></li>
				<li><a href="#" class="style17"></a></li>
				<li><a href="#" class="style18"></a></li>
				<li><a href="#" class="style19"></a></li>
				<li><a href="#" class="style20"></a></li>
			  </ul>
			</div>
		 </div>  
		 <!-- END OF STYLE SWITCHER -->	
		 
		<!-- Latest jQuery -->
        <script src="assets/js/jquery-1.11.3.min.js"></script>
		<!-- Latest compiled and minified Bootstrap -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- WOW - Reveal Animations When You Scroll -->
        <script src="assets/js/wow.min.js"></script>
		<!-- switcher js -->
        <script src="assets/js/switcher.js"></script>			
		<!-- scripts js -->
        <script src="assets/js/scripts.js"></script>
    </body>
</html>