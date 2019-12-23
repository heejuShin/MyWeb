<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

<TITLE>HISNet</TITLE>
<base href = "https://hisnet.handong.edu/myboard/">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8">
<link href="/css/default.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="/js/jquery-1.4.4.min.js"></script>
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body>
<script>
// 대학원 등록금 출력 팝업처리 RD
function goji_rd() {
		//alert("조회기간이 아닙니다.")
		//window.open("pay/PPAY140M.asp","",'toolbar=no,resizable=yes,scrollbars=yes,location=no,resize=yes,menubar=no,directories=no,copyhistory=0,width=800,height=600,top= 10,left = 10');
		window.open("/GS/postgrad/GPOS121.php","",'toolbar=no,resizable=yes,scrollbars=yes,location=no,resize=yes,menubar=no,directories=no,copyhistory=0,width=800,height=600,top= 10,left = 10');
}
</script>

<script>
function doLayerPopup(v) {
var layerPopupFull = document.getElementById("layerPopupFull");
var layerPopup = document.getElementById("layerPopup");


if (v=="show")
{
layerPopupFull.style.display = "";
layerPopup.style.display = "";
}
else {
layerPopupFull.style.display = "none";
layerPopup.style.display = "none";
}
}

oldSubIdx = 0;
function ShowTSMenu(x) {
	if (oldSubIdx > 0) {
		$("#div_subtop" + oldSubIdx).css("display", "none");
	}

	$("#div_subtop" + x).css("display", "block");
	oldSubIdx = x;
}

function changeLan() {
	document.MyIFrame.location.href="/login/change_language.php";
}
</script>
<script language="JavaScript" src="/js/common.js"></script>
<script src="/Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<style type="text/css">
.cls_subtop {
	position:absolute;
	top:5px;
	text-align:left;
	display:none;
}
.cls_subtop a {
	color:#646464;
}
a.smallTEXT {
	font-size:8pt;
	font-family:돋움;
}
#div_subtop1 {
	left:20px;
}
#div_subtop2 {
	left:100px;
}
#div_subtop3 {
	left:180px;
}
#div_subtop4 {
	left:310px;
}
#div_subtop5 {
	left:540px;
}
#div_subtop6 {
	right:20px;
}
#div_subtop7 {
	right:5px;
}

#div_TopmenuBg {
	width:100%;
	height:104px;
	text-align:center;
}
html {
    height:100%;
	}
#layerPopup {
	position: absolute;
	width: 980px;
	height: 700px;
	left: 50%;
	top: 50%;
	margin-top: -350px;  /* width 값의 절반 */
	margin-left: -490px;  /* width 값의 절반 */
	z-index: 2;
	visibility: visible;
}
#div_quick {
	position:absolute;
	top:120px;
}
</style>
<div id="layerPopupFull" style="position:absolute; z-index:1; width:100%; height:100%; left:0px; top:0px; display:none; background-color:black; filter:alpha(opacity=80); opacity:.8; visibility: visible;"> </div>
<div id="layerPopup" style="display:none; ">
  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','980','height','700','src','/fla/for_student/intro','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','wmode','transparent','movie','/fla/for_student/intro' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="980" height="700">
    <param name="movie" value="/fla/for_student/intro.swf">
    <param name="quality" value="high">
    <param name="wmode" value="transparent">
    <embed src="/fla/for_student/intro.swf" width="980" height="700" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" wmode="transparent"></embed>
  </object>
</noscript>
<a href="#" onClick="doLayerPopup('hide')"><img src="/2012_images/main/close.png" border="0"></a></div>

<div id="div_TopmenuBg">

<table width="980" border="0" align="center" cellpadding="0" cellspacing="0" style="margin:auto;">
  <tr>
    <td height="42" valign="bottom" style="color:#7C7C7C">
	  <div align="left">
	    		Welcome,
			       <strong>신희주</strong>(dughdhk321)
							<!--strong><font color="#0074c4"></font> </strong-->
				</div>
	</td>
    <td width="227" rowspan="2">
					<a href="https://hisnet.handong.edu/main.php"><img src="/2012_images/tmenu_center.jpg" alt="상단메뉴중심" width="227" height="78" border="0" /></a>	</td>
    <td width="376" valign="bottom">
		<div align="right">
			<a href="https://hisnet.handong.edu/main.php">
				<img src="/2012_images/public/tbtn_home.jpg" alt="홈" align="absmiddle" border="0" />
			</a>
				<img src="/2012_images/public/tbtn_divide.jpg" width="1" align="absmiddle" height="18" />
			<a href="/login/logout.php">
				<img src="/2012_images/public/tbtn_logout.jpg" align="absmiddle" border="0" />
			</a>
				<img src="/2012_images/public/tbtn_divide.jpg" align="absmiddle" width="1" height="18" />
			<a href="/userinfo/mgtPassword.php">
				<img src="/2012_images/public/tbtn_myaccount.jpg" alt="나의 계정" align="absmiddle" border=0/>
			</a>
				<img src="/2012_images/public/tbtn_divide.jpg" width="1" height="18"  align="absmiddle"/>
			<a href="/sitemap.php">
				<img src="/2012_images/public/tbtn_sitemap.jpg" alt="사이트맵" align="absmiddle" border=0/>
			</a>
				<img src="/2012_images/public/tbtn_divide.jpg" width="1" height="18" align="absmiddle" />
			<a href="#" onClick="doLayerPopup('show')">
				<img src="/2012_images/public/tbtn_helper.jpg" alt="ENGLISH" align="absmiddle" border="0" />
			</a>
			<a href="javascript:changeLan();">
				<img src="/2012_images/public/languagechg.gif" alt="Language" align="absmiddle" border="0" />
			</a>
		</div>
	</td>
  </tr>

  <tr height="36" >
    <td width="376"  ><div align="center">
	<a href="/myboard/list.php?Board=NB0001" onmouseover="ShowTSMenu(1)">
		<img src="/2012_images/public/tmenu1.jpg" alt="공지사항" height="20" border="0" />
	</a>

	<a href="/for_student/campus_info/01.php" onmouseover="ShowTSMenu(2)">
		<img src="/2012_images/public/tmenu2.jpg" alt="캠퍼스정보"  height="20" border="0" />
	</a>

	<a href="/prof/booking/PSTU420M.php" onmouseover="ShowTSMenu(3)">
		<img src="/2012_images/public/tmenu3.jpg" alt="신청예약"  height="20" border="0" />
	</a>

	<a href="/for_student/oneclick/01.php" onmouseover="ShowTSMenu(4)">
		<img src="/2012_images/public/tmenu4.jpg" alt="원클릭민원"  height="20" border="0" />
	</a></div>
	</td>
    <td width="376"  ><div align="left" style="position:relative">
	<a href="/for_student/course/01.php" onmouseover="ShowTSMenu(5)">
		<img src="/2012_images/public/tmenu5.jpg" alt="수업정보"  height="20" border="0" />
	</a>

	<a href="/for_student/haksa_info/01.php" onmouseover="ShowTSMenu(6)">
		<img src="/2012_images/public/tmenu6.jpg" alt="학사정보"  height="20" border="0" />
	</a>
					<a href="javascript:sendit_career();"> 				<img src="/2012_images/public/tmenu7.jpg?time='2018-08-31'" alt="비전과진로" height="20" border=0 />
			</a>
		</div>
	</td>
</tr>
	<tr>
		<td colspan="3">
			<div style="position:relative;">
<div id="div_subtop1" class="cls_subtop" style="display:none;">
	<a href=/myboard/list.php?Board=NB0001&Page=1&FindIt=&FindText=><img src='/2012_images/submenu/s01off_01.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/myboard/list.php?Board=OVERCOME><img src='/2012_images/submenu/m02off_20.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/for_student/school.php><img src='/2012_images/submenu/s01off_02.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/myboard/list.php?Board=B0113><img src='/2012_images/submenu/s01off_03.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/myboard/list.php?Board=JANG_NOTICE><img src='/2012_images/submenu/s01off_04.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/myboard/list.php?Board=B0364><img src='/2012_images/submenu/s01off_05.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/myboard/list.php?Board=FOREIGNF_NOTICE><img src="/2012_images/submenu/s01off_07.gif?time='2015-08-05'" border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/myboard/list.php?Board=RCNOTICE target= ><img src='/2012_images/submenu/s01off_08.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/for_student/hedc/hedc_list.php target= ><img src='/2012_images/submenu/s01off_09.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/for_student/poll2/hislist.php target= ><img src='/2012_images/submenu/s01off_10.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/myboard/list.php?Board=RESEARCH_NOTICE><img src='/2012_images/submenu/s01off_11.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/myboard/list.php?Board=STU_DISABILITY><img src='/2012_images/submenu/s01off_12.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/myboard/list.php?Board=BIBLE_READING><img src='/2012_images/submenu/s01off_14.gif' border=0></a>
</div>

<div id="div_subtop2" class="cls_subtop" style="display:none;">
	<a href=/itsupport/itsupport.php><img src='/2012_images/submenu/s02off_01.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/for_student/campus_info/01.php><img src='/2012_images/submenu/s02off_02.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/for_student/campus_info/02_1.php><img src='/2012_images/submenu/s02off_03.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/myboard/list.php?Board=BUS_TIMETABLE><img src='/2012_images/submenu/s02off_04.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/myboard/list.php?Board=B0003><img src='/2012_images/submenu/s02off_05.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href="http://www.handong.edu/major/college/intro/" target="_blank"><img src='/2012_images/submenu/s02off_08.gif' border=0></a>
	  <img src='/2012_images/submenu/short_bar.gif' > 	<a href=/prof/sexual/sub00.php><img src='/2012_images/submenu/s02off_07.gif' border=0></a>
	  <img src='/2012_images/submenu/short_bar.gif' >
	<a href=/prof/learning/sub22.php><img src='/2012_images/submenu/s02off_09.gif' border=0></a>
</div>

