<!DOCTYPE html>
<?php
	session_start();//開啟session
	include_once("conn_mysql.php");
	if(isset($_SESSION['tanet2022_Islogin'])){

	}
	else
		echo"<script  language=\"JavaScript\">alert('請先登入');location.href=\"login.php\";</script>";
?>
<html lang="zh-TW">

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
							<li><a href="Information.php">報名狀態查詢</a></li>
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
		<section class="section-top" style="background-image: url(assets/img/bg/section-bg.jpg);">
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
		<form method="post" action="updatedata.php" name="updatedata" id="updatedata">
			<section class="faq">
				<div class="" style="margin: 0px 5% auto;">
					<div class="row">
						<table class="table">
							<thead>
								<tr>
								<th scope="col">報名編號</th>
								<th scope="col">姓名</th>
								<th scope="col">單位</th>
								<th scope="col">身份別</th>
								<th scope="col">論文篇數</th>
								<th scope="col">論文篇數<br>（主編）</th>
								<th scope="col">收據號碼</th>
								<th scope="col">交易序號</th>
								<th scope="col">繳費方式</th>
								<th scope="col">繳費日期</th>
								<th scope="col">繳費金額</th>
								<th scope="col">特殊案例</th>
								<th scope="col">帳款狀態</th>
								<th scope="col">處理</th>
								</tr>
							</thead>
							<tbody>
								<tr>	
									<td colspan="14" align="right" valign="top">
										<button type='submit'  form='updatedata' class='btn btn-success' name='updatedata' value='all'>全部儲存</button>
									</td>
								</tr>
								<?php 
									$sql_query_DataID="SELECT * FROM `alltable` WHERE 1";//取得報名資訊ID
									$DataID_result=mysqli_query($db_link,$sql_query_DataID) or die("Data_result查詢失敗");
									while($row_DataID=mysqli_fetch_array($DataID_result)){//查出某筆ID
										echo "<tr>";
											echo "<th scope='row'><a href='Information.php?search_ID=".$row_DataID['_ID']."' target='_blank'>".$row_DataID['_ID']."</a></th>";
											$sql_query_PersonalData="SELECT * FROM `personal` WHERE `_ID`='".$row_DataID['personalID']."'";//取得報名資訊ID
											$PersonalData_result=mysqli_query($db_link,$sql_query_PersonalData) or die("Data_result查詢失敗");
											while($row_PersonalData=mysqli_fetch_array($PersonalData_result)){//查出PersonalData
												echo "<td>".$row_PersonalData['Cname']."</td>";
												echo "<td>".$row_PersonalData['Unit']."</td>";
												echo "<td>".$row_PersonalData['Identity']."</td>";
												echo "<td>".$row_PersonalData['PapersAmount']."</td>";
												echo "<td>".$row_PersonalData['PapersAmount_ChiefEditor']."</td>";
												break;
											}
											$sql_query_FinanceData="SELECT * FROM `finance` WHERE `_ID`='".$row_DataID['financeID']."'";//取得金融資訊ID
											$FinanceData_result=mysqli_query($db_link,$sql_query_FinanceData) or die("Data_result查詢失敗");
											while($row_FinanceData=mysqli_fetch_array($FinanceData_result)){//查出PersonalData
												// echo "<td>".$row_FinanceData['ReceiptHeader']."</td>";
												// echo "<td>".$row_FinanceData['TaxID']."</td>";
												echo "<td>".$row_FinanceData['ReceiptID']."</td>";
												echo "<td><input type='text' name='".$row_FinanceData['_ID']."_TransactionID' class='form-control' value='".$row_FinanceData['TransactionID']."'></td>";
												echo "<td>";
													echo "<select class='form-control' name='".$row_FinanceData['_ID']."_PaymentMethod'>";
														echo "<option value='未繳'";
															if($row_FinanceData['PaymentMethod']=="未繳") echo "selected";
														echo ">未繳</option>";
														echo "<option value='匯款'";
															if($row_FinanceData['PaymentMethod']=="匯款") echo "selected";
														echo ">匯款</option>";
														echo "<option value='ATM轉帳'";
															if($row_FinanceData['PaymentMethod']=="ATM轉帳") echo "selected";
														echo ">ATM轉帳</option>";
														echo "<option value='信用卡'";
															if($row_FinanceData['PaymentMethod']=="信用卡") echo "selected";
														echo ">信用卡</option>";
													echo "</select>";
												echo "</td>";
												echo "<td>";
													echo "<input type='date' name='".$row_FinanceData['_ID']."_PaymentDate' value='".$row_FinanceData['PaymentDate']."'>";
												echo "</td>";
												echo "<td><input type='number' name='".$row_FinanceData['_ID']."_PaymentAmount' class='form-control' value='".$row_FinanceData['PaymentAmount']."'></td>";
												echo "<td><input type='text' name='".$row_FinanceData['_ID']."_SpecialCase' class='form-control' value='".$row_FinanceData['SpecialCase']."'></td>";
												echo "<td>";
													echo "<select class='form-control' name='".$row_FinanceData['_ID']."_FinanceStatus'>";
														echo "<option value='尚未處理'";
															if($row_FinanceData['FinanceStatus']=="尚未處理") echo "selected";
														echo ">尚未處理</option>";
														echo "<option value='帳款已核'";
															if($row_FinanceData['FinanceStatus']=="帳款已核") echo "selected";
														echo ">帳款已核</option>";
														echo "<option value='款項異常'";
															if($row_FinanceData['FinanceStatus']=="款項異常") echo "selected";
														echo ">款項異常</option>";
													echo "</select>";
												echo "</td>";
												break;
											}
											echo "<td><button type='submit'  form='updatedata' class='btn btn-success' name='updatedata' value='".$row_FinanceData['_ID']."'>更新資料</button></td>";
										echo "</tr>";
									}
								?>
							</tbody>
						</table>
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
									<li><a href="Information.php">報名狀態查詢</a></li>
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