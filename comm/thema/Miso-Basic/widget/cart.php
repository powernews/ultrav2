<?php
include_once('./_common.php');

thema_member('cart');

?>

<div class="div-title-underline-thin en">
	<b>장바구니</b>
	<?php if($member['cart']) { ?>
		<span class="count red"><?php echo $member['cart'];?></span>
	<?php } ?>
</div>
<?php if($member['cart']) {
	$list = apms_cart_rows();
	$list_cnt = count($list);
	for($i=0; $i < $list_cnt; $i++) {
?>
		<div class="media">
			<div class="slist-photo pull-left">
				<?php echo ($list[$i]['img']) ? '<img src="'.$list[$i]['img'].'" alt="">' : '<i class="fa fa-cube bg-lightgray"></i>'; ?>
			</div>
			<div class="media-body">
				<a href="<?php echo $list[$i]['href'];?>">
					<?php echo $list[$i]['it_name'];?>
				</a>
			</div>
		</div>
	<?php }	?>
<?php } else { ?>
	<p class="text-muted">
		장바구니가 비어 있습니다.
	</p>
<?php } ?>
<p>
	<a href="<?php echo $at_href['cart'];?>">
		<span class="gray"><i class="fa fa-shopping-cart"></i> 장바구니 열기</span>
	</a>
</p>

<br>

<div class="div-title-underline-thin en">
	<b>오늘 본 아이템</b>
	<?php if($member['today']) { ?>
		<span class="count red"><?php echo $member['today'];?></span>
	<?php } ?>
</div>
<?php if($member['today']) {
	$list = apms_today_rows();
	$list_cnt = count($list);
	for($i=0; $i < $list_cnt; $i++) {
?>
		<div class="media">
			<div class="slist-photo pull-left">
				<?php echo ($list[$i]['img']) ? '<img src="'.$list[$i]['img'].'" alt="">' : '<i class="fa fa-cube bg-lightgray"></i>'; ?>
			</div>
			<div class="media-body">
				<a href="<?php echo $list[$i]['href'];?>">
					<?php echo $list[$i]['it_name'];?>
				</a>
			</div>
		</div>
	<?php } ?>
<?php } else { ?>
	<p class="text-muted">
		오늘 본 아이템이 없습니다.
	</p>
<?php } ?>
