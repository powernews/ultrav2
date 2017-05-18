<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 위젯 설정값 아이디 접두어 지정
$wshid = 'mbt-mbb';

?>

<style>
	.main-wrap { position:relative; margin:0px auto; max-width:1200px; }
	.main-wrap .main-content { margin:0px auto; padding:20px 0px 10px; }
	.main-wrap .main-box { border:1px solid #ddd; margin-bottom:16px; background:#fff; }
	.main-wrap .main-box-footer { border-top:1px solid #ddd; padding:10px; }
	.main-wrap .main-p10 { padding:10px; }
	.main-wrap .main-more { margin:8px 0px 0px; }
	.main-wrap .main-tab { border-right:1px solid #ddd; border-top:1px solid #ddd; }
	.main-wrap .main-tab .nav{ margin-top:-1px !important; }
	.main-wrap .tabs { margin-bottom:16px !important; }
	.main-wrap .tab-content { padding:10px !important; }
	.main-wrap .main-row { margin-left:-8px; margin-right:-8px; }
	.main-wrap .main-col { padding-left:8px; padding-right:8px; }
	@media all and (max-width:767px) {
		.responsive .main-col.pull-left, 
		.responsive .main-col.pull-right { float:none !important; }
	}
</style>

<div class="main-wrap">
	<div class="main-content">
		<div class="container">
			<div class="row main-row">
				<div class="col-md-9 main-col pull-right">

					<div class="row main-row">
						<div class="col-lg-8 main-col">

							<!-- 타이틀 위젯 Start //-->
							<div class="main-box">
								<div class="main-p10">
									<?php echo apms_widget('miso-slider', $wshid.'-title-slider', 'effect=fade nav=1 slider_h=50 rdm=1', 'slider_h=56'); //타이틀 위젯 ?>
								</div>
								<div class="main-box-footer bg-light">
									<?php echo apms_widget('miso-post-newsticker', $wshid.'-newsticker', 'effect=vertical date=m.d new=red icon={아이콘:bell}'); // 뉴스티커 ?>
								</div>
							</div>
							<!-- //End -->

							<!-- 복합형 위젯 Start //-->
							<div id="mixed_tab" class="div-tab tabs miso-tab swipe-tab">
								<div class="main-tab bg-light">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#main_mixed_a" data-toggle="tab">복합형 A</a></li>
										<li><a href="#main_mixed_b" data-toggle="tab">복합형 B</a></li>
										<li><a href="#main_mixed_c" data-toggle="tab">복합형 C</a></li>
									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane active" id="main_mixed_a">
										<?php echo apms_widget('miso-post-mixed', $wshid.'-mixed-a', 'rows=9 grid=6 new=red irdm=1 icon={아이콘:caret-right}'); ?>
										<div class="text-right main-more">
											<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
												<span class="text-muted">+ 복합형 A 더보기</span>
											</a>
										</div>
									</div>
									<div class="tab-pane" id="main_mixed_b">
										<?php echo apms_widget('miso-post-mixed', $wshid.'-mixed-b', 'rows=9 grid=6 new=green irdm=1 rank=orange'); ?>
										<div class="text-right main-more">
											<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
												<span class="text-muted">+ 복합형 B 더보기</span>
											</a>
										</div>
									</div>
									<div class="tab-pane" id="main_mixed_c">
										<?php echo apms_widget('miso-post-mixed', $wshid.'-mixed-c', 'rows=9 grid=6 new=blue irdm=1 rank=green'); ?>
										<div class="text-right main-more">
											<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
												<span class="text-muted">+ 복합형 C 더보기</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- //End -->

							<!-- 갤러리형 위젯 Start //-->
							<div id="gallery_tab" class="div-tab tabs miso-tab swipe-tab">
								<div class="main-tab bg-light">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#main_gallery_a" data-toggle="tab">갤러리 A</a></li>
										<li><a href="#main_gallery_b" data-toggle="tab">갤러리 B</a></li>
										<li><a href="#main_gallery_c" data-toggle="tab">갤러리 C</a></li>
									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane active" id="main_gallery_a">
										<?php echo apms_widget('miso-post-gallery', $wshid.'-gallery-a', 'garo=3 sero=2 ncut=40 sm=2 xs=2 new=red'); ?>
										<div class="text-right main-more">
											<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
												<span class="text-muted">+ 갤러리 A 더보기</span>
											</a>
										</div>
									</div>
									<div class="tab-pane" id="main_gallery_b">
										<?php echo apms_widget('miso-post-gallery', $wshid.'-gallery-b', 'garo=3 sero=2 ncut=40 sm=2 xs=2 new=red rank=green'); ?>
										<div class="text-right main-more">
											<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
												<span class="text-muted">+ 갤러리 B 더보기</span>
											</a>
										</div>
									</div>
									<div class="tab-pane" id="main_gallery_c">
										<?php echo apms_widget('miso-post-gallery', $wshid.'-gallery-c', 'garo=3 sero=2 ncut=40 sm=2 xs=2 new=red rank=violet'); ?>
										<div class="text-right main-more">
											<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
												<span class="text-muted">+ 갤러리 C 더보기</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- //End -->

							<!-- 웹진형 위젯 Start //-->
							<div id="webzine_tab" class="div-tab tabs miso-tab swipe-tab">
								<div class="main-tab bg-light">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#main_webzine_a" data-toggle="tab">웹진형 A</a></li>
										<li><a href="#main_webzine_b" data-toggle="tab">웹진형 B</a></li>
										<li><a href="#main_webzine_c" data-toggle="tab">웹진형 C</a></li>
									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane active" id="main_webzine_a">
										<?php echo apms_widget('miso-post-webzine', $wshid.'-webzine-a', 'garo=2 sero=2 scut=30 ncut=40 new=red xs=1'); ?>
										<div class="text-right main-more">
											<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
												<span class="text-muted">+ 웹진형 A 더보기</span>
											</a>
										</div>
									</div>
									<div class="tab-pane" id="main_webzine_b">
										<?php echo apms_widget('miso-post-webzine', $wshid.'-webzine-b', 'garo=2 sero=2 scut=30 ncut=40 new=red xs=1 rank=red'); ?>
										<div class="text-right main-more">
											<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
												<span class="text-muted">+ 웹진형 B 더보기</span>
											</a>
										</div>
									</div>
									<div class="tab-pane" id="main_webzine_c">
										<?php echo apms_widget('miso-post-webzine', $wshid.'-webzine-c', 'garo=2 sero=2 scut=30 ncut=40 new=red xs=1 rank=blue'); ?>
										<div class="text-right main-more">
											<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
												<span class="text-muted">+ 웹진형 C 더보기</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- //End -->

						</div>
						<div class="col-lg-4 main-col pull-left">

							<div class="row main-row">
								<div class="col-lg-12 col-sm-6 main-col">

									<!-- 이벤트 등 슬라이더 Start //-->
									<div class="main-box main-p10">
										<?php echo apms_widget('miso-post-slider', $wshid.'-slider', 'effect=vertical nav=1 rows=4 rdm=1 new=red'); ?>
									</div>
									<!-- //End -->

									<!-- 복합형 세로 스타일 Start //-->
									<div id="sero_tab" class="div-tab tabs miso-tab swipe-tab">
										<div class="main-tab bg-light">
											<ul class="nav nav-tabs">
												<li class="active"><a href="#main_sero_a" data-toggle="tab">세로 A</a></li>
												<li><a href="#main_sero_b" data-toggle="tab">세로 B</a></li>
											</ul>
										</div>
										<div class="tab-content">
											<div class="tab-pane active" id="main_sero_a">
												<?php echo apms_widget('miso-post-mixed-sero', $wshid.'-mixed-sero-a', 'rows=7 dadan=1 scut=15 new=red icon={아이콘:caret-right}'); ?>
												<div class="text-right main-more">
													<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
														<span class="text-muted">+ 세로 A 더보기</span>
													</a>
												</div>
											</div>
											<div class="tab-pane" id="main_sero_b">
												<?php echo apms_widget('miso-post-mixed-sero', $wshid.'-mixed-sero-b', 'rows=7 dadan=1 scut=15 new=blue icon={아이콘:caret-right}'); ?>
												<div class="text-right main-more">
													<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
														<span class="text-muted">+ 세로 B 더보기</span>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- //End -->

								</div>
								<div class="col-lg-12 col-sm-6 main-col">

									<!-- 포토형 위젯 Start //-->
									<div id="photo_tab" class="div-tab tabs miso-tab swipe-tab">
										<div class="main-tab bg-light">
											<ul class="nav nav-tabs">
												<li class="active"><a href="#main_photo_a" data-toggle="tab">포토 A</a></li>
												<li><a href="#main_photo_b" data-toggle="tab">포토 B</a></li>
											</ul>
										</div>
										<div class="tab-content">
											<div class="tab-pane active" id="main_photo_a">
												<?php echo apms_widget('miso-post-photo', $wshid.'-photo-a', 'over=1 bg=black garo=3 sero=2 xs=2'); ?>
												<div class="text-right main-more">
													<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
														<span class="text-muted">+ 포토 A 더보기</span>
													</a>
												</div>
											</div>
											<div class="tab-pane" id="main_photo_b">
												<?php echo apms_widget('miso-post-photo', $wshid.'-photo-b', 'over=1 bg=navy garo=3 sero=2 xs=2 rank=orange'); ?>
												<div class="text-right main-more">
													<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
														<span class="text-muted">+ 포토 B 더보기</span>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- //End -->

									<!-- 새글, 새댓글 리스트 아이콘형 위젯 Start //-->
									<div id="newpost_tab" class="div-tab tabs miso-tab swipe-tab">
										<div class="main-tab bg-light">
											<ul class="nav nav-tabs">
												<li class="active"><a href="#main_newpost" data-toggle="tab">새글</a></li>
												<li><a href="#main_newcomment" data-toggle="tab">새댓글</a></li>
											</ul>
										</div>
										<div class="tab-content">
											<div class="tab-pane active" id="main_newpost">
												<?php echo apms_widget('miso-post-icon', $wshid.'-newpost', 'new=red icon={아이콘:user}'); ?>
												<div class="text-right main-more">
													<a href="<?php echo $at_href['new'];?>?view=w">
														<span class="text-muted">+ 새글 더보기</span>
													</a>
												</div>
											</div>
											<div class="tab-pane" id="main_newcomment">
												<?php echo apms_widget('miso-post-icon', $wshid.'-newcomment', 'new=red comment=1 icon={아이콘:comment}'); ?>
												<div class="text-right main-more">
													<a href="<?php echo $at_href['new'];?>?view=c">
														<span class="text-muted">+ 새댓글 더보기</span>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- //End -->
								</div>
							</div>

						</div>
					</div>
				</div>		
				<div class="col-md-3 main-col">

					<div class="row main-row">
						<div class="col-md-12 col-sm-6 main-col">

							<?php if(!G5_IS_MOBILE) { // PC에서만 출력 ?>
							<!-- 외부로그인 Start //-->
							<div class="main-box main-p10 hidden-sm hidden-xs">
								<?php echo apms_widget('miso-outlogin'); // 외부로그인 ?>
							</div>
							<!-- //End -->
							<?php } ?>

							<!-- 공지 등 목록형 추출 Start //-->
							<div id="notice_tab" class="div-tab tabs miso-tab swipe-tab">
								<div class="main-tab bg-light">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#main_notice" data-toggle="tab">공지</a></li>
										<li><a href="#main_faq" data-toggle="tab">FAQ</a></li>
										<li><a href="#main_poll" data-toggle="tab">설문</a></li>
										<li><a href="#main_stats" data-toggle="tab">통계</a></li>
									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane active" id="main_notice">
										<?php echo apms_widget('miso-post-list', $wshid.'-notice', 'rows=6 new=red icon={아이콘:bell}'); ?>
										<div class="text-right main-more">
											<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
												<span class="text-muted">+ 공지 더보기</span>
											</a>
										</div>
									</div>
									<div class="tab-pane" id="main_faq">
										<?php echo apms_widget('miso-faq', $wshid.'-faq', 'rows=6 icon={아이콘:question-circle}'); ?>
										<div class="text-right main-more">
											<a href="<?php echo $at_href['faq'];?>">
												<span class="text-muted">+ FAQ 더보기</span>
											</a>
										</div>
									</div>
									<div class="tab-pane" id="main_poll">
										<?php echo apms_widget('miso-poll', $wshid.'-poll', 'rows=3'); ?>
									</div>
									<div class="tab-pane" id="main_stats">
										<ul style="padding:0; margin:0; list-style:none;">
											<li><a href="<?php echo $at_href['connect'];?>">
												현재 접속자 <span class="pull-right"><?php echo number_format($stats['now_total']); ?><?php echo ($stats['now_mb'] > 0) ? '('.number_format($stats['now_mb']).')' : ''; ?> 명</span></a>
											</li>
											<li>오늘 방문자 <span class="pull-right"><?php echo number_format($stats['visit_today']); ?> 명</span></li>
											<li>어제 방문자 <span class="pull-right"><?php echo number_format($stats['visit_yesterday']); ?> 명</span></li>
											<li>최대 방문자 <span class="pull-right"><?php echo number_format($stats['visit_max']); ?> 명</span></li>
											<li>전체 방문자 <span class="pull-right"><?php echo number_format($stats['visit_total']); ?> 명</span></li>
											<li>전체 회원수	<span class="pull-right at-tip" data-original-title="<nobr>오늘 <?php echo $stats['join_today'];?> 명 / 어제 <?php echo $stats['join_yesterday'];?> 명</nobr>" data-toggle="tooltip" data-placement="top" data-html="true"><?php echo number_format($stats['join_total']); ?> 명</span>
											</li>
											<li>전체 게시물	<span class="pull-right at-tip" data-original-title="<nobr>글 <?php echo number_format($menu[0]['count_write']);?> 개/ 댓글 <?php echo number_format($menu[0]['count_comment']);?> 개</nobr>" data-toggle="tooltip" data-placement="top" data-html="true"><?php echo number_format($menu[0]['count_write'] + $menu[0]['count_comment']); ?> 개</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- //End -->

							<!-- 배너 Start //-->
							<div class="main-box main-p10">
								<?php echo apms_widget('miso-post-slider', $wshid.'-banner', 'rows=4 rdm=1 new=blue caption=small trans=1 bg=black scut=20'); ?>
							</div>
							<!-- //End -->

						</div>
						<div class="col-md-12 col-sm-6 main-col">

							<!-- 인기글, 검색어, 태그, 멤버랭크 Start //-->
							<div id="misc_tab" class="div-tab tabs miso-tab swipe-tab">
								<div class="main-tab bg-light">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#main_post_rank" data-toggle="tab">인기</a></li>
										<li><a href="#main_popular" data-toggle="tab">검색</a></li>
										<li><a href="#main_tag" data-toggle="tab">태그</a></li>
										<li><a href="#main_member" data-toggle="tab">멤버</a></li>
									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane active" id="main_post_rank">
										<?php echo apms_widget('miso-post-list', $wshid.'-post-rank', 'rows=10 rank=green new=red icon={아이콘:caret-right}'); ?>
									</div>
									<div class="tab-pane" id="main_popular">
										<?php echo apms_widget('miso-popular', $wshid.'-popular', 'rows=30'); ?>
									</div>
									<div class="tab-pane" id="main_tag">
										<?php echo apms_widget('miso-tag', $wshid.'-tag', 'rows=30'); ?>
										<div class="text-right main-more">
											<a href="<?php echo $at_href['tag'];?>">
												<span class="text-muted">+ 태그 더보기</span>
											</a>
										</div>
									</div>
									<div class="tab-pane" id="main_member">
										<?php echo apms_widget('miso-member', $wshid.'-member', 'rows=10 mode=point cnt=1 rank=blue'); ?>
										<div class="text-right main-more">
											<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
												<span class="text-muted">+ 멤버 더보기</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- //End -->


							<!-- 구글 등 광고 Start //-->
							<div class="main-box main-p10">
								<div style="width:100%; height:260px; line-height:260px; text-align:center; background:#fff;">
									반응형 구글광고 등
								</div>
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