<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 위젯 설정값 아이디 접두어 지정
$wshid = 'mbt-mc';
$slogan = '미소 베이직 테마 <span class="red">3.0</span>'; // 필요없으니 지워 주셔도 됩니다.

?>
<style>
	.main-wrap { position:relative; margin:0px auto; }
	.main-wrap .main-content { margin:0px auto; padding:20px 0px 10px; }
	.main-wrap .main-icon { text-align:center; margin-top: 25px; margin-bottom:10px; overflow:hidden; margin-right:-6px; }
	.main-wrap .main-icon a { display:inline-block; margin-right:6px; margin-bottom:15px; }
	.main-wrap .main-icon span { display:block; margin-top:6px; }
</style>

<div class="main-wrap">
	<div class="main-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-4">
					<?php echo apms_widget('miso-slider', $wshid.'-title-slider', 'slider_h=56 shadow=2 effect=fade nav=1 rdm=1'); //타이틀 위젯 ?>
					
					<div class="main-icon">

						<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
							<i class="fa fa-bell circle bg-red large"></i>
							<span>메뉴명</span>
						</a>

						<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
							<i class="fa fa-picture-o circle bg-blue large"></i>
							<span>메뉴명</span>
						</a>

						<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
							<i class="fa fa-download circle bg-green large"></i>
							<span>메뉴명</span>
						</a>

						<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
							<i class="fa fa-comments circle bg-yellow large"></i>
							<span>메뉴명</span>
						</a>

						<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
							<i class="fa fa-th-large circle light-circle large"></i>
							<span>메뉴명</span>
						</a>

						<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
							<i class="fa fa-pencil circle light-circle large"></i>
							<span>메뉴명</span>
						</a>

						<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
							<i class="fa fa-file-text-o circle light-circle large"></i>
							<span>메뉴명</span>
						</a>

						<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=보드아이디">
							<i class="fa fa-user-secret circle light-circle large"></i>
							<span>메뉴명</span>
						</a>
					</div>
	
					<?php echo apms_line('fa', 'fa-picture-o');?>

					<div class="text-center">
						<h4 class="div-title-underline-thin border-color color">
							Gallery
						</h4>
					</div>

					<?php echo apms_widget('miso-post-more-photo', $wshid.'-post-more-photo', 'garo=3 sero=3 over=1 gap=10 thumb_w=400 thumb_h=300 lb=1'); ?>

					<?php echo apms_line('fa', 'fa-comment');?>

					<div class="text-center">
						<h4 class="div-title-underline-thin border-color color">
							Talk
						</h4>
					</div>

					<?php echo apms_widget('miso-post-more-icon', $wshid.'-post-more-icon', 'new=red icon={아이콘:user} rows=10'); ?>

					<?php echo apms_line('fa', 'fa-pencil');?>

					<div class="text-center">
						<h4 class="div-title-underline-thin border-color color">
							Post
						</h4>
					</div>

					<?php echo apms_widget('miso-post-more-list', $wshid.'-post-more-list', 'new=red icon={아이콘:caret-right} rows=10 date=m.d'); ?>

					<div class="clearfix h20"></div>
				</div>
			</div>
		</div>
	</div>
</div>