<div id="div_subtop3" class="cls_subtop" style="display:none;">
	<a href=/prof/booking/PSTU420M.php><img src='/2012_images/submenu/s03off_01.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif'>
	<a href=/prof/student/PSTU300M.php><img src='/2012_images/submenu/s03off_02.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/haksa/student/HSTU630M.php><img src='/2012_images/submenu/s03off_03.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/prof/sobi/book2012/document_list.php><img src='/2012_images/submenu/s03off_04.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/prof/ethics/sub03.php><img src='/2012_images/submenu/p07off_09.gif' border=0></a>
</div>

<div id="div_subtop4" class="cls_subtop" style="display:none;">
	<a href=/myboard/list.php?Board=ONECLICK><img src='/2012_images/submenu/s04off_01.gif' border=0></a>
</div>

<div id="div_subtop5" class="cls_subtop" style="display:none;">
	<a href=/for_student/course/HLES110M.php><img src='/2012_images/submenu/s05off_01.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/cis/list.php?Board=KYOM_NOTICE><img src='/2012_images/submenu/s05off_02.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/for_student/course/03_3.php><img src='/2012_images/submenu/s05off_03.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/for_student/slecture/admin_list.php><img src='/2012_images/submenu/s05off_04.gif' border=0></a>
</div>

<div id="div_subtop6" class="cls_subtop" style="display:none;">
	<a href=/haksa/hakjuk/HHAK110M.php><img src='/2012_images/submenu/s06off_01.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/haksa/hakjuk/HHAK110M.php><img src='/2012_images/submenu/s06off_02.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/haksa/dormitory/HDOR152M.php><img src='/2012_images/submenu/s06off_11.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/haksa/regist/HREG170M.php><img src='/2012_images/submenu/s06off_04.gif' border=0></a>

		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/prof/service/PSER120M.php><img src='/2012_images/submenu/s06off_05.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/haksa/record/HREC110M.php><img src='/2012_images/submenu/s06off_06.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/haksa/janghak/HJAN130M.php><img src='/2012_images/submenu/s06off_07.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/myboard/list.php?Board=GRADUATION><img src='/2012_images/submenu/s06off_08.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/haksa/student/HSTU110M.php><img src='/2012_images/submenu/s06off_09.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/haksa/research/HRRE110M.php><img src='/2012_images/submenu/s06off_12.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/haksa/soul/HSOU100M.php><img src='/2012_images/submenu/s06off_10.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/myboard/list.php?Board=B0429><img src='/2012_images/submenu/s06off_13.gif' border=0></a>
</div>
<div id="div_subtop7" class="cls_subtop" style="display:none;">
	<a href=/portfolio/main.php><img src='/2012_images/submenu/s08off_01.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif'/>
	<a href=/portfolio/02_1.php><img src='/2012_images/submenu/s08off_02.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/portfolio/03_1.php><img src='/2012_images/submenu/s08off_03.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/myboard/list_preview.php?Board=PORTFOLIOJGINFO><img src='/2012_images/submenu/s08off_04.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/portfolio/career/HSTU514.php><img src='/2012_images/submenu/s08off_05.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/portfolio/poll/index.php><img src='/2012_images/submenu/s08off_09.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/haksa/student/HSTU141_N.php><img src='/2012_images/submenu/s08off_06.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/portfolio/05_1_02.php><img src='/2012_images/submenu/s08off_07.gif' border=0></a>
		<img src='/2012_images/submenu/short_bar.gif' >
	<a href=/portfolio/07_1.php><img src='/2012_images/submenu/s08off_08.gif' border=0></a>
</div>
</div>
			</div>
		</td>
	</tr>
</table>
</div>
<div id="div_quick">	<img src="/2012_images/quick/quick_stud_kor.png?time='2019-08-23'"  border="0" usemap="#Map" />

<!--
<p align="center"><img src="/2012_images/cover_up.jpg" border="0" width="90"/><br><a href="http://scampus.handong.edu/hgusmart/dn/i206/" target="_blank"><img src="/2012_images/ios_icon_eng.jpg" border="0" width="90"/><img src="/2012_images/ios_icon.jpg" border="0" width="90"/></a><br><img src="/2012_images/cover_down.jpg" border="0" width="90"/></p>
-->
<br>

<!-- EAA, 기초역량/학문인증, 알파문고 배너 적용한 것 -->
<img src="/2012_images/quick_stu_below.png" border="0" width="90px" usemap="#Map_below"/>

<script language="javascript">

	function sendit6(){
		var f1=document.qform8;
		f1.action = "/it_support.php";
		f1.submit();
	}

	function sendit10(){
		var f1=document.qform7;
		f1.action = "/library.php";
		f1.submit();
	}

	function sendit_ir(){
		var f1=document.qform10;
		f1.action = "/ir.php";
		f1.submit();
	}

	function sendit12(){ // 생활관시스템과 HISNet과의 SSO 연결을 위한 함수
		var f1=document.qform7;
		f1.action = "/dormitory_sso.php";
		f1.submit();
	}

	function sendit_cis(){
		var f1=document.qform7;
		f1.action = "/cis_sso.php";
		f1.submit();
	}

	function sendit_career() { // 경력개발팀에서 새로 개발한 시스템과 HISNet과의 SSO 연결을 위한 함수 (180502 김인탁)

		//alert('역량개발시스템 오류로 현재 접속이 되지 않고 있습니다.\n\n상담을 원하시는 분은 054-260-3326(경력개발팀)으로\n전화주셔서 예약을 잡으시기 바랍니다.\n시스템 접속이 안되는 관계로 기존에 예약된 명단을\n확인할 수 없어 중복예약 될 수도 있음을 양해 부탁드립니다.\n\n 최대한 빨리 시스템이 정상화 되도록 노력하겠습니다.\n감사합니다.');

		var f1=document.qform9;
		f1.action = "/career_sso.php";
		f1.submit();
	}

  function openPopup() { // E-AA 오픈을 위해 만든 함수 (180531 김인탁)
    var netWindow = window.open("about:blank");
    netWindow.location.href = 'https://hisnet.handong.edu/EAA/loginPrc.php';
  }

	function sendit_rnd(){
  	alert("연구시스템으로의 자동로그인 기능이\n현재 개발중에 있으니 완료 시까진\n불편하시더라도 연구시스템 자체 로그인 페이지에서\n직접 로그인하시길 부탁드립니다.\n(문의 : 산학협력팀 T.260-1272)\n\n※ 본 팝업창의 '확인'버튼을 클릭하시면\n자동으로 연구시스템 로그인 페이지로 이동합니다 ※");

    var netWindow = window.open("about:blank");
    netWindow.location.href = 'https://handong.rndbiz.co.kr/main_0001_03.act';
  }

</script>

<form name = "qform7"  method ="post" action="" target = "_blank">
	<input type="hidden" name=userid value="dughdhk321">
	<input type="hidden" name=token value="20191119072933">
</form>

<form name="qform8" method="post" action="">
		<input type="hidden" name="userid" value="dughdhk321">
		<input type="hidden" name="token" value="20191119072933">
</form>

<form name ="qform9"  method = "post" target = "_blank">
	<input type="hidden" name=usernum value="21800412">
	<input type="hidden" name=token value="20191119072933">
</form>

<form name ="qform10"  method = "post" target = "_blank">
	<input type="hidden" name=userid value="dughdhk321">
	<input type="hidden" name=token value="20191119072933">
</form>


<!-- 국문일 경우 -->
<map name="Map">
	<!-- E-AA -->
	<area shape="rect" coords="6,32,84,62" href="#" onclick="openPopup();">
	<!-- 웹메일 -->
	<area shape="rect" coords="6,68,84,135" href="https://hisnet.handong.edu/itsupport/register/email/google_email_notice.php">
	<!-- IT Support -->
	<area shape="rect" coords="6,136,84,160" href="#" onclick="sendit6();">
	<!-- 인터넷증명발급 -->
	<area shape="rect" coords="6,162,84,190" href="http://han.certpia.com/" target="_blank">
	<!-- HDOCW -->
	<area shape="rect" coords="6,192,84,211" href="http://www.kocw.net/home/search/search.do?callStatus=&oldQuery=&open_top_select=znAll&query=%ED%95%9C%EB%8F%99%EB%8C%80%ED%95%99%EA%B5%90" target="_blank">
	<!-- 연구시스템 -->
	<area shape="rect" coords="6,213,84,237" href="#" onclick="sendit_rnd();">

	<!-- 한동대학교 -->
	<area shape="rect" coords="6,246,84,270" href="https://www.handong.edu/" target="_blank">
	<!-- 생활관/RC -->
	<area shape="rect" coords="6,273,84,297" href="#" onclick="sendit12();" />
	<!-- 학술정보관 -->
	<area shape="rect" coords="6,299,84,323" href="#" onclick="sendit10();" />
	<!-- 교목실 -->
	<area shape="rect" coords="6,326,84,349" href="http://church.handong.edu/" target="_blank" />
	<!-- 경력개발팀 -->
	<area shape="rect" coords="6,352,84,376" href="https://job.handong.edu/main/" target="_blank" />
	<!-- IR지원실 -->
	<area shape="rect" coords="6,379,84,402" href="#" onclick="sendit_ir();" />
	<!-- 국제협력실 -->
	<area shape="rect" coords="6,404,84,429" href="https://www.ihandong.info" target="_blank" />
	<!-- 발전기금 -->
	<area shape="rect" coords="6,432,84,455" href="https://sarang.handong.edu" target="_blank" />
	<!-- 한동교육개발센터 -->
	<area shape="rect" coords="6,458,84,490" href="https://hised.handong.edu" target="_blank" />
	<!-- 글쓰기 지원실 -->
	<area shape="rect" coords="6,492,84,516" href="https://writing.handong.edu" target="_blank" />
	<!-- 총학생회 -->
	<area shape="rect" coords="6,519,84,543" href="http://stu.handong.edu" target="_blank" />
</map>

