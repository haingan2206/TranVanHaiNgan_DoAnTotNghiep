<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="images/phh.css">
<script type="text/javascript" src="images/jqueryit.js"></script>
<script src="images/dbMenu.js" type="text/javascript"></script>
<link href="images/side.css" type="text/css" rel="stylesheet" media="screen">
<script type="text/javascript" src="images/phh.js"></script>

<html>
<head>
</head>
<body topmargin="0" bottommargin="0">
<table><tr ><td height='600'></td></tr></table>

     <div align='left'>   <div style="display: none;" id="start_menu">
   <table style="margin-left: 10px;" width="210" border="0" cellpadding="0" cellspacing="0">
   <tbody><tr><td>
   <img src="images/agt_forum.png" style="margin-right: 10px;" align="absmiddle"> <font color="#ffffff" face="Courier New, Courier, monospace" size="3"><strong>Welcome !</strong> </font><br>
   </td>
   </tr>
   </tbody></table>
   <hr color="0d3e77" size="1">
   <div class="clearfix">
   <ul id="side" class="dbMenu onMouse">
  
	<li onclick=" " ><a class="subMenu subMenu1" href="javascript:_postback(1);"><img src="images/findf.png" align="absmiddle" border="0"> Tìm Kiếm</a>
	   <ul class="             ">
             
            <li class=""><a href="ctnsearch.php"><img src='images/filefind.png' border='0' width='24' height='24'>&nbsp;&nbsp;&nbsp; Tên Đối Tượng </a> </li>
		    <li class=""><a href="ctnsearchcmnd.php"><img src='images/filefind.png' border='0' width='24' height='24'>&nbsp;&nbsp;&nbsp; Số CMND </a> </li>
		    <li class=""><a href="ctnsearchmanv.php"><img src='images/filefind.png' border='0' width='24' height='24'>&nbsp;&nbsp;&nbsp; Mã số </a> </li>
		    <li class=""><a href="ctnsearchhoten.php"><img src='images/filefind.png' border='0' width='24' height='24'>&nbsp;&nbsp;&nbsp; Họ và tên đối tượng </a> </li> 	
		    <li class=""><a href="ctnsearchchucvu.php"><img src='images/filefind.png' border='0' width='24' height='24'>&nbsp;&nbsp;&nbsp; Chức Vụ </a> </li> 
		     </ul>
		</li>
    <li onclick=" "><a class="none" href="javascript:baoloi('index.php')"><img src="images/lock.png" align="absmiddle" border="0"> Thoát </a></li>
    <li class="             ">
    	<a class="subMenu subMenu             " href="javascript:_postback(1);"><img src="images/openofficeorg-20-calc.png" align="absmiddle" border="0"> <font color="#ffff00">Danh Mục</font></a>
        <ul class="             ">
             
           
         <li class="  "><a class="subMenu subMenu  " href="javascript:_postback(1);"><img src='images/agt_add-to-autorun.png' border='0' width='24' height='24'>&nbsp;&nbsp;&nbsp; Thống Kế</a>
        	<ul class="  ">
                        	<li onclick="window_new(4,0,'Thống Kế','Đối tượng chính thức');"><a href="detailnvnthongkenvct.php"><img src='images/agt_family.png' border='0' width='16' height='16'>&nbsp;&nbsp;&nbsp; Đối tượng chính thức</a></li>
                            <li onclick="window_new(4,0,'Thống Kế','Đối tượng hồi gia');"><a href="detailnvnthongkenvtt.php"><img src='images/agt_family.png' border='0' width='16' height='16'>&nbsp;&nbsp;&nbsp; Đối tượng hồi gia</a></li>
                            <li onclick="window_new(4,0,'Thống Kế','Đối tượng vãng gia');"><a href="detailnvnthongkenvnv.php"><img src='images/agt_family.png' border='0' width='16' height='16'>&nbsp;&nbsp;&nbsp; Đối tượng vãng gia</a></li>
                        </ul>
        </li>
            <li class=" "><a class="subMenu subMenu " href="javascript:_postback(1);"><img src='images/7days.png' border='0' width='24' height='24'>&nbsp;&nbsp;&nbsp; Báo Cáo</a>
        	<ul class=" ">
                        	<li onclick="window_new(17,0,'Báo Cáo','Cán bộ');"><a href="detailnvreportcbcc.php"><img src='images/agt_reload.png' border='0' width='16' height='16'>&nbsp;&nbsp;&nbsp; Cán bộ</a></li>
                        	<li onclick="window_new(40,0,'Báo Cáo','Đối tượng nam');"><a href="detailnvreportnvnam.php"><img src='images/agt_reload.png' border='0' width='16' height='16'>&nbsp;&nbsp;&nbsp; Đối tượng nam</a></li>
                        	<li onclick="window_new(35,0,'Báo Cáo','Đối tượng nữ');"><a href="detailnvreportnvnu.php"><img src='images/agt_reload.png' border='0' width='16' height='16'>&nbsp;&nbsp;&nbsp; Đối tượng nữ</a></li>
                        
                        </ul>
        </li>  
    </div>	
    	
    	</div>
     
	<div id="system_tray">
		<div id="quick_menu" onclick="start_menu();"></div>
		
		</div>
		
		
    </body>
</html>
