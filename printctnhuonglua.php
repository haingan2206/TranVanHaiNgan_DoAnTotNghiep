<?php
session_start();
if($_SESSION["user"]==''){
Header("Location: index.php");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML><HEAD><TITLE> - Taxi Hương Lúa- Quản lý đối tượng xã hội </TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<META 
content="  " 
name=description>
<META lang=en 
content=" " 
name=keywords>
<SCRIPT language=JavaScript src="images/rollover.js" type=text/javascript></SCRIPT>		
<script src='images/menuright.js'></script>	
<meta name="ROBOTS" content="index, follow">	
	<LINK  
href="/images/logoctn.png" rel="shortcut icon">
<META content=images/ctnvietnam.gif name="SHORTCUT ICON">
<META http-equiv=Page-Exit 
content=progid:DXImageTransform.Microsoft.GradientWipe(duration=.3)>
<META content="MSHTML 6.00.2900.2180" name=GENERATOR>
<META content=C# name=CODE_LANGUAGE>
<META content=JavaScript name=vs_defaultClientScript>
<META content=http://schemas.microsoft.com/intellisense/ie5 
name=vs_targetSchema>
<style type="text/css">
<!--
.contentb{
	font-family: Tahoma;
	font-size: 8.5pt;
	color: #FFFFFF 
}

A:hover {
	COLOR: #1f4789; TEXT-DECORATION: none
}
.tranquangvinhit img{border-color:#41B205}
.fs2fdses {font-size:13px; color:#b1b1b1; }
.fs2 {font-size:12px; color:#3c4a1f; }
.tinhyeuhueemyeu {font-size:11px; color:#3d4141; }
.fs521 {font-size:14px; color:#989898; }
A.details {
	COLOR: #1f4789; TEXT-DECORATION: none
}
.inputboxdesignwebvn {
font-size:11px;
background:#447aa9;
color:#dcff92;
border:1px solid #99CCFF;

}
.designwfdsafdfde {font-size:23px; color:#000000; }
.designwfdsafdfdefdsf {font-size:17px; color:#000000; }
.designwfdsaf {font-size:16px; color:#c1e652; }
.designwfdsafsdff {font-size:15px; color:#d0d5cd; }
.designwfdfasfsafsdff {font-size:14px; color:#989898; }
.designw {font-size:12px; color:#c1e652; }
.designwebdnit {font-size:12px; color:#c3e572; }
.designwebdnkha {font-size:12px; color:#808080; }
.tinhyeuhue {font-size:13px; color:#365169; }
.tinhyeuhueit {font-size:13px; color:#3f3f3f; }
.tinhyeuhueemye {font-size:11px; color:#3d4141; }
.tinhyeuhueemyeit {font-size:12px; color:#3d4141; }
.style7 {
	font-family: Tahoma;
	font-size: 10pt;
	color: #c3e572;
}

.danhsach {font-size:24px; color:#000000; }
.danhsachnv {font-size:20px; color:#000000; }
.tool-tip {
	color: #fff;
	width: 139px;
	z-index: 13000;
}
 
.tool-title {
	font-weight: bold;
	font-size: 11px;
	margin: 0;
	color: #9FD4FF;
	padding: 8px 8px 4px;
	background: url(bubble.png) top left;
}
 
.tool-text {
	font-size: 11px;
	padding: 4px 8px 8px;
	background: url(bubble.png) bottom right;
}

.custom-tip {
	color: #000;
	width: 130px;
	z-index: 13000;
}

.custom-title {
	font-weight: bold;
	font-size: 11px;
	margin: 0;
	color: #3E4F14;
	padding: 8px 8px 4px;
	background: #C3DF7D;
	border-bottom: 1px solid #B5CF74;
}

.custom-text {
	font-size: 11px;
	padding: 4px 8px 8px;
	background: #CFDFA7;
}
.quangvinh{
	border: 1px solid #99CCFF;
	FONT-FAMILY: Tahoma, Verdana;
	background:#dceafd;
	color:#3d4141;
	font-size:8pt;
	text-decoration:none;
}
.pagemenu{
	border: 1px solid #99CCFF;
	FONT-FAMILY: Tahoma, Verdana;
	background:#dceafd;
	color:#3d4141;
	font-size:8pt;
	text-decoration:none;
}
.pagemenu1{
	border: 1px solid #99CCFF;
	FONT-FAMILY: Tahoma, Verdana;
	background:#ffffff;
	color:#3d4141;
	font-size:8pt;
	text-decoration:none;
}
.ctnvietnamit{
	border: 1px solid #99CCFF;
	FONT-FAMILY: Tahoma, Verdana;
	background:#ffffff;
	color:#3d4141;
	font-size:8pt;
	text-decoration:none;
	width: 167px;
}
-->
</style>

</script>
<script type="text/javascript" src="images/jqueryns.js"></script>

<script type="text/javascript">
$(document).ready(function(){
						   
	$(".pane-list li").click(function(){
    	window.location=$(this).find("a").attr("href");return false;
	});

}); //close doc ready
</script>

<style type="text/css">

a {
	color: #333300;
	text-decoration: none;
}
a:visited {
	color: #333300;
}
a:hover {
	color: #333300;
	text-decoration: underline;
}
h3 {
	margin: 0;
	padding: 0 0 .3em;
}
p {
	margin: 0;
	padding: 0 0 .5em;
}
.pane-list {
	margin: 0;
	padding: 0;
	list-style: none;
}
.pane-list li {
	background: #ffffff;
	padding: 1px 3px 1px;
	border-top: solid 1px #e3efff;
	cursor: pointer;
}
.pane-list li:hover {
	background: #cae1ff;
}
.quangvinhit{
	border: 1px solid #99CCFF;
	FONT-FAMILY: Tahoma, Verdana;
	background:#ffffff;
	color:#afafaf;
	font-size:7pt;
	text-decoration:none;
	width : 79px;
}
.ctnvietnamit{
	border: 1px solid #99CCFF;
	FONT-FAMILY: Tahoma, Verdana;
	background:#ffffff;
	color:#3d4141;
	font-size:8pt;
	text-decoration:none;
	width: 167px;
}
.inputboxdesignwebvn {
font-size:11px;
background:#ffffff;
color:#afafaf;
border:1px solid #99CCFF;
width : 124px;
}
</style>
<LINK media=screen href="images/designwebvnsearch.css" type=text/css rel=stylesheet>
<body topmargin="0" bottommargin="0" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
	<NOSCRIPT><IFRAME SRC=*.html></IFRAME></NOSCRIPT>
	
<?php 
#################################################
#  ----------------------------------------		#
#  Q2VK (Quân - Quỳnh - Vinh - Khánh)           #
#  Mobile  0905094336	                        #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  ----------------------------------------	    #
################################################# 
    define("itdesignwebq2vk",true);
    include ("sources/config.php");
    if(!$_SERVER["HTTP_ACCEPT_ENCODING"] && !$_SERVER["HTTP_ACCEPT_LANGUAGE"])
{
echo "OMG";
exit();
}   
   
	?>
<div align='center'>
<table border='0' width='980' name='ctn' cellSpacing=0 cellPadding=0 >
<tr><td height='10'></td></tr>
<tr><td valign='top'>
	<table border='0' width='980' name='actn' cellSpacing=0 cellPadding=0 >
	<tr> 
		 <td width='280'><div align='center'><b>CÔNG TY CP ĐẦU TƯ<p><p>------------</b></div> </td> 
		 <td div align='top'><b><div align='center'>CỘNG HOÀ XÃ HỘI CHỦ NGHĨA VIỆT NAM <p>
               Độc lập - Tự do - Hạnh phúc <p>-------------------------</div>  </b>
 </td> 
		 <td> </td> 
	</tr>
	</table>
		
		 </td></tr>
   <tr><td height='20'></td></tr> 	
   <tr><td ><div align='center'><span class='danhsach'> DANH SÁCH CÁN BỘ ĐỐI TƯỢNG </span><td></tr>
  <tr><td height='15'></td></tr>
   <tr><td height='15'><div align='right'><a href='images/listexcel/danhsachnhanvientaxihuonglua.xls'><img src='images/excel.png' border='0' width='32' height='32'><span class='danhsachnv'> Convert to excel <span></a></td></tr>			 
    <tr><td height='10'></td></tr>
   <tr><td>
   		<table border='1' width='980' name='ctn' cellSpacing=0 cellPadding=0 >	
   	    <tr><td width='10'><div align='left'><span class='danhsachnv'> STT </b></td> <Td width='50'><div align='center'><span class='danhsachnv'> Mã NV</td><td width='150'><div align='center'><span class='danhsachnv'> Họ Tên </td><td width='80'><div align='center'><span class='danhsachnv'> Ngày Sinh </td><td width='100'><div align='center'><span class='danhsachnv'> Giới Tính</td><td width='80'><div align='center'><span class='danhsachnv'> Số CMND </td> <td width='80'><div align='center'><span class='danhsachnv'> ĐT Nhà  </td> <td width='80'><div align='center'><span class='danhsachnv'> ĐTDĐ </td> <td width='250'><div align='center'><span class='danhsachnv'> Địa Chỉ </span></td></tr> 
   	<?php	
    $i=0;
    $nam=0;
    $nu=0;	 
    $mysqlnv=@mysql_query("select * from qlns_hosonhanvien where qlns_mact='15' and qlns_tinhtrangnv='1' order by qlns_hsnv");
    $rown=@mysql_num_rows($mysqlnv);
    while ($rownv=@mysql_fetch_assoc($mysqlnv)) {
    	$i++;
    	  $manv=$rownv["qlns_mahsnv"];
    	  $honv=$rownv["qlns_honv"];
    	  $tennv=$rownv["qlns_tennv"]; 
    	  $ngaysinh=$rownv["qlns_ngaysinh"];
    	  $gioitinh=$rownv["qlns_gioitinh"];
    	  if($gioitinh==1){ $nam++;} else {$nu++;}
    	  $qlns_email=$rownv["qlns_email"];
    	  $qlns_manv=$rownv["qlns_manv"];
    	  $qlns_macmnd=$rownv["qlns_macmnd"];
    	  $qlns_diachi=$rownv["qlns_diachi"];
    	  $qlns_macv=$rownv["qlns_macv"];
    	  $qlns_dienthoainha=$rownv["qlns_dienthoainha"]; 
    	  $qlns_dthoaididong=$rownv["qlns_dthoaididong"];
     echo"<tr><td>&nbsp;&nbsp;&nbsp;$i</td><td> $qlns_manv</td><td>&nbsp;&nbsp;&nbsp;$honv"." "."$tennv</td><td>&nbsp;&nbsp;&nbsp;$ngaysinh</td><td>";if($gioitinh==1){echo "&nbsp;&nbsp;&nbsp; Nam";} else {echo "&nbsp;&nbsp;&nbsp; Nữ "; }echo"</td><td>&nbsp; $qlns_macmnd</td><td>$qlns_dienthoainha </td><td>&nbsp;$qlns_dthoaididong</td><td>&nbsp;&nbsp;&nbsp; $qlns_diachi </td></tr>";       
    }
      
      ?>
         
          </table>
          <table border='0' width='980' name='ctn' cellSpacing=0 cellPadding=0 >
          <tr><td colspan='9' height='15'></td></tr>	  	
          <tr><td colspan='9'><div align='right'> Tổng <?php echo $rown; ?> | Nam <?php echo $nam; ?>  | Nữ <?php echo $nu; ?></td></tr></table>
     </td></tr> 			 		 	
</table>
</div>

</body>
</html>