<!-- 영문일 경우 -->
<map name="Map_eng">
	<!-- E-AA -->
	<area shape="rect" coords="6,33,84,64" href="#" onclick="openPopup();">
	<!-- 웹메일 -->
	<area shape="rect" coords="6,70,84,137" href="https://hisnet.handong.edu/itsupport/register/email/google_email_notice.php">
	<!-- IT Support -->
	<area shape="rect" coords="6,138,84,161" href="#" onclick="sendit6();">
	<!-- 인터넷증명발급 -->
	<area shape="rect" coords="6,163,84,191" href="http://han.certpia.com/" target="_blank">
	<!-- HDOCW -->
	<area shape="rect" coords="6,193,84,213" href="http://www.kocw.net/home/search/search.do?callStatus=&oldQuery=&open_top_select=znAll&query=%ED%95%9C%EB%8F%99%EB%8C%80%ED%95%99%EA%B5%90" target="_blank">
	<!-- 연구시스템 -->
	<area shape="rect" coords="6,215,84,238" href="#" onclick="sendit_rnd();">

	<!-- 한동대학교 -->
	<area shape="rect" coords="6,244,84,271" href="https://www.handong.edu/" target="_blank">
	<!-- 생활관/RC -->
	<area shape="rect" coords="6,246,84,298" href="#" onclick="sendit12();" />
	<!-- 학술정보관 -->
	<area shape="rect" coords="6,274,84,324" href="#" onclick="sendit10();" />
	<!-- 교목실 -->
	<area shape="rect" coords="6,326,84,351" href="https://church.handong.edu/" target="_blank" />
	<!-- 경력개발팀 -->
	<area shape="rect" coords="6,354,84,402" href="https://job.handong.edu/main/" target="_blank" />
	<!-- IR지원실 -->
	<area shape="rect" coords="6,404,84,428" href="#" onclick="sendit_ir();" />
	<!-- 국제협력실 -->
	<area shape="rect" coords="6,431,84,455" href="https://www.ihandong.info" target="_blank" />
	<!-- 발전기금 -->
	<area shape="rect" coords="6,458,84,492" href="https://sarang.handong.edu" target="_blank" />
	<!-- 한동교육개발원 -->
	<area shape="rect" coords="6,495,84,519" href="https://hised.handong.edu" target="_blank" />
	<!-- 글쓰기 지원실 -->
	<area shape="rect" coords="6,522,84,555" href="https://writing.handong.edu" target="_blank" />
	<!-- 총학생회 -->
	<area shape="rect" coords="6,558,84,591" href="http://stu.handong.edu" target="_blank" />
</map>

<!-- 퀵링크 하단 링크 Mapping -->
<map name="Map_below">
	<!-- 기초역량/학문인증 -->
	<area shape="rect" coords="5,10,84,41" href="https://hisnet.handong.edu/prof/ace/ACE0001_I_A.php" target="_blank">
	<!-- Alpha 문고 -->
	<area shape="rect" coords="5,46,84,83" href="https://handong.alphachain.co.kr/main/mainView.do" target="_blank">
</map></div>
<script language="javascript">
ShowTSMenu(1);
function setQuick1() {
	var quick_w = ($(document).width() - 1000)/2 + 1000;

	$("#div_quick").css("left", quick_w + "px");
}
$(window).resize(function() {
	setQuick1();
});
setQuick1();
</script>


<script>
function print_rd() {
window.open('/prof/insa/pins114m.php','','toolbar=no,resizable=yes,scrollbars=yes,location=no,resize=yes,menubar=no,directories=no,copyhistory=0,width=800,height=600,top=10,left=10');
}

function careerinfo() {
 window.open('/haksa/student/PSTU141.html','_blank');
}


</script>
<table width="1000" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td height="28" align="center" background="/images/templates/top_bg.jpg"><table width="980" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td height="28" align="right" valign="bottom"><div id="navigaterDipText"></div></td>
			</tr>
		</table></td>
	</tr>
	<tr>
		<td align="center"><table width="980" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="191" valign="top">
				<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<table width="191" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td width="191" height="58"><img src="/2012_images/student/title01.jpg" width="191" height="58" /></td>
	</tr>
	<tr>
		<td>
			<table width="191" border="0" cellspacing="0" cellpadding="0">
				<tr id="tr_side_show">
					<td align="left"><a href="javascript:ShowAllLeft();"><img src="/2012_images/public/allmenu_open_b.jpg" width="191" height="20" border="0" style="margin-top:1px; margin-bottom:1px;" /></a></td>
				</tr>
				<tr id="tr_side_hide">
					<td align="left"><a href="javascript:HideAllLeft()"><img src="/2012_images/public/allmenu_close_b.jpg" width="191" height="20" border="0" style="margin-top:1px; margin-bottom:1px;" /></a></td>
				</tr>
				<tr>
					<td align="left"><div style="border-bottom:3px solid #0173bc"><img src="/2012_images/public/1x1.png" width="1" height="1" /></div></td>
				</tr>
				<tr>
					<td width="191" align="center" background1="/images/templates/menu_bg01.jpg" style="border-left:3px solid #0173bc; border-right:3px solid #0173bc; padding-top:1px;">
						<div style="min-height:375px; height:auto !important; height:375px;">
						<table width="183" border="0" cellspacing="0" cellpadding="0">
<style type="text/css">

/* 왼쪽 메뉴 관련 */
a.cls_menulevel2 {
	color:#333333 !important;
	padding-left:3px;
	padding-top:5px !important;
	padding-bottom:5px !important;
	height:14px !important;
	line-height:normal !important;
	display:block;
	margin:0 !important;
	border-bottom:1px solid #dcdbe9;
	text-decoration:none !important;
	font-family:돋움;
	font-size:10pt !important;
}
a:hover.cls_menulevel2 {
	color:#FFF  !important;
/*	background-color:#8ea8db  !important; */
	background-image:url(/2012_images/public/menu_over_b.jpg);
}
a.active_menulevel2 {
	padding-left:3px;
	padding-top:5px !important;
	padding-bottom:5px !important;
	margin:0 !important;
	height:14px !important;
	line-height:normal !important;
	display:block;
/*	border-bottom:1px solid #dcdbe9; */
	text-decoration:none !important;
	color:#FFF  !important;
	background-image:url(/2012_images/public/menu_over_b.jpg);
	background-repeat:no-repeat;
	font-family:돋움;
	font-size:10pt !important;
}

