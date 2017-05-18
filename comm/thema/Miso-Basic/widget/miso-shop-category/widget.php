<?php
if (!defined('_GNUBOARD_')) exit; //개별 페이지 접근 불가

global $menu, $menu_cnt, $at_href;

//add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$widget_url.'/widget.css" media="screen">', 0);

// Random ID
$widget_id = apms_id();

?>

<div class="widget-miso-shop-category panel-group<?php echo (G5_IS_MOBILE) ? ' no-animation' : '';?>" id="<?php echo $widget_id;?>" role="tablist" aria-multiselectable="true">
	<?php 
		for($i=1; $i < $menu_cnt; $i++) { 
			$cate_id = $widget_id.'_c'.$i;
			$sub_id = $widget_id.'_s'.$i;
	?>
		<?php if($menu[$i]['is_sub']) { //서브메뉴가 있을 때 ?>
			<div class="panel">
				<div class="ca-head<?php echo ($menu[$i]['on'] == "on") ? ' active' : '';?>" role="tab" id="<?php echo $cate_id;?>">
					<a data-toggle="collapse" data-parent="#<?php echo $widget_id;?>" href="#<?php echo $sub_id;?>" aria-expanded="true" aria-controls="<?php echo $sub_id;?>" class="is-sub">
						<?php echo $menu[$i]['name']; //메뉴 ?>
						<?php if($menu[$i]['new'] == "new") { //새글표시 ?>
							<i class="fa fa-bolt new"></i>
						<?php } ?>
					</a>
				</div>
				<div id="<?php echo $sub_id;?>" class="panel-collapse collapse<?php echo ($menu[$i]['on'] == "on") ? ' in' : '';?>" role="tabpanel" aria-labelledby="<?php echo $cate_id;?>">
					<ul class="ca-sub">
					<?php for($j=0; $j < count($menu[$i]['sub']); $j++) { ?>
						<?php if($menu[$i]['sub'][$j]['line']) { //구분라인 ?>
							<li class="ca-line">
								<div class="div-title-underline-thin no-margin">
									<b><?php echo $menu[$i]['sub'][$j]['line'];?></b>
								</div>
							</li>
						<?php } ?>
						<li<?php echo ($menu[$i]['sub'][$j]['on'] == "on") ? ' class="on"' : '';?>>
							<a href="<?php echo $menu[$i]['sub'][$j]['href'];?>"<?php echo $menu[$i]['sub'][$j]['target'];?>>
								<?php echo $menu[$i]['sub'][$j]['name']; //서브메뉴 ?>
								<?php if($menu[$i]['sub'][$j]['new'] == "new") { //새글표시 ?>
									<i class="fa fa-bolt sub-new"></i>
								<?php } ?>
							</a>
						</li>
					<?php } ?>
					</ul>
				</div>
			</div>
		<?php } else { ?>
			<div class="panel">
				<div class="ca-head<?php echo ($menu[$i]['on'] == "on") ? ' active' : '';?>" role="tab">
					<a href="<?php echo $menu[$i]['href'];?>"<?php echo $menu[$i]['target'];?> class="no-sub">
						<?php echo $menu[$i]['name'];?>
						<?php if($menu[$i]['new'] == "new") { //새글표시 ?>
							<i class="fa fa-bolt new"></i>
						<?php } ?>
					</a>
				</div>
			</div>
		<?php } ?>
	<?php } ?>
</div>
