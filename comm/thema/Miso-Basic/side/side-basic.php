<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 

// 위젯 설정값 아이디 접두어 지정
$wshid = 'mbt-sbasic';

?>
<style>
	.side-wrap { }
	.side-wrap .side-box { border:1px solid #ddd; margin-bottom:16px; background:#fff; }
	.side-wrap .side-p10 { padding:10px; }
	.side-wrap .side-more { margin:8px 0px 0px; font-size:12px; }
	.side-wrap .side-tab { border-right:1px solid #ddd; border-top:1px solid #ddd; }
	.side-wrap .side-tab .nav{ margin-top:-1px !important; }
	.side-wrap .tabs { margin-bottom:16px !important; }
	.side-wrap .tab-content { padding:10px !important; }
	.side-wrap .side-row { margin-left:-8px; margin-right:-8px; }
	.side-wrap .side-col { padding-left:8px; padding-right:8px; }
</style>
<div class="side-wrap">
	<div class="row side-row">
		<div class="col-md-12 col-sm-6 side-col">

			<?php if(!G5_IS_MOBILE) { // PC에서만 출력 ?>
			<!-- 외부로그인 Start //-->
			<div class="side-box side-p10 hidden-sm hidden-xs">
				<?php echo apms_widget('miso-outlogin'); // 외부로그인 ?>
			</div>
			<!-- //End -->
			<?php } ?>

			<!-- 서브메뉴 Start //-->
			<div class="side-box no-border">
				<?php echo apms_widget('miso-category'); // 카테고리 ?>
			</div>
			<!-- //End -->

			<!-- 이벤트, 배너 등 슬라이더 Start //-->
			<div class="side-box side-p10">
				<?php echo apms_widget('miso-post-slider', $wshid.'-slider', 'shadow=2 in=1 caption=small bg=black trans=1 nav=1 scut=18 rows=4 rdm=1 new=red'); ?>
			</div>
			<!-- //End -->
		</div>
		<div class="col-md-12 col-sm-6 side-col">

			<!-- 새글, 새댓글 리스트 아이콘형 위젯 Start //-->
			<div id="side_newpost_tab" class="div-tab tabs miso-tab swipe-tab">
				<div class="side-tab bg-light">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#side_newpost" data-toggle="tab">새글</a></li>
						<li><a href="#side_newcomment" data-toggle="tab">새댓글</a></li>
					</ul>
				</div>
				<div class="tab-content">
					<div class="tab-pane active" id="side_newpost">
						<?php echo apms_widget('miso-post-icon', $wshid.'-newpost', 'new=red icon={아이콘:user}'); ?>
						<div class="text-right side-more">
							<a href="<?php echo $at_href['new'];?>?view=w">
								<span class="text-muted">+ 새글 더보기</span>
							</a>
						</div>
					</div>
					<div class="tab-pane" id="side_newcomment">
						<?php echo apms_widget('miso-post-icon', $wshid.'-newcomment', 'new=red comment=1 icon={아이콘:comment}'); ?>
						<div class="text-right side-more">
							<a href="<?php echo $at_href['new'];?>?view=c">
								<span class="text-muted">+ 새댓글 더보기</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- //End -->

			<!-- 구글 등 광고 Start //-->
			<div class="side-box side-p10">
				<div style="width:100%; height:260px; line-height:260px; text-align:center; background:#f5f5f5;">
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
