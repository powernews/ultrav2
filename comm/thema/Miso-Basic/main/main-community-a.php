<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 위젯 설정값 아이디 접두어 지정
$wshid = 'mbt-mca';

?>

<style>
	.main-wrap { position:relative; margin:0px auto; max-width:1200px; }
	.main-wrap .main-content { margin:0px auto; padding:20px 0px 10px; }
	.main-wrap .main-box { border:1px solid #ddd; margin-bottom:16px; background:#fff; padding:12px; }
	.main-wrap .main-head { border-bottom:1px solid #ddd; margin:4px 0px 12px; font-weight:bold; padding-bottom:3px; }
	.main-wrap .main-more { font-weight:normal; color:#888; letter-spacing:-1px; font-size:11px; }
	.main-wrap .main-tab { border-right:1px solid #ddd; border-top:1px solid #ddd; }
	.main-wrap .main-tab .nav{ margin-top:-1px !important; }
	.main-wrap .tabs { margin-bottom:16px !important; }
	.main-wrap .tab-content { padding:10px !important; }
	.main-wrap .main-row { margin-left:-8px; margin-right:-8px; }
	.main-wrap .main-col { padding-left:8px; padding-right:8px; }
</style>

<div class="main-wrap">
	<div class="main-content">
		<div class="container">

			<div class="row main-row">
				<div class="col-md-9 main-col">
					<style>
						/* 992px 이상에서는 타이틀 높이값 고정시킴 */
						.no-responsive .fixed-height .img-wrap { padding-bottom: 260px !important; }
						@media all and (min-width:992px) {
							.responsive .fixed-height .img-wrap { padding-bottom: 260px !important; }
						}
					</style>
					<div class="fixed-height">
						<?php echo apms_widget('miso-slider', $wshid.'-title-slider', 'effect=fade shadow=2 in=1 nav=1 slider_h=40 fade=1 rdm=1'); //타이틀 위젯 ?>
					</div>
				</div>
				<?php if(!G5_IS_MOBILE) { // 로그인은 PC에서만 출력 ?>
					<div class="col-md-3 hidden-sm hidden-xs main-col">
						<!-- 외부로그인 Start //-->
						<style>
							.div-box.login-box { height:260px; padding:0px; overflow:hidden; }
							.div-box.login-box .login-wrap { padding:15px 15px 10px; background:#fafafa; }
							table.login-tbl { margin:0px; }
							table.login-tbl td { text-align:center; vertical-align:middle; width:50%; }
							table.login-tbl td.right { border-left:1px solid #ddd; }
							table.login-tbl p { margin:5px 0px 0px; }
						</style>
						<div class="div-box login-box">
							<div class="login-wrap">
								<?php echo apms_widget('miso-outlogin'); // 외부로그인 ?>
							</div>
							<?php if($is_member) { //로그인 ?>
								<table class="table login-tbl" style="margin-top:-2px;">
								<tr><td>
									<a href="#URL 주소입력">
										<i class="fa fa-smile-o fa-lg green"></i> 출석체크
									</a>
								</td>
								<td class="right">
									<a href="#URL 주소입력">
										<i class="fa fa-gift fa-lg skyblue"></i> 이벤트
									</a>
								</tr>
								</table>
							<?php } else { //로그아웃 ?>
								<table class="table login-tbl" style="height:85px;">
								<tr><td>
									<a href="#URL 주소입력">
										<i class="fa fa-smile-o fa-3x green"></i>
										<p>출석체크</p>
									</a>
								</td>
								<td class="right">
									<a href="#URL 주소입력">
										<i class="fa fa-gift fa-3x skyblue"></i>
										<p>이벤트</p>
									</a>
								</tr>
								</table>
							<?php } ?>
						</div>
						<!-- //End -->
					</div>
				<?php } ?>
			</div>

			<div class="h20"></div>

			<div class="row main-row">
				<div class="col-md-6 main-col">

					<div class="row main-row">
						<div class="col-sm-6 main-col">
							<div class="main-box">
								<div class="main-head">
									<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
										<span class="pull-right main-more">+더보기</span>
										여행이야기
									</a>
								</div>
								<?php echo apms_widget('miso-post-mixed-sero', $wshid.'-mixed-sero-a', 'rows=5 irdm=1 caption=black scut=15 new=red icon={아이콘:paper-plane}'); ?>
							</div>
						</div>
						<div class="col-sm-6 main-col">
							<div class="main-box">
								<div class="main-head">
									<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
										<span class="pull-right main-more">+더보기</span>
										영화이야기
									</a>
								</div>
								<?php echo apms_widget('miso-post-mixed-sero', $wshid.'-mixed-sero-b', 'rows=5 irdm=1 caption=black scut=15 new=red icon={아이콘:film}'); ?>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-6 main-col">

					<div class="row main-row">
						<div class="col-sm-6 main-col">
							<div class="main-box">
								<div class="main-head">
									<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
										<span class="pull-right main-more">+더보기</span>
										게임이야기
									</a>
								</div>
								<?php echo apms_widget('miso-post-mixed-sero', $wshid.'-mixed-sero-c', 'rows=5 irdm=1 caption=black scut=15 new=red icon={아이콘:gamepad}'); ?>
							</div>
						</div>
						<div class="col-sm-6 main-col">
							<div class="main-box">
								<div class="main-head">
									<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
										<span class="pull-right main-more">+더보기</span>
										뮤직이야기
									</a>
								</div>
								<?php echo apms_widget('miso-post-mixed-sero', $wshid.'-mixed-sero-e', 'rows=5 irdm=1 caption=black scut=15 new=red icon={아이콘:music}'); ?>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="row main-row">
				<div class="col-md-6 main-col">

					<div class="main-box">
						<div class="main-head">
							<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
								<span class="pull-right main-more">+더보기</span>
								추천정보
							</a>
						</div>
						<?php echo apms_widget('miso-post-mixed', $wshid.'-mixed-a', 'rows=7 caption=black grid=6 new=red icon={아이콘:check}'); ?>
					</div>

				</div>
				<div class="col-md-6 main-col">

					<div class="row main-row">
						<div class="col-sm-6 main-col">
							<div class="main-box">
								<div class="main-head">
									<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
										<span class="pull-right main-more">+더보기</span>
										자유게시판
									</a>
								</div>
								<?php echo apms_widget('miso-post-list', $wshid.'-list-a', 'rows=7 new=red icon={아이콘:comment}'); ?>
							</div>
						</div>
						<div class="col-sm-6 main-col">
							<div class="main-box">
								<div class="main-head">
									<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
										<span class="pull-right main-more">+더보기</span>
										추천맛집
									</a>
								</div>
								<?php echo apms_widget('miso-post-slider', $wshid.'-slider', 'nav=1 rows=4 caption=small trans=1 bg=black scut=20 thumb_w=400 thumb_h=250 rdm=1 new=red'); ?>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="row main-row">
				<div class="col-md-6 main-col">

					<div class="row main-row">
						<div class="col-sm-6 main-col">
							<div class="main-box">
								<div class="main-head">
									<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
										<span class="pull-right main-more">+더보기</span>
										질답게시판
									</a>
								</div>
								<?php echo apms_widget('miso-post-list', $wshid.'-list-b', 'rows=6 new=red icon={아이콘:question-circle}'); ?>
							</div>
						</div>
						<div class="col-sm-6 main-col">
							<div class="main-box">
								<div class="main-head">
									<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
										<span class="pull-right main-more">+더보기</span>
										익명게시판
									</a>
								</div>
								<?php echo apms_widget('miso-post-list', $wshid.'-list-c', 'rows=6 new=red icon={아이콘:microphone-slash}'); ?>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-6 main-col">

					<div class="main-box">
						<div class="main-head">
							<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
								<span class="pull-right main-more">+더보기</span>
								갤러리
							</a>
						</div>
						<?php echo apms_widget('miso-post-photo', $wshid.'-photo-a', 'garo=4 sero=1 lb=1 thumb_w=400 thumb_h=415 sm=2 xs=2'); ?>
					</div>

				</div>
			</div>

			<div class="row main-row">
				<div class="col-md-6 main-col">

					<div class="row main-row">
						<div class="col-sm-6 main-col">
							<div class="main-box">
								<div class="main-head">
									베스트글
								</div>
								<?php echo apms_widget('miso-post-mixed-sero', $wshid.'-mixed-best', 'rows=10 irdm=1 rank=orangered caption=black scut=15 thumb_w=400 thumb_h=250 new=red'); ?>
							</div>
						</div>
						<div class="col-sm-6 main-col">
							<div class="main-box">
								<div class="main-head">
									<a href="<?php echo $at_href['new'];?>?view=w">
										<span class="pull-right main-more">+더보기</span>
										새로 등록된 글
									</a>
								</div>
								<?php echo apms_widget('miso-post-icon', $wshid.'-newpost', 'rows=8 new=red icon={아이콘:user}'); ?>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-6 main-col">

					<div class="row main-row">
						<div class="col-sm-6 main-col">
							<div class="main-box">
								<div class="main-head">
									<a href="<?php echo $at_href['new'];?>?view=c">
										<span class="pull-right main-more">+더보기</span>
										새로 등록된 댓글
									</a>
								</div>
								<?php echo apms_widget('miso-post-icon', $wshid.'-newcomment', 'rows=8 new=red comment=1 icon={아이콘:comment}'); ?>
							</div>
						</div>
						<div class="col-sm-6 main-col">

							<!-- 공지 등 목록형 추출 Start //-->
							<div id="notice_tab" class="div-tab tabs miso-tab swipe-tab">
								<div class="main-tab bg-light">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#main_notice" data-toggle="tab">공지</a></li>
										<li><a href="#main_popular" data-toggle="tab">검색</a></li>
										<li><a href="#main_tag" data-toggle="tab">태그</a></li>
										<li><a href="#main_poll" data-toggle="tab">설문</a></li>
									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane active" id="main_notice">
										<?php echo apms_widget('miso-post-list', $wshid.'-notice', 'rows=5 new=red icon={아이콘:bell}'); ?>
									</div>
									<div class="tab-pane" id="main_popular">
										<?php echo apms_widget('miso-popular', $wshid.'-popular', 'rows=20'); ?>
									</div>
									<div class="tab-pane" id="main_tag">
										<?php echo apms_widget('miso-tag', $wshid.'-tag', 'rows=20'); ?>
									</div>
									<div class="tab-pane" id="main_poll">
										<?php echo apms_widget('miso-poll', $wshid.'-poll', 'rows=3'); ?>
									</div>
								</div>
							</div>
							<!-- //End -->

							<!-- 구글 등 광고 Start //-->
							<div class="main-box" style="padding:0px;">
								<div style="width:100%; height:260px; line-height:260px; text-align:center; background:#fff;">
									반응형 구글광고 등
								</div>
							</div>
							<!-- //End -->

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<?php @include_once(THEMA_PATH.'/wing.php'); // Wing ?>
</div>