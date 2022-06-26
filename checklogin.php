<?php
session_start();
ob_start();

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	 
   include(dirname(__FILE__)."\sources\config.php");
	
   include "ham.php";
   $nameuser=addslashes($_POST['nameuser']);
   $passworduser=md5(md5($_POST['passworduser']));
   $sqlkiemtra=mysql_query("select * from qlns_administrator where ctn_username='$nameuser'");
   
   $kt=mysql_num_rows($sqlkiemtra);
   if($kt){
   	   $sqlkiemtra1=@mysql_query("select * from qlns_administrator where ctn_password='$passworduser' and ctn_level='1'"); 
   	   $kt1=@mysql_num_rows($sqlkiemtra1);
   	   if($kt1){
			$msg="Đăng Nhập  Thành Công! Chào Administrator ";
			$page="index1.php";
			page_transfer($msg,$page);
		}
		else {
		   $msg="Đăng Nhập Không Thành Công!Bạn không phải Là Administrator ";
		   $page="index.php";
		   page_transfer($msg,$page);
		} 
        
   }  	
   else {
	   $msg="Đăng Nhập Không Thành Công, Không tồn tại User $nameuser ";
	   $page="index.php";
	   page_transfer($msg,$page); 
   }
?>	

   
</body>
</html>
	
