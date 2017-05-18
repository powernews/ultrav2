<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 위젯 설정값 아이디 접두어 지정
$wshid = 'mbt-mb';
$slogan = '미소 베이직 테마 <span class="red">3.0</span>'; // 필요없으니 지워 주셔도 됩니다.

?>

<style>
	.main-wrap { position:relative; margin:0px auto; max-width:1200px; }
	.main-wrap .main-content { margin:0px auto; padding:20px 0px 10px; }
	.main-wrap .main-box { margin-bottom:20px; }
	.main-wrap .main-box.main-border { border:1px solid #ddd; background:#fff; padding:10px; }
	.main-wrap .tabs { margin-bottom:0px !important; }
	.main-wrap .tab-content { padding:18px 15px !important; background: none !important;}
	.main-wrap .tab-more { margin-top:-24px; font-size:12px; letter-spacing:-1px; color:#888 !important; }
	.main-wrap .main-row { margin-left:-10px; margin-right:-10px; }
	.main-wrap .main-col { padding-left:10px; padding-right:10px; }
	.main-wrap .main-more { margin:8px 0px 0px; }
	.main-wrap .main-slogan { margin:0px 0px 30px; text-align:center; }
	.main-wrap .main-slogan h2 { display:block; font-size:26px; margin:0px; letter-spacing:-1px; line-height:32px; }
	.main-wrap .main-slogan i.slogan-quote { font-size:16px; vertical-align:top; margin:0px 2px; }
	.main-wrap .main-slogan p { color:#888; padding:0px; margin-top:10px; }
</style>

<?php echo apms_widget('miso-post-bar', $wshid.'-post-bar', 'effect=vertical nav=1 shadow=2 date=Y.m.d icon={아이콘:bell} rdm=1'); // 포스트 바 ?>

<div class="main-wrap">
	<div class="main-content">
		<div class="container">
			<div class="row main-row">
				<div class="col-md-9 main-col">

					<!-- 타이틀 위젯 Start //-->
					<div class="main-box">
						<?php echo apms_widget('miso-post-slider', $wshid.'-post-slider', 'effect=fade rows=4 rdm=1 shadow=2 caption=large trans=1 bg=black scut=30 thumb_w=400 thumb_h=160 thumb_no=1', 'thumb_h=225'); ?>
					</div>
					<!-- //End -->

					<div class="main-slogan">
						<h2>
							<i class="fa fa-quote-left slogan-quote"></i>
							<?php echo $slogan; //텍스트 직접 입력 ?>
							<i class="fa fa-quote-right slogan-quote"></i>
						</h2>
						<p>
							블로그 용도로 활용할 수 있는 메인스킨 샘플입니다.
						</p>
					</div>

					<div class="row main-row">
						<div class="col-md-4 main-col">
							<div class="main-box main-border">
								<?php echo apms_widget('miso-post-mixed-sero', $wshid.'-mixed-sero-a', 'rows=7 shadow=2 bold=1 irdm=1 scut=15 new=red icon={아이콘:pencil}'); ?>
								<div class="text-right main-more">
									<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
										<span class="text-muted">+ 세로 A 더보기</span>
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 main-col">
							<div class="main-box main-border">
								<?php echo apms_widget('miso-post-mixed-sero', $wshid.'-mixed-sero-b', 'rows=7 shadow=2 bold=1 irdm=1 scut=15 new=red icon={아이콘:coffee}'); ?>
								<div class="text-right main-more">
									<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
										<span class="text-muted">+ 세로 B 더보기</span>
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 main-col">
							<div class="main-box main-border">
								<?php echo apms_widget('miso-post-mixed-sero', $wshid.'-mixed-sero-c', 'rows=7 shadow=2 bold=1 irdm=1 scut=15 new=red icon={아이콘:download}'); ?>
								<div class="text-right main-more">
									<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
										<span class="text-muted">+ 세로 C 더보기</span>
									</a>
								</div>
							</div>
						</div>
					</div>

					<?php echo apms_line('fa', 'fa-camera');?>

					<div class="main-slogan">
						<h2>
							<i class="fa fa-quote-left slogan-quote"></i>
							<?php echo $slogan; //텍스트 직접 입력 ?>
							<i class="fa fa-quote-right slogan-quote"></i>
						</h2>
						<p>
							타이틀, 슬로건 등 텍스트는 테마 내 /main/main-blog.php 파일에서 직접 입력해 주세요.
						</p>
					</div>

					<!-- 갤러리 위젯 Start //-->
					<div class="main-box">
						<?php echo apms_widget('miso-post-more-photo', $wshid.'-post-more-photo', 'shadow=2 in=2 garo=4 sero=2 gap=20 thumb_w=400 thumb_h=300 lb=1 bg=black md=3 sm=2 xs=2', 'garo=4 sero=1'); ?>
					</div>
					<!-- //End -->

					<?php echo apms_line('fa', 'fa-th-large');?>

					<div class="main-slogan">
						<h2>
							<i class="fa fa-quote-left slogan-quote"></i>
							<?php echo $slogan; //텍스트 직접 입력 ?>
							<i class="fa fa-quote-right slogan-quote"></i>
						</h2>
						<p>
							배경색 등 메인관련 CSS도 main-blog.php 파일에서 수정해 주세요.
						</p>
					</div>

					<!-- 블로그 위젯 Start //-->
					<div class="main-box">
						<?php echo apms_widget('miso-post-more', $wshid.'-post-more', 'shadow=2 garo=3 sero=2 gap=15 lb=1 thumb_w=400 thumb_h=225 scut=15 cut=40 ncut=200 md=2 sm=2 xs=1'); ?>
					</div>
					<!-- //End -->


				</div>		
				<div class="col-md-3 main-col">

					<div class="row main-row">
						<div class="col-md-12 col-sm-6 main-col">

							<?php if(!G5_IS_MOBILE) { // PC에서만 출력 ?>
							<!-- 외부로그인 Start //-->
							<div class="main-box hidden-sm hidden-xs">
								<?php echo apms_widget('miso-outlogin'); // 외부로그인 ?>
							</div>
							<!-- //End -->
							<?php } ?>

							<h4 class="div-title-underline-thin border-color no-margin color">
								Category
							</h4>
							<div class="main-box no-border">
								<?php echo apms_widget('miso-category-all'); // 카테고리 체크 ?>
							</div>


							<!-- 구글 등 광고 Start //-->
							<div class="main-box">
								<div style="width:100%; height:260px; line-height:260px; text-align:center; background:#fff; border:1px solid #ddd;">
									반응형 구글광고 등
								</div>
							</div>
							<!-- //End -->

						</div>
						<div class="col-md-12 col-sm-6 main-col">

							<!-- 새글, 새댓글 리스트 아이콘형 위젯 Start //-->
							<h4 class="div-title-underline-thin border-color no-margin color">
								New Posts
							</h4>
							<div id="newpost_tab" class="div-tab-bottom tabs swipe-tab">
								<ul class="nav nav-tabs" style="border-top:0;">
									<li class="active"><a href="#main_newpost" data-toggle="tab">새글</a></li>
									<li><a href="#main_newcomment" data-toggle="tab">새댓글</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="main_newpost">
										<?php echo apms_widget('miso-post-icon', $wshid.'-newpost', 'rows=6 new=red icon={아이콘:user}'); ?>
										<div class="text-right main-more">
											<a href="<?php echo $at_href['new'];?>?view=w">
												<span class="text-muted">+ 새글 더보기</span>
											</a>
										</div>
									</div>
									<div class="tab-pane" id="main_newcomment">
										<?php echo apms_widget('miso-post-icon', $wshid.'-newcomment', 'rows=6 new=red comment=1 icon={아이콘:comment}'); ?>
										<div class="text-right main-more">
											<a href="<?php echo $at_href['new'];?>?view=c">
												<span class="text-muted">+ 새댓글 더보기</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- //End -->

							<!-- 인기글, 검색어, 태그, 설문 Start //-->
							<h4 class="div-title-underline-thin border-color no-margin color">
								Miscellaneous
							</h4>
							<div id="misc_tab" class="div-tab-bottom tabs swipe-tab">
								<ul class="nav nav-tabs" style="border-top:0;">
									<li class="active"><a href="#main_post_rank" data-toggle="tab">인기</a></li>
									<li><a href="#main_tag" data-toggle="tab">태그</a></li>
									<li><a href="#main_poll" data-toggle="tab">설문</a></li>
									<li><a href="#main_popular" data-toggle="tab">검색</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="main_post_rank">
										<?php echo apms_widget('miso-post-list', $wshid.'-post-rank', 'rows=10 rank=green new=red icon={아이콘:caret-right}'); ?>
									</div>
									<div class="tab-pane" id="main_tag">
										<?php echo apms_widget('miso-tag', $wshid.'-tag', 'rows=30'); ?>
										<div class="text-right main-more">
											<a href="<?php echo $at_href['tag'];?>">
												<span class="text-muted">+ 태그 더보기</span>
											</a>
										</div>
									</div>
									<div class="tab-pane" id="main_poll">
										<?php echo apms_widget('miso-poll', $wshid.'-poll', 'rows=3'); ?>
									</div>
									<div class="tab-pane" id="main_popular">
										<?php echo apms_widget('miso-popular', $wshid.'-popular', 'rows=30'); ?>
									</div>
								</div>
							</div>
							<!-- //End -->

							<!-- 배너 Start //-->
							<div class="main-box">
								<?php echo apms_widget('miso-post-slider', $wshid.'-banner', 'rows=4 rdm=1 shadow=2 nav=1 new=blue caption=small trans=1 bg=black scut=20'); ?>
							</div>
							<!-- //End -->

							<?php if(!G5_IS_MOBILE) { // PC에서만 출력 ?>
							<!-- SNS아이콘 Start //-->
							<div class="text-center hidden-xs">
								<?php echo $sns_share_icon; // SNS 공유아이콘 ?>
								<div class="h15"></div>
							</div>
							<!-- //End -->
							<?php } ?>
						
						</div>
					</div>
				</div>		
			</div>
		</div>
	</div>
	<?php @include_once(THEMA_PATH.'/wing.php'); // Wing ?>
</div>