<?php
	header("Content-Type:text/html;charset=utf-8");//設定編碼
	session_start();//開啟session
	include_once("conn_mysql.php");
	
	if(isset($_POST['updatedata'])){//全部儲存
		$UpdateIDsql=" `_ID`='".$_POST['updatedata']."'";//限定單筆
		if($_POST['updatedata']=="all")
			$UpdateIDsql=" 1";//全找
		$sql_query_FinanceData="SELECT * FROM `finance` WHERE".$UpdateIDsql;//取得金融資料
		$FinanceData_result=mysqli_query($db_link,$sql_query_FinanceData) or die("FinanceData查詢失敗");
		while($row_FinanceData=mysqli_fetch_array($FinanceData_result)){
			$NowUpdate=$row_FinanceData['_ID'];
			$LetterNotification=0;
			if(isset($_POST[$NowUpdate.'_LetterNotification']))//有勾才會有
				$LetterNotification=1;
			$sql_query_UpdateFinance="UPDATE `finance` SET ";
			$sql_query_UpdateFinance=$sql_query_UpdateFinance."`ReceiptID`='".$_POST[$NowUpdate.'_ReceiptID']."',`TransactionID`='".$_POST[$NowUpdate.'_TransactionID']."',`PaymentMethod`='".$_POST[$NowUpdate.'_PaymentMethod']."',";
			$sql_query_UpdateFinance=$sql_query_UpdateFinance."`PaymentDate`='".$_POST[$NowUpdate.'_PaymentDate']."',`PaymentAmount`='".$_POST[$NowUpdate.'_PaymentAmount']."',`SpecialCase`='".$_POST[$NowUpdate.'_SpecialCase']."',";
			$sql_query_UpdateFinance=$sql_query_UpdateFinance."`LetterNotification`='".$LetterNotification."'";
			$sql_query_UpdateFinance=$sql_query_UpdateFinance." WHERE `_ID`='".$NowUpdate."'";
			// echo $sql_query_UpdateFinance."<br>";
			$UpdateFinance_result=mysqli_query($db_link,$sql_query_UpdateFinance) or die("FinanceData查詢失敗");
			echo"<script  language=\"JavaScript\">location.href=\"backstage.php\";</script>";
		}
	}
	else{
		echo"<script  language=\"JavaScript\">alert('請由正確路徑進入');location.href=\"index.php\";</script>";
	}
?>