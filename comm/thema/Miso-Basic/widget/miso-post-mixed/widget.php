<?php
if (!defined('_GNUBOARD_')) exit; //개별 페이지 접근 불가

//add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$widget_url.'/widget.css" media="screen">', 0);

$gap = (!isset($wset['gap']) || $wset['gap'] == "") ? 10 : $wset['gap']; // 간격
$minus = ($gap > 0) ? '-'.$gap : 0; //
$is_dadan = (isset($wset['dadan']) && $wset['dadan']) ? true : false;

if($is_dadan) {
	$widget_id = apms_id(); // Random ID
?>
	<style>
		#<?php echo $widget_id;?> .item-wrap { margin-right:<?php echo $minus;?>px; }
		#<?php echo $widget_id;?> .item-list { margin-right:<?php echo $gap;?>px; }
	</style>
	<div id="<?php echo $widget_id;?>" class="widget-miso-post-mixed is-dadan">
<?php } else { ?>
	<div class="widget-miso-post-mixed">
<?php } ?>
	<?php 
		if($wset['cache'] > 0) { // 캐시적용시
			echo apms_widget_cache($widget_path.'/widget.rows.php', $wname, $wid, $wset);
		} else {
			include($widget_path.'/widget.rows.php');
		}
	?>
</div>
<?php if($setup_href) { ?>
	<div class="btn-wset text-center p10">
		<a href="<?php echo $setup_href;?>" class="win_memo">
			<span class="text-muted"><i class="fa fa-cog"></i> 위젯설정</span>
		</a>
	</div>
<?php } ?>
