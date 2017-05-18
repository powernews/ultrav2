<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
			<?php if($col_name) { ?>
				<?php if($col_name == "two") { ?>
							</div><!-- .at-content-main -->
						</div>
						<div class="col-md-<?php echo $col_side;?><?php echo ($at_set['side']) ? ' pull-left' : '';?> at-col">
							<div class="at-content-side">
								<?php include_once(THEMA_PATH.'/side.php'); ?>
							</div>
						</div>
					</div>
				<?php } else { ?>
					</div><!-- .at-content-main -->
				<?php } ?>
				</div><!-- .container -->
				<?php @include_once(THEMA_PATH.'/wing.php'); // Wing ?>
			</div><!-- .at-content -->
		<?php } ?>
		</div><!-- .at-container -->

		<footer>
			<div class="at-footer">
				<div class="container">
					<div class="row col">
						<div class="col-md-3 col-sm-6">
							<h4>About</h4>
							<p>
								테마 내 tail.php 파일에서 사이트 소개를 직접 입력해 주세요.
							</p>
							<?php echo $sns_share_icon; // SNS 공유아이콘 ?>
						</div>
						<div class="col-md-3 col-sm-6">
							<h4>Information</h4>
							<ul>
								<li><a href="<?php echo G5_BBS_URL;?>/page.php?hid=intro">사이트 소개</a></li> 
								<li><a href="<?php echo G5_BBS_URL;?>/page.php?hid=provision">이용약관</a></li> 
								<li><a href="<?php echo G5_BBS_URL;?>/page.php?hid=privacy">개인정보 취급방침</a></li>
								<li><a href="<?php echo G5_BBS_URL;?>/page.php?hid=noemail">이메일 무단수집거부</a></li>
								<li><a href="<?php echo G5_BBS_URL;?>/page.php?hid=disclaimer">책임의 한계와 법적고지</a></li>
								<li><a href="<?php echo G5_BBS_URL;?>/page.php?hid=guide">이용안내</a></li>
								<li><a href="<?php echo $at_href['secret'];?>">문의하기</a></li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-6">
							<h4>FAQ</h4>
							<?php echo apms_widget('miso-faq', 'idx-miso-faq'); // FAQ 위젯 ?>
						</div>
						<div class="col-md-3 col-sm-6">
							<h4>Statistics</h4>
							<ul>
								<li><a href="<?php echo $at_href['connect'];?>">
									현재 접속자 <span class="pull-right"><?php echo number_format($stats['now_total']); ?><?php echo ($stats['now_mb'] > 0) ? '('.number_format($stats['now_mb']).')' : ''; ?> 명</span></a>
								</li>
								<li>오늘 방문자 <span class="pull-right"><?php echo number_format($stats['visit_today']); ?> 명</span></li>
								<li>어제 방문자 <span class="pull-right"><?php echo number_format($stats['visit_yesterday']); ?> 명</span></li>
								<li>최대 방문자 <span class="pull-right"><?php echo number_format($stats['visit_max']); ?> 명</span></li>
								<li>전체 방문자 <span class="pull-right"><?php echo number_format($stats['visit_total']); ?> 명</span></li>
								<li>전체 회원수 <span class="pull-right at-tip" data-original-title="<nobr>오늘 <?php echo $stats['join_today'];?> 명 / 어제 <?php echo $stats['join_yesterday'];?> 명</nobr>" data-toggle="tooltip" data-placement="top" data-html="true"><?php echo number_format($stats['join_total']); ?> 명</span>
								</li>
								<li>전체 게시물 <span class="pull-right at-tip" data-original-title="<nobr>글 <?php echo number_format($menu[0]['count_write']);?> 개/ 댓글 <?php echo number_format($menu[0]['count_comment']);?> 개</nobr>" data-toggle="tooltip" data-placement="top" data-html="true"><?php echo number_format($menu[0]['count_write'] + $menu[0]['count_comment']); ?> 개</span>
								</li>
							</ul>
						</div>
					</div>
						
					<hr>

					<!-- Copyright -->
					<div class="copyright text-center">
						<p class="help-block">
							<i class="fa fa-leaf fa-lg"></i> 
							<?php echo $config['cf_title'];?> &copy; <span class="hidden-xs">All Rights Reserved.</span>
						</p>
						<?php if($as_href['pc_mobile']) { ?>
							<a href="<?php echo $as_href['pc_mobile'];?>" class="btn btn-black btn-sm btn-pc-mobile" title="<?php echo (G5_IS_MOBILE) ? 'PC버전 전환' : '모바일버전 전환';?>">
								<?php echo (G5_IS_MOBILE) ? '<i class="fa fa-desktop"></i> <span>PC Mode</span>' : '<i class="fa fa-tablet"></i> <span>Mobile</span>';?>
							</a>
						<?php } ?>	
					</div>
				</div>
			</div>
		</footer>
	</div><!-- .wrapper -->
	<?php include_once(THEMA_PATH.'/widget/sidebar.php'); //Hidden Sidebar ?>
</div>

<!-- JavaScript -->
<script src="<?php echo THEMA_URL;?>/assets/bs3/js/bootstrap.min.js"></script>
<?php if(!G5_IS_MOBILE) { // PC만 출력 ?>
	<script src="<?php echo THEMA_URL;?>/assets/js/jquery.bootstrap-hover-dropdown.min.js"></script>
<?php } ?>
<script src="<?php echo THEMA_URL;?>/assets/js/jquery.custom.js"></script>
<?php if($at_set['header']) { ?>
<script src="<?php echo THEMA_URL;?>/assets/js/jquery.sticky.js"></script>
<script src="<?php echo THEMA_URL;?>/assets/js/jquery.custom.sticky.js"></script>
<?php } ?>

<?php if($is_admin || $is_demo) include_once(THEMA_PATH.'/assets/switcher.php'); //Style Switcher ?>

<!--[if lt IE 9]>
<script src="<?php echo THEMA_URL;?>/assets/js/respond.js"></script>
<![endif]-->

<script>
$(function () {
	$.fn.matchHeight._update();
});
</script>