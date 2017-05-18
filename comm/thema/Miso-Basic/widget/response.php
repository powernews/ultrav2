<?php
include_once('./_common.php');

if($is_guest) exit;

if(isset($count) && $count) { // 카운트
	$count = $member['as_response'] + $member['as_memo'];
	$count = ($count > 0) ? $count : 0;
	echo '{ "count": "' . $count . '" }';
	exit;
}

?>

<div class="div-title-underline-thin en">
	<b>내글반응</b>
	<?php if($member['response']) { ?>
		<span class="count red"><?php echo $member['response'];?></span>
	<?php } ?>
</div>

<?php if($member['response']) {
	$list = apms_response_rows();
	$list_cnt = count($list);
	for($i=0; $i < $list_cnt; $i++) {
?>
		<div class="media">
			<div class="slist-photo pull-left">
				<?php echo ($list[$i]['photo']) ? '<img src="'.$list[$i]['photo'].'" alt="">' : '<i class="fa fa-user bg-lightgray"></i>'; ?>
			</div>
			<div class="media-body">
				<div>
					<a href="#" onclick="<?php echo $list[$i]['href'];?>" class="ellipsis">
						<?php echo $list[$i]['subject'];?>
					</a>
				</div>
				<div class="slist-details text-muted ellipsis">
					<?php echo $list[$i]['name'];?> 외

					<?php if($list[$i]['reply_cnt']) { ?>
						<i class="fa fa-comments-o"></i> <?php echo $list[$i]['reply_cnt'];?>
					<?php } ?>
					<?php if($list[$i]['comment_cnt']) { ?>
						<i class="fa fa-comment"></i> <?php echo $list[$i]['comment_cnt'];?>
					<?php } ?>
					<?php if($list[$i]['comment_reply_cnt']) { ?>
						<i class="fa fa-comments"></i> <?php echo $list[$i]['comment_reply_cnt'];?>
					<?php } ?>
					<?php if($list[$i]['good_cnt']) { ?>
						<i class="fa fa-thumbs-up"></i> <?php echo $list[$i]['good_cnt'];?>
					<?php } ?>
					<?php if($list[$i]['nogood_cnt']) { ?>
						<i class="fa fa-thumbs-down"></i> <?php echo $list[$i]['nogood_cnt'];?>
					<?php } ?>
					<?php if($list[$i]['use_cnt']) { ?>
						<i class="fa fa-pencil"></i> <?php echo $list[$i]['use_cnt'];?>
					<?php } ?>
					<?php if($list[$i]['qa_cnt']) { ?>
						<i class="fa fa-question-circle"></i> <?php echo $list[$i]['qa_cnt'];?>
					<?php } ?>
					<i class="fa fa-clock-o"></i> <?php echo apms_datetime($list[$i]['date']);?>
				</div>
			</div>
		</div>
	<?php }	?>
<?php } else { ?>
	<p class="text-muted">
		새로 등록된 내글반응이 없습니다.
	</p>
<?php } ?>
<p>
	<a onclick="win_memo('<?php echo $at_href['response'];?>');" class="cursor">
		<span class="gray"><i class="fa fa-check-square"></i> 일괄확인/리카운트</span>
	</a>
</p>

<br>

<div class="div-title-underline-thin en">
	<b>새쪽지</b>
	<?php if($member['memo']) { ?>
		<span class="count red"><?php echo $member['memo'];?></span>
	<?php } ?>
</div>
<?php if($member['memo']) {
	$list = apms_memo_rows();
	$list_cnt = count($list);
	for($i=0; $i < $list_cnt; $i++) {
?>
		<div class="media">
			<div class="slist-photo pull-left">
				<?php echo ($list[$i]['photo']) ? '<img src="'.$list[$i]['photo'].'" alt="">' : '<i class="fa fa-user bg-lightgray"></i>'; ?>
			</div>
			<div class="media-body">
				<a href="#" onclick="win_memo('<?php echo $list[$i]['href'];?>');">
					<b><?php echo ($list[$i]['mb_nick']) ? $list[$i]['mb_nick'] : '정보없음';?></b>
					<span class="text-muted"><?php echo apms_datetime($list[$i]['date']);?></span>
					<div class="text-muted">
						<?php echo apms_cut_text($list[$i]['me_memo'], 26,'… <span class="font-11">더보기</span>');?>
					</div>
				</a>
			</div>
		</div>
	<?php } ?>
<?php } else { ?>
	<p class="text-muted">
		새로온 쪽지가 없습니다.
	</p>
<?php } ?>
<p>
	<a onclick="win_memo('<?php echo $at_href['memo'];?>');" class="cursor">
		<span class="gray"><i class="fa fa-envelope"></i> 쪽지함 열기</span>
	</a>
</p>