<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(G5_IS_MOBILE) return; // 모바일에서는 출력하지 않습니다.

?>


<!---- 카운트다운 타이머 ------------------------>

<script src="//cdn.rawgit.com/hilios/jQuery.countdown/2.2.0/dist/jquery.countdown.min.js"></script>
<style>
	.APPdban_1 {
		background: url(../../../SkinImg/b5718909a042e512a3f16de96f9bb0de.jpg);
		width: 100px;
		height: 75px;
	}
	.timelayout{position:absolute;top:112px;font:14px Verdana,Dotum,AppleGothic,'Nanum Gothic','Nixie One','FontAwesome',sans-serif;letter-spacing:-1px;font-weight:bold; color: #FDF9C9;text-align:center;width:100%;}
	.APPdban #APPdban_glowingLayout { position: relative; }
	#quick, #quick_fixed{
		position: absolute;
		top: 0px;
		left:1290px;
		width: 100px;
	}
</style>

<div id="quick_fixed2" style="POSITION: fixed;MARGIN-LEFT: -700px;TOP: 270px;LEFT: 50%;">
	<div class="xans-element- xans-dbanner xans-dbanner-display ">

		<div class="xans-element- xans-dbanner xans-dbanner-display ">
			<div class="APPdban APPdban_1"><div id="APPdban_glowingLayout" class="is-countdown"><div class="timelayout" id="time"><span id="clock"></span></div></div></div>
		</div>
		<!-- 카카오톡 플친 -->


		<div>
			<a href="#"><img src="http://www.ultravcosmetic.com/comm/thema/Miso-Basic4/assets/img/banner-sero.jpg" border="0"></a>
		</div>
		<!-- 구매금액사은품 -->

	</div>
</div>
<!-- //우측메뉴 -->




<!-- //우측메뉴 -->

<?
date_default_timezone_set('Asia/Seoul');
//echo date("Y/m/d H:i:s");

if(date('H:i:s') < '09:00:00' or date('H:i:s') > '16:00:00')  {
	$str_clock = "'택배시간 아님'";
} else {
	$str_clock = "event.strftime(' %H: %M: %S')";
}
?>
<script type="text/javascript">
	$('#clock').countdown('<?=date("Y/m/d")?> 16:00:00', function(event) {
		$(this).html(<?=$str_clock?>);
	});
</script>
<!---- 카운트다운 타이머 ------------------------>