a.cls_menulevel3 {
	color:#333333 !important;
	padding-top:5px !important;
	padding-bottom:5px !important;
	height:14px !important;
	line-height:normal !important;
	display:block;
	margin:0 !important;
	border-bottom:1px solid #dcdbe9;
	text-decoration:none !important;
	font-family:돋움;
	font-size:11px !important;
	background-color:#E0E0E0  !important;
	width:183px;
}
a:hover.cls_menulevel3 {
	color:#FFF  !important;
/*	background-color:#8ea8db  !important; */
	background-image:url(/2012_images/public/menu_over_b.jpg);
	display:block;
}
a.active_menulevel3 {
	padding-top:5px !important;
	padding-bottom:5px !important;
	margin:0 !important;
	height:14px !important;
	line-height:normal !important;
	display:block;
/*	border-bottom:1px solid #dcdbe9; */
	text-decoration:none !important;
	color:#FFF  !important;
	background-image:url(/2012_images/public/menu_over_b.jpg);
	background-repeat:no-repeat;
	font-family:돋움;
	font-size:11px !important;
	width:183px;
}
</style>
							<tr>
								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px">
										<a href="/myboard/list.php?Board=NB0001&Page=1&FindIt=&FindText=" class="active_menulevel2"> <img src="/2012_images/public/menu_plus_hide_b.png" style="border:0" /> 일반공지</a>
								</td>
							</tr>
							<tr>
								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px">
										<a href="/myboard/list.php?Board=OVERCOME&Page=1&FindIt=&FindText=" class="cls_menulevel2"> <img src="/2012_images/public/menu_plus_hide_b.png" style="border:0" /> <b>한동의 지진대응</b></a>
								</td>
							</tr>
							<tr>
								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px">
										<a href="javascript:ShowSub(2);" class="cls_menulevel2"> <img src="/2012_images/public/menu_plus_b.png" style="border:0" /> 학부공지</a>
								</td>
							</tr>


							<tr class="submenu_2" style="display:none">

								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px;">

									<div style="margin:0;padding:0;">

										<a href="/myboard/list.php?Board=B0020" class="cls_menulevel3"> <img src="/2012_images/public/submenu_bl_b.png" style="border:0; margin-left:8px;" /> 글로벌리더쉽</a>

									</div>

								</td>

							</tr>



							<tr class="submenu_2" style="display:none">

								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px;">

									<div style="margin:0;padding:0;">

										<a href="/myboard/list.php?Board=B0021" class="cls_menulevel3"> <img src="/2012_images/public/submenu_bl_b.png" style="border:0; margin-left:8px;" /> 국제어문</a>

									</div>

								</td>

							</tr>



							<tr class="submenu_2" style="display:none">

								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px;">

									<div style="margin:0;padding:0;">

										<a href="/myboard/list.php?Board=B0022" class="cls_menulevel3"> <img src="/2012_images/public/submenu_bl_b.png" style="border:0; margin-left:8px;" /> 경영경제</a>

									</div>

								</td>

							</tr>



							<tr class="submenu_2" style="display:none">

								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px;">

									<div style="margin:0;padding:0;">

										<a href="/myboard/list.php?Board=B0023" class="cls_menulevel3"> <img src="/2012_images/public/submenu_bl_b.png" style="border:0; margin-left:8px;" /> 법학부</a>

									</div>

								</td>

							</tr>



							<tr class="submenu_2" style="display:none">

								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px;">

									<div style="margin:0;padding:0;">

										<a href="/myboard/list.php?Board=B0024" class="cls_menulevel3"> <img src="/2012_images/public/submenu_bl_b.png" style="border:0; margin-left:8px;" /> 언론정보</a>

									</div>

								</td>

							</tr>



							<tr class="submenu_2" style="display:none">

								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px;">

									<div style="margin:0;padding:0;">

										<a href="/myboard/list.php?Board=B0102" class="cls_menulevel3"> <img src="/2012_images/public/submenu_bl_b.png" style="border:0; margin-left:8px;" /> 상담복지</a>

									</div>

								</td>

							</tr>



							<tr class="submenu_2" style="display:none">

								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px;">

									<div style="margin:0;padding:0;">

										<a href="/myboard/list.php?Board=B0028" class="cls_menulevel3"> <img src="/2012_images/public/submenu_bl_b.png" style="border:0; margin-left:8px;" /> 생명과학</a>

									</div>

								</td>

							</tr>



							<tr class="submenu_2" style="display:none">

								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px;">

									<div style="margin:0;padding:0;">

										<a href="/myboard/list.php?Board=B0025" class="cls_menulevel3"> <img src="/2012_images/public/submenu_bl_b.png" style="border:0; margin-left:8px;" /> 공간환경시스템</a>

									</div>

								</td>

							</tr>



							<tr class="submenu_2" style="display:none">

								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px;">

									<div style="margin:0;padding:0;">

										<a href="/myboard/list.php?Board=B0029" class="cls_menulevel3"> <img src="/2012_images/public/submenu_bl_b.png" style="border:0; margin-left:8px;" /> 전산전자</a>

									</div>

								</td>

							</tr>



							<tr class="submenu_2" style="display:none">

								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px;">

									<div style="margin:0;padding:0;">

										<a href="/myboard/list.php?Board=B0027" class="cls_menulevel3"> <img src="/2012_images/public/submenu_bl_b.png" style="border:0; margin-left:8px;" /> 콘텐츠융합디자인</a>

									</div>

								</td>

							</tr>



							<tr class="submenu_2" style="display:none">

								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px;">

									<div style="margin:0;padding:0;">

										<a href="/myboard/list.php?Board=B0026" class="cls_menulevel3"> <img src="/2012_images/public/submenu_bl_b.png" style="border:0; margin-left:8px;" /> 기계제어</a>

									</div>

								</td>

							</tr>



							<tr class="submenu_2" style="display:none">

								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px;">

									<div style="margin:0;padding:0;">

										<a href="/myboard/list.php?Board=B0419" class="cls_menulevel3"> <img src="/2012_images/public/submenu_bl_b.png" style="border:0; margin-left:8px;" /> ICT창업학부</a>

									</div>

								</td>

							</tr>



							<tr class="submenu_2" style="display:none">

								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px;">

									<div style="margin:0;padding:0;">

										<a href="/myboard/list.php?Board=B0031" class="cls_menulevel3"> <img src="/2012_images/public/submenu_bl_b.png" style="border:0; margin-left:8px;" /> 언어교육원</a>

									</div>

								</td>

							</tr>



							<tr class="submenu_2" style="display:none">

								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px;">

									<div style="margin:0;padding:0;">

										<a href="/myboard/list.php?Board=B0427" class="cls_menulevel3"> <img src="/2012_images/public/submenu_bl_b.png" style="border:0; margin-left:8px;" /> 창의융합교육원</a>

									</div>

								</td>

							</tr>

													<tr>
								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px">
										<a href="javascript:ShowSub(3);" class="cls_menulevel2"> <img src="/2012_images/public/menu_plus_b.png" style="border:0" /> 대학원공지</a>
								</td>
							</tr>


							<tr class="submenu_3" style="display:none">

								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px;">

									<div style="margin:0;padding:0;">

										<a href="/myboard/list.php?Board=B0113" class="cls_menulevel3"> <img src="/2012_images/public/submenu_bl_b.png" style="border:0; margin-left:8px;" /> 대학원공지</a>

									</div>

								</td>

							</tr>



							<tr class="submenu_3" style="display:none">

								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px;">

									<div style="margin:0;padding:0;">

										<a href="/myboard/list.php?Board=B0114" class="cls_menulevel3"> <img src="/2012_images/public/submenu_bl_b.png" style="border:0; margin-left:8px;" /> 대학원양식</a>

									</div>

								</td>

							</tr>



							<tr class="submenu_3" style="display:none">

								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px;">

									<div style="margin:0;padding:0;">

										<a href="/myboard/list.php?Board=B0430" class="cls_menulevel3"> <img src="/2012_images/public/submenu_bl_b.png" style="border:0; margin-left:8px;" /> 학과공지</a>

									</div>

								</td>

							</tr>

													<tr>
								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px">
										<a href="/myboard/list.php?Board=JANG_NOTICE" class="cls_menulevel2"> <img src="/2012_images/public/menu_plus_hide_b.png" style="border:0" /> 장학공지</a>
								</td>
							</tr>
							<tr>
								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px">
										<a href="/myboard/list.php?Board=B0364" class="cls_menulevel2"> <img src="/2012_images/public/menu_plus_hide_b.png" style="border:0" /> 취업공지</a>
								</td>
							</tr>
							<tr>
								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px">
										<a href="/myboard/list.php?Board=FOREIGNF_NOTICE" class="cls_menulevel2"> <img src="/2012_images/public/menu_plus_hide_b.png" style="border:0" /> OIA Info</a>
								</td>
							</tr>
							<tr>
								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px">
										<a href="/myboard/list.php?Board=RCNOTICE" class="cls_menulevel2"> <img src="/2012_images/public/menu_plus_hide_b.png" style="border:0" /> 생활관/RC</a>
								</td>
							</tr>
							<tr>
								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px">
										<a href="/for_student/hedc/hedc_list.php" class="cls_menulevel2"> <img src="/2012_images/public/menu_plus_hide_b.png" style="border:0" /> HEDC</a>
								</td>
							</tr>
							<tr>
								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px">
										<a href="/for_student/poll2/hislist.php" class="cls_menulevel2"> <img src="/2012_images/public/menu_plus_hide_b.png" style="border:0" /> 설문조사</a>
								</td>
							</tr>
							<tr>
								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px">
										<a href="/myboard/list.php?Board=RESEARCH_NOTICE" class="cls_menulevel2"> <img src="/2012_images/public/menu_plus_hide_b.png" style="border:0" /> 연구공지</a>
								</td>
							</tr>
							<tr>
								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px">
										<a href="/myboard/list.php?Board=STU_DISABILITY" class="cls_menulevel2"> <img src="/2012_images/public/menu_plus_hide_b.png" style="border:0" /> 장애학생지원</a>
								</td>
							</tr>
							<tr>
								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px">
										<a href="/myboard/list.php?Board=BIBLE_READING" class="cls_menulevel2"> <img src="/2012_images/public/menu_plus_hide_b.png" style="border:0" /> 성경읽기</a>
								</td>
							</tr>
							<tr>
								<td valign="top" class="cls_AlignLeft" style="padding-bottom:1px">
										<a href="/myboard/list.php?Board=UNIV_INNOVATION" class="cls_menulevel2"> <img src="/2012_images/public/menu_plus_hide_b.png" style="border:0" /> 대학혁신지원사업</a>
								</td>
							</tr>
<script language="javascript">
document.all("navigaterDipText").innerHTML = "<span class='Navi1'>HOME</span> &gt;<span class='Navi2'>공지사항&gt; 일반공지</span>";
ShowTSMenu(1);
function ShowSub(x) {
	var i = 0;
	var y = 14;

	for(i=0;i < y;i++) {
		if (i == x) {
			$(".submenu_" + i).css("display", "block");
		}
		else
		{
			$(".submenu_" + i).css("display", "none");
		}
	}
}
function ShowAllLeft() {
	var i = 0;
	var y = 14;

	for(i=0;i < y;i++) {
		$(".submenu_" + i).css("display", "block");
	}
	$("#tr_side_show").css("display", "none");
	$("#tr_side_hide").css("display", "block");
}
function HideAllLeft() {
	var i = 0;
	var y = 14;

	for(i=0;i < y;i++) {
		$(".submenu_" + i).css("display", "none");
	}
	$("#tr_side_show").css("display", "block");
	$("#tr_side_hide").css("display", "none");
}

</script>
<script language="javascript">
// 졸업 => 수료전후의 학사정보 팝업
function graduate_popup() {
	var ssoURL ="/prof/graduate/pop02.html";
	var opt    ="toolbar=no,resizable=no,scrollbars=1,location=no,resize=no,menubar=no,directories=no,copyhistory=0,width=500,height=500,top= 0,left = 0,menubar=0,status=0 left=200, top=100";

	window.open (ssoURL, "_blank", opt);
}
</script>						</table>
						</div>
					</td>
				</tr>
				<tr>
					<td align="left"><div style="border-top:3px solid #0173bc"><img src="/2012_images/public/1x1.png" width="1" height="1" /></div></td>
				</tr>
				<tr><td height ="2" >&nbsp;</td></tr>
   			<tr>
					<td width="191" >
						<a href="/prof/sexual/sub00.php" > <img src="/2012_images/public/sexual.png?time='2016-06-29'" width="191" border=0 /></a>
					</td>
				</tr>


			</table>
			<br />
		</td>
	</tr>
</table>

<!-- 에듀스 취업솔루션 로그인을 위한 form -->
<form method="post" name="educeForm" name="educeForm" action="">
	<input type="hidden" name="SetupNo" value="37" /><!-- 생성코드 (수정불가) -->
	<input type="hidden" name="UnivNum" value="213" /><!-- 대학코드 (수정불가) -->
	<input type="hidden" name="UserID" value="21800412" /><!-- 학번 -->
	<input type="hidden" name="UserName" value="신희주" /><!-- 성명 -->
</form>

<!-- 에듀스 취업솔루션 로그인을 위한 javascript -->
<script type="text/javascript">
<!--
	//취업솔루션 로그인
	function EduceLogin() {
		var gsWin = window.open('about:blank','educe_homepage');
		var frm = document.educeForm;
		frm.action = 'http://u.educe.co.kr/jobhandong/';
		frm.target = 'educe_homepage';
		frm.submit();
	}
//-->
</script>
				</td>
				<td width="36">&nbsp;</td>
				<td width="753" valign="top"><table width="753" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td height="40" align="left" valign="middle">
						<img src="/2012_images/student/title_s_01.jpg?time='2018-02-06'"  />
