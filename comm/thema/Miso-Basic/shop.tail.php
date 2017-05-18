<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
			<?php if($col_name) { ?>
				<?php if($col_name == "two") { ?>
							</div><!-- .at-content-main -->
						</div>
						<div class="col-md-<?php echo $col_side;?><?php echo ($at_set['side']) ? ' pull-left' : '';?> at-col">
							<div class="at-content-side">
								<?php include_once(THEMA_PATH.'/shop.side.php'); ?>
							</div>
						</div>
					</div>
				<?php } else { ?>
					</div><!-- .at-content-main -->
				<?php } ?>
				</div><!-- .container -->
				<?php @include_once(THEMA_PATH.'/shop.wing.php'); // Wing ?>
			</div><!-- .at-content -->
		<?php } ?>
		</div><!-- .at-container -->

		<footer>
			<div class="at-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6 col">
							<h4>About</h4>
							<p>
								테마 내 shop.tail.php 파일에서 쇼핑몰 소개를 직접 입력해 주세요.
							</p>
							<?php echo $sns_share_icon; // SNS 공유아이콘 ?>
						</div>
						<div class="col-md-3 col-sm-6 col">
							<h4>Service</h4>
							<ul class="footer-icon">
								<li>
									<a href="<?php echo $at_href['inquiry']; ?>">
										<i class="fa fa-truck circle normal bg-black hover-red"></i>
										<span>주문/배송</span>
									</a>
								</li>
								<li>
									<a href="<?php echo $at_href['ppay']; ?>">
										<i class="fa fa-ticket circle normal bg-black hover-blue"></i>
										<span>개인결제</span>
									</a>
								</li>
								<li>
									<a href="<?php echo $at_href['faq']; ?>">
										<i class="fa fa-question circle normal bg-black hover-green"></i>
										<span>FAQ</span>
									</a>
								</li>
								<li>
									<a href="<?php echo $at_href['secret'];?>">
										<i class="fa fa-user-secret circle normal bg-black hover-orangered"></i>
										<span>1:1 문의</span>
									</a>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-3 col-sm-6 col">
							<h4>Bank Info</h4>
							
							<ul>
								<li><a>국민은행 000000-00-000000</a></li>
								<li><a>기업은행 000-000000-00-000</a></li>
								<li><a>우리은행 0000-000-000000</a></li>
								<li><a>하나은행 000-00000000-000</a></li>
								<li>예금주 홍길동</li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-6 col">
							<h4>CS Center</h4>
							<h2 class="en color" style="margin:0px 0px 12px; letter-spacing:-1px;">
								<b>000.0000.0000</b>
							</h2>
							<ul>
								<li>월-금 : 9:30 ~ 17:30</li>
								<li>런치타임 : 12:30 ~ 13:30</li>
								<li>토/일/공휴일은 휴무</li>
							</ul>
						</div>
					</div>

					<div class="footer-nav">
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

					<!-- Copyright -->
					<div class="copyright">
						<i class="fa fa-leaf fa-4x footer-logo pull-left hidden-xs"></i>
						<ul>
							<li><?php echo $default['de_admin_company_name']; ?></li>
							<li>주소 : <?php echo $default['de_admin_company_addr']; ?></li>
							<li>대표 : <?php echo $default['de_admin_company_owner']; ?></li>
							<li>전화 : <span><?php echo $default['de_admin_company_tel']; ?></span></li>
							<li>사업자등록번호 : <span><?php echo $default['de_admin_company_saupja_no']; ?></span></li>
							<li><a href="http://www.ftc.go.kr/info/bizinfo/communicationList.jsp" target="_blank">사업자정보확인</a></li>
							<li>통신판매업신고 : <?php echo $default['de_admin_tongsin_no']; ?></li>
							<li>개인정보관리책임자 : <?php echo $default['de_admin_info_name']; ?></li>
							<li>이메일 : <span><?php echo $default['de_admin_info_email']; ?></span></li>
							<li><span>&copy; All Rights Reserved.</span></li>
						</ul>
						<div class="clearfix"></div>
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
<script src="<?php echo THEMA_URL;?>/assets/js/jquery.ui.totop.min.js"></script>
<script src="<?php echo THEMA_URL;?>/assets/js/jquery.custom.js"></script>
<?php if($at_set['header']) { ?>
<script src="<?php echo THEMA_URL;?>/assets/js/jquery.sticky.js"></script>
<script src="<?php echo THEMA_URL;?>/assets/js/jquery.custom.sticky.js"></script>
<?php } ?>

<?php if($is_admin || $is_demo) include_once(THEMA_PATH.'/assets/switcher.php'); //Style Switcher ?>

<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo THEMA_URL;?>/assets/js/respond.js"></script>
<![endif]-->

<?php apms_script('lazy');?>

<script>
$(function () {
	$.fn.matchHeight._update();
});
</script>