<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 

// 위젯 설정값 아이디 접두어 지정
$wshid = 'mbt-sshop';

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
				<?php echo apms_widget('miso-post-list', $wshid.'-side-notice', 'rows=5 new=red icon={아이콘:bell}'); ?>
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

			<!-- 상품박스 Start //-->
			<h4 class="div-title-underline-thin border-color no-margin color">
				Items
			</h4>
			<div id="sideItems_tab" class="div-tab-bottom tabs swipe-tab">
				<ul class="nav nav-tabs" style="border-top:0;">
					<li class="active"><a href="#side_items1" data-toggle="tab">히트</a></li>
					<li><a href="#side_items2" data-toggle="tab">추천</a></li>
					<li><a href="#side_items3" data-toggle="tab">최신</a></li>
					<li><a href="#side_items4" data-toggle="tab">인기</a></li>
					<li><a href="#side_items5" data-toggle="tab">할인</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="side_items1">
						<?php echo apms_widget('miso-shop-item-icon', $wshid.'-sideItems1', 'rows=9 garo=3 type=1'); ?>
						<div class="text-right side-more">
							<a href="<?php echo $at_href['itype'];?>?type=1">
								<span class="text-muted">+ 히트상품 더보기</span>
							</a>
						</div>
					</div>
					<div class="tab-pane" id="side_items2">
						<?php echo apms_widget('miso-shop-item-icon', $wshid.'-sideItems2', 'rows=9 garo=3 type=2'); ?>
						<div class="text-right side-more">
							<a href="<?php echo $at_href['itype'];?>?type=2">
								<span class="text-muted">+ 추천상품 더보기</span>
							</a>
						</div>
					</div>
					<div class="tab-pane" id="side_items3">
						<?php echo apms_widget('miso-shop-item-icon', $wshid.'-sideItems3', 'rows=9 garo=3 type=3'); ?>
						<div class="text-right side-more">
							<a href="<?php echo $at_href['itype'];?>?type=3">
								<span class="text-muted">+ 최신상품 더보기</span>
							</a>
						</div>
					</div>
					<div class="tab-pane" id="side_items4">
						<?php echo apms_widget('miso-shop-item-icon', $wshid.'-sideItems4', 'rows=9 garo=3 type=4'); ?>
						<div class="text-right side-more">
							<a href="<?php echo $at_href['itype'];?>?type=4">
								<span class="text-muted">+ 인기상품 더보기</span>
							</a>
						</div>
					</div>
					<div class="tab-pane" id="side_items5">
						<?php echo apms_widget('miso-shop-item-icon', $wshid.'-sideItems5', 'rows=9 garo=3 type=5'); ?>
						<div class="text-right side-more">
							<a href="<?php echo $at_href['itype'];?>?type=5">
								<span class="text-muted">+ 할인상품 더보기</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- //End -->

			<div class="h20"></div>

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

