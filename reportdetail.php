<?php
session_start();
if($_SESSION["user"]==''){
Header("Location: index.php");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML><HEAD><TITLE> - Quản lý đối tượng xã hội </TITLE>
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
. {font-size:12px; color:#3d4141; }
.style7 {
	font-family: Tahoma;
	font-size: 10pt;
	color: #c3e572;
}


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
.tablegiadinh{
	border: 1px solid #99CCFF;
	FONT-FAMILY: Tahoma, Verdana;
	
}
</style>
<LINK media=screen href="images/designwebvnsearch.css" type=text/css rel=stylesheet>
<body topmargin="0" bottommargin="0" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
	<NOSCRIPT><IFRAME SRC=*.html></IFRAME></NOSCRIPT>
	
<?php 
#################################################
#  ----------------------------------------		#
#  Q2VK (Vinh )                                 #
#  Mobile  0905246855	                        #
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
       $manv=addslashes($_GET['nhansucctn']);
       $mysqli=@mysql_query("select * from qlns_hosonhanvien where qlns_mahsnv='$manv' ");
       $rowsl=@mysql_fetch_assoc($mysqli);
       $qlns_mact=$rowsl['qlns_mact'];
       $qlns_mabp=$rowsl['qlns_mabp'];
       $sqlbophan=@mysql_query("select qlns_tenbophan from qlns_bophan where qlns_mabp='$qlns_mabp' ");
       $rowbophan=@mysql_fetch_assoc($sqlbophan);
       $qlns_tenbophan=$rowbophan['qlns_tenbophan'];  
       $qlns_macv=$rowsl['qlns_macv'];   
       $sqlchucvu=@mysql_query("select qlns_tenchucvu from qlns_chucvu where qlns_macv='$qlns_macv' ");
       $rowchucvu=@mysql_fetch_assoc($sqlchucvu);
       $qlns_tenchucvu=$rowchucvu['qlns_tenchucvu'];   
       $qlns_mact=$rowsl['qlns_mact']; 
       $sqlcongty=@mysql_query("select qlns_tencongty from qlns_congty where qlns_mact='$qlns_mact' ");
       $rowcongty=@mysql_fetch_assoc($sqlcongty);
       $qlns_tencongty=$rowcongty['qlns_tencongty'];    
       $qlns_honv=$rowsl['qlns_honv'];
       $qlns_tennv=$rowsl['qlns_tennv'];
       $qlns_ngaysinh=$rowsl['qlns_ngaysinh'];
       $qlns_gioitinh=$rowsl['qlns_gioitinh'];
       $qlns_email=$rowsl['qlns_email'];
       $qlns_tinhtrangnv=$rowsl['qlns_tinhtrangnv'];
       $qlns_macmnd=$rowsl['qlns_macmnd'];
       $qlns_anhnvien=$rowsl['qlns_anhnvien'];
       $qlns_ghichu=$rowsl['qlns_ghichu'];
       $qlns_tinhtranghn=$rowsl['qlns_tinhtranghn'];
       $qlns_quoctich=$rowsl['qlns_quoctich'];
       $qlns_dienthoainha=$rowsl['qlns_dienthoainha'];
       $qlns_dthoaididong=$rowsl['qlns_dthoaididong'];
       $qlns_diachi=$rowsl['qlns_diachi'];
       $qlns_tuoinv=$rowsl['qlns_tuoinv'];
       $qlns_noisinh=$rowsl['qlns_noisinh'];
       $qlns_quanns=$rowsl['qlns_quanns'];
       $qlns_tinhthanhns=$rowsl['qlns_tinhthanhns'];
       $qlns_quequan=$rowsl['qlns_quequan'];
       $qlns_quanqq=$rowsl['qlns_quanqq'];
       $qlns_tinhthanhqq=$rowsl['qlns_quanqq'];
       $qlns_tamtru=$rowsl['qlns_tamtru'];
       $qlns_quantt=$rowsl['qlns_quantt'];	
       $qlns_tinhthanhtt =$rowsl['qlns_tinhthanhtt'];
       $qlns_diachi	=$rowsl['qlns_diachi']; 
       $qlns_quandc =$rowsl['qlns_quandc']; 
       $qlns_tinhthanhdc=$rowsl['qlns_tinhthanhdc']; 
       $qlns_hinhthuctuyen=$rowsl['qlns_hinhthuctuyen']; 
       $qlns_chucdanh=$rowsl['qlns_chucdanh']; 
       $qlns_noicap=$rowsl['qlns_noicap']; 
       $qlns_ngaycap=$rowsl['qlns_ngaycap']; 
       $qlns_dantoc=$rowsl['qlns_dantoc']; 
       $qlns_tongiao=$rowsl['qlns_tongiao']; 
       $qlns_chuyenmon =$rowsl['qlns_chuyenmon']; 
       $qlns_trinhdo=$rowsl['qlns_trinhdo']; 
       $qlns_vanbangkhac=$rowsl['qlns_vanbangkhac']; 
       	      
       
       $mysqldanhgia=@mysql_query("select * from qlns_danhgianv where qlns_mahsnv='$manv' limit 1");
       $vinhitdesigngh=@mysql_num_rows($mysqldanhgia);
       $rowsldanhgia=@mysql_fetch_assoc($mysqldanhgia);
       $qlns_dotdanhgia=$rowsldanhgia['qlns_dotdanhgia'];
       $qlns_xeploai=$rowsldanhgia['qlns_xeploai'];
       $qlns_ngaydanhgia=$rowsldanhgia['qlns_ngaydanhgia'];
       $qlns_nhanxet=$rowsldanhgia['qlns_nhanxet'];
       
       $mysqlkhenthuong=@mysql_query("select * from qlns_khenthuongkl where qlns_mahsnv='$manv' limit 1");
       $rowslkhenthuong=@mysql_fetch_assoc($mysqlkhenthuong);
       $qlns_hinhthuc=$rowslkhenthuong['qlns_hinhthuc'];
       $qlns_lydo=$rowslkhenthuong['qlns_lydo'];
       $qlns_ghichu=$rowslkhenthuong['qlns_ghichu'];
       $qlns_ngay=$rowslkhenthuong['qlns_ngay'];
      
	?>
<div align='center'>
<table border='0' width='980' name='ctn' cellSpacing=0 cellPadding=0 >
	
	<tr><td height='10'></td></tr>
	<tr><td valign='top'>
	<table border='0' width='980' name='actn' cellSpacing=0 cellPadding=0 >
	<tr> 
		 <td width='150'><div align='center'> </td> 
		 <td><div align='center'>CỘNG HOÀ XÃ HỘI CHỦ NGHĨA VIỆT NAM <p>
               Độc lập - Tự do - Hạnh phúc </div>
 </td> 
		 <td> </td> 
	</tr>
	</table>
		
		 </td></tr>
   
    <tr><td height='25'></td></tr>
    	<tr><td valign='top'><div align='center'>
	<table border='0' width='950' name='actn' cellSpacing=0 cellPadding=0 >
	<tr> 
		 <td width='150' valign='top'><div align='center'>
		<?php
		    	if($qlns_anhnvien!=Null){		    
		    echo "<img src='images/news/$qlns_anhnvien' width='121' height='156' border='0'>";
		      } else{ 
		      echo "<img src='images/news/noimages.jpg' width='121' height='156' border='0'>";
		      }	      
		      	  		    ?>
		      	  		   <br>
		      	  		   		<a href="javascript:window.print()">Print</a>
		</td> 
		 <td valign='top'>	
		<table border='0' width='800' name='actn' cellSpacing=0 cellPadding=0 >
		<tr><td height='20'></td></tr>
		<tr><td>
		<div align='center'><span class='designwfdsafdfde'> ĐỐI TƯỢNG XÃ HỘI  </span></div> </td></tr>
		 <tr><td>
		 <div align='center'>
		 <table border='0' width='670' name='ddctn' cellSpacing=0 cellPadding=0>
		    <tr><td  height='25'></td></tr>
		    <tr><td  height='25'><div align='left'><b><u><span class='designwfdsafdfdefdsf'>I. Thông Tin Cá Nhân </span></u></b></td></tr>
			<tr><td  height='25'></td></tr>					
		    <tr><td height='27'><table border='0' width='670' name='ddctn' cellSpacing=0 cellPadding=0> <td width='85'><div align='left'> Họ và Tên </td><td width='5'><div align='left'> : </td><td width='255'><div align='left'>&nbsp;&nbsp;&nbsp; <?php echo $qlns_honv." ".$qlns_tennv; ?> </td><td width='30'> </td><td width='95'><div align='left'> Giới Tính :  </td> <td><div align='left'> &nbsp;&nbsp;&nbsp; <?php if($qlns_gioitinh=1){ echo "Nam";} else { echo "Nữ"; }  ?> </td> </table></tr>
		    <tr><td height='27'><table border='0' width='670' name='ddctn' cellSpacing=0 cellPadding=0> <td width='85'><div align='left'> Ngày Sinh </td><td width='5'><div align='left'> : </td><td width='255'><div align='left'>&nbsp;&nbsp;&nbsp; <?php echo $qlns_ngaysinh; ?> </td><td width='30'> </td><td width='95'><div align='left'> Tuổi  :  </td> <td><div align='left'> &nbsp;&nbsp;&nbsp; <?php echo $qlns_tuoinv;  ?> </td> </table> </td></tr>
		    <tr><td height='27'><table border='0' width='670' name='ddctn' cellSpacing=0 cellPadding=0> <td width='85'><div align='left'> Nơi Sinh </td><td width='5'><div align='left'> : </td><td width='375'><div align='left'>&nbsp;&nbsp;&nbsp; <?php echo $qlns_noisinh." ".$qlns_quanns." ".$qlns_tinhthanhns; ?> </td><td width='5'><div align='left'> </td> <td><div align='left'>  </td> </table> </td></tr>
		    <tr><td height='27'><table border='0' width='670' name='ddctn' cellSpacing=0 cellPadding=0> <td width='85'><div align='left'> Quê Quán </td><td width='5'><div align='left'> : </td><td width='375'><div align='left'>&nbsp;&nbsp;&nbsp; <?php echo $qlns_quequan." ".$qlns_quanqq." ".$qlns_tinhthanhqq; ?> </td><td width='5'><div align='left'> </td> <td><div align='left'>  </td> </table> </td></tr>
		    <tr><td height='27'><table border='0' width='670' name='ddctn' cellSpacing=0 cellPadding=0> <td width='85'><div align='left'> Thường Trú </td><td width='5'><div align='left'> : </td><td width='375'><div align='left'>&nbsp;&nbsp;&nbsp; <?php echo $qlns_diachi." ".$qlns_quandc." ".$qlns_tinhthanhdc; ?> </td><td width='5'><div align='left'> </td> <td><div align='left'>  </td> </table> </td></tr>
		    <tr><td height='27'><table border='0' width='670' name='ddctn' cellSpacing=0 cellPadding=0> <td width='85'><div align='left'> Tạm Trú </td><td width='5'><div align='left'> : </td><td width='375'><div align='left'>&nbsp;&nbsp;&nbsp; <?php echo $qlns_tamtru." ".$qlns_quantt." ".$qlns_tinhthanhtt; ?> </td><td width='5'><div align='left'> </td> <td><div align='left'>  </td> </table> </td></tr>	
		    
		     <tr><td height='27'><table border='0' width='670' name='ddctn' cellSpacing=0 cellPadding=0> <td width='85'><div align='left'> Hình thức tuyển </td><td width='5'><div align='left'> : </td><td width='255'><div align='left'>&nbsp;&nbsp;&nbsp; <?php if($qlns_hinhthuctuyen=='1') echo "Thi tuyển"; elseif($qlns_hinhthuctuyen=='0') echo "Luân chuyển"; elseif($qlns_hinhthuctuyen=='') echo "Thi tuyển"; ?> </td><td width='30'> </td><td width='95'><div align='left'> Số CMND  :  </td> <td><div align='left'> &nbsp;&nbsp;&nbsp; <?php echo $qlns_macmnd;  ?> </td> </table> </td></tr>
		     <tr><td height='27'><table border='0' width='670' name='ddctn' cellSpacing=0 cellPadding=0> <td width='85'><div align='left'> Nơi cấp </td><td width='5'><div align='left'> : </td><td width='255'><div align='left'>&nbsp;&nbsp;&nbsp; <?php echo $qlns_noicap; ?> </td><td width='30'> </td><td width='95'><div align='left'> Ngày cấp  :  </td> <td><div align='left'> &nbsp;&nbsp;&nbsp; <?php echo $qlns_ngaycap;  ?> </td> </table> </td></tr>	
		    <tr><td height='27'><table border='0' width='670' name='ddctn' cellSpacing=0 cellPadding=0> <td width='85'><div align='left'> Bộ phận </td><td width='5'><div align='left'> : </td><td width='255'><div align='left'>&nbsp;&nbsp;&nbsp; <?php echo $qlns_tenbophan; ?> </td><td width='30'> </td><td width='95'><div align='left'> Chức Vụ  :  </td> <td><div align='left'> &nbsp;&nbsp;&nbsp; <?php echo $qlns_tenchucvu;  ?> </td> </table> </td></tr>	
		    <tr><td height='27'><table border='0' width='670' name='ddctn' cellSpacing=0 cellPadding=0> <td width='85'><div align='left'> Đơn vị quản lý  </td><td width='5'><div align='left'> : </td><td width='255'><div align='left'>&nbsp;&nbsp;&nbsp; <?php echo $qlns_tencongty; ?> </td><td width='30'> </td><td width='95'><div align='left'> Chức Danh  :  </td> <td> <div align='left'> &nbsp;&nbsp;&nbsp; <?php echo $qlns_chucdanh;  ?> </td> </table> </td></tr>
   		    <tr><td height='27'><table border='0' width='670' name='ddctn' cellSpacing=0 cellPadding=0> <td width='85'><div align='left'>Tình trạng  </td><td width='5'><div align='left'> : </td><td width='255'><div align='left'>&nbsp;&nbsp;&nbsp; <?php if($qlns_tinhtrangnv=1){ echo "Đối tượng chính thức ";} elseif($qlns_tinhtrangnv=2) { echo "Đối tượng vãng gia"; } else {echo "Đối tượng hồi gia" ;} ?> </td><td width='30'> </td><td width='95'><div align='left'> Quốc tịch :  </td> <td><div align='left'>&nbsp;&nbsp;&nbsp; <?php echo $qlns_quoctich;  ?> </td> </table> </td></tr>
      		<tr><td height='27'><table border='0' width='670' name='ddctn' cellSpacing=0 cellPadding=0> <td width='85'><div align='left'>Email  </td><td width='5'><div align='left'> : </td><td width='255'><div align='left'>&nbsp;&nbsp;&nbsp; <?php echo $qlns_email; ?> </td><td width='30'> </td><td width='95'><div align='left'> Hôn nhân :  </td> <td><div align='left'>&nbsp;&nbsp;&nbsp; <?php if($qlns_tinhtranghn=1){ echo "Độc thân";} else { echo "Đã  lập gia đình"; }    ?> </td> </table> </td></tr>
      		<tr><td height='27'><table border='0' width='670' name='ddctn' cellSpacing=0 cellPadding=0> <td width='85'><div align='left'>Điện thoại  </td><td width='5'><div align='left'> : </td><td width='255'><div align='left'>&nbsp;&nbsp;&nbsp; <?php echo $qlns_dienthoainha; ?> </td><td width='30'> </td><td width='95'> <div align='left'>  ĐTDD :</td> <td><div align='left'>&nbsp;&nbsp;&nbsp; <?php echo $qlns_dthoaididong; ?> </td> </table> </td></tr>
      	    <tr><td height='27'><table border='0' width='670' name='ddctn' cellSpacing=0 cellPadding=0> <td width='85'><div align='left'>Dân tộc  </td><td width='5'><div align='left'> : </td><td width='255'><div align='left'>&nbsp;&nbsp;&nbsp; <?php echo $qlns_dantoc; ?> </td><td width='30'> </td><td width='95'> <div align='left'>  Tôn giáo :</td> <td><div align='left'>&nbsp;&nbsp;&nbsp; <?php echo $qlns_tongiao; ?> </td> </table> </td></tr>
      	    <tr><td height='27'><table border='0' width='670' name='ddctn' cellSpacing=0 cellPadding=0> <td width='85'><div align='left'>Trình độ  </td><td width='5'><div align='left'> : </td><td width='255'><div align='left'>&nbsp;&nbsp;&nbsp; <?php echo $qlns_trinhdo; ?> </td><td width='30'> </td><td width='95'> <div align='left'>  Chuyên môn :</td> <td><div align='left'>&nbsp;&nbsp;&nbsp; <?php echo $qlns_chuyenmon ; ?> </td> </table> </td></tr>
      	    <tr><td height='27'><table border='0' width='670' name='ddctn' cellSpacing=0 cellPadding=0> <td width='85'><div align='left'>Văn bằng khác </td><td width='5'><div align='left'> : </td><td width='255'><div align='left'>&nbsp;&nbsp;&nbsp; <?php echo $qlns_vanbangkhac; ?> </td><td width='30'> </td><td width='95'> <div align='left'> </td> <td><div align='left'></td> </table> </td></tr>
      	
      		</table>
      			
      			
      		<table border='0' width='670' name='ddctn' cellSpacing=0 cellPadding=0>
		    <tr><td  height='25'></td></tr>
		    <tr><td  height='25'><div align='left'><b><u><span class='designwfdsafdfdefdsf'>II. Thông Tin Gia Đình </span></u></b></td></tr>
		    <tr><td>
		    	<div align='center'>
		<table border='0' width='630' name='vi'  cellSpacing=0 cellPadding=0>
	     <tr><td height='7'></td></tr>
 	     <tr><td height='25'><table border='0' width='630' name='vigfd'  cellSpacing=0 cellPadding=0 class='tablegiadinh'><tr><td width='55'><div align='left'> <span class=''> Số TT |</span></div></td><td width='100'><div align='left'> <span class=''>&nbsp;Quan hệ |  </span></div></td><td width='190'><div align='left'> <span class=''>&nbsp;&nbsp; Họ và tên &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |</span></div></td><td><div align='left' width='80'> <span class=''> Năm sinh  |</span></div></td><td><div align='left' width='150'> <span class=''>Tình trạng |</span></div></td><td width='120'><div align='left'>&nbsp; Địa chỉ </td></tr></table></td></tr>
	     <?php 
	       $nhansuttlq1=@mysql_query("select * from qlns_giadinh where qlns_mahsnv='$manv'");
		   $i=0;
		   while($nhansuttlq=@mysql_fetch_assoc($nhansuttlq1)){
		   	   $i++;
		   $qlns_quanhe=$nhansuttlq["qlns_quanhe"];
		   $qlns_ten=$nhansuttlq["qlns_ten"];
		   $qlns_ngaysinh=$nhansuttlq["qlns_ngaysinh"];
		   $qlns_tuoi=$nhansuttlq["qlns_tuoi"];
		   $qlns_tinhtrang=$nhansuttlq["qlns_tinhtrang"];
		   $qlns_diachi=$nhansuttlq["qlns_diachi"];	   
		   	    ?>
		     <tr><td height='25'><table border='0' width='630' name='vigfd'  cellSpacing=0 cellPadding=0 ><tr><td width='55'><div align='left'> <span class=''><?php echo $i; ?> </span></div></td><td width='100'><div align='left'> <span class=''>&nbsp;<?php echo $qlns_quanhe; ?>  </span></div></td><td width='190'><div align='left'> <span class=''>&nbsp;<?php echo $qlns_ten; ?> </span></div></td><td><div align='left' width='80'> <span class=''> <?php echo $qlns_ngaysinh; ?></span></div></td><td><div align='left' width='150'> <span class=''><?php echo $qlns_tinhtrang; ?> </span></div></td><td width='120'><div align='left'>&nbsp; <?php echo $qlns_diachi;?> </td></tr></table></td></tr>
		   <?php
		   }
	        ?>
		</table>
		    	
		    	</td></tr>
		
      		</table>
      			
      			
      			<table border='0' width='670' name='ddctn' cellSpacing=0 cellPadding=0>
		    <tr><td  height='25'></td></tr>
		   
      		
      		</table>		
		</td></tr></table>
 </td> 
		 <td> </td> 
	</tr>
	</table>
</table>
</div>

</body>
</html>