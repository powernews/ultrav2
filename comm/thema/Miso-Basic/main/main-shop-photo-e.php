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
$wshid = 'mbt-mspe';

?>

<style>
	.main-wrap { position:relative; margin:0px auto; max-width:1200px; }
	.main-wrap .main-content { margin:0px auto; padding:20px 0px 10px; }
	.main-wrap .main-box { border:1px solid #ddd; margin-bottom:16px; background:#fff; }
	.main-wrap .main-row { margin-left:-8px; margin-right:-8px; }
	.main-wrap .main-col { padding-left:8px; padding-right:8px; }

	.main-btn { overflow:hidden; margin-bottom:20px; }
	.main-btn ul { padding:0px; margin:0px; list-style:none; margin-right:-2px; }
	.main-btn li { float:left; text-align:center; font-size:16px; padding:0px; margin:0px; width:16.666%; }
	.main-btn li span { display:block; padding:12px 0px; border-bottom:3px solid transparent; }
	.main-btn li:hover span,
	.main-btn li.on span { color:rgb(233, 27, 35) !important; border-bottom:3px solid rgb(233, 27, 35); }
	@media all and (max-width: 767px) { 
		.responsive .main-btn li { width:33.333%; } 
		.responsive .main-box .nav-tabs { margin-top:0px !important; }
		.responsive .main-col.pull-left, 
		.responsive .main-col.pull-right { float:none !important; }
	}

	.side-wrap .side-box { margin-bottom:20px; }
	.side-wrap .side-more { margin:8px 0px 0px; }
	.side-wrap .tabs { margin-bottom:0px !important; }
	.side-wrap .tab-content { padding:10px 0px !important; background: none !important; }
	.side-wrap .side-row { margin-left:-10px; margin-right:-10px; }
	.side-wrap .side-col { padding-left:10px; padding-right:10px; }
</style>

<div class="main-wrap">
	<div class="main-content">
		<div class="container">
			<div class="row main-row">
				<div class="col-md-9 main-col pull-right">

					<?php echo apms_widget('miso-slider', $wshid.'-title-slider', 'effect=fade shadow=2 in=1 nav=1 slider_h=40 rdm=1', 'slider_h=56'); //타이틀 위젯 ?>

					<?php echo apms_widget('miso-post-bar', $wshid.'-post-bar', 'effect=vertical nav=1 shadow=2 date=m.d noc=1 icon={아이콘:bell} rdm=1'); // 포스트 바 ?>

					<div class="h20"></div>

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
						<?php echo apms_widget('miso-shop-item-photo', $wshid.'-photo2', 'type=1 infi=1 garo=3 sero=6 sm=2 xs=1 hit=1 cmt=1 sns=1 thumb_w=400 thumb_h=600'); ?>
					
					<?php } else if($m == "3") { //추천 ?>
						<?php echo apms_widget('miso-shop-item-photo', $wshid.'-photo3', 'type=2 infi=1 garo=3 sero=6 sm=2 xs=1 hit=1 cmt=1 sns=1 thumb_w=400 thumb_h=600'); ?>

					<?php } else if($m == "4") { //신규 ?>
						<?php echo apms_widget('miso-shop-item-photo', $wshid.'-photo4', 'type=3 infi=1 garo=3 sero=6 sm=2 xs=1 hit=1 cmt=1 sns=1 thumb_w=400 thumb_h=600'); ?>

					<?php } else if($m == "5") { //인기 ?>
						<?php echo apms_widget('miso-shop-item-photo', $wshid.'-photo5', 'type=4 infi=1 garo=3 sero=6 sm=2 xs=1 hit=1 cmt=1 sns=1 thumb_w=400 thumb_h=600'); ?>

					<?php } else if($m == "6") { //할인 ?>
						<?php echo apms_widget('miso-shop-item-photo', $wshid.'-photo6', 'type=5 infi=1 garo=3 sero=6 sm=2 xs=1 hit=1 cmt=1 sns=1 thumb_w=400 thumb_h=600'); ?>

					<?php } else { //전체 ?>
						<?php echo apms_widget('miso-shop-item-photo', $wshid.'-photo1', 'infi=1 garo=3 sero=6 sm=2 xs=1 hit=1 cmt=1 sns=1 thumb_w=400 thumb_h=600'); ?>
					<?php } ?>

					<div class="h20"></div>

				</div>		
				<div class="col-md-3 main-col side-wrap pull-left">

					<div class="row side-row">
						<div class="col-md-12 col-sm-6 side-col">

							<?php if(!G5_IS_MOBILE) { // PC에서만 출력 ?>
							<!-- 외부로그인 Start //-->
							<div class="side-box hidden-sm hidden-xs">
								<?php echo apms_widget('miso-outlogin'); // 외부로그인 ?>

								<style>
								.side-icon { list-style: none; margin: 15px 0px 0px; padding: 0px; text-align:center; }
								.side-icon li { display:inline-block; margin:0px 5px; }
								.side-icon li span { display:block; white-space:nowrap; letter-spacing:-1px; margin-top:8px; }
								</style>
								<ul class="side-icon text-center">
									<li>
										<a href="<?php echo $at_href['inquiry']; ?>">
											<i class="fa fa-truck circle normal light-circle"></i>
											<span>주문/배송</span>
										</a>
									</li>
									<li>
										<a href="<?php echo $at_href['ppay']; ?>">
											<i class="fa fa-ticket circle normal light-circle"></i>
											<span>개인결제</span>
										</a>
									</li>
									<li>
										<a href="<?php echo $at_href['faq']; ?>">
											<i class="fa fa-question circle normal light-circle"></i>
											<span>FAQ</span>
										</a>
									</li>
									<li>
										<a href="<?php echo $at_href['secret'];?>">
											<i class="fa fa-user-secret circle normal light-circle"></i>
											<span>1:1 문의</span>
										</a>
									</li>
								</ul>
								<div class="clearfix"></div>
							</div>
							<!-- //End -->
							<?php } ?>

							<div class="side-box no-border">
								<?php echo apms_widget('miso-shop-event-slider', $wshid.'-shop-event', 'effect=vertical sort=rdm in=1 thumb_w=400 thumb_h=250 shadow=2'); // 이벤트 ?>
							</div>

							<h4 class="div-title-underline-thin border-color no-margin color">
								Notice
							</h4>
							<div class="side-box no-border">
								<?php echo apms_widget('miso-post-list', $wshid.'-side-notice', 'rows=7 new=red icon={아이콘:bell}'); ?>
							</div>

							<h4 class="div-title-underline-thin border-color no-margin color">
								Category
							</h4>
							<div class="side-box no-border">
								<?php echo apms_widget('miso-shop-category'); // 카테고리 체크 ?>
							</div>

							<!-- //End -->

						</div>
						<div class="col-md-12 col-sm-6 side-col">

							<div class="side-box no-border">
								<?php echo apms_widget('miso-shop-banner-slider', $wshid.'-shop-banner', 'effect=fade sort=rdm in=1 thumb_w=400 thumb_h=250 shadow=2'); // 배너 ?>
							</div>

							<!-- 상품댓글, 상품후기, 상품문의 리스트 아이콘형 위젯 Start //-->
							<h4 class="div-title-underline-thin border-color no-margin color">
								Posts
							</h4>
							<div id="itempost_tab" class="div-tab-bottom tabs swipe-tab">
								<ul class="nav nav-tabs" style="border-top:0;">
									<li class="active"><a href="#side_itemcomment" data-toggle="tab">댓글</a></li>
									<li><a href="#side_itemuse" data-toggle="tab">후기</a></li>
									<li><a href="#side_itemqa" data-toggle="tab">문의</a></li>

								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="side_itemcomment">
										<?php echo apms_widget('miso-shop-item-post', $wshid.'-itemcomment', 'mode=comment rows=6 new=red icon={아이콘:comment}'); ?>
									</div>
									<div class="tab-pane" id="side_itemuse">
										<?php echo apms_widget('miso-shop-item-post', $wshid.'-itemuse', 'mode=use rows=5 new=red icon={아이콘:pencil}'); ?>
										<div class="text-right side-more">
											<a href="<?php echo $at_href['iuse'];?>">
												<span class="text-muted">+ 상품후기 더보기</span>
											</a>
										</div>
									</div>
									<div class="tab-pane" id="side_itemqa">
										<?php echo apms_widget('miso-shop-item-post', $wshid.'-itemqa', 'mode=qa rows=5 new=red icon={아이콘:user}'); ?>
										<div class="text-right side-more">
											<a href="<?php echo $at_href['iqa'];?>">
												<span class="text-muted">+ 상품문의 더보기</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- //End -->

							<div class="h20"></div>

							<!-- 새글, 새댓글 Start //-->
							<h4 class="div-title-underline-thin border-color no-margin color">
								Community
							</h4>
							<div id="community_tab" class="div-tab-bottom tabs swipe-tab">
								<ul class="nav nav-tabs" style="border-top:0;">
									<li class="active"><a href="#side_newpost" data-toggle="tab">최근글</a></li>
									<li><a href="#side_newcomment" data-toggle="tab">최근댓글</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="side_newpost">
										<?php echo apms_widget('miso-post-list', $wshid.'-side-newpost', 'rows=10 new=red icon={아이콘:caret-right}'); ?>
									</div>
									<div class="tab-pane" id="side_newcomment">
										<?php echo apms_widget('miso-post-list', $wshid.'-side-newcomment', 'rows=10 comment=1 new=red icon={아이콘:comment}'); ?>
									</div>
								</div>
							</div>
							<!-- //End -->

							<div class="h20"></div>

							<?php if(!G5_IS_MOBILE) { // PC에서만 출력 ?>
							<!-- SNS아이콘 Start //-->
							<div class="text-center hidden-xs">
								<?php echo $sns_share_icon; // SNS 공유아이콘 ?>
								<div class="h20"></div>
							</div>
							<!-- //End -->
							<?php } ?>
						
						</div>
					</div>

				</div>		
			</div>
		</div>
	</div>
	<?php @include_once(THEMA_PATH.'/shop.wing.php'); // Wing ?>
</div>