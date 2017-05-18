<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 데모용
$iqstr = '';
if($is_demo) {
	$iqstr .= '&amp;mon='.$main.'&amp;pv='.$pv.'&amp;pvm='.$pvm;
}

// 모드값
$m = (isset($m) && $m) ? $m : '';

// 위젯 설정값 아이디 접두어 지정
$wshid = 'mbst-msga';

?>

<style>
	.main-wrap { padding:10px; }
	.main-btn { overflow:hidden; }
	.main-btn ul { padding:0px; margin:0px; list-style:none; margin-right:-2px; }
	.main-btn li { float:left; text-align:center; font-size:18px; padding:0px; margin:0px; width:16.666%; }
	.main-btn li span { display:block; padding:20px 0px; color:#fff; }
	.main-btn li:hover span,
	.main-btn li.on span { background:none !important; color:rgb(233, 27, 35) !important; }
	@media all and (max-width: 767px) { 
		.responsive .main-btn li { width:33.333%; } 
	}
</style>

<!-- 타이틀 시작 -->
<?php echo apms_widget('miso-slider', $wshid.'-title-slider', 'slider_h=40 effect=fade nav=1 rdm=1', 'slider_h=56'); ?>
<!-- 타이틀 끝 -->

<!-- 상단버튼 시작 -->
<div id="itop" class="main-btn en">
	<ul>
		<li<?php echo (!$m || $m == "1") ? ' class="on"' : '';?>>
			<a href="<?php echo G5_SHOP_URL;?>/?m=1<?php echo $iqstr;?>#itop"><span class="bg-color"><i class="fa fa-bars"></i> 전체</span></a>
		</li>
		<li<?php echo ($m == "2") ? ' class="on"' : '';?>>
			<a href="<?php echo G5_SHOP_URL;?>/?m=2<?php echo $iqstr;?>#itop"><span class="bg-color"><i class="fa fa-bolt"></i> 히트</span></a>
		</li>
		<li<?php echo ($m == "3") ? ' class="on"' : '';?>>
			<a href="<?php echo G5_SHOP_URL;?>/?m=3<?php echo $iqstr;?>#itop"><span class="bg-color"><i class="fa fa-thumbs-up"></i> 추천</span></a>
		</li>
		<li<?php echo ($m == "4") ? ' class="on"' : '';?>>
			<a href="<?php echo G5_SHOP_URL;?>/?m=4<?php echo $iqstr;?>#itop"><span class="bg-color"><i class="fa fa-paper-plane-o"></i> 최신</span></a>
		</li>
		<li<?php echo ($m == "5") ? ' class="on"' : '';?>>
			<a href="<?php echo G5_SHOP_URL;?>/?m=5<?php echo $iqstr;?>#itop"><span class="bg-color"><i class="fa fa-commenting-o"></i> 인기</span></a>
		</li>
		<li<?php echo ($m == "6") ? ' class="on"' : '';?>>
			<a href="<?php echo G5_SHOP_URL;?>/?m=6<?php echo $iqstr;?>#itop"><span class="bg-color"><i class="fa fa-shopping-cart"></i> 할인</span></a>
		</li>
	</ul>
	<div class="clearfix"></div>
</div>
<!-- 상단버튼 끝 -->

<div class="main-wrap">
	<?php if($m == "2") { //히트 ?>
		<?php echo apms_widget('miso-shop-item-gallery', $wshid.'-gallery2', 'type=1 infi=1 garo=6 sero=5 lg=4 md=3 sm=2 xs=1 hit=1 cmt=1 sns=1 thumb_w=400 thumb_h=600'); ?>
	
	<?php } else if($m == "3") { //추천 ?>
		<?php echo apms_widget('miso-shop-item-gallery', $wshid.'-gallery3', 'type=2 infi=1 garo=6 sero=5 lg=4 md=3 sm=2 xs=1 hit=1 cmt=1 sns=1 thumb_w=400 thumb_h=600'); ?>

	<?php } else if($m == "4") { //신규 ?>
		<?php echo apms_widget('miso-shop-item-gallery', $wshid.'-gallery4', 'type=3 infi=1 garo=6 sero=5 lg=4 md=3 sm=2 xs=1 hit=1 cmt=1 sns=1 thumb_w=400 thumb_h=600'); ?>

	<?php } else if($m == "5") { //인기 ?>
		<?php echo apms_widget('miso-shop-item-gallery', $wshid.'-gallery5', 'type=4 infi=1 garo=6 sero=5 lg=4 md=3 sm=2 xs=1 hit=1 cmt=1 sns=1 thumb_w=400 thumb_h=600'); ?>

	<?php } else if($m == "6") { //할인 ?>
		<?php echo apms_widget('miso-shop-item-gallery', $wshid.'-gallery6', 'type=5 infi=1 garo=6 sero=5 lg=4 md=3 sm=2 xs=1 hit=1 cmt=1 sns=1 thumb_w=400 thumb_h=600'); ?>

	<?php } else { //전체 ?>
		<?php echo apms_widget('miso-shop-item-gallery', $wshid.'-gallery1', 'infi=1 garo=6 sero=5 lg=4 md=3 sm=2 xs=1 hit=1 cmt=1 sns=1 thumb_w=400 thumb_h=600'); ?>
	<?php } ?>
</div>

<!-- 하단버튼 시작 -->
<div class="main-btn en">
	<ul>
		<li<?php echo (!$m || $m == "1") ? ' class="on"' : '';?>>
			<a href="<?php echo G5_SHOP_URL;?>/?m=1<?php echo $iqstr;?>#itop"><span class="bg-color"><i class="fa fa-bars"></i> 전체</span></a>
		</li>
		<li<?php echo ($m == "2") ? ' class="on"' : '';?>>
			<a href="<?php echo G5_SHOP_URL;?>/?m=2<?php echo $iqstr;?>#itop"><span class="bg-color"><i class="fa fa-bolt"></i> 히트</span></a>
		</li>
		<li<?php echo ($m == "3") ? ' class="on"' : '';?>>
			<a href="<?php echo G5_SHOP_URL;?>/?m=3<?php echo $iqstr;?>#itop"><span class="bg-color"><i class="fa fa-thumbs-up"></i> 추천</span></a>
		</li>
		<li<?php echo ($m == "4") ? ' class="on"' : '';?>>
			<a href="<?php echo G5_SHOP_URL;?>/?m=4<?php echo $iqstr;?>#itop"><span class="bg-color"><i class="fa fa-paper-plane-o"></i> 최신</span></a>
		</li>
		<li<?php echo ($m == "5") ? ' class="on"' : '';?>>
			<a href="<?php echo G5_SHOP_URL;?>/?m=5<?php echo $iqstr;?>#itop"><span class="bg-color"><i class="fa fa-commenting-o"></i> 인기</span></a>
		</li>
		<li<?php echo ($m == "6") ? ' class="on"' : '';?>>
			<a href="<?php echo G5_SHOP_URL;?>/?m=6<?php echo $iqstr;?>#itop"><span class="bg-color"><i class="fa fa-shopping-cart"></i> 할인</span></a>
		</li>
	</ul>
	<div class="clearfix"></div>
</div>
<!-- 하단버튼 끝 -->
