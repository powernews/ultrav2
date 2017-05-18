<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 데모용
$iqstr = '';
if($is_demo) {
	$iqstr .= '&amp;mon='.$main.'&amp;pv='.$pv.'&amp;pvm='.$pvm;
}

// 모드값
$m = (isset($m) && $m) ? $m : '';

// 위젯 설정값 아이디 접두어 지정
$wshid = 'mbst-mspc';

?>
<style>
	.main-wrap { position:relative; margin:0px auto; max-width:1200px; }
	.main-wrap .main-content { margin:0px auto; padding:30px 0px; }
	.main-wrap .main-box { margin-bottom:16px; }
	.main-wrap .main-row { margin-left:-8px; margin-right:-8px; }
	.main-wrap .main-col { padding-left:8px; padding-right:8px; }

	.main-btn { overflow:hidden; margin:15px 0px 20px; }
	.main-btn ul { padding:0px; margin:0px; list-style:none; margin-right:-2px; }
	.main-btn li { float:left; text-align:center; font-size:18px; padding:0px; margin:0px; width:16.666%; }
	.main-btn li span { display:block; padding:15px 0px; border-bottom:3px solid transparent; }
	.main-btn li:hover span,
	.main-btn li.on span { color:rgb(233, 27, 35) !important; border-bottom:3px solid rgb(233, 27, 35); }
	@media all and (max-width: 767px) { 
		.responsive .main-btn li { width:33.333%; } 
		.responsive .main-box .nav-tabs { margin-top:0px !important; }
	}
</style>

