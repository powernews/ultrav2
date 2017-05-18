<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 

// 위젯 설정값 아이디 접두어 지정
$wid = 'mbst-sb';

?>
<style>
	.w-side .div-title-underbar { margin-bottom:15px; }
	.w-side .div-title-underbar span { padding-bottom:4px; }
	.w-side .w-more { font-weight:normal; color:#888; letter-spacing:-1px; font-size:11px; }
	.w-side .w-img img { display:block; max-width:100%; /* 배너 이미지 */ }
	.w-side .w-box { margin-bottom:30px; }
	.w-side .w-p10 { padding:10px; }
	.w-side .tabs.div-tab ul.nav-tabs li.active a { font-weight:bold; color:#333 !important; }
	.w-side .main-tab .tab-more { margin-top:-28px; margin-right:10px; font-size:11px; letter-spacing:-1px; color:#888 !important; }
	.w-side .tabs { margin-bottom:30px !important; }
	.w-side .tab-content { border:0px !important; padding:15px 0px 0px !important; }
	.w-side .call-box { background:#fafafa; padding:10px; border-radius:10px; margin-top:10px; }
</style>
<div class="w-side">

	<!-- Start //-->
	<?php
		//카테고리
		$side_category = apms_widget('miso-category');
		if($side_category) {
	?>
		<div class="w-box">
			<?php echo $side_category; // 카테고리 ?>
		</div>
	<?php } ?>
	<!-- //End -->

	<!-- Start //-->
	<div class="w-box">
		<?php echo apms_widget('miso-shop-icon'); ?>
	</div>
	<!--// End -->

	<!-- Start
	<div class="div-title-underbar">
		<span class="div-title-underbar-bold border-color">
			<b>최근후기</b>
		</span>
	</div>
	<div class="w-box">
		<?php echo apms_widget('miso-shop-post', $wid.'-sm1', 'mode=use icon={아이콘:star} star=red new=blue'); ?>
	</div>
	 End -->

	<!-- Start
	<div class="div-title-underbar">
		<span class="div-title-underbar-bold border-color">
			<b>최근문의</b>
		</span>
	</div>
	<div class="w-box">
		<?php echo apms_widget('miso-shop-post', $wid.'-sm2', 'mode=qa icon={아이콘:user} new=green'); ?>
	</div>
	 End -->

	<!-- Start
	<div class="div-title-underbar">
		<span class="div-title-underbar-bold border-color">
			<b>최근댓글</b>
		</span>
	</div>
	<div class="w-box">
		<?php echo apms_widget('miso-shop-post', $wid.'-sm3', 'mode=comment icon={아이콘:comment}'); ?>
	</div>
	 End -->

	<!-- Start //-->
	<div class="div-title-underbar">
		<span class="div-title-underbar-bold border-color">
			<b>대표상담전화</b>
		</span>
	</div>
	<div class="w-box">
		<p class="en orangered" style="font-size:30px;">
			<b>070)7710-7553</b>
		</p>

		<div class="clearfix"></div>

		<div class="call-box">
			<b>ㆍ상담시간 : AM 10:00 ~ PM 6:00</b>
			<br>
			ㆍ토/일/공휴일은 휴무입니다.
			<br>
			ㆍ부재시 <a href="<?php echo $at_href['secret'];?>">문의 게시판</a>을 이용해 주세요.
			<br>
			<b>ㆍ주문마감시간</b>
			<br>
			<div class="pull-left en red" style="font-size:30px; letter-spacing:-1px; padding-top:8px;">
				<i class="fa fa-clock-o"></i>
				<b>3:00</b>
				<span class="font-14">PM</span>
			</div>
			<div class="pull-left" style="padding-left:20px;">
				평일오후 3시까지
				<br>
				주문시 당일배송
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--// End -->

	<!-- SNS아이콘 시작 -->
	<div class="w-box text-center">
		<?php echo $sns_share_icon; // SNS 공유아이콘 ?>
	</div>
	<!-- SNS아이콘 끝 -->

</div>