<br><br>
						</td>
					</tr>
					<tr>
						<td valign="top">
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
<LINK REL='stylesheet' TYPE='text/css' HREF='/css/default.css'>
<LINK REL='stylesheet' TYPE='text/css' HREF='/myboard/skin/css.css'>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
		  <div style="text-align:left; margin:0;">
			  <script language="javascript">
				  function setCategoryL() {
					  document.location = "/myboard/list.php?Board=NB0001&CateCode=" + document.formCateL.CateCode.options[document.formCateL.CateCode.selectedIndex].value;
				  }
				</script>
				<form id="formCateL" name="formCateL" style="margin:0">
					  <select id="CateCode" name="CateCode" onchange="setCategoryL()">
							<option value="">전체보기</option>
							  <option value="10"  >General Info(전체 공지)</option>
							  <option value="20"  >Class Info(수업관련 공지)</option>
							  <option value="30"  >Academic Info(교무팀 공지)</option>
							  <option value="40"  >Student Info(학생팀 공지)</option>
							  <option value="51"  >Dormitory Info(생활관 공지)</option>
						</select>
				</form>
			</div>

    <style type="text/css">
    .tr_notice td a {
    	color:#368bc8;
    }
    .tr_notice td {
    	color:#368bc8;
    }
    </style>

      <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr align="center">
        <td width="69" class="listTitleBorder listTitleBorder0"><div align="center">No</div></td>
        <td width="" class="listTitleBorder"><div align="center">Subject</div></td>
        <td width="82" class="listTitleBorder"><div align="center">Files</div></td>
        <td width="90" class="listTitleBorder"><div align="center">Writer</div></td>
        <td width="90" class="listTitleBorder"><div align="center">Date</div></td>
        <td width="82" class="listTitleBorder"><div align="center">Read</div></td>
      </tr>
                    <tr class="tr_notice">
                    	<td height="25" align="center" class="listBody" style="background-color:#FFF;"><div align="center"><a href="read.php?id=119860&Page=1&Board=NB0001">공지</a></div></td>
						<td class="listBody" style="background-color:#FFF;padding-left:10px;"><a href="read.php?id=119860&Page=1&Board=NB0001"> [19학번 신입생 대상] 설문하고 맘까 쿠폰 받자~</a></td>
						<td class="listBody" style="background-color:#FFF;">
							<div align="center" style="color:#000; font-weight:bold;" id="divNFiles1_0" onmouseover_="showFilesN(0)">-</div>
							<div align="center" style="color:#000; font-weight:normal; display:none" id="divNFiles2_0" onmouseout_="hideFilesN(0)">-</div>
						</td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">jkgog2</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">2019-11-19</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">597</div></td>
                    </tr>
                    <tr class="tr_notice">
                    	<td height="25" align="center" class="listBody" style="background-color:#FFF;"><div align="center"><a href="read.php?id=119857&Page=1&Board=NB0001">공지</a></div></td>
						<td class="listBody" style="background-color:#FFF;padding-left:10px;"><a href="read.php?id=119857&Page=1&Board=NB0001"> [교무팀] 인문-이공 연계전공 상담 및 튜터링 실시 안내</a></td>
						<td class="listBody" style="background-color:#FFF;">
							<div align="center" style="color:#000; font-weight:bold;" id="divNFiles1_1" onmouseover_="showFilesN(1)">-</div>
							<div align="center" style="color:#000; font-weight:normal; display:none" id="divNFiles2_1" onmouseout_="hideFilesN(1)">-</div>
						</td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">bjh1144</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">2019-11-19</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">271</div></td>
                    </tr>
                    <tr class="tr_notice">
                    	<td height="25" align="center" class="listBody" style="background-color:#FFF;"><div align="center"><a href="read.php?id=119754&Page=1&Board=NB0001">공지</a></div></td>
						<td class="listBody" style="background-color:#FFF;padding-left:10px;"><a href="read.php?id=119754&Page=1&Board=NB0001"> [교무팀] 2019학년도 동계 계절학기 숭실대학교 학점교류 수강...</a></td>
						<td class="listBody" style="background-color:#FFF;">
							<div align="center" style="color:#000; font-weight:bold;" id="divNFiles1_2" onmouseover_="showFilesN(2)">-</div>
							<div align="center" style="color:#000; font-weight:normal; display:none" id="divNFiles2_2" onmouseout_="hideFilesN(2)">-</div>
						</td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">ilikenar</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">2019-11-12</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">2114</div></td>
                    </tr>
                    <tr class="tr_notice">
                    	<td height="25" align="center" class="listBody" style="background-color:#FFF;"><div align="center"><a href="read.php?id=119750&Page=1&Board=NB0001">공지</a></div></td>
						<td class="listBody" style="background-color:#FFF;padding-left:10px;"><a href="read.php?id=119750&Page=1&Board=NB0001"> Eng Below_한동만나 이용현황 9월,10월 Use details of Handon...</a></td>
						<td class="listBody" style="background-color:#FFF;">
							<div align="center" style="color:#000; font-weight:bold;" id="divNFiles1_3" onmouseover_="showFilesN(3)">-</div>
							<div align="center" style="color:#000; font-weight:normal; display:none" id="divNFiles2_3" onmouseout_="hideFilesN(3)">-</div>
						</td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">byfaith153</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">2019-11-12</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">1870</div></td>
                    </tr>
                    <tr class="tr_notice">
                    	<td height="25" align="center" class="listBody" style="background-color:#FFF;"><div align="center"><a href="read.php?id=119733&Page=1&Board=NB0001">공지</a></div></td>
						<td class="listBody" style="background-color:#FFF;padding-left:10px;"><a href="read.php?id=119733&Page=1&Board=NB0001"> [교무팀] 2019학년도 본교 동계 계절학기 안내</a></td>
						<td class="listBody" style="background-color:#FFF;">
							<div align="center" style="color:#000; font-weight:bold;" id="divNFiles1_4" onmouseover_="showFilesN(4)">-</div>
							<div align="center" style="color:#000; font-weight:normal; display:none" id="divNFiles2_4" onmouseout_="hideFilesN(4)">-</div>
						</td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">ilikenar</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">2019-11-11</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">4197</div></td>
                    </tr>
                    <tr class="tr_notice">
                    	<td height="25" align="center" class="listBody" style="background-color:#FFF;"><div align="center"><a href="read.php?id=119727&Page=1&Board=NB0001">공지</a></div></td>
						<td class="listBody" style="background-color:#FFF;padding-left:10px;"><a href="read.php?id=119727&Page=1&Board=NB0001"> [교무팀] 2019-2학기 등록금 분납 4차분 납부 안내</a></td>
						<td class="listBody" style="background-color:#FFF;">
							<div align="center" style="color:#000; font-weight:bold;" id="divNFiles1_5" onmouseover_="showFilesN(5)">-</div>
							<div align="center" style="color:#000; font-weight:normal; display:none" id="divNFiles2_5" onmouseout_="hideFilesN(5)">-</div>
						</td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">namjoo</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">2019-11-11</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">249</div></td>
                    </tr>
                    <tr class="tr_notice">
                    	<td height="25" align="center" class="listBody" style="background-color:#FFF;"><div align="center"><a href="read.php?id=119694&Page=1&Board=NB0001">공지</a></div></td>
						<td class="listBody" style="background-color:#FFF;padding-left:10px;"><a href="read.php?id=119694&Page=1&Board=NB0001"> [통역번역대학원] 2020학년도 통역번역대학원 신입생 모집</a></td>
						<td class="listBody" style="background-color:#FFF;">
							<div align="center" style="color:#000; font-weight:bold;" id="divNFiles1_6" onmouseover_="showFilesN(6)">-</div>
							<div align="center" style="color:#000; font-weight:normal; display:none" id="divNFiles2_6" onmouseout_="hideFilesN(6)">-</div>
						</td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">wjd7896</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">2019-11-08</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">273</div></td>
                    </tr>
                    <tr class="tr_notice">
                    	<td height="25" align="center" class="listBody" style="background-color:#FFF;"><div align="center"><a href="read.php?id=119542&Page=1&Board=NB0001">공지</a></div></td>
						<td class="listBody" style="background-color:#FFF;padding-left:10px;"><a href="read.php?id=119542&Page=1&Board=NB0001"> [교무팀] 2020-1학기 자유학기 1차 신청 안내</a></td>
						<td class="listBody" style="background-color:#FFF;">
							<div align="center" style="color:#000; font-weight:bold;" id="divNFiles1_7" onmouseover_="showFilesN(7)">-</div>
							<div align="center" style="color:#000; font-weight:normal; display:none" id="divNFiles2_7" onmouseout_="hideFilesN(7)">-</div>
						</td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">namjoo</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">2019-10-29</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">1273</div></td>
                    </tr>
                    <tr class="tr_notice">
                    	<td height="25" align="center" class="listBody" style="background-color:#FFF;"><div align="center"><a href="read.php?id=119537&Page=1&Board=NB0001">공지</a></div></td>
						<td class="listBody" style="background-color:#FFF;padding-left:10px;"><a href="read.php?id=119537&Page=1&Board=NB0001"> [교무팀] 2019-2학기 휴학 마감 안내</a></td>
						<td class="listBody" style="background-color:#FFF;">
							<div align="center" style="color:#000; font-weight:bold;" id="divNFiles1_8" onmouseover_="showFilesN(8)">-</div>
							<div align="center" style="color:#000; font-weight:normal; display:none" id="divNFiles2_8" onmouseout_="hideFilesN(8)">-</div>
						</td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">bjh1144</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">2019-10-29</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">744</div></td>
                    </tr>
                    <tr class="tr_notice">
                    	<td height="25" align="center" class="listBody" style="background-color:#FFF;"><div align="center"><a href="read.php?id=119536&Page=1&Board=NB0001">공지</a></div></td>
						<td class="listBody" style="background-color:#FFF;padding-left:10px;"><a href="read.php?id=119536&Page=1&Board=NB0001"> [교무팀] 2020학년도 1학기 학적 및 전공변경 신청 안내</a></td>
						<td class="listBody" style="background-color:#FFF;">
							<div align="center" style="color:#000; font-weight:bold;" id="divNFiles1_9" onmouseover_="showFilesN(9)">-</div>
							<div align="center" style="color:#000; font-weight:normal; display:none" id="divNFiles2_9" onmouseout_="hideFilesN(9)">-</div>
						</td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">bjh1144</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">2019-10-29</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">1994</div></td>
                    </tr>
                    <tr class="tr_notice">
                    	<td height="25" align="center" class="listBody" style="background-color:#FFF;"><div align="center"><a href="read.php?id=119526&Page=1&Board=NB0001">공지</a></div></td>
						<td class="listBody" style="background-color:#FFF;padding-left:10px;"><a href="read.php?id=119526&Page=1&Board=NB0001"> [한동통일동행WEEK] (전체일정) 11주차, 드디어 왔습니다</a></td>
						<td class="listBody" style="background-color:#FFF;">
							<div align="center" style="color:#000; font-weight:bold;" id="divNFiles1_10" onmouseover_="showFilesN(10)">-</div>
							<div align="center" style="color:#000; font-weight:normal; display:none" id="divNFiles2_10" onmouseout_="hideFilesN(10)">-</div>
						</td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">한동통일위원회</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">2019-10-29</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">923</div></td>
                    </tr>
                    <tr class="tr_notice">
                    	<td height="25" align="center" class="listBody" style="background-color:#FFF;"><div align="center"><a href="read.php?id=119504&Page=1&Board=NB0001">공지</a></div></td>
						<td class="listBody" style="background-color:#FFF;padding-left:10px;"><a href="read.php?id=119504&Page=1&Board=NB0001"> [교목실] 35기 HDS(한동제자학교) 훈련생 / Staff 모집</a></td>
						<td class="listBody" style="background-color:#FFF;">
							<div align="center" style="color:#000; font-weight:bold;" id="divNFiles1_11" onmouseover_="showFilesN(11)">-</div>
							<div align="center" style="color:#000; font-weight:normal; display:none" id="divNFiles2_11" onmouseout_="hideFilesN(11)">-</div>
						</td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">church</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">2019-10-28</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">734</div></td>
                    </tr>
                    <tr class="tr_notice">
                    	<td height="25" align="center" class="listBody" style="background-color:#FFF;"><div align="center"><a href="read.php?id=119382&Page=1&Board=NB0001">공지</a></div></td>
						<td class="listBody" style="background-color:#FFF;padding-left:10px;"><a href="read.php?id=119382&Page=1&Board=NB0001"> [RC·생활관운영팀] 2019학년도 RC 변경 신청 안내</a></td>
						<td class="listBody" style="background-color:#FFF;">
							<div align="center" style="color:#000; font-weight:bold;" id="divNFiles1_12" onmouseover_="showFilesN(12)">-</div>
							<div align="center" style="color:#000; font-weight:normal; display:none" id="divNFiles2_12" onmouseout_="hideFilesN(12)">-</div>
						</td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">sweetyjelly</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">2019-10-21</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">1147</div></td>
                    </tr>
                    <tr class="tr_notice">
                    	<td height="25" align="center" class="listBody" style="background-color:#FFF;"><div align="center"><a href="read.php?id=119375&Page=1&Board=NB0001">공지</a></div></td>
						<td class="listBody" style="background-color:#FFF;padding-left:10px;"><a href="read.php?id=119375&Page=1&Board=NB0001"> [교목실] 19-2 가을학기 한동대학교회 세례식 안내</a></td>
						<td class="listBody" style="background-color:#FFF;">
							<div align="center" style="color:#000; font-weight:bold;" id="divNFiles1_13" onmouseover_="showFilesN(13)">-</div>
							<div align="center" style="color:#000; font-weight:normal; display:none" id="divNFiles2_13" onmouseout_="hideFilesN(13)">-</div>
						</td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">church</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">2019-10-21</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">227</div></td>
                    </tr>
                    <tr class="tr_notice">
                    	<td height="25" align="center" class="listBody" style="background-color:#FFF;"><div align="center"><a href="read.php?id=119359&Page=1&Board=NB0001">공지</a></div></td>
						<td class="listBody" style="background-color:#FFF;padding-left:10px;"><a href="read.php?id=119359&Page=1&Board=NB0001"> [공지] HGD&E 국제개발협력대학원 국제개발협력학 전공과정 입...</a></td>
						<td class="listBody" style="background-color:#FFF;">
							<div align="center" style="color:#000; font-weight:bold;" id="divNFiles1_14" onmouseover_="showFilesN(14)">-</div>
							<div align="center" style="color:#000; font-weight:normal; display:none" id="divNFiles2_14" onmouseout_="hideFilesN(14)">-</div>
						</td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">jamiekim</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">2019-10-17</div></td>
						<td class="listBody" style="background-color:#FFF;"><div align="center">707</div></td>
                    </tr>

                    <tr>
                    	<td height="25" align="center" class="listBody"><div align="center"><a href="read.php?id=119879&Page=1&Board=NB0001">61436</a></div></td>
						<td style="padding-left:10px;" class="listBody"><a href="read.php?id=119879&Page=1&Board=NB0001"> [중선관위] 제 26대 총동아리연합회 회장단 선거 일정...</a></td>
						<td class="listBody">
							<div align="center" style="color:#666666; font-weight:bold; display:block;" id="divFiles1_0" onmouseover="showFiles(0)"><img src="./images/icon_file.gif" border="0" align="absmiddle"> 1</div>
							<div align="center" style="color:#666666; font-weight:normal; display:none" id="divFiles2_0" onmouseout="hideFiles(0)"><a href="./down.php?Board=NB0001&id=119879&fidx=1&filename=%23%BA%B0%C3%B71_%C3%D1%B5%BF%BE%C6%B8%AE%BF%AC%C7%D5%C8%B8+%C8%B8%C0%E5%B4%DC_%C0%D4%C8%C4%BA%B8_%B1%B8%BA%F1%BC%AD%B7%F9.docx">1</a></div>
						</td>
						<td class="listBody"><div align="center">hguec</div></td>
						<td class="listBody"><div align="center">2019-11-19</div></td>
						<td class="listBody"><div align="center">31.</div></td>
                    </tr>
                    <tr>
                    	<td height="25" align="center" class="listBody"><div align="center"><a href="read.php?id=119878&Page=1&Board=NB0001">61435</a></div></td>
						<td style="padding-left:10px;" class="listBody"><a href="read.php?id=119878&Page=1&Board=NB0001"> [한동국제정치학회] 신입 기수 모집 안내</a></td>
						<td class="listBody">
							<div align="center" style="color:#666666; font-weight:bold; display:block;" id="divFiles1_1" onmouseover="showFiles(1)"><img src="./images/icon_file.gif" border="0" align="absmiddle"> 1</div>
							<div align="center" style="color:#666666; font-weight:normal; display:none" id="divFiles2_1" onmouseout="hideFiles(1)"><a href="./down.php?Board=NB0001&id=119878&fidx=1&filename=%C7%D1%B5%BF%B1%B9%C1%A6%C1%A4%C4%A1%C7%D0%C8%B8+%BD%C5%C0%D4%C7%D0%C8%B8%BF%F8+%C1%F6%BF%F8%BC%AD.hwp">1</a></div>
						</td>
						<td class="listBody"><div align="center">jihea1355</div></td>
						<td class="listBody"><div align="center">2019-11-19</div></td>
						<td class="listBody"><div align="center">34.</div></td>
                    </tr>
                    <tr>
                    	<td height="25" align="center" class="listBody"><div align="center"><a href="read.php?id=119866&Page=1&Board=NB0001">61434</a></div></td>
						<td style="padding-left:10px;" class="listBody"><a href="read.php?id=119866&Page=1&Board=NB0001"> [공학교육혁신센터]단기근로 모집</a></td>
						<td class="listBody">
							<div align="center" style="color:#666666; font-weight:bold; display:block;" id="divFiles1_2" onmouseover="showFiles(2)"><img src="./images/icon_file.gif" border="0" align="absmiddle"> 1</div>
							<div align="center" style="color:#666666; font-weight:normal; display:none" id="divFiles2_2" onmouseout="hideFiles(2)"><a href="./down.php?Board=NB0001&id=119866&fidx=1&filename=%BE%E7%BD%C4%29+%B0%F8%C7%D0%B1%B3%C0%B0%C7%F5%BD%C5%BC%BE%C5%CD+%B1%B3%BA%F1%B1%D9%B7%CE+%BD%C5%C3%BB%BC%AD%282019%B3%E2%29.docx">1</a></div>
						</td>
						<td class="listBody"><div align="center">anda6223</div></td>
						<td class="listBody"><div align="center">2019-11-19</div></td>
						<td class="listBody"><div align="center">438.</div></td>
                    </tr>
                    <tr>
                    	<td height="25" align="center" class="listBody"><div align="center"><a href="read.php?id=119865&Page=1&Board=NB0001">61433</a></div></td>
						<td style="padding-left:10px;" class="listBody"><a href="read.php?id=119865&Page=1&Board=NB0001"> [학생지원팀]한국장학재단 2019년 동계 대학생 재능봉...</a></td>
						<td class="listBody">
							<div align="center" style="color:#666666; font-weight:bold; display:block;" id="divFiles1_3" onmouseover="showFiles(3)"><img src="./images/icon_file.gif" border="0" align="absmiddle"> 2</div>
							<div align="center" style="color:#666666; font-weight:normal; display:none" id="divFiles2_3" onmouseout="hideFiles(3)"><a href="./down.php?Board=NB0001&id=119865&fidx=1&filename=%C0%E7%B4%C9%BA%C0%BB%E7%C4%B7%C7%C1-%B8%E0%C5%E4%B8%F0%C1%FD%BE%C8%B3%BB%B9%AE.png">1</a>|<a href="./down.php?Board=NB0001&id=119865&fidx=2&filename=%B5%BF%B0%E8+%B4%EB%C7%D0%BB%FD+%C0%E7%B4%C9%BA%C0%BB%E7+%C4%B7%C7%C1+%B8%F0%C1%FD+%C7%F9%C1%B6+%B0%F8%B9%AE.pdf">2</a></div>
						</td>
						<td class="listBody"><div align="center">sgleek</div></td>
						<td class="listBody"><div align="center">2019-11-19</div></td>
						<td class="listBody"><div align="center">431.</div></td>
                    </tr>
                    <tr>
                    	<td height="25" align="center" class="listBody"><div align="center"><a href="read.php?id=119864&Page=1&Board=NB0001">61432</a></div></td>
						<td style="padding-left:10px;" class="listBody"><a href="read.php?id=119864&Page=1&Board=NB0001"> [기계제어] 2019-2학기 캡스톤 발표회 안내_참석자 수...</a></td>
						<td class="listBody">
							<div align="center" style="color:#666666; font-weight:bold; display:block;" id="divFiles1_4" onmouseover_="showFiles(4)">-</div>
							<div align="center" style="color:#666666; font-weight:normal; display:none" id="divFiles2_4" onmouseout_="hideFiles(4)">-</div>
						</td>
						<td class="listBody"><div align="center">sera4112</div></td>
						<td class="listBody"><div align="center">2019-11-19</div></td>
						<td class="listBody"><div align="center">303.</div></td>
                    </tr>
                    <tr>
                    	<td height="25" align="center" class="listBody"><div align="center"><a href="read.php?id=119863&Page=1&Board=NB0001">61431</a></div></td>
						<td style="padding-left:10px;" class="listBody"><a href="read.php?id=119863&Page=1&Board=NB0001"> [국제어문]2019년도 2학기 종강총회 공고</a></td>
						<td class="listBody">
							<div align="center" style="color:#666666; font-weight:bold; display:block;" id="divFiles1_5" onmouseover_="showFiles(5)">-</div>
							<div align="center" style="color:#666666; font-weight:normal; display:none" id="divFiles2_5" onmouseout_="hideFiles(5)">-</div>
						</td>
						<td class="listBody"><div align="center">학부협력회</div></td>
						<td class="listBody"><div align="center">2019-11-19</div></td>
						<td class="listBody"><div align="center">55.</div></td>
                    </tr>
                    <tr>
                    	<td height="25" align="center" class="listBody"><div align="center"><a href="read.php?id=119862&Page=1&Board=NB0001">61430</a></div></td>
						<td style="padding-left:10px;" class="listBody"><a href="read.php?id=119862&Page=1&Board=NB0001"> [경영경제] 종강총회 소집 공고 </a></td>
						<td class="listBody">
							<div align="center" style="color:#666666; font-weight:bold; display:block;" id="divFiles1_6" onmouseover_="showFiles(6)">-</div>
							<div align="center" style="color:#666666; font-weight:normal; display:none" id="divFiles2_6" onmouseout_="hideFiles(6)">-</div>
						</td>
						<td class="listBody"><div align="center">학부협력회</div></td>
						<td class="listBody"><div align="center">2019-11-19</div></td>
						<td class="listBody"><div align="center">103.</div></td>
                    </tr>
                    <tr>
                    	<td height="25" align="center" class="listBody"><div align="center"><a href="read.php?id=119861&Page=1&Board=NB0001">61429</a></div></td>
						<td style="padding-left:10px;" class="listBody"><a href="read.php?id=119861&Page=1&Board=NB0001"> [SW중심대학] 재학생 COS PRO(12/15) 교내 시험 알림</a></td>
						<td class="listBody">
							<div align="center" style="color:#666666; font-weight:bold; display:block;" id="divFiles1_7" onmouseover_="showFiles(7)">-</div>
							<div align="center" style="color:#666666; font-weight:normal; display:none" id="divFiles2_7" onmouseout_="hideFiles(7)">-</div>
						</td>
						<td class="listBody"><div align="center">hih1470</div></td>
						<td class="listBody"><div align="center">2019-11-19</div></td>
						<td class="listBody"><div align="center">90.</div></td>
                    </tr>
                    <tr>
                    	<td height="25" align="center" class="listBody"><div align="center"><a href="read.php?id=119860&Page=1&Board=NB0001">61428</a></div></td>
						<td style="padding-left:10px;" class="listBody"><a href="read.php?id=119860&Page=1&Board=NB0001"> [19학번 신입생 대상] 설문하고 맘까 쿠폰 받자~</a></td>
						<td class="listBody">
							<div align="center" style="color:#666666; font-weight:bold; display:block;" id="divFiles1_8" onmouseover_="showFiles(8)">-</div>
							<div align="center" style="color:#666666; font-weight:normal; display:none" id="divFiles2_8" onmouseout_="hideFiles(8)">-</div>
						</td>
						<td class="listBody"><div align="center">jkgog2</div></td>
						<td class="listBody"><div align="center">2019-11-19</div></td>
						<td class="listBody"><div align="center">598.</div></td>
                    </tr>
                    <tr>
                    	<td height="25" align="center" class="listBody"><div align="center"><a href="read.php?id=119859&Page=1&Board=NB0001">61427</a></div></td>
						<td style="padding-left:10px;" class="listBody"><a href="read.php?id=119859&Page=1&Board=NB0001"> [경영경제] 선배초청 토크콘서트 '회생' 안내</a></td>
						<td class="listBody">
							<div align="center" style="color:#666666; font-weight:bold; display:block;" id="divFiles1_9" onmouseover_="showFiles(9)">-</div>
							<div align="center" style="color:#666666; font-weight:normal; display:none" id="divFiles2_9" onmouseout_="hideFiles(9)">-</div>
						</td>
						<td class="listBody"><div align="center">학부협력회</div></td>
						<td class="listBody"><div align="center">2019-11-19</div></td>
						<td class="listBody"><div align="center">137.</div></td>
                    </tr>
                    <tr>
                    	<td height="25" align="center" class="listBody"><div align="center"><a href="read.php?id=119858&Page=1&Board=NB0001">61426</a></div></td>
						<td style="padding-left:10px;" class="listBody"><a href="read.php?id=119858&Page=1&Board=NB0001"> [상사] 향기내는 사람들 24기 학생직원단 모집</a></td>
						<td class="listBody">
							<div align="center" style="color:#666666; font-weight:bold; display:block;" id="divFiles1_10" onmouseover="showFiles(10)"><img src="./images/icon_file.gif" border="0" align="absmiddle"> 2</div>
							<div align="center" style="color:#666666; font-weight:normal; display:none" id="divFiles2_10" onmouseout="hideFiles(10)"><a href="./down.php?Board=NB0001&id=119858&fidx=1&filename=%C7%E2%B1%E2%B3%BB%B4%C2+%BB%E7%B6%F7%B5%E9+%C7%D0%BB%FD%C1%F7%BF%F8%B4%DC+24%B1%E2+%C1%F6%BF%F8%BC%AD.docx">1</a>|<a href="./down.php?Board=NB0001&id=119858&fidx=2&filename=%B8%AE%C4%ED%B8%A3%C6%C3+%C6%F7%BD%BA%C5%CD.jpg">2</a></div>
						</td>
						<td class="listBody"><div align="center">cutedonna</div></td>
						<td class="listBody"><div align="center">2019-11-19</div></td>
						<td class="listBody"><div align="center">189.</div></td>
                    </tr>
                    <tr>
                    	<td height="25" align="center" class="listBody"><div align="center"><a href="read.php?id=119857&Page=1&Board=NB0001">61425</a></div></td>
						<td style="padding-left:10px;" class="listBody"><a href="read.php?id=119857&Page=1&Board=NB0001"> [교무팀] 인문-이공 연계전공 상담 및 튜터링 실시 안...</a></td>
						<td class="listBody">
							<div align="center" style="color:#666666; font-weight:bold; display:block;" id="divFiles1_11" onmouseover_="showFiles(11)">-</div>
							<div align="center" style="color:#666666; font-weight:normal; display:none" id="divFiles2_11" onmouseout_="hideFiles(11)">-</div>
						</td>
						<td class="listBody"><div align="center">bjh1144</div></td>
						<td class="listBody"><div align="center">2019-11-19</div></td>
						<td class="listBody"><div align="center">271.</div></td>
                    </tr>
                    <tr>
                    	<td height="25" align="center" class="listBody"><div align="center"><a href="read.php?id=119856&Page=1&Board=NB0001">61424</a></div></td>
						<td style="padding-left:10px;" class="listBody"><a href="read.php?id=119856&Page=1&Board=NB0001"> [총학생회] QT하니 12월 신청공지</a></td>
						<td class="listBody">
							<div align="center" style="color:#666666; font-weight:bold; display:block;" id="divFiles1_12" onmouseover_="showFiles(12)">-</div>
							<div align="center" style="color:#666666; font-weight:normal; display:none" id="divFiles2_12" onmouseout_="hideFiles(12)">-</div>
						</td>
						<td class="listBody"><div align="center">총학생회</div></td>
						<td class="listBody"><div align="center">2019-11-19</div></td>
						<td class="listBody"><div align="center">45.</div></td>
                    </tr>
                    <tr>
                    	<td height="25" align="center" class="listBody"><div align="center"><a href="read.php?id=119855&Page=1&Board=NB0001">61423</a></div></td>
						<td style="padding-left:10px;" class="listBody"><a href="read.php?id=119855&Page=1&Board=NB0001"> [총학생회] 취뽀 : 취업캠프 안내</a></td>
						<td class="listBody">
							<div align="center" style="color:#666666; font-weight:bold; display:block;" id="divFiles1_13" onmouseover_="showFiles(13)">-</div>
							<div align="center" style="color:#666666; font-weight:normal; display:none" id="divFiles2_13" onmouseout_="hideFiles(13)">-</div>
						</td>
						<td class="listBody"><div align="center">총학생회</div></td>
						<td class="listBody"><div align="center">2019-11-19</div></td>
						<td class="listBody"><div align="center">214.</div></td>
                    </tr>
                    <tr>
                    	<td height="25" align="center" class="listBody"><div align="center"><a href="read.php?id=119854&Page=1&Board=NB0001">61422</a></div></td>
						<td style="padding-left:10px;" class="listBody"><a href="read.php?id=119854&Page=1&Board=NB0001"> [GLS] 19-2 GLS 종강총회 소집 공고</a></td>
						<td class="listBody">
							<div align="center" style="color:#666666; font-weight:bold; display:block;" id="divFiles1_14" onmouseover="showFiles(14)"><img src="./images/icon_file.gif" border="0" align="absmiddle"> 1</div>
							<div align="center" style="color:#666666; font-weight:normal; display:none" id="divFiles2_14" onmouseout="hideFiles(14)"><a href="./down.php?Board=NB0001&id=119854&fidx=1&filename=GLS+%C8%B8%C4%A2%2817.12.07+%B0%B3%C1%A4%29.pdf">1</a></div>
						</td>
						<td class="listBody"><div align="center">학부협력회</div></td>
						<td class="listBody"><div align="center">2019-11-18</div></td>
						<td class="listBody"><div align="center">134.</div></td>
                    </tr>
