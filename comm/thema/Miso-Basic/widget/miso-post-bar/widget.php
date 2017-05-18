<?php
if (!defined('_GNUBOARD_')) exit; //개별 페이지 접근 불가

// Flex Slider 불러오기
apms_script('flexslider'); 

//add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$widget_url.'/widget.css" media="screen">', 0);

$wset['effect'] = (isset($wset['effect']) && $wset['effect']) ? $wset['effect'] : 'slide';
$wset['bs'] = (isset($wset['bs']) && $wset['bs']) ? $wset['bs'] : '';
$wset['ba'] = (isset($wset['ba']) && $wset['ba']) ? $wset['ba'] : '';
$wset['bg'] = (isset($wset['bg']) && $wset['bg']) ? $wset['bg'] : 'black';
$btn = ($wset['bg'] == 'light-border') ? 'btn-black' : 'btn-trans'; // Button Type
$wset['barrow'] = (isset($wset['barrow']) && $wset['barrow']) ? $wset['bshadow'] : ''; // 하단 꼭지시 하단 그림자 출력안함

// 랜덤아이디
$widget_id = apms_id();
?>

<div class="widget-miso-post-bar bg-<?php echo $wset['bg'];?>">
	<div class="<?php echo (isset($wset['noc']) && $wset['noc']) ? 'no-' : '';?>container">
		<div class="row">
			<div class="col-sm-9">
				<div class="img-wrap" style="padding-bottom:32px; line-height:32px;">
					<div class="img-item">
						<div id="<?php echo $widget_id;?>" class="flexslider">
							<ul class="slides en">
							<?php 
								if($wset['cache'] > 0) { // 캐시적용시
									echo apms_widget_cache($widget_path.'/widget.rows.php', $wname, $wid, $wset);
								} else {
									include($widget_path.'/widget.rows.php');
								}
							?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<a class="btn <?php echo $btn;?> pull-right" href="<?php echo (isset($wset['href']) && $wset['href']) ? $wset['href'] : G5_URL;?>"<?php echo (isset($wset['target']) && $wset['target']) ? ' target="'.$wset['target'].'"' : '';?>>
					<?php echo (isset($wset['btn']) && $wset['btn']) ? apms_fa($wset['btn']) : '<i class="fa fa-leaf"></i> MISO THEMA'; //버튼 ?>
				</a>
			</div>
		</div>
	</div>
	<?php if(!$wset['bs'] && $wset['shadow']) { // 그림자 ?>
		<div class="bar-shadow">
			<?php echo apms_shadow($wset['shadow']);?>
		</div>
	<?php } ?>
</div>
<?php if($wset['bs'] && $wset['shadow']) { // 그림자 ?>
	<?php echo apms_shadow($wset['shadow']);?>
<?php } ?>
<?php if($wset['ba']) { // 하단 꼭지 ?>
	<div class="div-sep-arrow-bottom">
		<div class="sep-arrow border-<?php echo $wset['bg'];?>"></div>
	</div>
<?php } ?>
<?php if($setup_href) { ?>
	<div class="btn-wset text-center p10">
		<?php if($wset['ba']) { ?>
			<div class="h30"></div>
		<?php } ?>
		<a href="<?php echo $setup_href;?>" class="win_memo">
			<span class="text-muted"><i class="fa fa-cog"></i> 위젯설정</span>
		</a>
	</div>
<?php } ?>
<script>
$(document).ready(function() {
	$('#<?php echo $widget_id;?>').flexslider({
		controlNav: false,
		directionNav: false,
		<?php if(isset($wset['rdm']) && $wset['rdm']) { ?>
		randomize: true,
		<?php } ?>
		<?php if(isset($wset['speed']) && $wset['speed'] > 0) { ?>
	    slideshowSpeed: <?php echo $wset['speed'];?>,
		<?php } ?>
		<?php if(isset($wset['ani']) && $wset['ani'] > 0) { ?>
	    animationSpeed: <?php echo $wset['ani'];?>,
		<?php } ?>
		<?php if($wset['effect'] == 'vertical') { ?>
	    direction: "vertical",
		<?php } ?>
		animation: "<?php echo ($wset['effect'] == 'fade') ? 'fade' : 'slide';?>"
	});
});
</script>
