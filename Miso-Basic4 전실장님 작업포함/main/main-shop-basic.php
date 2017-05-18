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


	<div class="row w-row">
		
				<div class="col-md-12 w-col">
			<div class="w-box"><?php include "../main/main01.php"; ?></div>
			<div class="w-box"><?php include "../main/main02.php"; ?></div>
			<div class="w-box"><?php include "../main/main03.php"; ?></div>
			<div class="w-box"><img src="../main/instagram.jpg" style="border: 0"></div>
			
			<!--// End -->

		</div>
	</div>

	<!-- 히트 & 베스트 시작 -->
	<h2>
		<a href="<?php echo $at_href['itype'];?>?type=1">
			BEST PRODUCT
		</a>
	</h2>
	<div class="w-box">
		<?php echo apms_widget('miso-shop-item', $wid.'-wm4', 'more=1 rows=12 item=4 md=3 sm=2 xs=2', 'auto=0'); ?>
	</div>
	<!-- 히트 & 베스트 끝 -->

	<!-- SNS아이콘 시작 -->
	<div class="w-box text-center">
		<?php echo $sns_share_icon; // SNS 공유아이콘 ?>
	</div>
	<!-- SNS아이콘 끝 -->

</div>