<script language="javascript">
function showFiles(x) {
	$("#divFiles1_" + x).css("display", "none");
	$("#divFiles2_" + x).css("display", "block");

}
function hideFiles(x) {
	document.getElementById("divFiles2_" + x).style.display = "none";
	document.getElementById("divFiles1_" + x).style.display = "block";
}
function showNFiles(x) {
	$("#divNFiles1_" + x).css("display", "none");
	$("#divNFiles2_" + x).css("display", "block");

}
function hideNFiles(x) {
	document.getElementById("divNFiles2_" + x).style.display = "none";
	document.getElementById("divNFiles1_" + x).style.display = "block";
}

function popup() {
 window.open("/for_student/oneclick/popup.php","popup","left=, top=, scrollbars=yes, resizable=no, width=780, height=700, status=no, toolbar=no, location=no");
}
</script>
                    <tr>
                      <td height="1" bgcolor="#4BA242" colspan="6"></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
				<td align="right"><div align="right"></div></td>
			  </tr>

              <tr>
                <td><table width="100%"  border="0" cellpadding="0" cellspacing="0" bgcolor="f7f7f7" class="tab">
                    <tr>
                      <td height="25" align="center"><div align="center"><img src='/myboard/images/btn_say_first.gif' border='0' align='absbottom'> 										<img src='/myboard/images/btn_say_prev.gif' border='0' align="absmiddle">
																				<!-- [ -->
										 <span class='orangebold'><b><font color='#FF8A01'>1</font></b></span><strong>ㆍ</strong> <a href="./list.php?Page=2&Board=NB0001"><font size="2" color="#0070BC">02</font></a><strong>ㆍ</strong> <a href="./list.php?Page=3&Board=NB0001"><font size="2" color="#0070BC">03</font></a><strong>ㆍ</strong> <a href="./list.php?Page=4&Board=NB0001"><font size="2" color="#0070BC">04</font></a><strong>ㆍ</strong> <a href="./list.php?Page=5&Board=NB0001"><font size="2" color="#0070BC">05</font></a><strong>ㆍ</strong> <a href="./list.php?Page=6&Board=NB0001"><font size="2" color="#0070BC">06</font></a><strong>ㆍ</strong> <a href="./list.php?Page=7&Board=NB0001"><font size="2" color="#0070BC">07</font></a><strong>ㆍ</strong> <a href="./list.php?Page=8&Board=NB0001"><font size="2" color="#0070BC">08</font></a><strong>ㆍ</strong> <a href="./list.php?Page=9&Board=NB0001"><font size="2" color="#0070BC">09</font></a><strong>ㆍ</strong> <a href="./list.php?Page=10&Board=NB0001"><font size="2" color="#0070BC">10</font></a>										<!-- ] -->
										<a href='./list.php?Page=11&Board=NB0001'>										<img src='/myboard/images/btn_say_next.gif' border='0' align='absbottom'>
										</a>										 <a href='./list.php?Page=1912&Board=NB0001'><img src='/myboard/images/btn_say_last.gif' border='0' align='absbottom'></a> </div></td>
                    </tr>
                </table></td>
              </tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td align="center">
						<form name="form_s" method="get" action="./list.php">
							<input type="hidden" id="Board" name="Board" value="NB0001" />
						<table border="0" cellspacing="0" cellpadding="2" align="center">
							<tr>
		                         								<td><select name="FindIt" class="input" id="FindIt">
								<option value="subject">제목</option>
								<option value="userid">글쓴이</option>
								<option value="contentv">내용</option>
								</select>
								</td>
																<td><input name="FindText" type="text" class="input" id="FindText" size="30" maxlength="50" value=""></td>
								<td><input type="image" src="/myboard/images/btn_bo_search.gif"  align="absmiddle" onClick="return Check_Find()"></td>
														</tr>
							<script language="javascript">
							function Check_Find() {
								if (form_s.FindText.value == "") {
									alert("검색어를 입력하십시오.");
									form_s.FindText.focus();
									return false;
z								}
								return true;
							}
							</script>
						</table>
						</form>
					</td>
				</tr>


            </table>
			<!-- 목록에 파일 여부가 나타난 스킨 -->
