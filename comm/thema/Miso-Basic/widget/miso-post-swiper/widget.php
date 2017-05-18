<?php
if (!defined('_GNUBOARD_')) exit; //개별 페이지 접근 불가

// Swiper 불러오기
apms_script('swiper'); 

//add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
//add_stylesheet('<link rel="stylesheet" href="'.$widget_url.'/widget.css" media="screen">', 0);

//기본값
$wset['item'] = (isset($wset['item']) && $wset['item'] > 0) ? $wset['item'] : 3;
$wset['nav'] = (isset($wset['nav']) && $wset['nav']) ? true : false;
$wset['scroll'] = (isset($wset['scroll']) && $wset['scroll']) ? true : false;
$wset['arrow'] = (isset($wset['arrow']) && $wset['arrow']) ? false : true;

$widget_id = apms_id(); // Random ID


?>
<style>
	#<?php echo $widget_id;?> .swiper-slide {  width:<?php echo apms_img_width($wset['item']);?>%; }
	<?php if(_RESPONSIVE_) { // 반응형일 때만 작동 ?>
		<?php if(isset($wset['lg']) && $wset['lg'] > 0) { ?>
		@media (max-width: <?php echo (isset($wset['lgbp']) && $wset['lgbp'] > 0) ? $wset['lgbp'] : 1199;?>px) { 
			.responsive #<?php echo $widget_id;?> .swiper-slide { width:<?php echo apms_img_width($wset['lg']);?>%; } 
		}
		<?php } ?>
		<?php if(isset($wset['md']) && $wset['md'] > 0) { ?>
		@media (max-width: <?php echo (isset($wset['mdbp']) && $wset['mdbp'] > 0) ? $wset['mdbp'] : 991;?>px) { 
			.responsive #<?php echo $widget_id;?> .swiper-slide { width:<?php echo apms_img_width($wset['md']);?>%; } 
		}
		<?php } ?>
		<?php if(isset($wset['sm']) && $wset['sm'] > 0) { ?>
		@media (max-width: <?php echo (isset($wset['smbp']) && $wset['smbp'] > 0) ? $wset['smbp'] : 767;?>px) { 
			.responsive #<?php echo $widget_id;?> .swiper-slide { width:<?php echo apms_img_width($wset['sm']);?>%; } 
		}
		<?php } ?>
		<?php if(isset($wset['xs']) && $wset['xs'] > 0) { ?>
		@media (max-width: <?php echo (isset($wset['xsbp']) && $wset['xsbp'] > 0) ? $wset['xsbp'] : 480;?>px) { 
			.responsive #<?php echo $widget_id;?> .swiper-slide { width:<?php echo apms_img_width($wset['xs']);?>%; } 
		}
		<?php } ?>
	<?php } ?>
</style>
<div id="<?php echo $widget_id;?>" class="swiper-container">
	<div class="swiper-wrapper">
	<?php 
		if($wset['cache'] > 0) { // 캐시적용시
			echo apms_widget_cache($widget_path.'/widget.rows.php', $wname, $wid, $wset);
		} else {
			include($widget_path.'/widget.rows.php');
		}
	?>
	</div>
	<?php if($wset['nav']) { ?>
	<div class="swiper-pagination"></div>
	<?php } ?>
	<?php if($wset['scroll']) { ?>
	<div class="swiper-scrollbar"></div>
	<?php } ?>
	<?php if($wset['arrow']) { ?>
	<div class="swiper-button-next"></div>
	<div class="swiper-button-prev"></div>
	<?php } ?>
</div>
<?php if($setup_href) { ?>
	<div class="btn-wset text-center p10">
		<a href="<?php echo $setup_href;?>" class="win_memo">
			<span class="text-muted font-12"><i class="fa fa-cog"></i> 위젯설정</span>
		</a>
	</div>
<?php } ?>

<script>
$(document).ready(function () {
	var <?php echo $widget_id;?> = new Swiper('#<?php echo $widget_id;?>.swiper-container', {
		<?php if($wset['nav']) { ?>
		pagination: '#<?php echo $widget_id;?> .swiper-pagination',
        paginationClickable: true,
		<?php } ?>
		<?php if($wset['scroll']) { ?>
		scrollbar: '#<?php echo $widget_id;?> .swiper-scrollbar',
		<?php } ?>
		<?php if($wset['arrow']) { ?>
		nextButton: '#<?php echo $widget_id;?> .swiper-button-next',
        prevButton: '#<?php echo $widget_id;?> .swiper-button-prev',
		<?php } ?>
		<?php if(isset($wset['gap']) && $wset['gap'] > 0) { ?>
		spaceBetween: <?php echo $wset['gap'];?>,
		<?php } ?>
		<?php if(isset($wset['speed']) && $wset['speed'] > 0) { ?>
		speed: <?php echo $wset['speed'];?>,
		<?php } ?>
		<?php if(isset($wset['auto']) && $wset['auto'] > 0) { ?>
		autoplay: <?php echo $wset['auto'];?>,
        autoplayDisableOnInteraction: false
		<?php } ?>
		slidesPerView: <?php echo (IS_IE < 10) ? $wset['item'] : "'auto'";?>
	});
});
</script>