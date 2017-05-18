<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 위젯 대표아이디 설정
$wid = 'mbst-msb';

?>
<style>
	@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic');
	.w-main .div-title-underbar { margin-bottom:15px; }
	.w-main .div-title-underbar span { padding-bottom:4px; }
	.w-main .div-title-underbar span b { font-weight:500; }
	.w-main .w-img img { display:block; max-width:100%; /* 배너 이미지 */ }
	.w-main .w-box { margin-bottom:30px; }
	.w-main .w-more { font-size:15px; margin-top:8px; }
	.w-main .w-p10 { padding:10px; }
	.w-main .w-p15 { padding:15px; }
	.w-main .w-row { margin-left:-15px; margin-right:-15px; }
	.w-main .w-col { padding-left:15px; padding-right:15px; }
	.w-main h2 { font-family: "Source Sans Pro", sans-serif; font-size: 50px; line-height: 120%; font-style: normal; font-weight: 100; margin:40px 0px 30px; text-align:center; }
	.w-main h3 { font-family: "Source Sans Pro", sans-serif; display:block; margin-bottom:15px; font-weight:100; line-height:120%; }
	.w-main h2 a,
	.w-main h3 a { font-family: "Source Sans Pro", }
	.w-main .call-box { background:#fafafa; padding:15px; border-radius:10px; }
	@media (max-width:480px) { 
		.responsive .w-main h2 { font-size:36px; }
	}
</style>

<?php @include_once(THEMA_PATH.'/wing.php'); // Wing ?>

<div class="at-container w-main">

	<div class="h20"></div>

	<div class="is-round">
		<?php echo apms_widget('miso-title', $wid.'-title', 'height=380px shadow=4 radius=15', 'auto=0'); //타이틀 ?>
	</div>

	<div class="h20"></div>

	<div class="row w-row">
	
	<!-- 메인배너 -->	
		<div class="col-md-12 w-col">
<center>
				<table>
					<tr>
						<td><a href="http://www.ultravcosmetic.com/comm/shop/item.php?it_id=1491556860"><img src="../main/images/1.fw.png" width="100%"></a></td>
						<td width="10px"></td>
						<td><a href="/comm/shop/item.php?it_id=1491556400&ca_id=10&page=1"><img src="../main/images/2.fw.png" width="100%"></a></td>
					</tr>
				</table>
</center>

		</div>
		<!-- 메인배너 긑-->

		<!-- 공지사항
		<div class="col-md-12 w-col">


			<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=11">
				<h3 class="div-title-underbar">
					<span class="pull-right w-more">
						+ more
					</span>
					<span class="div-title-underbar-bold border-color">
						Notice
					</span>
				</h3>
			</a>
			<div class="w-box">
				<?php echo apms_widget('miso-post-list', $wid.'-list1', 'rows=10 date=1 icon={아이콘:bell}'); ?>
			</div>

		</div>
	End -->

	</div>

	<!-- 히트 & 베스트 시작 -->
	<h2>
		<a href="<?php echo $at_href['itype'];?>?type=1">
			PRODUCT
		</a>
	</h2>
	<div class="w-box">
		<?php echo apms_widget('miso-shop-item', $wid.'-wm4', 'more=1 rows=12 item=4 md=3 sm=2 xs=2', 'auto=0'); ?>
	</div>
	<!-- 히트 & 베스트 끝 -->

	<!-- 추천 & 신상 시작
	<h2>
		<a href="<?php echo $at_href['itype'];?>?type=2">
			Cool & New
		</a>
	</h2>
	<div class="w-box">
		<?php echo apms_widget('miso-shop-item-slider', $wid.'-wm2', 'type2=1 type3=1 auto=0 nav=1 rdm=1 item=4 md=3 sm=2 xs=2', 'auto=0'); ?>
	</div>
	추천 & 신상 끝 -->

	<!-- 전체상품 시작
	<div class="w-box">
		<?php echo apms_widget('miso-shop-item', $wid.'-wm4', 'more=1 rows=12 item=4 md=3 sm=2 xs=2', 'auto=0'); ?>
	</div>
	 -->

	<!--
	<h3 class="div-title-underbar">
		<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=04">
			<span class="pull-right w-more">+more</span>
			<span class="div-title-underbar-bold border-color">
				기사/매거진
			</span>
		</a>
	</h3>
	-->
	<div class="w-box">
		<?php echo apms_widget('miso-post-gallery', $wid.'-gallery1', 'center=1'); ?>
	</div>



</div>