</td>
					</tr>
				</table></td>
			</tr>
		</table></td>
	</tr>
</table>


<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />

<p style="margin-top:75px"></p>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="f0f1f3">
  <tr>
    <td align="center"><table width="978" border="0" cellspacing="2" cellpadding="0">
      <tr>
      <td width="30" height="9" bgcolor="f0f1f3"></td>
        <td width="167" height="9" bgcolor="f0f1f3"></td>
        <td width="25" bgcolor="f0f1f3"></td>
        <td width="520" bgcolor="f0f1f3"></td>
        <td bgcolor="f0f1f3"></td>
        <td bgcolor="f0f1f3"></td>
      </tr>
      <tr>
		  <td align="right" valign="middle" bgcolor="f0f1f3"></td>
			<td rowspan="2" align="right" valign="middle" bgcolor="f0f1f3"><img src="/images/templates/logo.jpg"  ondblclick="setIFrame()"/></td>
			<td height="31" bgcolor="f0f1f3"></td>
            						<td align="left" valign="bottom" bgcolor="f0f1f3" style="font-size:12px;"> 경북 포항시 북구 흥해읍 한동로 558 한동대학교 37554<font color="#f0f1f3">V
            			22</font><a href="https://hisnet.handong.edu/for_student/oneclick/popup.php" target="_blank"><img src="/2012_images/copy_btn.gif" border="0" align="absbottom"/></a>







			</td>
			<td width="5" bgcolor="f0f1f3"></td>
			<td width="175" align="right" valign="bottom" bgcolor="f0f1f3">
			<select style="font-size:11px;width:170px;height:17px;" OnChange="newWin( this.value );">
					<option VALUE="" selected="selected">Related Sites | 관련사이트</option>
                					<option VALUE="http://han.certpia.com/">인터넷증명발급센터</option>
					<option VALUE="http://club.cyworld.com/icservices">OICA</option>
					<option VALUE="https://hised.handong.edu">한동교육개발센터</option>
											</select>
			</td>
      </tr>

      <tr>
		  <td height="16" bgcolor="f0f1f3"></td>
		  <td height="16" bgcolor="f0f1f3"></td>
			<td align="left" valign="top" bgcolor="f0f1f3"><img src="/images/templates/copyright.jpg" width="314" height="16" border="0"/>




			</td>
				<td width="5" bgcolor="f0f1f3"></td>
				<td width="175" bgcolor="f0f1f3" align="right">

		<select style="font-size:11px;width:170px;height:17px;" OnChange="goBoard(this.value);">
				<option VALUE="" selected="selected">선택</option>
				<option VALUE="B0408">연구 관련 게시판</option>

	</select>

	<script language="javascript">
		function goBoard(x) {
			if (x != "") {
				if (x.substring(0, 4) == "http") {
//					document.location = x;
					window.open(x, "_blank", "");
				}
				else
				{
					document.location = "/myboard/list.php?Board=" + x;
				}
			}
		}

   	function test_lms() {
      	alert("lms");
		 }

		function go_career_match() {
			var gsWin = window.open('about:blank', 'career_match'); // 새탭을 띄워주기 위해 내용을 넣음
			var f1 = document.career_matching_sso;

			f1.action = '../career_matching_sso.php';
			f1.target = 'career_match';
			f1.submit();
		 }

		function doSearch() {
			window.open("", "newWin");
			frm.action = "https://daejin.rndbiz.co.kr/sys_login_lnk.act";
			frm.target = "newWin";
			frm.method = "post";
			frm.submit();
		}

	</script>
		</td>
      </tr>

      <tr>
      <td height="14" align="right" valign="middle" bgcolor="f0f1f3"></td>
        <td height="14" align="right" valign="middle" bgcolor="f0f1f3"></td>
        <td bgcolor="f0f1f3"></td>
        <td align="left" valign="top" bgcolor="f0f1f3"></td>
        <td bgcolor="f0f1f3"></td>
        <td bgcolor="f0f1f3"></td>
      </tr>
    </table></td>
  </tr>
