<?php
if (!defined('_GNUBOARD_')) exit; //개별 페이지 접근 불가

//자동 높이조절
apms_script('height');

//add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$widget_url.'/widget.css" media="screen">', 0);

// 기본값 정리
$wset['garo'] = (isset($wset['garo']) && $wset['garo'] > 0) ? $wset['garo'] : 1;
$wset['sero'] = (isset($wset['sero']) && $wset['sero'] > 0) ? $wset['sero'] : 4;
$gap = (!isset($wset['gap']) || $wset['gap'] == "") ? 10 : $wset['gap']; // 간격
$minus = ($gap > 0) ? '-'.$gap : 0; //

$widget_id = apms_id(); // Random ID

?>
<style>
	#<?php echo $widget_id;?> .item-wrap { margin-right:<?php echo $minus;?>px; margin-bottom:<?php echo $minus;?>px; }
	#<?php echo $widget_id;?> .item-row {  width:<?php echo apms_img_width($wset['garo']);?>%; }
	#<?php echo $widget_id;?> .item-list { margin-right:<?php echo $gap;?>px; margin-bottom:<?php echo $gap;?>px; }
	#<?php echo $widget_id;?> .item-img {  width:<?php echo (isset($wset['img_w']) && $wset['img_w'] > 0) ? $wset['img_w'] : 120;?>px; }
	<?php if(_RESPONSIVE_) { // 반응형일 때만 작동 ?>
		<?php if(isset($wset['lg']) && $wset['lg'] > 0) { ?>
		@media (max-width: <?php echo (isset($wset['lgbp']) && $wset['lgbp'] > 0) ? $wset['lgbp'] : 1199;?>px) { 
			.responsive #<?php echo $widget_id;?> .item-row { width:<?php echo apms_img_width($wset['lg']);?>%; } 
		}
		<?php } ?>
		<?php if(isset($wset['md']) && $wset['md'] > 0) { ?>
		@media (max-width: <?php echo (isset($wset['mdbp']) && $wset['mdbp'] > 0) ? $wset['mdbp'] : 991;?>px) { 
			.responsive #<?php echo $widget_id;?> .item-row { width:<?php echo apms_img_width($wset['md']);?>%; } 
		}
		<?php } ?>
		<?php if(isset($wset['sm']) && $wset['sm'] > 0) { ?>
		@media (max-width: <?php echo (isset($wset['smbp']) && $wset['smbp'] > 0) ? $wset['smbp'] : 767;?>px) { 
			.responsive #<?php echo $widget_id;?> .item-row { width:<?php echo apms_img_width($wset['sm']);?>%; } 
		}
		<?php } ?>
		<?php if(isset($wset['xs']) && $wset['xs'] > 0) { ?>
		@media (max-width: <?php echo (isset($wset['xsbp']) && $wset['xsbp'] > 0) ? $wset['xsbp'] : 480;?>px) { 
			.responsive #<?php echo $widget_id;?> .item-row { width:<?php echo apms_img_width($wset['xs']);?>%; } 
		}
		<?php } ?>
	<?php } ?>
</style>
<div id="<?php echo $widget_id;?>" class="widget-miso-post-webzine">
	<div class="item-wrap">
		<?php 
			if($wset['cache'] > 0) { // 캐시적용시
				echo apms_widget_cache($widget_path.'/widget.rows.php', $wname, $wid, $wset);
			} else {
				include($widget_path.'/widget.rows.php');
			}
		?>
		<div class="clearfix"></div>
	</div>
</div>
<?php if($setup_href) { ?>
	<div class="btn-wset text-center p10">
		<a href="<?php echo $setup_href;?>" class="win_memo">
			<span class="text-muted font-12"><i class="fa fa-cog"></i> 위젯설정</span>
		</a>
	</div>
<?php } ?>
<script>
$(function () {
	$('#<?php echo $widget_id;?> .autoHeight').matchHeight();
});
</script>