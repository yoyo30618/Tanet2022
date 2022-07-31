<?php
	header("Content-Type:text/html;charset=utf-8");//設定編碼
	session_start();//開啟session
	if(isset($_POST['LoginSys']))//如果是由post進入
	{
		$Account = $_POST['Account'];
		$Password = md5("tanet2022".$_POST['Password']);
		if(($Account=='')||($Password==''))//空白帳密
			echo"<script  language=\"JavaScript\">alert('使用者名稱或密碼不能為空');location.href=\"login.php\";</script>";
		include_once("conn_mysql.php");
		$sql_query_login="SELECT * FROM `tanet2022`.`account` WHERE 1";
		$Pwd_result=mysqli_query($db_link,$sql_query_login) or die("查詢失敗");//查詢帳密
		$IsLogin=0;
		while($row_login=mysqli_fetch_array($Pwd_result)){
			if($row_login['Account']===$Account&&$row_login['Password']===$Password){#登入成功
				$_SESSION['tanet2022_Account']=$row_login['Account'];//登入成功將資訊儲存到session中
				$_SESSION['tanet2022_Islogin']=1;
				$_SESSION['tanet2022_Status']=$row_login['Status'];
				$IsLogin=1;
				echo"<script  language=\"JavaScript\">alert('登入成功');location.href=\"backstage.php\";</script>";
				break;
			}
		}
		if($IsLogin==0)
			echo"<script  language=\"JavaScript\">alert('帳號密碼異常，請檢查');location.href=\"login.php\";</script>";
	}
	else//不當路徑進入
		echo"<script  language=\"JavaScript\">alert('請由正確路徑進入');location.href=\"login.php\";</script>";
		
?>