</table>

<!-- 커리어매칭 플랫폼 테스트를 위한 Form -->
<form name="career_matching_sso" method="POST">
	<input type="hidden" name="usernum" value=21800412 />
	<input type="hidden" name="token" value=20191119072933 />
</form>


<style type="text/css">
<!--
/*
아래와 같이 순수 태그 자체에 대한 속성을 주는 행위 금지!!!!!
특히 margin, padding, line-height 등등 절대금지!!!!!
 - 2013.01.09 - 이상호 */
/*
body, table, td, input, select, textarea {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	font-family:"돋움","dotum";
	font-size:12px;
	line-height:18px;
	color:#616161;
}
table { font-size:12px};
*/
body, table, td, input, select, textarea {
	color:#616161;
	font-family:"돋움","dotum";
	font-size:12px;
}
-->
</style>
<iframe id="MyIFrame" name="MyIFrame" style="display:none; width:600px; height:300px;"></iframe>
<script language="javascript">
function setIFrame() {
	if (document.getElementById("MyIFrame").style.display == "none") {
		document.getElementById("MyIFrame").style.display = "block";
	}
	else
	{
		document.getElementById("MyIFrame").style.display = "none";
	}
}

</script>
</body>
</html><!-- type2 --><!-- me_notice_prev.php --><!-- me_notice_next.php -->
