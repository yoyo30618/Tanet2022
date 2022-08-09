<!DOCTYPE html>
<html lang="zh-TW">
	<?php
		session_start();//開啟session
		include_once("conn_mysql.php");
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
		<section class="faq">
			<div class="container">
				<div class="row">
					<form method="get" action="Information.php" name="search_DataByID" id="search_DataByID">
						<div class="section-title text-center wow zoomIn">
							<h1>報名資訊查詢</h1>
							<span></span>
						</div>						
						<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
							<div class="faq_desc">
								<p class="question"><span>依序號查詢:</span></p>
								<p class="ans">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">報名序號</span>
										</div>
										<input type="number"  required="required" name="search_ID" class="form-control" placeholder="請輸入報名序號" aria-describedby="basic-addon1" value="<?php if(isset($_GET['search_ID'])) echo $_GET['search_ID']; ?>">
									</div>
									<br>
									<button type="submit"  form="search_DataByID" class="btn btn-success">查詢</button>
									<?php
										$rowcount=0;
										if(isset($_GET['search_ID'])){//如果有查詢 要顯示狀態
											$sql_query_FinanceStatus="SELECT `FinanceStatus` FROM `finance` WHERE `_ID`=(SELECT `financeID` FROM `alltable` WHERE `_ID`='".$_GET['search_ID']."')";//取得金融資料
											$FinanceStatus_result=mysqli_query($db_link,$sql_query_FinanceStatus) or die("FinanceData查詢失敗");
											$rowcount=mysqli_num_rows($FinanceStatus_result);
											if($rowcount==0) echo "<h2 style='color:red'>查無此ID</h2>";
											else{
												while($row_FinanceStatus=mysqli_fetch_array($FinanceStatus_result)){
													echo "<h2 style='color:red'>報名序號".$_GET['search_ID']."　款項狀態：".$row_FinanceStatus['FinanceStatus']."</h2>";
													break;
												}
											}
										}
									?>
								</p>
							</div>
						</div><!--- END COL -->		
					</form>
					<?php //有登入才可以看到底下
						if(isset($_SESSION['tanet2022_Islogin'])){
							//調取資料
							$PersonalID=-1;
							$SeminarID=-1;
							$FinanceID=-1;

							$Cname='';
							$Unit='';
							$Department='';
							$StuID='';
							$Identity='';
							$Job='';
							$Email='';
							$Phone='';
							$PapersAmount='';
							$PapersID='';

							$Transportation='';
							$CarLicense='';
							$ShuttleBus_D1='';
							$ShuttleBus_D2='';
							$ShuttleBus_D3='';
							$Lunch_D1='';
							$Lunch_D2='';
							$Lunch_D3='';
							$Dinner_D1='';
							$Dinner_D2='';
							$DinnerCompanion_Omnivorous='';
							$DinnerCompanion_Vegetarian='';
							$Notice='';

							$ReceiptHeader='';
							$TaxID='';
							if($rowcount!=0){//有ID 可查資料 $_GET['search_ID']
								/*查詢該ID各種資料*/
								$sql_query_FinanceData="SELECT * FROM `finance` WHERE `_ID`=(SELECT `financeID` FROM `alltable` WHERE `_ID`='".$_GET['search_ID']."')";//取得金融資料
								$sql_query_PersonalData="SELECT * FROM `personal` WHERE `_ID`=(SELECT `personalID` FROM `alltable` WHERE `_ID`='".$_GET['search_ID']."')";//取得金融資料
								$sql_query_SeminarData="SELECT * FROM `seminar` WHERE `_ID`=(SELECT `seminarID` FROM `alltable` WHERE `_ID`='".$_GET['search_ID']."')";//取得金融資料
								//處理FinanceData
								$FinanceData_result=mysqli_query($db_link,$sql_query_FinanceData) or die("FinanceData查詢失敗");
								while($row_FinanceData=mysqli_fetch_array($FinanceData_result)){
									$ReceiptHeader=$row_FinanceData['ReceiptHeader'];
									$TaxID=$row_FinanceData['TaxID'];
									$FinanceID=$row_FinanceData['_ID'];
									break;
								}								
								//處理PersonalData
								$PersonalData_result=mysqli_query($db_link,$sql_query_PersonalData) or die("PersonalData查詢失敗");
								while($row_PersonalData=mysqli_fetch_array($PersonalData_result)){
									$Cname=$row_PersonalData['Cname'];
									$Unit=$row_PersonalData['Unit'];
									$Department=$row_PersonalData['Department'];
									$StuID=$row_PersonalData['StuID'];
									$Identity=$row_PersonalData['Identity'];
									$Job=$row_PersonalData['Job'];
									$Email=$row_PersonalData['Email'];
									$Phone=$row_PersonalData['Phone'];
									$PapersAmount=$row_PersonalData['PapersAmount'];
									$PapersID=$row_PersonalData['PapersID'];
									$PersonalID=$row_PersonalData['_ID'];
									break;
								}								
								//處理SeminarData
								$SeminarData_result=mysqli_query($db_link,$sql_query_SeminarData) or die("SeminarData查詢失敗");
								while($row_SeminarData=mysqli_fetch_array($SeminarData_result)){
									$Transportation=$row_SeminarData['Transportation'];
									$CarLicense=$row_SeminarData['CarLicense'];
									$ShuttleBus_D1=$row_SeminarData['ShuttleBus_D1'];
									$ShuttleBus_D2=$row_SeminarData['ShuttleBus_D2'];
									$ShuttleBus_D3=$row_SeminarData['ShuttleBus_D3'];
									$Lunch_D1=$row_SeminarData['Lunch_D1'];
									$Lunch_D2=$row_SeminarData['Lunch_D2'];
									$Lunch_D3=$row_SeminarData['Lunch_D3'];
									$Dinner_D1=$row_SeminarData['Dinner_D1'];
									$Dinner_D2=$row_SeminarData['Dinner_D2'];
									$DinnerCompanion_Omnivorous=$row_SeminarData['DinnerCompanion_Omnivorous'];
									$DinnerCompanion_Vegetarian=$row_SeminarData['DinnerCompanion_Vegetarian'];
									$Notice=$row_SeminarData['Notice'];
									$SeminarID=$row_SeminarData['_ID'];
									break;
								}
							?>
								<form method="post" action="UpdateInformation.php" name="UpdateInformation" id="UpdateInformation">
									<?php
										echo "<input type='hidden' name='PersonalID' value='".$PersonalID."'>";
										echo "<input type='hidden' name='SeminarID' value='".$SeminarID."'>";
										echo "<input type='hidden' name='FinanceID' value='".$FinanceID."'>";
										echo "<input type='hidden' name='search_ID' value='".$_GET['search_ID']."'>";
									?>
									<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
										<div class="faq_desc">
											<p class="question"><span>基本資料:</span></p>
											<p class="ans">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">　　　　　　　姓名</span>
													</div>
													<input type="text"  value="<?php echo $Cname;?>" required="required" name="Cname" class="form-control" placeholder="請輸入姓名" aria-label="Username" aria-describedby="basic-addon1">
												</div>
												<br>
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">服務學校／就讀學校</span>
													</div>
													<input type="text"  value="<?php echo $Unit;?>" required="required" name="Unit" class="form-control" placeholder="請輸入服務學校／就讀學校" aria-label="Username" aria-describedby="basic-addon1">
												</div>
												<br>
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">服務科系／就讀科系</span>
													</div>
													<input type="text"  value="<?php echo $Department;?>" required="required" name="Department" class="form-control" placeholder="請輸入服務學校／就讀學校" aria-label="Username" aria-describedby="basic-addon1">
												</div>
												<br>
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">　　學生請輸入學號</span>
													</div>
													<input type="text"  value="<?php echo $StuID;?>" required="required" name="StuID" class="form-control" placeholder="學生請輸入學號" aria-label="Username" aria-describedby="basic-addon1">
												</div>
												<br>
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">　　　　　　身份別</span>
													</div>
													<select class="form-control" name="Identity">
														<option <?php if($Identity=="作者（非學生）")echo "selected";?> value="作者（非學生）">作者（非學生）</option>
														<option <?php if($Identity=="作者（學生）")echo "selected";?> value="作者（學生）">作者（學生）</option>
														<option <?php if($Identity=="學生（不需發表論文者）")echo "selected";?> value="學生（不需發表論文者）">學生（不需發表論文者）</option>
														<option <?php if($Identity=="主編")echo "selected";?> value="主編">主編</option>
														<option <?php if($Identity=="廠商")echo "selected";?> value="廠商">廠商</option>
														<option <?php if($Identity=="其他")echo "selected";?> value="其他">其他</option>
													</select>
												</div>
												<br>
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">　　　　　　　職稱</span>
													</div>
													<input type="text"  value="<?php echo $Job;?>" required="required" name="Job" class="form-control" placeholder="請輸入職稱" aria-label="Username" aria-describedby="basic-addon1">
												</div>
												<br>
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">　　　　　電子信箱</span>
													</div>
													<input type="email"  value="<?php echo $Email;?>" required="required" name="Email" class="form-control" placeholder="請輸入電子信箱" aria-label="Username" aria-describedby="basic-addon1">
												</div>
												<br>
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">　　　　　連絡電話</span>
													</div>
													<input type="text"  value="<?php echo $Phone;?>" required="required" name="Phone" class="form-control" placeholder="請輸入連絡電話" aria-label="Username" aria-describedby="basic-addon1">
												</div>
												<br>
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">　　　　　論文篇數</span>
													</div>
													<input type="number"  value="<?php echo $PapersAmount;?>" required="required" name="PapersAmount" class="form-control" placeholder="請輸入論文篇數" aria-label="Username" aria-describedby="basic-addon1">
												</div>
												<br>
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">　　　　　論文編號</span>
													</div>
													<input type="text"  value="<?php echo $PapersID;?>" name="PapersID" class="form-control" placeholder="請輸入論文編號（依半形逗號分隔）" aria-label="Username" aria-describedby="basic-addon1">
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
													<option  value="自行開車" <?php if($Transportation=="自行開車") echo "selected";?>>自行開車</option>
													<option  value="搭乘大會接駁車" <?php if($Transportation=="搭乘大會接駁車") echo "selected";?>>搭乘大會接駁車</option>
													<option  value="自行安排" <?php if($Transportation=="自行安排") echo "selected";?>>自行安排</option>
												</select>
											</div>
											<br>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1">　　　　　　　 入校車號</span>
												</div>
												<input type="text"  value="<?php echo $CarLicense;?>" name="CarLicense" class="form-control" placeholder="請輸入入校車號" aria-label="Username" aria-describedby="basic-addon1">
											</div>
											<br>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1">12／15（四）接駁車班次</span>
												</div>
												<select class="form-control" name="ShuttleBus_D1">
													<option value="不需要"  <?php if($ShuttleBus_D1=='不需要')echo "selected";?>>不需要</option>
													<option value="會場往返桃園高鐵站"  <?php if($ShuttleBus_D1=='會場往返桃園高鐵站')echo "selected";?>>會場往返桃園高鐵站</option>
													<option value="會場往返中壢火車站"  <?php if($ShuttleBus_D1=='會場往返中壢火車站')echo "selected";?>>會場往返中壢火車站</option>
												</select>
											</div>
											<br>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1">12／16（五）接駁車班次</span>
												</div>
												<select class="form-control" name="ShuttleBus_D2">
													<option value="不需要"  <?php if($ShuttleBus_D2=='不需要')echo "selected";?>>不需要</option>
													<option value="會場往返桃園高鐵站"  <?php if($ShuttleBus_D2=='會場往返桃園高鐵站')echo "selected";?>>會場往返桃園高鐵站</option>
													<option value="會場往返中壢火車站"  <?php if($ShuttleBus_D2=='會場往返中壢火車站')echo "selected";?>>會場往返中壢火車站</option>
												</select>
											</div>
											<br>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1">12／17（六）接駁車班次</span>
												</div>
												<select class="form-control" name="ShuttleBus_D3">
													<option value="不需要"  <?php if($ShuttleBus_D3=='不需要')echo "selected";?>>不需要</option>
													<option value="會場往返桃園高鐵站"  <?php if($ShuttleBus_D3=='會場往返桃園高鐵站')echo "selected";?>>會場往返桃園高鐵站</option>
													<option value="會場往返中壢火車站"  <?php if($ShuttleBus_D3=='會場往返中壢火車站')echo "selected";?>>會場往返中壢火車站</option>
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
															<input  required="required" class="form-check-input" type="radio" name="Lunch_D1" id="flexRadioDefault1" value="葷" <?php if($Lunch_D1=="葷") echo "checked";?>>
														</td>
														<td>
															<input  required="required"  class="form-check-input" type="radio" name="Lunch_D1" id="flexRadioDefault1" value="素" <?php if($Lunch_D1=="素") echo "checked";?>>
														</td>
														<td>
															<input  required="required" class="form-check-input" type="radio" name="Lunch_D1" id="flexRadioDefault1" value="不需要" <?php if($Lunch_D1=="不需要") echo "checked";?>>
														</td>
													</tr>
													<tr>
														<th scope="row">12／15（四）晚餐</th>
														<td>
															<input  required="required" class="form-check-input" type="radio" name="Dinner_D1" id="flexRadioDefault1" value="葷" <?php if($Dinner_D1=="葷") echo "checked";?>>
														</td>
														<td>
															<input  required="required" class="form-check-input" type="radio" name="Dinner_D1" id="flexRadioDefault1" value="素" <?php if($Dinner_D1=="素") echo "checked";?>>
														</td>
														<td>
															<input  required="required" class="form-check-input" type="radio" name="Dinner_D1" id="flexRadioDefault1" value="不需要" <?php if($Dinner_D1=="不需要") echo "checked";?>>
														</td>
													</tr>
													<tr>
														<th scope="row">12／16（五）午餐</th>
														<td>
															<input  required="required" class="form-check-input" type="radio" name="Lunch_D2" id="flexRadioDefault1" value="葷" <?php if($Lunch_D2=="葷") echo "checked";?>>
														</td>
														<td>
															<input  required="required" class="form-check-input" type="radio" name="Lunch_D2" id="flexRadioDefault1" value="素" <?php if($Lunch_D2=="素") echo "checked";?>>
														</td>
														<td>
															<input  required="required" class="form-check-input" type="radio" name="Lunch_D2" id="flexRadioDefault1" value="不需要" <?php if($Lunch_D2=="不需要") echo "checked";?>>
														</td>
													</tr>
													<tr>
														<th scope="row">12／16（五）晚餐</th>
														<td>
															<input  required="required" class="form-check-input" type="radio" name="Dinner_D2" id="flexRadioDefault1" value="葷" <?php if($Dinner_D2=="葷") echo "checked";?>>
														</td>
														<td>
															<input  required="required" class="form-check-input" type="radio" name="Dinner_D2" id="flexRadioDefault1" value="素" <?php if($Dinner_D2=="素") echo "checked";?>>
														</td>
														<td>
															<input  required="required" class="form-check-input" type="radio" name="Dinner_D2" id="flexRadioDefault1" value="不需要" <?php if($Dinner_D2=="不需要") echo "checked";?>>
														</td>
													</tr>
													<tr>
														<th scope="row">12／17（六）午餐</th>
														<td>
															<input  required="required" class="form-check-input" type="radio" name="Lunch_D3" id="flexRadioDefault1" value="葷" <?php if($Lunch_D3=="葷") echo "checked";?>>
														</td>
														<td>
															<input  required="required" class="form-check-input" type="radio" name="Lunch_D3" id="flexRadioDefault1" value="素" <?php if($Lunch_D3=="素") echo "checked";?>>
														</td>
														<td>
															<input  required="required" class="form-check-input" type="radio" name="Lunch_D3" id="flexRadioDefault1" value="不需要" <?php if($Lunch_D3=="不需要") echo "checked";?>>
														</td>
													</tr>
												</tbody>
											</table>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1">晚宴攜伴調查（葷食）</span>
												</div>
												<input type="text"  value="<?php echo $DinnerCompanion_Omnivorous;?>" required="required" name="DinnerCompanion_Omnivorous" class="form-control" placeholder="請輸入晚宴攜伴人數（葷食）" aria-label="Username" aria-describedby="basic-addon1" value="0">
											</div>
											<br>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1">晚宴攜伴調查（素食）</span>
												</div>
												<input type="text"  value="<?php echo $DinnerCompanion_Vegetarian;?>" required="required" name="DinnerCompanion_Vegetarian" class="form-control" placeholder="請輸入晚宴攜伴人數（素食）" aria-label="Username" aria-describedby="basic-addon1" value="0">
											</div>
											<br>
											其他特殊註記：<input type="text"  value="<?php echo $Notice;?>" name="Notice" class="form-control" name=""></input>	
										</div>
									</div><!--- END COL -->
									<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
										<div class="faq_desc">
											<p class="question"><span>收據資訊:</span></p>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1">收據抬頭</span>
												</div>
												<input type="text"  value="<?php echo $ReceiptHeader;?>" name="ReceiptHeader" class="form-control" placeholder="請輸入收據抬頭" aria-label="Username" aria-describedby="basic-addon1">
											</div>
											<br>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1">統一編號</span>
												</div>
												<input type="text"  value="<?php echo $TaxID;?>" name="TaxID" class="form-control" placeholder="請輸入統一編號" aria-label="Username" aria-describedby="basic-addon1">
											</div>
											<br>
										</div>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
										<div class="faq_desc">
											<button type="submit" name="UpdateInformation" form="UpdateInformation" class="btn btn-success">儲存更新資料</button>
										</div>
									</div><!--- END COL -->
								</form>
					<?php
							}
						}
					?>
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
