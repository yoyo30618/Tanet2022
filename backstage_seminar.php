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
				margin-top:80px;
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
		<form method="post" action="backstage_seminar.php" name="search_seminar" id="search_seminar">
			<section class="faq">
				<div class="" style="margin: 0px 5% auto;">
					<div class="row">
						<table class="table">
							<thead>
								<tr>
									<th scope="col" colspan="4" style="text-align:center;color:red;">請擇一輸入查詢</th>
									<th scope="col" rowspan="2" style="text-align:center;">報名編號</th>
									<th scope="col" colspan="3" style="text-align:center;">午餐</th>
									<th scope="col" colspan="2" style="text-align:center;">晚餐</th>
									<th scope="col" colspan="2" style="text-align:center;">晚宴攜伴</th>
									<th scope="col" colspan="3" style="text-align:center;">交通方式</th>
								</tr>
								<tr>
									<th scope="col" style="text-align:center;">報名編號</th>
									<th scope="col" style="text-align:center;">姓名</th>
									<th scope="col" style="text-align:center;">電子信箱</th>
									<th scope="col" style="text-align:center;">查詢</th>
									<th scope="col" style="text-align:center;">12/15(四)</th>
									<th scope="col" style="text-align:center;">12/16(五)</th>
									<th scope="col" style="text-align:center;">12/17(六)</th>
									<th scope="col" style="text-align:center;">12/15(四)</th>
									<th scope="col" style="text-align:center;">12/16(五)</th>
									<th scope="col" style="text-align:center;">葷食人數</th>
									<th scope="col" style="text-align:center;">素食人數</th>
									<th scope="col" style="text-align:center;">12/15(四)</th>
									<th scope="col" style="text-align:center;">12/16(五)</th>
									<th scope="col" style="text-align:center;">12/17(六)</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									echo "<tr>";
										echo "<td style='text-align:center;'><input type='text' name='SearchSeminarID' class='form-control'";
										if(isset($_POST['SearchSeminarID'])) echo " value='".$_POST['SearchSeminarID']."'>";
										echo "</td>";
										echo "<td style='text-align:center;'><input type='text' name='SearchSeminarCname' class='form-control'";
										if(isset($_POST['SearchSeminarCname'])&&$_POST['SearchSeminarID']=="") echo " value='".$_POST['SearchSeminarCname']."'>";
										echo "</td>";
										echo "<td style='text-align:center;'><input type='text' name='SearchSeminarEmail' class='form-control'";
										if(isset($_POST['SearchSeminarEmail'])&&$_POST['SearchSeminarID']=="") echo " value='".$_POST['SearchSeminarEmail']."'>";
										echo "</td>";
										echo "<td style='text-align:center;'><button type='submit'  form='search_seminar' class='btn btn-success' name='search_seminar'>查詢</button></td>";
										if((isset($_POST['SearchSeminarID']) && $_POST['SearchSeminarID']!="")){//透過ID查詢

											$sql_query_DataID="SELECT * FROM seminar WHERE `_ID`=any(SELECT `seminarID` FROM `alltable` WHERE `_ID`=".$_POST['SearchSeminarID'].")";//建立子查詢 透過報名ID找到正確的SearchSeminarID
											$DataID_result=mysqli_query($db_link,$sql_query_DataID) or die("sql_query_DataID查詢失敗");
											$rowcount=mysqli_num_rows($DataID_result);
											if($rowcount==0){//沒找到該筆 一樣印空白
												echo "<td colspan='10' style='text-align:center;color:red'>找不到該ID</td>";
											}
											else{//有SeminarID後查詢
												while($row_DataID=mysqli_fetch_array($DataID_result)){//符合該筆ID的所有資料													
													echo "<td style='text-align:center;'><a href='Information.php?search_ID=".$row_DataID['_ID']."' target='_blank'>".$row_DataID['_ID']."</a></td>";																	
													echo "<td style='text-align:center;'>".$row_DataID['Lunch_D1']."</td>";//第一天午餐													
													echo "<td style='text-align:center;'>".$row_DataID['Lunch_D2']."</td>";//第二天午餐													
													echo "<td style='text-align:center;'>".$row_DataID['Lunch_D3']."</td>";//第三天午餐													
													echo "<td style='text-align:center;'>".$row_DataID['Dinner_D1']."</td>";//第一天晚餐													
													echo "<td style='text-align:center;'>".$row_DataID['Dinner_D2']."</td>";//第二天晚餐
													//晚宴攜伴
													echo "<td style='text-align:center;'>".$row_DataID['DinnerCompanion_Omnivorous']."</td>";
													echo "<td style='text-align:center;'>".$row_DataID['DinnerCompanion_Vegetarian']."</td>";
													//接駁車
													if($row_DataID['Transportation']=="搭乘大會接駁車"){
														echo "<td style='text-align:center;'>".$row_DataID['ShuttleBus_D1']."</td>";
														echo "<td style='text-align:center;'>".$row_DataID['ShuttleBus_D2']."</td>";
														echo "<td style='text-align:center;'>".$row_DataID['ShuttleBus_D3']."</td>";
													}
													else{
														echo "<td style='text-align:center;'>".$row_DataID['Transportation']."</td>";
														echo "<td style='text-align:center;'>".$row_DataID['Transportation']."</td>";
														echo "<td style='text-align:center;'>".$row_DataID['Transportation']."</td>";
													}
												}
											}
										}
										else if((isset($_POST['SearchSeminarCname']) && $_POST['SearchSeminarCname']!="")||(isset($_POST['SearchSeminarEmail']) && $_POST['SearchSeminarEmail']!="")){//透過姓名或信箱查詢
											//瘋狂雙層子查詢 透過信箱或姓名 拿到報名ID 透過報名ID拿到seminarID
											$sql_query_DataID="SELECT * FROM `seminar` WHERE `_ID`=";
											$sql_query_DataID=$sql_query_DataID."any(SELECT `seminarID` FROM `alltable` WHERE `personalID`=";
											$sql_query_DataID=$sql_query_DataID."any(SELECT _ID FROM `personal` WHERE `Cname`='".$_POST['SearchSeminarCname']."' OR `Email`='".$_POST['SearchSeminarEmail']."'))";
											$DataID_result=mysqli_query($db_link,$sql_query_DataID) or die("sql_query_DataID查詢失敗");
											$rowcount=mysqli_num_rows($DataID_result);
											if($rowcount==0){//沒找到該筆 一樣印空白
												echo "<td colspan='10' style='text-align:center;color:red'>找不到該ID</td>";
											}
											else{//有SeminarID後查詢
												$cnt=1;
												while($row_DataID=mysqli_fetch_array($DataID_result)){//符合該筆ID的所有資料													
													if($cnt>1){
														echo "<tr>";
														echo "<td></td>";
														echo "<td></td>";
														echo "<td></td>";
														echo "<td></td>";
													}
													echo "<td style='text-align:center;'><a href='Information.php?search_ID=".$row_DataID['_ID']."' target='_blank'>".$row_DataID['_ID']."</a></td>";		
													echo "<td style='text-align:center;'>".$row_DataID['Lunch_D1']."</td>";//第一天午餐													
													echo "<td style='text-align:center;'>".$row_DataID['Lunch_D2']."</td>";//第二天午餐													
													echo "<td style='text-align:center;'>".$row_DataID['Lunch_D3']."</td>";//第三天午餐													
													echo "<td style='text-align:center;'>".$row_DataID['Dinner_D1']."</td>";//第一天晚餐													
													echo "<td style='text-align:center;'>".$row_DataID['Dinner_D2']."</td>";//第二天晚餐
													//晚宴攜伴
													echo "<td style='text-align:center;'>".$row_DataID['DinnerCompanion_Omnivorous']."</td>";
													echo "<td style='text-align:center;'>".$row_DataID['DinnerCompanion_Vegetarian']."</td>";
													//接駁車
													if($row_DataID['Transportation']=="搭乘大會接駁車"){
														echo "<td style='text-align:center;'>".$row_DataID['ShuttleBus_D1']."</td>";
														echo "<td style='text-align:center;'>".$row_DataID['ShuttleBus_D2']."</td>";
														echo "<td style='text-align:center;'>".$row_DataID['ShuttleBus_D3']."</td>";
													}
													else{
														echo "<td style='text-align:center;'>".$row_DataID['Transportation']."</td>";
														echo "<td style='text-align:center;'>".$row_DataID['Transportation']."</td>";
														echo "<td style='text-align:center;'>".$row_DataID['Transportation']."</td>";
													}
													if($cnt>1){
														echo "</tr>";
													}
													$cnt++;
												}
											}
										}
										else{//沒有查詢 印空表
											for($i=0;$i<10;$i++)
												echo "<td></td>";
										}
									echo "</tr>";
								?>	
							</tbody>
						</table>
						<h1 style='color:red'>總數統計</h1>
						<table class="table">
							<thead>
								<tr>
									<th scope="col" rowspan="2" style="text-align:center;vertical-align: middle;">報名人數</th>
									<th scope="col" rowspan="2" style="text-align:center;vertical-align: middle;">論文篇數</th>
									<th scope="col" colspan="3" style="text-align:center;border-right:1px solid;">午餐</th>
									<th scope="col" colspan="2" style="text-align:center;border-right:1px solid;">晚餐</th>
									<th scope="col" rowspan="2" style="text-align:center;vertical-align: middle;">晚宴攜伴</th>
								</tr>
								<tr>
									<th scope="col" style="text-align:center;">12/15(四)</th>
									<th scope="col" style="text-align:center;">12/16(五)</th>
									<th scope="col" style="text-align:center;border-right:1px solid">12/17(六)</th>
									<th scope="col" style="text-align:center;">12/15(四)</th>
									<th scope="col" style="text-align:center;border-right:1px solid">12/16(五)</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									// 查詢幾筆報名
									// SELECT COUNT(*) AS Cnt_Register FROM alltable
								    // 查詢論文及主編總篇數
									// SELECT SUM(`PapersAmount`) AS Cnt_PapersAmount FROM personal
									$Cnt_Register=0;
									$Cnt_PapersAmount=0;
									$Lunch_D1_葷=0;
									$Lunch_D1_素=0;
									$Lunch_D1_不需要=0;
									$Lunch_D2_葷=0;
									$Lunch_D2_素=0;
									$Lunch_D2_不需要=0;
									$Lunch_D3_葷=0;
									$Lunch_D3_素=0;
									$Lunch_D3_不需要=0;
									$Dinner_D1_葷=0;
									$Dinner_D1_素=0;
									$Dinner_D1_不需要=0;
									$Dinner_D2_葷=0;
									$Dinner_D2_素=0;
									$Dinner_D2_不需要=0;
									$DinnerCompanion_Omnivorous=0;
									$DinnerCompanion_Vegetarian=0;
									$Room_D1_0p=0;
									$Room_D1_2p=0;
									$Room_D1_3p=0;
									$Room_D1_4p=0;
									$Room_D2_0p=0;
									$Room_D2_2p=0;
									$Room_D2_3p=0;
									$Room_D2_4p=0;
									$Room_D3_0p=0;
									$Room_D3_2p=0;
									$Room_D3_3p=0;
									$Room_D3_4p=0;

									$ShuttleBus_D1_不需要=0;
									$ShuttleBus_D1_會場往返桃園高鐵站=0;
									$ShuttleBus_D1_會場往返中壢火車站=0;
									$ShuttleBus_D2_不需要=0;
									$ShuttleBus_D2_會場往返桃園高鐵站=0;
									$ShuttleBus_D2_會場往返中壢火車站=0;
									$ShuttleBus_D3_不需要=0;
									$ShuttleBus_D3_會場往返桃園高鐵站=0;
									$ShuttleBus_D3_會場往返中壢火車站=0;

									$sql_query_Data="SELECT COUNT(*) AS Cnt_Register FROM alltable";
									$DataID_result=mysqli_query($db_link,$sql_query_Data) or die("sql_query_Data查詢失敗");
									while($rowData=mysqli_fetch_array($DataID_result)){
										$Cnt_Register=$rowData['Cnt_Register'];
										break;
									}

									$sql_query_Data="SELECT SUM(`PapersAmount`) AS Cnt_PapersAmount FROM personal";
									$DataID_result=mysqli_query($db_link,$sql_query_Data) or die("sql_query_Data查詢失敗");
									while($rowData=mysqli_fetch_array($DataID_result)){
										$Cnt_PapersAmount=$rowData['Cnt_PapersAmount'];
										break;
									}
									$sql_query_Data="SELECT COUNT(CASE WHEN `Lunch_D1`='葷' THEN 1 END) AS Lunch_D1_葷 ,COUNT(CASE WHEN `Lunch_D1`='素' THEN 1 END) AS Lunch_D1_素 ,COUNT(CASE WHEN `Lunch_D1`='不需要' THEN 1 END) AS Lunch_D1_不需要,";
									$sql_query_Data=$sql_query_Data."COUNT(CASE WHEN `Lunch_D2`='葷' THEN 1 END) AS Lunch_D2_葷 ,COUNT(CASE WHEN `Lunch_D2`='素' THEN 1 END) AS Lunch_D2_素 ,COUNT(CASE WHEN `Lunch_D2`='不需要' THEN 1 END) AS Lunch_D2_不需要,";
									$sql_query_Data=$sql_query_Data."COUNT(CASE WHEN `Lunch_D3`='葷' THEN 1 END) AS Lunch_D3_葷 ,COUNT(CASE WHEN `Lunch_D3`='素' THEN 1 END) AS Lunch_D3_素 ,COUNT(CASE WHEN `Lunch_D3`='不需要' THEN 1 END) AS Lunch_D3_不需要,";
									$sql_query_Data=$sql_query_Data."COUNT(CASE WHEN `Dinner_D1`='葷' THEN 1 END) AS Dinner_D1_葷 ,COUNT(CASE WHEN `Dinner_D1`='素' THEN 1 END) AS Dinner_D1_素 ,COUNT(CASE WHEN `Dinner_D1`='不需要' THEN 1 END) AS Dinner_D1_不需要,";
									$sql_query_Data=$sql_query_Data."COUNT(CASE WHEN `Dinner_D2`='葷' THEN 1 END) AS Dinner_D2_葷 ,COUNT(CASE WHEN `Dinner_D2`='素' THEN 1 END) AS Dinner_D2_素 ,COUNT(CASE WHEN `Dinner_D2`='不需要' THEN 1 END) AS Dinner_D2_不需要,";
									$sql_query_Data=$sql_query_Data."SUM(`DinnerCompanion_Omnivorous`) AS DinnerCompanion_Omnivorous ,SUM(`DinnerCompanion_Vegetarian`) AS DinnerCompanion_Vegetarian,";
									$sql_query_Data=$sql_query_Data."COUNT(CASE WHEN `Room_D1`='不需要' THEN 1 END) AS Room_D1_0p ,COUNT(CASE WHEN `Room_D1`='精緻客房' THEN 1 END) AS Room_D1_2p ,COUNT(CASE WHEN `Room_D1`='親子三人房' THEN 1 END) AS Room_D1_3p,COUNT(CASE WHEN `Room_D1`='溫馨家庭房' THEN 1 END) AS Room_D1_4p,";
									$sql_query_Data=$sql_query_Data."COUNT(CASE WHEN `Room_D2`='不需要' THEN 1 END) AS Room_D2_0p ,COUNT(CASE WHEN `Room_D2`='精緻客房' THEN 1 END) AS Room_D2_2p ,COUNT(CASE WHEN `Room_D2`='親子三人房' THEN 1 END) AS Room_D2_3p,COUNT(CASE WHEN `Room_D2`='溫馨家庭房' THEN 1 END) AS Room_D2_4p,";
									$sql_query_Data=$sql_query_Data."COUNT(CASE WHEN `Room_D3`='不需要' THEN 1 END) AS Room_D3_0p ,COUNT(CASE WHEN `Room_D3`='精緻客房' THEN 1 END) AS Room_D3_2p ,COUNT(CASE WHEN `Room_D3`='親子三人房' THEN 1 END) AS Room_D3_3p,COUNT(CASE WHEN `Room_D3`='溫馨家庭房' THEN 1 END) AS Room_D3_4p,";
									
									$sql_query_Data=$sql_query_Data."COUNT(CASE WHEN `ShuttleBus_D1`='不需要' THEN 1 END) AS ShuttleBus_D1_不需要 ,COUNT(CASE WHEN `ShuttleBus_D1`='會場往返桃園高鐵站' THEN 1 END) AS ShuttleBus_D1_會場往返桃園高鐵站 ,COUNT(CASE WHEN `ShuttleBus_D1`='會場往返中壢火車站' THEN 1 END) AS ShuttleBus_D1_會場往返中壢火車站,";
									$sql_query_Data=$sql_query_Data."COUNT(CASE WHEN `ShuttleBus_D2`='不需要' THEN 1 END) AS ShuttleBus_D2_不需要 ,COUNT(CASE WHEN `ShuttleBus_D2`='會場往返桃園高鐵站' THEN 1 END) AS ShuttleBus_D2_會場往返桃園高鐵站 ,COUNT(CASE WHEN `ShuttleBus_D2`='會場往返中壢火車站' THEN 1 END) AS ShuttleBus_D2_會場往返中壢火車站,";
									$sql_query_Data=$sql_query_Data."COUNT(CASE WHEN `ShuttleBus_D3`='不需要' THEN 1 END) AS ShuttleBus_D3_不需要 ,COUNT(CASE WHEN `ShuttleBus_D3`='會場往返桃園高鐵站' THEN 1 END) AS ShuttleBus_D3_會場往返桃園高鐵站 ,COUNT(CASE WHEN `ShuttleBus_D3`='會場往返中壢火車站' THEN 1 END) AS ShuttleBus_D3_會場往返中壢火車站";
									$sql_query_Data=$sql_query_Data." FROM `seminar` WHERE 1";
									// echo $sql_query_Data;
									$DataID_result=mysqli_query($db_link,$sql_query_Data) or die("sql_query_Data查詢失敗");
									while($rowData=mysqli_fetch_array($DataID_result)){
										$Lunch_D1_葷=$rowData['Lunch_D1_葷'];
										$Lunch_D1_素=$rowData['Lunch_D1_素'];
										$Lunch_D1_不需要=$rowData['Lunch_D1_不需要'];
										$Lunch_D2_葷=$rowData['Lunch_D2_葷'];
										$Lunch_D2_素=$rowData['Lunch_D2_素'];
										$Lunch_D2_不需要=$rowData['Lunch_D2_不需要'];
										$Lunch_D3_葷=$rowData['Lunch_D3_葷'];
										$Lunch_D3_素=$rowData['Lunch_D3_素'];
										$Lunch_D3_不需要=$rowData['Lunch_D3_不需要'];
										$Dinner_D1_葷=$rowData['Dinner_D1_葷'];
										$Dinner_D1_素=$rowData['Dinner_D1_素'];
										$Dinner_D1_不需要=$rowData['Dinner_D1_不需要'];
										$Dinner_D2_葷=$rowData['Dinner_D2_葷'];
										$Dinner_D2_素=$rowData['Dinner_D2_素'];
										$Dinner_D2_不需要=$rowData['Dinner_D2_不需要'];
										$DinnerCompanion_Omnivorous=$rowData['DinnerCompanion_Omnivorous'];
										$DinnerCompanion_Vegetarian=$rowData['DinnerCompanion_Vegetarian'];										
										$Room_D1_0p=$rowData['Room_D1_0p'];
										$Room_D1_2p=$rowData['Room_D1_2p'];
										$Room_D1_3p=$rowData['Room_D1_3p'];
										$Room_D1_4p=$rowData['Room_D1_4p'];
										$Room_D2_0p=$rowData['Room_D2_0p'];
										$Room_D2_2p=$rowData['Room_D2_2p'];
										$Room_D2_3p=$rowData['Room_D2_3p'];
										$Room_D2_4p=$rowData['Room_D2_4p'];
										$Room_D3_0p=$rowData['Room_D3_0p'];
										$Room_D3_2p=$rowData['Room_D3_2p'];
										$Room_D3_3p=$rowData['Room_D3_3p'];
										$Room_D3_4p=$rowData['Room_D3_4p'];
										$ShuttleBus_D1_不需要=$rowData['ShuttleBus_D1_不需要'];
										$ShuttleBus_D1_會場往返桃園高鐵站=$rowData['ShuttleBus_D1_會場往返桃園高鐵站'];
										$ShuttleBus_D1_會場往返中壢火車站=$rowData['ShuttleBus_D1_會場往返中壢火車站'];
										$ShuttleBus_D2_不需要=$rowData['ShuttleBus_D2_不需要'];
										$ShuttleBus_D2_會場往返桃園高鐵站=$rowData['ShuttleBus_D2_會場往返桃園高鐵站'];
										$ShuttleBus_D2_會場往返中壢火車站=$rowData['ShuttleBus_D2_會場往返中壢火車站'];
										$ShuttleBus_D3_不需要=$rowData['ShuttleBus_D3_不需要'];
										$ShuttleBus_D3_會場往返桃園高鐵站=$rowData['ShuttleBus_D3_會場往返桃園高鐵站'];
										$ShuttleBus_D3_會場往返中壢火車站=$rowData['ShuttleBus_D3_會場往返中壢火車站'];
										break;
									}
									
									echo "<tr>";
									echo "<td style='text-align:center;'>".$Cnt_Register."</td>";
									echo "<td style='text-align:center;'>".$Cnt_PapersAmount."</td>";
									echo "<td style='text-align:center;'>葷".$Lunch_D1_葷."<br>素".$Lunch_D1_素."<br>不需要".$Lunch_D1_不需要."</td>";
									echo "<td style='text-align:center;'>葷".$Lunch_D2_葷."<br>素".$Lunch_D2_素."<br>不需要".$Lunch_D2_不需要."</td>";
									echo "<td style='text-align:center;border-right:1px solid'>葷".$Lunch_D3_葷."<br>素".$Lunch_D3_素."<br>不需要".$Lunch_D3_不需要."</td>";
									echo "<td style='text-align:center;'>葷".$Dinner_D1_葷."<br>素".$Dinner_D1_素."<br>不需要".$Dinner_D1_不需要."</td>";
									echo "<td style='text-align:center;border-right:1px solid'>葷".$Dinner_D2_葷."<br>素".$Dinner_D2_素."<br>不需要".$Dinner_D2_不需要."</td>";
									echo "<td style='text-align:center;'>葷".$DinnerCompanion_Omnivorous."<br>素".$DinnerCompanion_Vegetarian."<br></td>";
									echo "</tr>";
								?>	
							</tbody>
						</table>
						<table class="table">
							<thead>
								<tr>
									<th scope="col" colspan="3" style="text-align:center;border-right:1px solid;">住宿資訊</th>
									<th scope="col" colspan="3" style="text-align:center;">交通方式</th>
								</tr>
								<tr>
									<th scope="col" style="text-align:center;">12/14(三)</th>
									<th scope="col" style="text-align:center;">12/15(四)</th>
									<th scope="col" style="text-align:center;border-right:1px solid;">12/16(五)</th>
									<th scope="col" style="text-align:center;">12/15(四)</th>
									<th scope="col" style="text-align:center;">12/16(五)</th>
									<th scope="col" style="text-align:center;">12/17(六)</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									
									echo "<tr>";
									echo "<td style='text-align:center;'>精緻客房(2人房)".$Room_D1_2p."<br>親子三人房".$Room_D1_3p."<br>溫馨家庭房(4人房)".$Room_D1_4p."<br>不需要".$Room_D1_0p."</td>";
									echo "<td style='text-align:center;'>精緻客房(2人房)".$Room_D2_2p."<br>親子三人房".$Room_D2_3p."<br>溫馨家庭房(4人房)".$Room_D2_4p."<br>不需要".$Room_D2_0p."</td>";
									echo "<td style='text-align:center;border-right:1px solid'>精緻客房(2人房)".$Room_D3_2p."<br>親子三人房".$Room_D3_3p."<br>溫馨家庭房(4人房)".$Room_D3_4p."<br>不需要".$Room_D3_0p."</td>";
									
									
									echo "<td style='text-align:center;'>會場往返桃園高鐵站".$ShuttleBus_D1_會場往返桃園高鐵站."<br>會場往返中壢火車站".$ShuttleBus_D1_會場往返中壢火車站."<br>不需要".$ShuttleBus_D1_不需要."</td>";
									echo "<td style='text-align:center;'>會場往返桃園高鐵站".$ShuttleBus_D2_會場往返桃園高鐵站."<br>會場往返中壢火車站".$ShuttleBus_D2_會場往返中壢火車站."<br>不需要".$ShuttleBus_D2_不需要."</td>";
									echo "<td style='text-align:center;'>會場往返桃園高鐵站".$ShuttleBus_D3_會場往返桃園高鐵站."<br>會場往返中壢火車站".$ShuttleBus_D3_會場往返中壢火車站."<br>不需要".$ShuttleBus_D3_不需要."</td>";
									echo "</tr>";
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