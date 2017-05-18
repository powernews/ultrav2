<?php
if (!defined('_GNUBOARD_')) exit; //개별 페이지 접근 불가

global $demo_title;

// Flex Slider 불러오기
apms_script('flexslider'); 

// 기본값 정리
$wset['effect'] = (isset($wset['effect']) && $wset['effect']) ? $wset['effect'] : 'slide';
$wset['slider_h'] = (isset($wset['slider_h']) && $wset['slider_h'] > 0) ? $wset['slider_h'] : 35;
$wset['slider'] = (isset($wset['slider']) && $wset['slider'] > 0) ? $wset['slider'] : 0;
$wset['in'] = (isset($wset['in']) && $wset['in']) ? true : false; // 내부 그림자
$wset['caption'] = (isset($wset['caption']) && $wset['caption']) ? 'caption' : 'title en'; // 캡션

// 그림자
$shadow_in = $shadow_out = '';
if($wset['shadow']) {
	if($wset['in']) {
		$shadow_in = '<div class="in-shadow">'.apms_shadow($wset['shadow']).'</div>';
	} else {
		$shadow_out = apms_shadow($wset['shadow']);
	}
}

// 랜덤아이디
$widget_id = apms_id();

$list = array();
$k=0;
for ($i=1; $i <= $wset['slider']; $i++) {

	if(!isset($wset['use'.$i]) || !$wset['use'.$i]) continue; // 사용하지 않으면 건너뜀

	$list[$k]['label'] = $wset['label'.$i];
	$list[$k]['txt'] = apms_fa($wset['txt'.$i]);
	$list[$k]['href'] = ($wset['link'.$i]) ? ' href="'.$wset['link'.$i].'"' : '';
	$list[$k]['target'] = ($list[$k]['href'] && isset($wset['win'.$i]) && $wset['win'.$i]) ? ' target="_blank"' : '';
	$list[$k]['img'] = $wset['img'.$i];
	$list[$k]['margin'] = ($wset['mm'.$i] > 0) ? ' style="margin-top:-'.$wset['mm'.$i].'%;"' : '';
	$list[$k]['title'] = apms_fa($wset['title'.$i]);
	if($list[$k]['title']) {
		$list[$k]['bg'] = (isset($wset['bg'.$i]) && $wset['bg'.$i]) ? $wset['bg'.$i] : 'black';
		$list[$k]['bg'] = (isset($wset['trans'.$i]) && $wset['trans'.$i]) ? ' trans-bg-'.$list[$k]['bg'] : ' bg-'.$list[$k]['bg'];
	} else {
		$list[$k]['bg'] = '';
	}

	$k++;
}

$list_cnt = count($list);

?>
<div class="img-wrap img-fix" style="padding-bottom:<?php echo $wset['slider_h'];?>%;">
	<div class="img-item img-fix">
		<?php echo $shadow_in;?>
		<div id="<?php echo $widget_id;?>" class="flexslider">
			<ul class="slides">
				<?php for ($i=0; $i < $list_cnt; $i++) { ?>
					<li>
						<div class="img-wrap" style="padding-bottom:<?php echo $wset['slider_h'];?>%;">
							<div class="img-item">
								<?php if($list[$i]['label']) { // 라벨 ?>
									<div class="label-band bg-<?php echo $list[$i]['label'];?>"><?php echo $list[$i]['txt']; ?></div>
								<?php } ?>
								<a<?php echo $list[$i]['href'];?><?php echo $list[$i]['target'];?>>
									<img src="<?php echo $list[$i]['img'];?>" alt=""<?php echo $list[$i]['margin'];?>>
									<?php if($list[$i]['title']) { // 타이틀 ?>
										<div class="in-<?php echo $wset['caption'];?> <?php echo $list[$i]['bg']; ?>">
											<?php echo $list[$i]['title']; ?>
										</div>
									<?php } ?>
								</a>
							</div>
						</div>
					</li>
				<?php } ?>
				<?php if(!$i) { ?>
					<li>
						<div class="img-wrap" style="padding-bottom:<?php echo $wset['slider_h'];?>%;">
							<div class="img-item">
								<img src="<?php echo THEMA_URL;?>/assets/img/bg.jpg" alt="">
								<div class="in-<?php echo $wset['caption'];?> trans-bg-black">
									<?php echo (isset($demo_title) && $demo_title) ? $demo_title : '위젯설정에서 캡션을 등록해 주세요.';?>
								</div>
							</div>
						</div>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
<?php echo $shadow_out;?>
<?php if($setup_href) { ?>
	<div class="btn-wset text-center p10">
		<a href="<?php echo $setup_href;?>" class="win_memo">
			<span class="text-muted"><i class="fa fa-cog"></i> 위젯설정</span>
		</a>
	</div>
<?php } ?>
<script>
$(window).load(function() {
	$('#<?php echo $widget_id;?>').flexslider({
		<?php if(!isset($wset['nav']) || !$wset['nav']) { ?>
		controlNav: false,
		<?php } ?>
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
