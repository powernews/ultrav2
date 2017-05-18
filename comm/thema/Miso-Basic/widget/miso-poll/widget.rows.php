<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

global $is_admin, $member;

//add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$widget_url.'/widget.css" media="screen">', 0);

$skin_dir = $wname; //위젯명
$list = apms_poll_rows($wset);
$list_cnt = count($list);

if(!$list_cnt) {
	return;
}

// 투표섞기
if($list_cnt > 0 && isset($wset['rdm']) && $wset['rdm']) {
	shuffle($list);
}

$accordion_id = apms_id();

?>

<div class="panel-group" id="<?php echo $accordion_id;?>" role="tablist" aria-multiselectable="true">
	<?php for($i=0; $i < $list_cnt; $i++) { ?>
		<div class="panel panel-default">
			<div class="panel-heading" id="<?php echo $accordion_id;?>H<?php echo $i;?>" role="tab">
				<a aria-expanded="true" data-parent="#<?php echo $accordion_id;?>" aria-controls="<?php echo $accordion_id;?>G<?php echo $i;?>" href="#<?php echo $accordion_id;?>G<?php echo $i;?>" data-toggle="collapse">
					<?php echo $list[$i]['po_subject'] ?>
				</a>
			</div>
			<div class="panel-collapse collapse<?php echo($i == 0) ? ' in' : '';?>" id="<?php echo $accordion_id;?>G<?php echo $i;?>">
				<div class="panel-body">
					<form class="form" role="form" name="fpoll<?php echo $i;?>" action="<?php echo G5_BBS_URL; ?>/poll_update.php" onsubmit="return fpoll_submit(this,'<?php echo $list[$i]['po_level'];?>');" method="post">
						<input type="hidden" name="po_id" value="<?php echo $list[$i]['po_id'] ?>">
						<input type="hidden" name="skin_dir" value="<?php echo $skin_dir; ?>">
						<ul class="poll-list">
							<?php for ($j=1; $j<=9 && $list[$i]["po_poll{$j}"]; $j++) {  ?>
								<li>
									<label><input type="radio" name="gb_poll" id="gb_poll_<?php echo $i ?>_<?php echo $j ?>" value="<?php echo $j ?>"> <?php echo $list[$i]['po_poll'.$j] ?></label>
								</li>
							<?php } ?>
						</ul>
						<div class="text-center">
							<div class="btn-group">
								<button type="submit" class="btn btn-color btn-sm"><i class="fa fa-check"></i> 투표</button>
								<a href="<?php echo G5_BBS_URL;?>/poll_result.php?po_id=<?php echo $list[$i]['po_id'];?>&amp;skin_dir=<?php echo urlencode($skin_dir);?>" target="_blank" onclick="poll_result(this.href, '<?php echo $list[$i]['po_level'];?>'); return false;" class="btn btn-black btn-sm"><i class="fa fa-bar-chart"></i> 결과</a>
								<?php if($is_admin == 'super') { ?>
									<a href="<?php echo G5_ADMIN_URL; ?>/poll_list.php" class="btn btn-black btn-sm"><i class="fa fa-th-large"></i> 관리</a>
								<?php } ?>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php } ?>
</div>
