<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 위젯 설정값 아이디 접두어 지정
$wshid = 'mbt-mc';
$slogan = '미소 베이직 테마 <span class="red">3.0</span>'; // 필요없으니 지워 주셔도 됩니다.

?>
<style>
	.main-wrap { position:relative; margin:0px auto; max-width:1200px; }
	.main-wrap .main-content { margin:0px auto; padding:20px 0px 10px; }
	.main-wrap .main-box { margin-bottom:16px; }
	.main-wrap .main-p10 { padding:10px; }
	.main-wrap .main-more { margin:8px 0px 0px; }
	.main-wrap .main-tab { border-right:1px solid #ddd; border-top:1px solid #ddd; }
	.main-wrap .main-tab .nav{ margin-top:-1px !important; }
	.main-wrap .tabs { margin-bottom:16px !important; }
	.main-wrap .tab-content { border:0px !important; padding:10px 4px 0px !important; background: none !important;}
	.main-wrap .tab-more { margin-top:-24px; font-size:12px; letter-spacing:-1px; color:#888 !important; }
	.main-wrap .main-row { }
	.main-wrap .main-col { }
	.main-wrap .ul-icon { overflow:hidden; margin:0px -5px; padding:0px; list-style:none; }
	.main-wrap .ul-icon li { float:left; max-width:25%; padding:0; margin:0; text-align:center; }
	.main-wrap .ul-icon li a { display:block; padding:0px 5px; }
	.main-wrap .ul-icon li span { display:block; margin-top:8px; letter-spacing:-1px; white-space:nowrap; }
	.main-wrap .main-slogan { margin:0px 0px 30px; text-align:center; }
	.main-wrap .main-slogan h2 { display:block; font-size:26px; margin:0px; letter-spacing:-1px; line-height:32px; }
	.main-wrap .main-slogan i.slogan-quote { font-size:16px; vertical-align:top; margin:0px 2px; }
	.main-wrap .main-slogan p { color:#888; padding:0px; margin-top:10px; }
</style>

<?php echo apms_widget('miso-slider', $wshid.'-title-slider', 'slider_h=32 shadow=2 effect=fade nav=1 rdm=1', 'slider_h=56'); //타이틀 위젯 ?>

<div class="main-wrap">
	<div class="main-content">
		<div class="container">
			<div class="row">
				<div class="col-md-4">

					<!-- 공지 등 위젯 Start //-->
					<div class="main-box">
						<div id="notice_tab" class="div-tab tabs miso-tab swipe-tab">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#main_notice" data-toggle="tab" ref="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">공지</a></li>
								<li><a href="#main_report" data-toggle="tab" ref="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">FAQ</a></li>
								<li><a href="#main_recruit" data-toggle="tab" ref="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">채용</a></li>
							</ul>
							<a class="pull-right tab-more" onclick="miso_more('notice_tab');">+ 더보기</a>
							<div class="tab-content">
								<div class="tab-pane active" id="main_notice">
									<?php echo apms_widget('miso-post-list', $wshid.'-notice', 'rows=8 date=m.d new=red icon={아이콘:bell}'); ?>
								</div>
								<div class="tab-pane" id="main_report">
									<?php echo apms_widget('miso-post-list', $wshid.'-report', 'rows=8 date=m.d new=red icon={아이콘:microphone}'); ?>
								</div>
								<div class="tab-pane" id="main_recruit">
									<?php echo apms_widget('miso-post-list', $wshid.'-recruit', 'rows=8 date=m.d new=red icon={아이콘:caret-right}'); ?>
								</div>
							</div>
						</div>
					</div>
					<!-- //End -->

				</div>
				<div class="col-md-4">

					<!-- 이벤트 등 슬라이더 Start //-->
					<div class="main-box">
						<?php echo apms_widget('miso-post-slider', $wshid.'-slider', 'effect=vertical rows=4 rdm=1 new=red caption=small scut=20 trans=1 bg=black thumb_w=400 thumb_h=250'); ?>
					</div>
					<!-- //End -->

				</div>
				<div class="col-md-4">

					<!-- 제품 등 위젯 Start //-->
					<div class="main-box">
						<div id="product_tab" class="div-tab tabs miso-tab swipe-tab">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#main_product_a" data-toggle="tab" ref="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">제품 A</a></li>
								<li><a href="#main_product_b" data-toggle="tab" ref="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">제품 B</a></li>
								<li><a href="#main_product_c" data-toggle="tab" ref="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">제품 C</a></li>
							</ul>
							<a class="pull-right tab-more" onclick="miso_more('product_tab');">+ 더보기</a>
							<div class="tab-content">
								<div class="tab-pane active" id="main_product_a">
									<?php echo apms_widget('miso-post-gallery', $wshid.'-product-a', 'garo=2 sero=1 cut=26 ncut=100 new=red xs=1'); ?>
								</div>
								<div class="tab-pane" id="main_product_b">
									<?php echo apms_widget('miso-post-gallery', $wshid.'-product-b', 'garo=2 sero=1 cut=26 ncut=100 new=red xs=1 rank=red'); ?>
								</div>
								<div class="tab-pane" id="main_product_c">
									<?php echo apms_widget('miso-post-gallery', $wshid.'-product-c', 'garo=2 sero=1 cut=26 ncut=100 new=red xs=1 rank=blue'); ?>
								</div>
							</div>
						</div>
					</div>
					<!-- //End -->

				</div>
			</div>

			<?php echo apms_line('fa', 'fa-th-large');?>

			<!-- 갤러리 등 위젯 Start //-->
			<div class="main-slogan">
				<h2>
					<i class="fa fa-quote-left slogan-quote"></i>
					<?php echo $slogan; //텍스트 직접 입력 ?>
					<i class="fa fa-quote-right slogan-quote"></i>
				</h2>
				<p>
					좌측상단의 Switcher에서 다양한 레이아웃 설정 등을 테스트해 보실 수 있습니다.
				</p>
			</div>

			<div class="main-box">
				<?php echo apms_widget('miso-post-more-photo', $wshid.'-post-more-photo', 'over=1 bg=black garo=5 sero=2 gap=20 thumb_w=400 thumb_h=300 lb=1 md=4 sm=3 xs=2', 'garo=5 sero=1'); ?>
			</div>
			<!-- //End -->

			<?php echo apms_line('fa', 'fa-check');?>

			<div class="row main-row">
				<div class="col-md-3 col-sm-6 main-col">
					<div class="main-box">
						<h4 class="div-title-underline-thin border-color color">
							Product
						</h4>
						<p>
							회사, 제품, 서비스 소개 등 컴퍼니 용도로 활용할 수 있는 메인스킨 샘플입니다.
						</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 main-col">
					<div class="main-box">
						<h4 class="div-title-underline-thin border-color color">
							Service
						</h4>
						<p>
							타이틀, 슬로건 등 텍스트는 테마 내 /main/main-company.php 파일에서 직접 입력해 주세요.
						</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 main-col">
					<div class="main-box">
						<h4 class="div-title-underline-thin border-color color">
							Company
						</h4>
						<ul class="ul-icon">
							<li>
								<a href="#URL 주소입력">
									<i class="fa fa-building circle light-circle normal"></i>
									<span>회사소개</span>
								</a>
							</li>
							<li>
								<a href="#URL 주소입력">
									<i class="fa fa-cubes circle light-circle normal"></i>
									<span>사업소개</span>
								</a>
							</li>
							<li>
								<a href="<?php echo $at_href['faq']; ?>">
									<i class="fa fa-question circle light-circle normal"></i>
									<span>FAQ</span>
								</a>
							</li>
							<li>
								<a href="<?php echo $at_href['secret'];?>">
									<i class="fa fa-user-secret circle light-circle normal"></i>
									<span>1:1 문의</span>
								</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 main-col">
					<div class="main-box">
						<h4 class="div-title-underline-thin border-color color">
							CS Center
						</h4>
						<h2 class="en color" style="margin:0px 0px 6px; letter-spacing:-1px;">
							<b>000.0000.0000</b>
						</h2>
						<ul style="list-style:none; padding:0; margin:0;">
							<li>월-금 : 9:30 ~ 17:30</li>
							<li>런치타임 : 12:30 ~ 13:30</li>
							<li>토/일/공휴일은 휴무</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php @include_once(THEMA_PATH.'/wing.php'); // Wing ?>
</div>
