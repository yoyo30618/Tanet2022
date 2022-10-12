<!DOCTYPE html>
<html lang="zh-TW">
	<?php
		session_start();//開啟session
		//根據當前SESSION生成隨機數
		$code = mt_rand(0,1000000);
		$_SESSION['code'] = $code;
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
		<form method="post" action="submitdata.php" name="registration" id="registration">
			<input type="hidden"name="originator" value="<?=$code?>">
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
											<span class="input-group-text" id="basic-addon1">服務學校／就讀學校</span>
										</div>
										<input type="text"  required="required" name="Unit" class="form-control" placeholder="請輸入服務學校／就讀學校" aria-label="Username" aria-describedby="basic-addon1">
									</div>
									<br>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">服務科系／就讀科系</span>
										</div>
										<input type="text"  required="required" name="Department" class="form-control" placeholder="請輸入服務科系／就讀科系" aria-label="Username" aria-describedby="basic-addon1">
									</div>
									<br>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">　　學生請輸入學號</span>
										</div>
										<input type="text"  required="required" name="StuID" class="form-control" placeholder="學生請輸入學號" aria-label="Username" aria-describedby="basic-addon1">
									</div>
									<br>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">　　　　　　身份別</span>
										</div>
										<select class="form-control" name="Identity">
											<option value="學生" selected>學生</option>
											<option value="非學生">非學生</option>
											<option value="主編">主編</option>
											<option value="廠商">廠商</option>
											<option value="其他">其他</option>
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
										<input type="number"  required="required" name="PapersAmount" class="form-control" placeholder="請輸入論文篇數" aria-label="Username" aria-describedby="basic-addon1">
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
										<option value="會場往返桃園高鐵站" >會場往返桃園高鐵站</option>
										<option value="會場往返中壢火車站">會場往返中壢火車站</option>
									</select>
								</div>
								<br>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">12／16（五）接駁車班次</span>
									</div>
									<select class="form-control" name="ShuttleBus_D2">
										<option value="不需要" selected>不需要</option>
										<option value="會場往返桃園高鐵站" >會場往返桃園高鐵站</option>
										<option value="會場往返中壢火車站">會場往返中壢火車站</option>
									</select>
								</div>
								<br>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">12／17（六）接駁車班次</span>
									</div>
									<select class="form-control" name="ShuttleBus_D3">
										<option value="不需要" selected>不需要</option>
										<option value="會場往返桃園高鐵站" >會場往返桃園高鐵站</option>
										<option value="會場往返中壢火車站">會場往返中壢火車站</option>
									</select>
								</div>
								<br>
								<table class="table">
									<thead class="thead-dark">
										<tr>
										<th scope="col">住宿調查</th>
										<th scope="col">精緻客房(2人房)</th>
										<th scope="col">親子三人房</th>
										<th scope="col">溫馨家庭房(4人房)</th>
										<th scope="col">不需要</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">12／14（三）</th>
											<td>
												<input required="required" class="form-check-input" type="radio" name="Room_D1" id="flexRadioDefault1" value="精緻客房">
											</td>
											<td>
												<input required="required"  class="form-check-input" type="radio" name="Room_D1" id="flexRadioDefault1" value="親子三人房">
											</td>
											<td>
												<input required="required" class="form-check-input" type="radio" name="Room_D1" id="flexRadioDefault1" value="溫馨家庭房">
											</td>
											<td>
												<input checked required="required" class="form-check-input" type="radio" name="Room_D1" id="flexRadioDefault1" value="不需要">
											</td>
										</tr>
										<tr>
											<th scope="row">12／15（四）</th>
											<td>
												<input required="required" class="form-check-input" type="radio" name="Room_D2" id="flexRadioDefault1" value="精緻客房">
											</td>
											<td>
												<input required="required"  class="form-check-input" type="radio" name="Room_D2" id="flexRadioDefault1" value="親子三人房">
											</td>
											<td>
												<input required="required" class="form-check-input" type="radio" name="Room_D2" id="flexRadioDefault1" value="溫馨家庭房">
											</td>
											<td>
												<input checked required="required" class="form-check-input" type="radio" name="Room_D2" id="flexRadioDefault1" value="不需要">
											</td>
										</tr>
										<tr>
											<th scope="row">12／16（五）</th>
											<td>
												<input required="required" class="form-check-input" type="radio" name="Room_D3" id="flexRadioDefault1" value="精緻客房">
											</td>
											<td>
												<input required="required"  class="form-check-input" type="radio" name="Room_D3" id="flexRadioDefault1" value="親子三人房">
											</td>
											<td>
												<input required="required" class="form-check-input" type="radio" name="Room_D3" id="flexRadioDefault1" value="溫馨家庭房">
											</td>
											<td>
												<input checked required="required" class="form-check-input" type="radio" name="Room_D3" id="flexRadioDefault1" value="不需要">
											</td>
										</tr>
									</tbody>
								</table>
								住宿房型及費用資訊請參考：<a href='http://www.tygc.com.tw/tw/rooms.php' target='_blank'>悅華大酒店</a><br>
								因房數有限，依報名順序安排訂房。
								<br>
								<br>
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
								<p class="question"><span>款項資訊:</span></p>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">匯款帳號後五碼</span>
									</div>
									<input type="text" required="required" name="AccountTail" class="form-control" placeholder="請輸入匯款帳號後五碼" aria-label="Username" aria-describedby="basic-addon1">
								</div>
								<br>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">　　　匯款金額</span>
									</div>
									<input type="text" required="required" name="Amount" class="form-control" placeholder="請輸入匯款金額" aria-label="Username" aria-describedby="basic-addon1">
								</div>
								<br>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">　　　收據抬頭</span>
									</div>
									<input type="text" name="ReceiptHeader" class="form-control" placeholder="請輸入收據抬頭" aria-label="Username" aria-describedby="basic-addon1">
								</div>
								<br>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">　　　統一編號</span>
									</div>
									<input type="text" name="TaxID" class="form-control" placeholder="請輸入統一編號" aria-label="Username" aria-describedby="basic-addon1">
								</div>
								<br>
							</div>
						</div><!--- END COL -->
						<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
							<div class="faq_desc">
								<p class="question"><span>個資同意宣告:</span></p>
								<p class="ans">
								個人資料蒐集、處理及利用告知暨同意書<br>
								為了保障您的權益及幫助您瞭解 TANET2022臺灣網際網路研討會 主辦單位如何蒐集、處理及利用您個人資訊，請務必詳細閱讀本同意書之各項內容。<br>
								一、機構名稱:國立臺北商業大學。<br>
								二、個人資料蒐集之目的:基於辦理 TANET2022臺灣網際網路研討會 必要工作之目的。<br>
								三、個人資料蒐集之方式:透過網路報名取得個人資料。<br>
								四、個人資料蒐集之項目:姓名、飲食、學校名稱、系所、電子郵件、電話號碼。 <br>
								五、個人資料利用之期間、地區、對象及方式:<br>
								　　(一) 期間:本次活動結束後兩年。<br>
								　　(二) 地區:臺灣地區(包括澎湖、金門及馬祖等地區) 。<br>
								　　(三) 對象:主辦單位、協辦單位、主管機關及 TANET2022臺灣網際網路研討會 承辦單位。 <br>
								　　(四) 方式:1.電子文件、紙本或其他合於當時科技之適當方式。<br>
								　　　　　　　&nbsp;2.符合個資法第 16 條規定之利用。<br>
								六、您得依個資法規定請求查詢、閱覽、製給複製本、補充或更正、請求停止蒐集、處理或利用及請求刪除。行使上述權利時，須依主辦單位規定驗證確認本人身分後提出申請。若委託他人辦理，須另出具委託書並同時提供受託人身份證明文件以供核對。<br>
								七、若您未提供真實且正確完整之個人資料，導致無法辦理本次研討會相關業務時，將影響個人權益，請特別注意。<br>
								八、當您簽署本同意書時，即表示您已閱讀、瞭解並同意本同意書之所有內容，亦同意本單位留存本同意書，供日後備查。<br>
								九、本同意書之解釋與適用，以及本同意書有關之爭議，均應依照中華民國法律予以處理，並以臺灣桃園地方法院為第一審管轄法院。<br>
								十、若您對此告知事項之內容有任何疑慮，請聯絡 TANET2022臺灣網際網路研討會 承辦人 張小姐 (03)4506333#8131。<br>
								
								</p>
								<input required="required" class="form-check-input" type="radio" name="Looked" id="flexRadioDefault1" >我已充分了解上述告知事項並均予同意<br>
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