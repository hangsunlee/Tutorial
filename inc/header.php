<?php
 require_once 'inc/dbcon.php';
?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<title>KCC 금강컨트리클럽</title>
<link rel="stylesheet" type="text/css" href="css/kcc_style.css" />
<link rel="stylesheet" type="text/css" href="js/jquery/flexslider/flexslider.css" />
<script type="text/javascript" src="js/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/jquery/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/common.js"></script>
</head>
<body>
<!-- skip nav -->
<ul id="skip">
<li><a href="#site_menu" tabindex="0">주메뉴 바로가기</a></li>
<li><a href="#content">본문 바로가기</a></li>
</ul>
<!-- //skip nav -->
<div id="wrap" class="main">
	<!-- header -->	
	<div id="header">	
		<h1 class="logo">
			<a href="#index.html" class="sp_com kcc">
				<strong class="blind">KCC 금강컨트리클럽</strong>
			</a>
		</h1>		
		<div id="site_gnb">
			<div class="gnb_wrap">
                            <?php
                                   if(!isset($_SESSION['id'])){
                             ?>           
                            <form action="login.php" method="post">
                                <fieldset>
                                    <legend>로그인폼</legend>
                                    <dl>
                                        <dt class="login_form"> <label for="textinput1" >아이디</dt>
                                        <dd class="login_form"><input type="text" name="id" id="textinput1"></dd>
                                    </dl>
                                    <dl class="login_form">
                                        <dt class="login_form"><label for="textinput2" id="">비밀번호</dt>
                                        <dd class="login_form"><input type="password" name="password" id="textinput2"></dd>
                                    </dl>
                                    <div class="login_form">   
                                               <button type="submit">로그인</button>
                                    </div>    
                                  <fieldset>
                            </form>         
		<?php
                                   }else{
                ?>		<ul class="gnb_menu">
				<li><?=$_SESSION['name']?>님 환영합니다</li>
                                                                        <li><a href="logout.php">로그아웃</a></li>
				<li><a href="#">회원정보수정</a></li>
				<li><a href="#">채팅룸</a>
				<li><a href="#">사이트맵</a></li>
		                 </ul>
                             <?php 
                                   }
                                                                             ?>
				<div class="close_box ">
					<a href="#" class="btn_close"><span class="blind">메뉴 닫기</span></a>
				</div>
			</div>
			<a class="m_gnb_ico"></a>
		</div>
		<div id="site_menu">
			<h2>
				<a class="m_menu_ico"><span  class="blind">사이트메뉴</span></a>
			</h2>
			<!--해당메뉴 li class에 selected 추가-->
			<div class="menu_lst_wrap">
			<ul class="site_menu_lst">
			<li class="menu1">
				<a href="#" class="sp_com site_menu1">Introduction 클럽소개</a>
				<ul class="site_sub_menu">
				<li><a href="#" class="sp_com site_menu1_1">클럽소개</a></li>
				<li><a href="#" class="sp_com site_menu1_2">연혁</a></li>
				<li><a href="#" class="sp_com site_menu1_3">이용안내</a></li>
				<li><a href="#" class="sp_com site_menu1_4">관계사 소개</a></li>
				<li><a href="#" class="sp_com site_menu1_5">오시는 길</a></li>
				<li><a href="#" class="sp_com site_menu1_6">CONTACT US</a></li>
				</ul>
			</li>
			<li class="menu2">
				<a href="#" class="sp_com site_menu2">RESERVATION 예약정보</a>
				<ul class="site_sub_menu">
				<li><a href="#" class="sp_com site_menu2_1">예약관리</a></li>
				<li><a href="#" class="sp_com site_menu2_2">조인관리</a></li>
				<li><a href="#" class="sp_com site_menu2_3">이용내역</a></li>
				<li><a href="#" class="sp_com site_menu2_4">위약정보</a></li>
				</ul>
			</li>
			<li class="menu3">
				<a href="#" class="sp_com site_menu3">COURCE 코스안내</a>
				<ul class="site_sub_menu">
				<li><a href="#" class="sp_com site_menu3_1">코스소개</a></li>
				<li><a href="#" class="sp_com site_menu3_2">서코스</a></li>
				<li><a href="#" class="sp_com site_menu3_3">동코스</a></li>
				<li><a href="#" class="sp_com site_menu3_4">남코스</a></li>
				<li><a href="#" class="sp_com site_menu3_5">코스 갤러리</a></li>
				</ul>
			</li>
			<li class="menu4">
				<a href="#" class="sp_com site_menu4">FACILITIES 시설안내</a>
				<ul class="site_sub_menu">
				<li><a href="#" class="sp_com site_menu4_1">클럽하우스</a></li>
				<li><a href="#" class="sp_com site_menu4_2">특선메뉴</a></li>
				<li><a href="#" class="sp_com site_menu4_3">그늘집</a></li>
				<li><a href="#" class="sp_com site_menu4_4">락커룸</a></li>
				<li><a href="#" class="sp_com site_menu4_5">프로샵</a></li>
				</ul>
			</li>
			<li class="menu5">
				<a href="#" class="sp_com site_menu5">COMMUNITY 커뮤니티</a>
				<ul class="site_sub_menu">
				<li><a href="sub1.php" class="sp_com site_menu5_1">공지사항</a></li>
				<li><a href="#" class="sp_com site_menu5_2">자료실</a></li>
				<li><a href="#" class="sp_com site_menu5_3">Joinroom</a></li>
				</ul>
			</li>
			</ul>
			<div class="close_box close_box2">
				<a href="#" class="btn_close"><span class="blind">메뉴 닫기</span></a>
			</div>
			</div>
		</div>
	</div>
	<!-- //header -->
	
	<hr>
	