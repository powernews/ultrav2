<?php
if (!defined('_GNUBOARD_')) exit; //개별 페이지 접근 불가

// 옵션
$list = apms_board_rows($wset);
$list_cnt = count($list);

// 아이콘
$icon = (isset($wset['icon']) && $wset['icon']) ? apms_fa($wset['icon']) : '';

// 랭킹
$rank = apms_rank_offset($wset['rows'], $wset['page']);

// 링크
$is_link = (isset($wset['link']) && $wset['link']) ? true : false;

// 리스트
for ($i=0; $i < $list_cnt; $i++) { 
	// 링크#1
	$target = '';
	if($is_link && $list[$i]['wr_link1']) {
		$list[$i]['href'] = $list[$i]['link_href'][1];
		$target = ' target="_blank"';
	}	
?>
	<li>
		<a href="<?php echo $list[$i]['href'];?>" class="ellipsis"<?php echo $target;?>>
			<span class="pull-right">
				&nbsp;
				<?php if($wset['date']) { ?>
					<?php if($list[$i]['comment']) { ?>
						<i class="fa fa-comment"></i> <?php echo number_format($list[$i]['comment']);?> &nbsp;
					<?php } ?>
					<i class="fa fa-clock-o"></i> <?php echo date($wset['date'], $list[$i]['date']); ?>
				<?php } else if($list[$i]['comment']) { ?>
					<i class="fa fa-comment"></i> <?php echo number_format($list[$i]['comment']);?>
				<?php } ?>
			</span>
			<?php if($wset['rank']) { ?>
				<span class="rank-icon en bg-<?php echo $wset['rank'];?>"><?php echo $rank; $rank++; ?></span>
			<?php } else if($icon) { ?>
				<?php if($list[$i]['new']) { ?>
					<span class="<?php echo $wset['new'];?>"><?php echo $icon;?></span>
				<?php } else { ?>
					<?php echo $icon;?>
				<?php } ?>
			<?php } ?>
			<?php echo $list[$i]['subject'];?>
		</a> 
	</li>
<?php } ?>
<?php if(!$list_cnt) { ?>
	<li>
		<a class="ellipsis">
			<span class="black"><?php echo $icon;?> 글이 없습니다.</span>
		</a>
	</li>
<?php } ?>