<div class="main-wrap">
	<div class="main-content">
		<div class="container">

			<?php echo apms_widget('miso-slider', $wshid.'-title-slider', 'slider_h=40 effect=fade nav=1 rdm=1', 'slider_h=56'); //타이틀 위젯 ?>

			<?php echo apms_widget('miso-post-bar', $wshid.'-post-bar', 'effect=vertical nav=1 shadow=2 date=Y.m.d noc=1 icon={아이콘:bell} rdm=1'); // 포스트 바 ?>

			<!-- 상단버튼 시작 -->
			<div id="itop" class="main-btn en">
				<ul>
					<li<?php echo (!$m || $m == "1") ? ' class="on"' : '';?>>
						<a href="<?php echo G5_SHOP_URL;?>/?m=1<?php echo $iqstr;?>#itop"><span><i class="fa fa-bars"></i> 전체</span></a>
					</li>
					<li<?php echo ($m == "2") ? ' class="on"' : '';?>>
						<a href="<?php echo G5_SHOP_URL;?>/?m=2<?php echo $iqstr;?>#itop"><span><i class="fa fa-bolt"></i> 히트</span></a>
					</li>
					<li<?php echo ($m == "3") ? ' class="on"' : '';?>>
						<a href="<?php echo G5_SHOP_URL;?>/?m=3<?php echo $iqstr;?>#itop"><span><i class="fa fa-thumbs-up"></i> 추천</span></a>
					</li>
					<li<?php echo ($m == "4") ? ' class="on"' : '';?>>
						<a href="<?php echo G5_SHOP_URL;?>/?m=4<?php echo $iqstr;?>#itop"><span><i class="fa fa-paper-plane-o"></i> 최신</span></a>
					</li>
					<li<?php echo ($m == "5") ? ' class="on"' : '';?>>
						<a href="<?php echo G5_SHOP_URL;?>/?m=5<?php echo $iqstr;?>#itop"><span><i class="fa fa-commenting-o"></i> 인기</span></a>
					</li>
					<li<?php echo ($m == "6") ? ' class="on"' : '';?>>
						<a href="<?php echo G5_SHOP_URL;?>/?m=6<?php echo $iqstr;?>#itop"><span><i class="fa fa-shopping-cart"></i> 할인</span></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- 상단버튼 끝 -->

			<?php if($m == "2") { //히트 ?>
				<?php echo apms_widget('miso-shop-item-photo', $wshid.'-photo2', 'type=1 infi=1 garo=4 sero=5 md=3 sm=2 xs=1 hit=1 cmt=1 sns=1 thumb_w=400 thumb_h=600'); ?>
			
			<?php } else if($m == "3") { //추천 ?>
				<?php echo apms_widget('miso-shop-item-photo', $wshid.'-photo3', 'type=2 infi=1 garo=4 sero=5 md=3 sm=2 xs=1 hit=1 cmt=1 sns=1 thumb_w=400 thumb_h=600'); ?>

			<?php } else if($m == "4") { //신규 ?>
				<?php echo apms_widget('miso-shop-item-photo', $wshid.'-photo4', 'type=3 infi=1 garo=4 sero=5 md=3 sm=2 xs=1 hit=1 cmt=1 sns=1 thumb_w=400 thumb_h=600'); ?>

			<?php } else if($m == "5") { //인기 ?>
				<?php echo apms_widget('miso-shop-item-photo', $wshid.'-photo5', 'type=4 infi=1 garo=4 sero=5 md=3 sm=2 xs=1 hit=1 cmt=1 sns=1 thumb_w=400 thumb_h=600'); ?>

			<?php } else if($m == "6") { //할인 ?>
				<?php echo apms_widget('miso-shop-item-photo', $wshid.'-photo6', 'type=5 infi=1 garo=4 sero=5 md=3 sm=2 xs=1 hit=1 cmt=1 sns=1 thumb_w=400 thumb_h=600'); ?>

			<?php } else { //전체 ?>
				<?php echo apms_widget('miso-shop-item-photo', $wshid.'-photo1', 'infi=1 garo=4 sero=5 md=3 sm=2 xs=1 hit=1 cmt=1 sns=1 thumb_w=400 thumb_h=600'); ?>
			<?php } ?>

			<?php echo apms_line('fa', 'fa-star');?>

			<div class="row main-row">
				<div class="col-md-3 col-sm-6 main-col">
					<div class="main-box">
						<h4 class="div-title-underline-thin border-color color">
							Event
						</h4>
						<?php echo apms_widget('miso-shop-event-slider', $wshid.'-shop-event', 'effect=vertical sort=rdm thumb_w=400 thumb_h=250 shadow=2'); // 이벤트 ?>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 main-col">
					<div class="main-box">
						<h4 class="div-title-underline-thin border-color color">
							Banner
						</h4>
						<?php echo apms_widget('miso-shop-banner-slider', $wshid.'-shop-banner', 'effect=fade sort=rdm thumb_w=400 thumb_h=250 shadow=2'); // 배너 ?>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 main-col">
					<div class="main-box">
						<h4 class="div-title-underline-thin border-color color">
							Notice
						</h4>
						<?php echo apms_widget('miso-post-list', $wshid.'-side-notice', 'rows=8 new=red date=m.d icon={아이콘:bell}'); ?>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 main-col">
					<div class="main-box">
						<div id="mainpost_tab" class="div-tab-bottom tabs swipe-tab">
							<ul class="nav nav-tabs" style="border-top:0px; margin-top:-14px;">
								<li class="active"><a href="#main_itemcomment" data-toggle="tab">댓글</a></li>
								<li><a href="#main_itemuse" data-toggle="tab">후기</a></li>
								<li><a href="#main_itemqa" data-toggle="tab">문의</a></li>

							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="main_itemcomment">
									<?php echo apms_widget('miso-shop-item-post', $wshid.'-itemcomment', 'mode=comment rows=4 new=red icon={아이콘:comment}'); ?>
								</div>
								<div class="tab-pane" id="main_itemuse">
									<?php echo apms_widget('miso-shop-item-post', $wshid.'-itemuse', 'mode=use rows=4 new=red icon={아이콘:pencil}'); ?>
								</div>
								<div class="tab-pane" id="main_itemqa">
									<?php echo apms_widget('miso-shop-item-post', $wshid.'-itemqa', 'mode=qa rows=4 new=red icon={아이콘:user}'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php @include_once(THEMA_PATH.'/shop.wing.php'); // Wing ?>
</div>
