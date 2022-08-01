<!DOCTYPE html>
<html lang="zh-TW">
	<?php
		session_start();//開啟session
	?>

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- SITE TITLE -->
		<title>TANET2022</title>			
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
		<style>	
			.zoomimage{
				background-size:contain;
				background-position: center center;
				background-repeat: no-repeat;
				-webkit-background-size: cover;
				-moz-background-size: cover;
			}
		</style>
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
                        <span class="sr-only">TANET2022</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<a href="index.php" class="navbar-brand"><img src="assets/img/logo.png" alt="logo"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <nav>
						 <ul class="nav navbar-nav navbar-right">
							<li><a href="https://tanet2022.ntub.edu.tw/" target="_blank">研討會首頁</a></li>
							<li><a href="https://tanetsys.mcu.edu.tw/index.php/tanet2022/tanet2022" target="_blank">投稿系統</a></li>
							<li><a href="index.php">報名研討會</a></li>
							<?php
								if(isset($_SESSION['tanet2022_Islogin'])){
									echo"<li><a href='backstage_finance.php'>後臺管理</a>";
										echo "<ul class='sub-menu'>";
											echo "<li><a href='backstage_finance.php'>金融資訊</a></li>";
											echo "<li><a href='backstage_seminar.php'>便當與接駁車</a></li>";
										echo "</ul>";
									echo "</li>";
									echo"<li><a href='logout.php'>登出</a></li>";
								}
								else
									echo"<li><a href='login.php'>後臺登入</a></li>";
							?>
						</ul>
					</nav>
                </div> 
            </div><!--- END CONTAINER -->
        </div> 	
		<!-- END NAVBAR -->		
		
		<!-- START  HOME DESIGN -->
		<!-- <section class="section-top" style="background-image: url(assets/img/bg/section-bg.jpg);  background-size:auto; background-position: center center;"> -->
		<section class="section-top zoomimage" style="background-image: url(assets/img/bg/section-bg.jpg);">
		<div class="overlay">
			<div class="container">
					<div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
						<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
							<ol class="breadcrumb">
							  <li><a></a></li>
							</ol>
						</div><!-- //.HERO-TEXT -->
					</div><!--- END COL -->
				</div><!--- END CONTAINER -->
			</div><!--- END HOME OVERLAY -->
		</section>	
		<!-- END  HOME DESIGN -->	

		<!-- START FORM -->
		<form method="post" action="submitdata.php" name="registration" id="registration">
			<section class="faq">
				<div class="container">
					<div class="row">
						<div class="section-title text-center wow zoomIn">
							<h1>填寫報名相關資料</h1>
							<p>本研討會時間2022年12月15-17日<br>於國立臺北商業大學桃園校區舉行</p>
							<span></span>
						</div>						
						<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
							<div class="faq_desc">
								<p class="question"><span>基本資料:</span></p>
								<p class="ans">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">　　　　　　　姓名</span>
										</div>
										<input type="text"  required="required" name="Cname" class="form-control" placeholder="請輸入姓名" aria-label="Username" aria-describedby="basic-addon1">
									</div>
									<br>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">服務單位／就讀學校</span>
										</div>
										<input type="text"  required="required" name="Unit" class="form-control" placeholder="請輸入服務單位／就讀學校" aria-label="Username" aria-describedby="basic-addon1">
									</div>
									<br>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">　　　　　　身份別</span>
										</div>
										<select class="form-control" name="Identity">
											<option value="學⽣（不需發表論⽂者）" selected>學⽣（不需發表論⽂者） NT$2,500</option>
											<option value="教授（不需發表論⽂者）">教授（不需發表論⽂者） NT$3,000</option>
											<option value="政府單位">政府單位 NT$3,000</option>
											<option value="⼀般⼈⼠">⼀般⼈⼠ NT$3,000</option>
											<option value="發表論⽂者">發表論⽂者（⼝頭或海報發表皆需報名） NT$3,000</option>
											<option value="教育部免費名額">教育部免費名額</option>
											<option value="主編">主編（免註冊費，論⽂⼀篇NT$1,000）</option>
											<option value="贊助廠商">贊助廠商</option>
										</select>
									</div>
									<br>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">　　　　　　　職稱</span>
										</div>
										<input type="text"  required="required" name="Job" class="form-control" placeholder="請輸入職稱" aria-label="Username" aria-describedby="basic-addon1">
									</div>
									<br>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">　　　　　電子信箱</span>
										</div>
										<input type="email"  required="required" name="Email" class="form-control" placeholder="請輸入電子信箱" aria-label="Username" aria-describedby="basic-addon1">
									</div>
									<br>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">　　　　　連絡電話</span>
										</div>
										<input type="text"  required="required" name="Phone" class="form-control" placeholder="請輸入連絡電話" aria-label="Username" aria-describedby="basic-addon1">
									</div>
									<br>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">　　　　　論文篇數</span>
										</div>
										<input type="text"  required="required" name="PapersAmount" class="form-control" placeholder="請輸入論文篇數" aria-label="Username" aria-describedby="basic-addon1">
									</div>
									<br>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">　論文篇數（主編）</span>
										</div>
										<input type="text"  required="required" name="PapersAmount_ChiefEditor" class="form-control" placeholder="請輸入論文篇數（主編）" aria-label="Username" aria-describedby="basic-addon1">
									</div>
									<br>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">　　　　　論文編號</span>
										</div>
										<input type="text" name="PapersID" class="form-control" placeholder="請輸入論文編號（依半形逗號分隔）" aria-label="Username" aria-describedby="basic-addon1">
									</div>
								</p>
							</div>
						</div><!--- END COL -->
						<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
							<div class="faq_desc">
								<p class="question"><span>研討會相關:</span></p>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">　　　　　　　 交通方式</span>
									</div>
									<select class="form-control" name="Transportation">
										<option value="自行開車" selected>自行開車</option>
										<option value="搭乘大會接駁車">搭乘大會接駁車</option>
										<option value="自行安排">自行安排</option>
									</select>
								</div>
								<br>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">　　　　　　　 入校車號</span>
									</div>
									<input type="text" name="CarLicense" class="form-control" placeholder="請輸入入校車號" aria-label="Username" aria-describedby="basic-addon1">
								</div>
								<br>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">12／15（四）接駁車班次</span>
									</div>
									<select class="form-control" name="ShuttleBus_D1">
										<option value="不需要" selected>不需要</option>
										<option value="班次一" >班次一</option>
										<option value="班次二">班次二</option>
										<option value="班次三">班次三</option>
									</select>
								</div>
								<br>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">12／16（五）接駁車班次</span>
									</div>
									<select class="form-control" name="ShuttleBus_D2">
										<option value="不需要" selected>不需要</option>
										<option value="班次一" >班次一</option>
										<option value="班次二">班次二</option>
										<option value="班次三">班次三</option>
									</select>
								</div>
								<br>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">12／17（六）接駁車班次</span>
									</div>
									<select class="form-control" name="ShuttleBus_D3">
										<option value="不需要" selected>不需要</option>
										<option value="班次一" >班次一</option>
										<option value="班次二">班次二</option>
										<option value="班次三">班次三</option>
									</select>
								</div>
								<br>
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
											<th scope="row">12／15（四）午餐</th>
											<td>
												<input  required="required" class="form-check-input" type="radio" name="Lunch_D1" id="flexRadioDefault1" value="葷">
											</td>
											<td>
												<input required="required"  class="form-check-input" type="radio" name="Lunch_D1" id="flexRadioDefault1" value="素">
											</td>
											<td>
												<input  required="required" class="form-check-input" type="radio" name="Lunch_D1" id="flexRadioDefault1" value="不需要">
											</td>
										</tr>
										<tr>
											<th scope="row">12／15（四）晚餐</th>
											<td>
												<input  required="required" class="form-check-input" type="radio" name="Dinner_D1" id="flexRadioDefault1" value="葷">
											</td>
											<td>
												<input  required="required" class="form-check-input" type="radio" name="Dinner_D1" id="flexRadioDefault1" value="素">
											</td>
											<td>
												<input  required="required" class="form-check-input" type="radio" name="Dinner_D1" id="flexRadioDefault1" value="不需要">
											</td>
										</tr>
										<tr>
											<th scope="row">12／16（五）午餐</th>
											<td>
												<input required="required" class="form-check-input" type="radio" name="Lunch_D2" id="flexRadioDefault1" value="葷">
											</td>
											<td>
												<input required="required" class="form-check-input" type="radio" name="Lunch_D2" id="flexRadioDefault1" value="素">
											</td>
											<td>
												<input required="required" class="form-check-input" type="radio" name="Lunch_D2" id="flexRadioDefault1" value="不需要">
											</td>
										</tr>
										<tr>
											<th scope="row">12／16（五）晚餐</th>
											<td>
												<input required="required" class="form-check-input" type="radio" name="Dinner_D2" id="flexRadioDefault1" value="葷">
											</td>
											<td>
												<input required="required" class="form-check-input" type="radio" name="Dinner_D2" id="flexRadioDefault1" value="素">
											</td>
											<td>
												<input required="required" class="form-check-input" type="radio" name="Dinner_D2" id="flexRadioDefault1" value="不需要">
											</td>
										</tr>
										<tr>
											<th scope="row">12／17（六）午餐</th>
											<td>
												<input required="required" class="form-check-input" type="radio" name="Lunch_D3" id="flexRadioDefault1" value="葷">
											</td>
											<td>
												<input required="required" class="form-check-input" type="radio" name="Lunch_D3" id="flexRadioDefault1" value="素">
											</td>
											<td>
												<input required="required" class="form-check-input" type="radio" name="Lunch_D3" id="flexRadioDefault1" value="不需要">
											</td>
										</tr>
									</tbody>
								</table>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">晚宴攜伴調查（葷食）</span>
									</div>
									<input type="text" required="required" name="DinnerCompanion_Omnivorous" class="form-control" placeholder="請輸入晚宴攜伴人數（葷食）" aria-label="Username" aria-describedby="basic-addon1" value="0">
								</div>
								<br>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">晚宴攜伴調查（素食）</span>
									</div>
									<input type="text" required="required" name="DinnerCompanion_Vegetarian" class="form-control" placeholder="請輸入晚宴攜伴人數（素食）" aria-label="Username" aria-describedby="basic-addon1" value="0">
								</div>
								<br>
								其他特殊註記：<input type="text" name="Notice" class="form-control" name=""></input>	
							</div>
						</div><!--- END COL -->
						<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
							<div class="faq_desc">
								<p class="question"><span>收據資訊:</span></p>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">收據抬頭</span>
									</div>
									<input type="text" name="ReceiptHeader" class="form-control" placeholder="請輸入收據抬頭" aria-label="Username" aria-describedby="basic-addon1">
								</div>
								<br>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">統一編號</span>
									</div>
									<input type="text" name="TaxID" class="form-control" placeholder="請輸入統一編號" aria-label="Username" aria-describedby="basic-addon1">
								</div>
								<br>
							</div>
						</div><!--- END COL -->
						<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
							<div class="faq_desc">
								<p class="question"><span>個資同意宣告:</span></p>
								<p class="ans">這裡放東西</p>
								<button type="submit"  form="registration" class="btn btn-success">同意以上宣告並確定報名</button>
							</div>
						</div><!--- END COL -->
					</div><!--- END ROW -->
				</div><!--- END CONTAINER -->
			</section>
		<!-- END FORM -->
	
		<!-- START FOOTER TOP-->
		<section class="footer-top">
			<div class="footer_overlay section-padding">	
				<div class="container">
					<div class="row">					
						<div class="col-md-8 col-sm-8  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
							<div class="single_footer">
								<h1>TANET2022</h1>
								<p>本年度大會主題定為「元宇宙時代之智慧創新科技」。此外，本年度將也包含近年來關注的主題，包含５Ｇ行動通訊、物聯網、人工智慧、大數據、雲端技術、資訊安全、個人資料保護、數位創新學習、數位基礎設施等，期盼透過此研討會邀集產官學界的專家學者、台灣區網的資訊服務人員、網路從業人員的互動，藉由聚焦上述議題與廣泛之討論，提升資訊相關產業能量，探討建構一個智慧、創新且安全資訊環境。</p>
								<div class="footer_contact">
									<ul>
										<li><i class="fa fa-phone"></i> 聯絡窗口（張雅媛 小姐） -  （03）4506333#8131</li>
										<li><i class="fa fa-envelope"></i> tanet2022@ntub.edu.tw</li>
										<li><i class="fa fa-rocket"></i> 國立臺北商業大學平鎮校區</li>
									</ul>
								</div>
							</div>
						</div><!--- END COL -->
						<div class="col-md-4 col-sm-4  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
							<div class="single_footer">
								<h1>相關連結</h1>
								<ul>
									<li><a href="https://tanet2022.ntub.edu.tw/" target="_blank">研討會首頁</a></li>
									<li><a href="https://tanetsys.mcu.edu.tw/index.php/tanet2022/tanet2022" target="_blank">投稿系統</a></li>
									<li><a href="index.php">報名研討會</a></li>
									<?php
										if(isset($_SESSION['tanet2022_Islogin'])){
											echo"<li><a href='backstage_finance.php'>後臺管理</a></li>";
											echo"<li><a href='logout.php'>登出</a></li>";
										}
										else
											echo"<li><a href='login.php'>後臺登入</a></li>";
									?>
								</ul>
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
						<p class="footer_copyright">2022.Design by NTTU-BEAR</p>						
					</div><!--- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</footer>
		<!-- END FOOTER BOTTOM-->	
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