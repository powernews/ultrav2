<?php
if (!defined('_GNUBOARD_')) exit; //개별 페이지 접근 불가

// 스크립트
apms_script('masonry');
apms_script('imagesloaded');
apms_script('infinite');

// 라이트박스
$wset['lb'] = (isset($wset['lb']) && $wset['lb']) ? true : false;
if($wset['lb']) apms_script('lightbox'); // Lightbox

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$widget_url.'/widget.css" media="screen">', 0);

// 기본값 정리
$wset['garo'] = (isset($wset['garo']) && $wset['garo'] > 0) ? $wset['garo'] : 3;
$wset['sero'] = (isset($wset['sero']) && $wset['sero'] > 0) ? $wset['sero'] : 2;
$wset['infi'] = (isset($wset['infi']) && $wset['infi']) ? true : false;
$gap = (!isset($wset['gap']) || $wset['gap'] == "") ? 10 : $wset['gap']; // 간격
$minus = ($gap > 0) ? '-'.$gap : 0;

// 더보기 링크
$more_href = $widget_url.'/widget.rows.php?thema='.urlencode(THEMA).'&amp;wname='.urlencode($wname).'&amp;wid='.urlencode($wid);
if($opt) $more_href .= '&amp;opt='.urlencode($opt);
if($mopt) $more_href .= '&amp;mopt='.urlencode($mopt);
if(isset($wdir) && $wdir) $more_href .= '&amp;wdir='.urlencode($wdir);
if(isset($add) && $add) $more_href .= '&amp;add='.urlencode($add);
$more_href .= '&amp;page=2';

$widget_id = apms_id(); // Random ID

?>
<style>
	#<?php echo $widget_id;?> .item-wrap { margin-right:<?php echo $minus;?>px; margin-bottom:<?php echo $minus;?>px;}
	#<?php echo $widget_id;?> .item-row {  width:<?php echo apms_img_width($wset['garo']);?>%; }
	#<?php echo $widget_id;?> .item-list { margin-right:<?php echo $gap;?>px; margin-bottom:<?php echo $gap;?>px; }
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
<div id="<?php echo $widget_id;?>" class="widget-miso-post-more">
	<div class="item-wrap">
		<?php include($widget_path.'/widget.rows.php');	?>

		<div class="clearfix"></div>

		<?php if(!$list_cnt) { ?>
			<div class="item-none text-muted text-center">
				자료가 없습니다.
			</div>
		<?php } ?>
	</div>
	<div id="<?php echo $widget_id;?>-nav" class="item-nav">
		<a href="<?php echo $more_href;?>"></a>
	</div>
	<?php if(!$wset['infi']) { ?>
	<div id="<?php echo $widget_id;?>-more" class="item-more">
		<a href="#" title="더보기"><i class="fa fa-arrow-circle-down fa-4x"></i><span class="sound_only">더보기</span></a>
	</div>
	<?php } ?>
</div>
<?php if($setup_href) { ?>
	<div class="btn-wset text-center p10">
		<a href="<?php echo $setup_href;?>" class="win_memo">
			<span class="text-muted"><i class="fa fa-cog"></i> 위젯설정</span>
		</a>
	</div>
<?php } ?>
<script>
	$(function(){
		var $<?php echo $widget_id;?> = $('#<?php echo $widget_id;?> .item-wrap');

		$<?php echo $widget_id;?>.imagesLoaded(function(){
			$<?php echo $widget_id;?>.masonry({
				columnWidth : '.item-row',
				itemSelector : '.item-row',
				isAnimated: true
			});
		});

		$<?php echo $widget_id;?>.infinitescroll({
			navSelector  : '#<?php echo $widget_id;?>-nav',    // selector for the paged navigation
			nextSelector : '#<?php echo $widget_id;?>-nav a',  // selector for the NEXT link (to page 2)
			itemSelector : '.item-row',     // selector for all items you'll retrieve
			loading: {
				msgText: '로딩 중...',
				finishedMsg: '더이상 게시물이 없습니다.',
				img: '<?php echo APMS_PLUGIN_URL;?>/img/loader.gif',
			}
		}, function( newElements ) { // trigger Masonry as a callback
			var $newElems = $( newElements ).css({ opacity: 0 });
			$newElems.imagesLoaded(function(){
				$newElems.animate({ opacity: 1 });
				$<?php echo $widget_id;?>.masonry( 'appended', $newElems, true);
			});
		});
		<?php if(!$wset['infi']) { ?>
		$(window).unbind('#<?php echo $widget_id;?> .infscr');
		$('#<?php echo $widget_id;?>-more a').click(function(){
		   $<?php echo $widget_id;?>.infinitescroll('retrieve');
		   $('#<?php echo $widget_id;?>-nav').show();
			return false;
		});
		$(document).ajaxError(function(e,xhr,opt){
			if(xhr.status==404) $('#<?php echo $widget_id;?>-nav').remove();
		});
		<?php } ?>
	});
</script>