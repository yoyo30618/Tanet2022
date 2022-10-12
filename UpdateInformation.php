<?php
	header("Content-Type:text/html;charset=utf-8");//設定編碼
	session_start();//開啟session
	include_once("conn_mysql.php");
	if(isset($_POST['UpdateInformation']))//如果是由post進入
	{//更新上傳資料
		$search_ID='';
		if(isset($_POST['search_ID'])) $search_ID=$_POST['search_ID'];
		$search_ID=htmlspecialchars($search_ID,ENT_QUOTES);
		$PersonalID='';
		if(isset($_POST['PersonalID'])) $PersonalID=$_POST['PersonalID'];
		$PersonalID=htmlspecialchars($PersonalID,ENT_QUOTES);
		$SeminarID='';
		if(isset($_POST['SeminarID'])) $SeminarID=$_POST['SeminarID'];
		$SeminarID=htmlspecialchars($SeminarID,ENT_QUOTES);
		$FinanceID='';
		if(isset($_POST['FinanceID'])) $FinanceID=$_POST['FinanceID'];
		$FinanceID=htmlspecialchars($FinanceID,ENT_QUOTES);
		$Cname='';
		if(isset($_POST['Cname'])) $Cname=$_POST['Cname'];
		$Cname=htmlspecialchars($Cname,ENT_QUOTES);
		$Unit='';
		if(isset($_POST['Unit'])) $Unit=$_POST['Unit'];
		$Unit=htmlspecialchars($Unit,ENT_QUOTES);
		$Department='';
		if(isset($_POST['Department'])) $Department=$_POST['Department'];
		$Department=htmlspecialchars($Department,ENT_QUOTES);
		$StuID='';
		if(isset($_POST['StuID'])) $StuID=$_POST['StuID'];
		$StuID=htmlspecialchars($StuID,ENT_QUOTES);
		$Identity='';
		if(isset($_POST['Identity'])) $Identity=$_POST['Identity'];
		$Identity=htmlspecialchars($Identity,ENT_QUOTES);
		$Job='';
		if(isset($_POST['Job'])) $Job=$_POST['Job'];
		$Job=htmlspecialchars($Job,ENT_QUOTES);
		$Email='';
		if(isset($_POST['Email'])) $Email=$_POST['Email'];
		$Email=htmlspecialchars($Email,ENT_QUOTES);
		$Phone='';
		if(isset($_POST['Phone'])) $Phone=$_POST['Phone'];
		$Phone=htmlspecialchars($Phone,ENT_QUOTES);
		$PapersAmount='';
		if(isset($_POST['PapersAmount'])) $PapersAmount=$_POST['PapersAmount'];
		$PapersAmount=htmlspecialchars($PapersAmount,ENT_QUOTES);
		$PapersID='';
		if(isset($_POST['PapersID'])) $PapersID=$_POST['PapersID'];
		$PapersID=htmlspecialchars($PapersID,ENT_QUOTES);
		$Transportation='';
		if(isset($_POST['Transportation'])) $Transportation=$_POST['Transportation'];
		$Transportation=htmlspecialchars($Transportation,ENT_QUOTES);
		$CarLicense='';
		if(isset($_POST['CarLicense'])) $CarLicense=$_POST['CarLicense'];
		$CarLicense=htmlspecialchars($CarLicense,ENT_QUOTES);
		$ShuttleBus_D1='';
		if(isset($_POST['ShuttleBus_D1'])) $ShuttleBus_D1=$_POST['ShuttleBus_D1'];
		$ShuttleBus_D1=htmlspecialchars($ShuttleBus_D1,ENT_QUOTES);
		$ShuttleBus_D2='';
		if(isset($_POST['ShuttleBus_D2'])) $ShuttleBus_D2=$_POST['ShuttleBus_D2'];
		$ShuttleBus_D2=htmlspecialchars($ShuttleBus_D2,ENT_QUOTES);
		$ShuttleBus_D3='';
		if(isset($_POST['ShuttleBus_D3'])) $ShuttleBus_D3=$_POST['ShuttleBus_D3'];
		$ShuttleBus_D3=htmlspecialchars($ShuttleBus_D3,ENT_QUOTES);
		$Room_D1='';
		if(isset($_POST['Room_D1'])) $Room_D1=$_POST['Room_D1'];
		$Room_D1=htmlspecialchars($Room_D1,ENT_QUOTES);
		$Room_D2='';
		if(isset($_POST['Room_D2'])) $Room_D2=$_POST['Room_D2'];
		$Room_D2=htmlspecialchars($Room_D2,ENT_QUOTES);
		$Room_D3='';
		if(isset($_POST['Room_D3'])) $Room_D3=$_POST['Room_D3'];
		$Room_D3=htmlspecialchars($Room_D3,ENT_QUOTES);
		$Lunch_D1='';
		if(isset($_POST['Lunch_D1'])) $Lunch_D1=$_POST['Lunch_D1'];
		$Lunch_D1=htmlspecialchars($Lunch_D1,ENT_QUOTES);
		$Dinner_D1='';
		if(isset($_POST['Dinner_D1'])) $Dinner_D1=$_POST['Dinner_D1'];
		$Dinner_D1=htmlspecialchars($Dinner_D1,ENT_QUOTES);
		$Lunch_D2='';
		if(isset($_POST['Lunch_D2'])) $Lunch_D2=$_POST['Lunch_D2'];
		$Lunch_D2=htmlspecialchars($Lunch_D2,ENT_QUOTES);
		$Dinner_D2='';
		if(isset($_POST['Dinner_D2'])) $Dinner_D2=$_POST['Dinner_D2'];
		$Dinner_D2=htmlspecialchars($Dinner_D2,ENT_QUOTES);
		$Lunch_D3='';
		if(isset($_POST['Lunch_D3'])) $Lunch_D3=$_POST['Lunch_D3'];
		$Lunch_D3=htmlspecialchars($Lunch_D3,ENT_QUOTES);
		$DinnerCompanion_Omnivorous='';
		if(isset($_POST['DinnerCompanion_Omnivorous'])) $DinnerCompanion_Omnivorous=$_POST['DinnerCompanion_Omnivorous'];
		$DinnerCompanion_Omnivorous=htmlspecialchars($DinnerCompanion_Omnivorous,ENT_QUOTES);
		$DinnerCompanion_Vegetarian='';
		if(isset($_POST['DinnerCompanion_Vegetarian'])) $DinnerCompanion_Vegetarian=$_POST['DinnerCompanion_Vegetarian'];
		$DinnerCompanion_Vegetarian=htmlspecialchars($DinnerCompanion_Vegetarian,ENT_QUOTES);
		$Notice='';
		if(isset($_POST['Notice'])) $Notice=$_POST['Notice'];
		$Notice=htmlspecialchars($Notice,ENT_QUOTES);
		$ReceiptHeader='';
		if(isset($_POST['ReceiptHeader'])) $ReceiptHeader=$_POST['ReceiptHeader'];
		$ReceiptHeader=htmlspecialchars($ReceiptHeader,ENT_QUOTES);
		$Amount='';
		if(isset($_POST['Amount'])) $Amount=$_POST['Amount'];
		$Amount=htmlspecialchars($Amount,ENT_QUOTES);
		$AccountTail='';
		if(isset($_POST['AccountTail'])) $AccountTail=$_POST['AccountTail'];
		$AccountTail=htmlspecialchars($AccountTail,ENT_QUOTES);
		$TaxID='';
		if(isset($_POST['TaxID'])) $TaxID=$_POST['TaxID'];
		$TaxID=htmlspecialchars($TaxID,ENT_QUOTES);
		$UpdateInformation='';
		if(isset($_POST['UpdateInformation'])) $UpdateInformation=$_POST['UpdateInformation'];
		$UpdateInformation=htmlspecialchars($UpdateInformation,ENT_QUOTES);
		//更新Personal
		$sql_query_UpdatePersonal="UPDATE `personal` SET `Cname`='".$Cname."',`Unit`='".$Unit."',`Department`='".$Department."',`StuID`='".$StuID."',`Identity`='".$Identity."',";
		$sql_query_UpdatePersonal=$sql_query_UpdatePersonal."`Job`='".$Job."',`Email`='".$Email."',`Phone`='".$Phone."',";
		$sql_query_UpdatePersonal=$sql_query_UpdatePersonal."`PapersAmount`='".$PapersAmount."',";
		$sql_query_UpdatePersonal=$sql_query_UpdatePersonal."`Amount`='".$Amount."',";
		$sql_query_UpdatePersonal=$sql_query_UpdatePersonal."`AccountTail`='".$AccountTail."',";
		$sql_query_UpdatePersonal=$sql_query_UpdatePersonal."`PapersID`='".$PapersID."' WHERE `_ID`='".$PersonalID."'";
		$UpdatePersonal_result=mysqli_query($db_link,$sql_query_UpdatePersonal) or die("UpdatePersonal查詢失敗");//上一筆加入的ID
		
		//更新Seminar
		$sql_query_UpdateSeminar="UPDATE `seminar` SET `Transportation`='".$Transportation."',";
		$sql_query_UpdateSeminar=$sql_query_UpdateSeminar."`ShuttleBus_D1`='".$ShuttleBus_D1."',`ShuttleBus_D2`='".$ShuttleBus_D2."',`ShuttleBus_D3`='".$ShuttleBus_D3."',";
		$sql_query_UpdateSeminar=$sql_query_UpdateSeminar."`CarLicense`='".$CarLicense."',`Lunch_D1`='".$Lunch_D1."',`Lunch_D2`='".$Lunch_D2."',`Lunch_D3`='".$Lunch_D3."',";
		$sql_query_UpdateSeminar=$sql_query_UpdateSeminar."`Room_D1`='".$Room_D1."',`Room_D2`='".$Room_D2."',";
		$sql_query_UpdateSeminar=$sql_query_UpdateSeminar."`Room_D3`='".$Room_D3."',";
		$sql_query_UpdateSeminar=$sql_query_UpdateSeminar."`Dinner_D1`='".$Dinner_D1."',`Dinner_D2`='".$Dinner_D2."',`DinnerCompanion_Omnivorous`='".$DinnerCompanion_Omnivorous."',";
		$sql_query_UpdateSeminar=$sql_query_UpdateSeminar."`DinnerCompanion_Vegetarian`='".$DinnerCompanion_Vegetarian."',`Notice`='".$Notice."' WHERE `_ID`='".$SeminarID."'";
		$UpdateSeminar_result=mysqli_query($db_link,$sql_query_UpdateSeminar) or die("UpdateSeminar查詢失敗");//上一筆加入的ID

		//更新Finance
		$sql_query_UpdateFinance="UPDATE `finance` SET `ReceiptHeader`='".$ReceiptHeader."',`TaxID`='".$TaxID."' WHERE `_ID`='".$FinanceID."'";
		$UpdateFinance_result=mysqli_query($db_link,$sql_query_UpdateFinance) or die("UpdateFinance查詢失敗");//上一筆加入的ID
		
		echo"<script  language=\"JavaScript\">;location.href=\"Information.php?search_ID=".$search_ID."\";</script>";
	}
	else//不當路徑進入
		echo"<script  language=\"JavaScript\">alert('請由正確路徑進入');location.href=\"login.php\";</script>";
		
?>
