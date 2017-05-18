<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 

// 위젯 설정값 아이디 접두어 지정
$wshid = 'mbt-sblog';

?>

<style>
	.side-wrap .side-box { margin-bottom:20px; }
	.side-wrap .side-more { margin:8px 0px 0px; }
	.side-wrap .tabs { margin-bottom:0px !important; }
	.side-wrap .tab-content { padding:10px 0px !important; background: none !important; }
	.side-wrap .side-row { margin-left:-10px; margin-right:-10px; }
	.side-wrap .side-col { padding-left:10px; padding-right:10px; }
</style>
<div class="side-wrap">

	<div class="row side-row">
		<div class="col-md-12 col-sm-6 side-col">

			<?php if(!G5_IS_MOBILE) { // PC에서만 출력 ?>
			<!-- 외부로그인 Start //-->
			<div class="side-box hidden-sm hidden-xs">
				<?php echo apms_widget('miso-outlogin'); // 외부로그인 ?>
			</div>
			<!-- //End -->
			<?php } ?>

			<h4 class="div-title-underline-thin border-color no-margin color">
				Category
			</h4>
			<div class="side-box no-border">
				<?php echo apms_widget('miso-category-all'); // 카테고리 체크 ?>
			</div>

			<!-- 구글 등 광고 Start //-->
			<div class="side-box">
				<div style="width:100%; height:260px; line-height:260px; text-align:center; background:#f5f5f5;">
					반응형 구글광고 등
				</div>
			</div>
			<!-- //End -->

		</div>
		<div class="col-md-12 col-sm-6 side-col">

			<!-- 새글, 새댓글 리스트 아이콘형 위젯 Start //-->
			<h4 class="div-title-underline-thin border-color no-margin color">
				New Posts
			</h4>
			<div id="newpost_tab" class="div-tab-bottom tabs swipe-tab">
				<ul class="nav nav-tabs" style="border-top:0;">
					<li class="active"><a href="#side_newpost" data-toggle="tab">새글</a></li>
					<li><a href="#side_newcomment" data-toggle="tab">새댓글</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="side_newpost">
						<?php echo apms_widget('miso-post-icon', $wshid.'-newpost', 'rows=6 new=red icon={아이콘:user}'); ?>
						<div class="text-right side-more">
							<a href="<?php echo $at_href['new'];?>?view=w">
								<span class="text-muted">+ 새글 더보기</span>
							</a>
						</div>
					</div>
					<div class="tab-pane" id="side_newcomment">
						<?php echo apms_widget('miso-post-icon', $wshid.'-newcomment', 'rows=6 new=red comment=1 icon={아이콘:comment}'); ?>
						<div class="text-right side-more">
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
					<li class="active"><a href="#side_post_rank" data-toggle="tab">인기</a></li>
					<li><a href="#side_tag" data-toggle="tab">태그</a></li>
					<li><a href="#side_poll" data-toggle="tab">설문</a></li>
					<li><a href="#side_popular" data-toggle="tab">검색</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="side_post_rank">
						<?php echo apms_widget('miso-post-list', $wshid.'-post-rank', 'rows=10 rank=green new=red icon={아이콘:caret-right}'); ?>
					</div>
					<div class="tab-pane" id="side_tag">
						<?php echo apms_widget('miso-tag', $wshid.'-tag', 'rows=30'); ?>
						<div class="text-right side-more">
							<a href="<?php echo $at_href['tag'];?>">
								<span class="text-muted">+ 태그 더보기</span>
							</a>
						</div>
					</div>
					<div class="tab-pane" id="side_poll">
						<?php echo apms_widget('miso-poll', $wshid.'-poll', 'rows=3'); ?>
					</div>
					<div class="tab-pane" id="side_popular">
						<?php echo apms_widget('miso-popular', $wshid.'-popular', 'rows=30'); ?>
					</div>
				</div>
			</div>
			<!-- //End -->

			<!-- 배너 Start //-->
			<div class="side-box">
				<?php echo apms_widget('miso-post-slider', $wshid.'-slider', 'shadow=2 in=1 caption=small bg=black trans=1 nav=1 scut=18 rows=4 rdm=1 new=red'); ?>
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