<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// ---------------------------------------------------------
// 경고! 이하 내용은 수정하지 마세요!
// ---------------------------------------------------------

// Font
if(!isset($at_set['font']) || !$at_set['font']) $at_set['font'] = 'ko';
if(!isset($at_set['wrapper'])) $at_set['wrapper'] = '';

// Setup Column
if($is_wide_layout) { //메인은 와이드 고정
	$col_content = 13;
} else {
	$col_content = (isset($at_set['page']) && $at_set['page']) ? $at_set['page'] : 9;
}

$col_content = (int)$col_content;

if($col_content == 13) { // Full Wide
	$col_name = '';
} else if($col_content == 12) { // One Column
	$col_name = 'one';
} else { // Two Column
	$col_name = 'two';
	$col_side = 12 - $col_content;
}

$menu_cnt = count($menu);

// Stylesheet
$bootstrap_css = (_RESPONSIVE_) ? 'bootstrap.min.css' : 'bootstrap-apms.min.css';
$add_stylesheet = '<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,300,500,500italic,700,900,400italic,700italic">';
$add_stylesheet .= PHP_EOL.'<link rel="stylesheet" href="'.THEMA_URL.'/assets/bs3/css/'.$bootstrap_css.'" type="text/css" media="screen" class="thema-mode">';
$add_stylesheet .= PHP_EOL.'<link rel="stylesheet" href="'.COLORSET_URL.'/colorset.css" type="text/css" media="screen" class="thema-colorset">';

add_stylesheet($add_stylesheet,0);

$add_stylesheet = ''; // Reset

// Swipe & Height
apms_script('swipe');
apms_script('height');

// Social Icon
$sns_share_url  = (IS_YC && IS_SHOP) ? G5_SHOP_URL : G5_URL;
$sns_share_title = get_text($config['cf_title']);
$sns_share_img = THEMA_URL.'/assets/img';
$sns_share_icon = '<div class="sns-share-icon">'.PHP_EOL;
$sns_share_icon .= get_sns_share_link('facebook', $sns_share_url, $sns_share_title, $sns_share_img.'/sns_fb.png').PHP_EOL;
$sns_share_icon .= get_sns_share_link('twitter', $sns_share_url, $sns_share_title, $sns_share_img.'/sns_twt.png').PHP_EOL;
$sns_share_icon .= get_sns_share_link('googleplus', $sns_share_url, $sns_share_title, $sns_share_img.'/sns_goo.png').PHP_EOL;
$sns_share_icon .= get_sns_share_link('kakaostory', $sns_share_url, $sns_share_title, $sns_share_img.'/sns_kakaostory.png').PHP_EOL;
$sns_share_icon .= get_sns_share_link('kakaotalk', $sns_shareurl, $sns_share_title, $sns_share_img.'/sns_kakao.png').PHP_EOL;
$sns_share_icon .= get_sns_share_link('naverband', $sns_share_url, $sns_share_title, $sns_share_img.'/sns_naverband.png').PHP_EOL;
$sns_share_icon .= '</div>';

$at_set['body_bgcolor'] = (isset($at_set['body_bgcolor']) && $at_set['body_bgcolor']) ? $at_set['body_bgcolor'] : '#fff';
$at_set['body_background'] = (isset($at_set['body_background']) && $at_set['body_background'] && $at_set['body_background'] != 'none') ? $at_set['body_background'] : '';
$at_set['head'] = (isset($at_set['head'])) ? $at_set['head'] : '';

?>

<script> var g5_thema = "<?php echo THEMA;?>"; </script>
<style> 
	body { 
<?php if($at_set['body_bgcolor']) { ?>
	background-color: <?php echo $at_set['body_bgcolor'];?>;
<?php } ?>
<?php if($at_set['body_background']) { ?>
	background-image: url('<?php echo $at_set['body_background'];?>');
<?php } ?>
	background-repeat: no-repeat; background-position: 50% 50%; background-attachment:<?php echo (G5_IS_MOBILE) ? 'scroll' : 'fixed';?>; background-size:cover;
	}
</style>
