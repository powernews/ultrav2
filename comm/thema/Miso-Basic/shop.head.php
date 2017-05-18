<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 
if($is_demo) { // 데모
	@include_once(THEMA_PATH.'/assets/demo.config.php');
	@include_once(THEMA_PATH.'/assets/demo.php');
}
include_once(THEMA_PATH.'/assets/thema.php');
?>

<div id="thema_wrapper" class="<?php echo $at_set['font'];?> <?php echo $at_set['wrapper'];?>">
	<div class="wrapper <?php echo $at_set['layout'];?>">
		<!-- LNB -->
		<aside class="<?php echo $at_set['lnb'];?> at-lnb">
			<div class="container">
				<?php if(!G5_IS_MOBILE) { // PC만 출력 ?>
<!--
					<nav class="at-lnb-icon hidden-xs">
						<ul class="menu">
							<li>
								<a href="javascript://" onclick="this.style.behavior = 'url(#default#homepage)'; this.setHomePage('<?php echo $at_href['home'];?>');" class="at-tip" data-original-title="<nobr>시작페이지</nobr>" data-toggle="tooltip" data-placement="bottom" data-html="true">
									<i class="fa fa-bug fa-lg"></i> <span class="sound_only">시작페이지</span>
								</a>
							</li>
							<li>
								<a href="javascript://" onclick="window.external.AddFavorite(parent.location.href,document.title);" class="at-tip" data-original-title="<nobr>북마크</nobr>" data-toggle="tooltip" data-placement="bottom" data-html="true">
									<i class="fa fa-bookmark-o fa-lg"></i> <span class="sound_only">북마크</span>
								</a>
							</li>
							<li>
								<a href="<?php echo $at_href['rss'];?>" target="_blank" data-original-title="<nobr>RSS 구독</nobr>" class="at-tip" data-toggle="tooltip" data-placement="bottom" data-html="true">
									<i class="fa fa-rss fa-lg"></i> <span class="sound_only">RSS 구독</span>
								</a>
							</li>
						</ul>
					</nav>
-->
				<?php } ?>
				<nav class="at-lnb-menu">
					<ul class="menu">
						<?php if($is_member) { ?>
							<li><a class="asideButton cursor"><i class="fa fa-user"></i> <span class="hidden-xs"><?php echo $member['mb_nick'];?></span></a></li>
							<li class="rspIcon"<?php echo ($member['response'] || $member['memo']) ? '' : ' style="display:none;"';?>>
								<a class="cursor rspButton">
									<i class="fa fa-bell"></i> <span class="hidden-xs">알림</span> 
									<b class="en red">
										<span class="rspCount"><?php echo number_format($member['response'] + $member['memo']);?></span>
									</b>
								</a>
							</li>
							
							
<!--
							<li><a href="<?php echo $at_href['connect'];?>"><i class="fa fa-link" title="현재 접속자"></i> <span class="hidden-xs">접속</span> <b class="en"><?php echo number_format($stats['now_total']); ?><?php echo ($stats['now_mb'] > 0) ? ' (<i class="orangered">'.number_format($stats['now_mb']).'</i>)' : ''; ?></b></a></li>
							
							
							<?php if($member['admin']) {?>
-->
								<li><a href="<?php echo G5_ADMIN_URL;?>"><i class="fa fa-cog"></i> <span class="hidden-xs">관리</span></a></li>
							<?php } ?>
							<li>
								<a href="<?php echo $at_href['logout'];?>">
									<i class="fa fa-power-off"></i> <span class="hidden-xs">로그아웃</span>
								</a>
							</li>
						<?php } else { ?>
							<li><a class="asideButton cursor"><i class="fa fa-power-off"></i> <span>로그인</span></a></li>
							<li><a href="<?php echo $at_href['reg'];?>"><i class="fa fa-sign-in"></i> <span><span class="lnb-txt">회원</span>가입</span></a></li>
							<li><a href="<?php echo $at_href['lost'];?>" class="win_password_lost"><i class="fa fa-search"></i> <span>정보찾기</span></a></li>
							<li><a href="<?php echo $at_href['connect'];?>"><i class="fa fa-comments" title="현재 접속자"></i> <b class="en"><?php echo number_format($stats['now_total']); ?><?php echo ($stats['now_mb'] > 0) ? ' (<i class="orangered">'.number_format($stats['now_mb']).'</i>)' : ''; ?></b></a></li>
						<?php } ?>
					</ul>
				</nav>
			</div>
		</aside>

		<header>
			<!-- Logo -->
			<div class="at-header">
				<div id="logo_head" class="container<?php echo (isset($at_set['head']) && $at_set['head']) ? ' header-'.$at_set['head'] : '';?>">
					<div class="header-wrap">
						<div class="header-box">

							<div class="header-item header-sns">
								<?php echo $sns_share_icon; // SNS 공유아이콘 ?>
							</div>

							<div class="header-item header-title text-center">
								<a href="<?php echo $at_href['home'];?>">
									<span class="header-logo">
										<img src="/comm/thema/Miso-Basic/assets/img/info_logo.png" width="235" height="79">
									</span>
								</a>

								

							</div>

							<div class="header-item header-search">
								<form name="tsearch" method="get" onsubmit="return tsearch_submit(this);" role="form" class="form">
								<input type="hidden" name="url"	value="<?php echo (IS_YC && IS_SHOP) ? $at_href['isearch'] : $at_href['search'];?>">
								<div class="input-group input-group-sm">
									<input type="text" name="stx" class="form-control input-sm" value="<?php echo $stx;?>">
									<span class="input-group-btn">
										<button type="submit" class="btn btn-sm btn-black"><i class="fa fa-search fa-lg"></i></button>
									</span>
								</div>
								</form>
<!--
								<?php
									// 뉴스티커 - 데모 또는 검색창 출력 헤드에서만 실행
									if($is_demo || (isset($at_set['head']) && (int)$at_set['head'] > 1)) 
										echo apms_widget('miso-post-newsticker', 'miso-head-newsticker', 'new=red icon={아이콘:bell}'); 
								?>
-->
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="header-line"></div>
			</div>
			<div id="menu_head"></div>
			<div class="navbar <?php echo $at_set['menu'];?> at-navbar" role="navigation">
				<div class="container">
					<!-- Button Menu -->
					<a href="#menu_head" role="button" class="navbar-toggle btn btn-black pull-left" data-toggle="collapse" data-target=".at-menu-all">
						<i class="fa fa-bars"></i> MENU
					</a>
					
					
					<!-- Right Menu -->
					<div class="pull-right btn-group navbar-menu-right">
						
						
<!--
						<?php if(IS_YC) { // 영카트 이용시 ?>
							<a href="<?php echo $at_href['change'];?>" class="btn btn-color">
								<?php if(IS_SHOP) { // 쇼핑몰일 때 ?>
									<i class="fa fa-users"></i> BBS
								<?php } else { ?>
									<i class="fa fa-shopping-cart"></i> SHOP
								<?php } ?>
							</a>
						<?php } ?>
-->
						
						
						<button type="button" class="btn btn-black asideButton">
							<i class="fa fa-outdent"></i>
						</button>
					</div>
					
					
					<?php if(!G5_IS_MOBILE) { // PC만 출력 ?>
						<!-- Left Menu -->
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								<li class="navbar-icon<?php echo ($is_index) ? ' active' : '';?>">
									<a href="<?php echo $at_href['main'];?>">
										<i class="fa fa-home at-tip" data-original-title="<nobr class='font-normal'>메인</nobr>" data-toggle="tooltip" data-html="true"></i>
									</a>
								</li>
								<li class="navbar-icon">
									<a<?php echo ($at_set['header']) ? ' href="#menu_head"' : '';?> data-toggle="collapse" data-target=".at-menu-all">
										<i class="fa fa-bars at-tip" data-original-title="<nobr class='font-normal'>전체보기</nobr>" data-toggle="tooltip" data-html="true"></i>
									</a>
								</li>
								<?php for ($i=1; $i < $menu_cnt; $i++) { //메뉴출력 - 1번부터 출력?>
									<?php if($menu[$i]['is_sub']) { //서브메뉴가 있을 때 ?>
										<li class="dropdown<?php echo ($menu[$i]['on'] == "on") ? ' active' : '';?>">
											<a href="<?php echo $menu[$i]['href'];?>" class="dropdown-toggle" <?php echo(G5_IS_MOBILE) ? 'data-toggle="dropdown"' : 'data-hover="dropdown"';?> data-close-others="true"<?php echo $menu[$i]['target'];?>>
												<?php echo $menu[$i]['name'];?><?php if($menu[$i]['new'] == "new") { ?><i class="fa fa-circle <?php echo $menu[$i]['new'];?>"></i><?php } ?>
											</a>
											<div class="dropdown-menu dropdown-menu-head">
												<ul class="pull-left">
												<?php 
													$smw1 = 1; //나눔 체크
													for($j=0; $j < count($menu[$i]['sub']); $j++) { 
												?>
													<?php if($menu[$i]['sub'][$j]['sp']) { //나눔 ?>
														</ul>
														<ul class="pull-left">
													<?php $smw1++; } // 나눔 카운트 ?>
													<?php if($menu[$i]['sub'][$j]['line']) { //구분라인 ?>
														<li class="line"><a><?php echo $menu[$i]['sub'][$j]['line'];?></a></li>
													<?php } ?>
													<?php if(!G5_IS_MOBILE && $menu[$i]['sub'][$j]['is_sub']) { //모바일이 아니고 서브메뉴가 있을 때 ?>
														<li class="dropdown-submenu sub-<?php echo ($menu[$i]['sub'][$j]['on'] == "on") ? 'on' : 'off';?>">
															<a tabindex="-1" href="<?php echo $menu[$i]['sub'][$j]['href'];?>"<?php echo $menu[$i]['sub'][$j]['target'];?>>
																<?php echo $menu[$i]['sub'][$j]['name'];?>
																<?php if($menu[$i]['sub'][$j]['new'] == "new") { ?>
																	<i class="fa fa-circle red"></i>
																<?php } ?>
																<i class="fa fa-caret-right sub-caret pull-right"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-sub">
																<ul class="pull-left">
																<?php 
																	$smw2 = 1; //나눔 체크
																	for($k=0; $k < count($menu[$i]['sub'][$j]['sub']); $k++) { 
																?>
																	<?php if($menu[$i]['sub'][$j]['sub'][$k]['sp']) { //나눔 ?>
																		</ul>
																		<ul class="pull-left">
																	<?php $smw2++; } // 나눔 카운트 ?>
																	<?php if($menu[$i]['sub'][$j]['sub'][$k]['line']) { //구분라인 ?>
																		<li class="line-sub"><a><?php echo $menu[$i]['sub'][$j]['sub'][$k]['line'];?></a></li>
																	<?php } ?>
																	<li class="sub2-<?php echo ($menu[$i]['sub'][$j]['sub'][$k]['on'] == "on") ? 'on' : 'off';?>">
																		<a tabindex="-1" href="<?php echo $menu[$i]['sub'][$j]['sub'][$k]['href'];?>"<?php echo $menu[$i]['sub'][$j]['sub'][$k]['target'];?>><?php echo $menu[$i]['sub'][$j]['sub'][$k]['name'];?></a>
																	</li>
																<?php } ?>
																</ul>
																<?php $smw2 = ($smw2 > 1) ? 200 * $smw2 : 0; //서브메뉴 너비 ?>
																<div class="clearfix sub-nanum"<?php echo ($smw2) ? ' style="width:'.$smw2.'px;"' : '';?>></div>
															</div>
														</li>
													<?php } else { //서브메뉴가 없을 때 ?>
														<li class="sub-<?php echo ($menu[$i]['sub'][$j]['on'] == "on") ? 'on' : 'off';?>">
															<a href="<?php echo $menu[$i]['sub'][$j]['href'];?>"<?php echo $menu[$i]['sub'][$j]['target'];?>>
																<?php echo $menu[$i]['sub'][$j]['name'];?>
																<?php if($menu[$i]['sub'][$j]['new'] == "new") { ?>
																	<i class="fa fa-circle red"></i>
																<?php } ?>
															</a>
														</li>
													<?php } ?>
												<?php } ?>
												</ul>
												<?php $smw1 = ($smw1 > 1) ? 200 * $smw1 : 0; //서브메뉴 너비 ?>
												<div class="clearfix sub-nanum"<?php echo ($smw1) ? ' style="width:'.$smw1.'px;"' : '';?>></div>
											</div>
										</li>
									<?php } else { //서브메뉴가 없을 때 ?>
										<li<?php echo ($menu[$i]['on'] == "on") ? ' class="active"' : '';?>>
											<a href="<?php echo $menu[$i]['href'];?>"<?php echo $menu[$i]['target'];?>>
												<?php echo $menu[$i]['name'];?>
												<?php if($menu[$i]['new'] == "new") { ?>
													<i class="fa fa-circle <?php echo $menu[$i]['new'];?>"></i>
												<?php } ?>
											</a>
										</li>
									<?php } ?>
								<?php } ?>
							</ul>
						</div>
					<?php } ?>
				</div>
				<div class="navbar-menu-bar"></div>
			</div>
			<div class="clearfix"></div>
		</header>

		<style>
			.menu-all-wrap .menu-all-head { width:<?php echo apms_img_width($menu_cnt - 1);?>%; }
		</style>

		<nav id="menu_all" class="collapse at-menu-all">
			<div class="container">
				<ul class="menu-all-wrap">
				<?php for ($i=1; $i < $menu_cnt; $i++) { //메뉴출력 - 1번부터 출력?>
					<li class="menu-all-head<?php echo ($menu[$i]['on'] == "on") ? ' active' : '';?>">
						<div class="menu-all-head-item">
							<?php if($menu[$i]['is_sub']) { //서브메뉴가 있을 때 ?>
								<a onclick="miso_menu('msub_<?php echo $i;?>');">
								<span class="menu-all-main is-sub border-color">
							<?php } else { ?>
								<a href="<?php echo $menu[$i]['href'];?>" <?php echo $menu[$i]['target'];?>>
								<span class="menu-all-main border-color">
							<?php } ?>
									<?php echo $menu[$i]['name'];?>
									<?php if($menu[$i]['new'] == "new") { ?><i class="fa fa-circle <?php echo $menu[$i]['new'];?>"></i><?php } ?>
								</span>
							</a>
							<?php if($menu[$i]['is_sub']) { //서브메뉴가 있을 때 ?>
								<ul id="msub_<?php echo $i;?>" class="menu-all-sub">
								<?php for($j=0; $j < count($menu[$i]['sub']); $j++) { ?>
									<?php if($menu[$i]['sub'][$j]['line']) { //구분라인 ?>
										<li class="sub-line"><?php echo $menu[$i]['sub'][$j]['line'];?></li>
									<?php } ?>
									<li class="main-all-sub-item sub-<?php echo ($menu[$i]['sub'][$j]['on'] == "on") ? 'on' : 'off';?>">
										<a href="<?php echo $menu[$i]['sub'][$j]['href'];?>"<?php echo $menu[$i]['sub'][$j]['target'];?> class="ellipsis">
											<?php echo $menu[$i]['sub'][$j]['name'];?>
											<?php if($menu[$i]['sub'][$j]['new'] == "new") { ?><i class="fa fa-bolt sub-<?php echo $menu[$i]['sub'][$j]['new'];?>"></i><?php } ?>
										</a>
									</li>
								<?php } ?>
								</ul>
							<?php } ?>
						</div>
					</li>
					<?php } ?>
				</ul>

				<div class="menu-all-btn text-center">
					<div class="btn-group">
						<a class="btn btn-color" href="<?php echo $at_href['main'];?>"><i class="fa fa-home fa-lg"></i> 메인</a>
						<a class="btn btn-black" data-toggle="collapse" data-target=".at-menu-all"><i class="fa fa-arrow-circle-up fa-lg"></i> 닫기</a>
					</div>
				</div>
			</div>
		</nav>

		<?php if($page_title) { // 페이지 타이틀 
			$page_background = '';
			if($at_set['page_title'] && $at_set['page_title'] != 'none') {
				if(!$at_set['page_top']) $at_set['page_top'] = 0;
				$page_background .= ' style="background-image: url(\''.$at_set['page_title'].'\'); background-position: 50% '.$at_set['page_top'].'%; "';
			}
		?>
			<div class="page-title"<?php echo $page_background;?>>
				<div class="container">
					<h2><?php echo ($bo_table) ? '<a href="'.G5_BBS_URL.'/board.php?bo_table='.$bo_table.'"><span>'.$page_title.'</span></a>' : $page_title;?></h2>
					<?php if($page_desc) { // 페이지 설명글 ?>
						<ol class="breadcrumb hidden-xs">
							<li class="active"><?php echo $page_desc;?></li>
						</ol>
					<?php } ?>
				</div>
			</div>
		<?php } ?>
		
					<?php
				// Wing : 메인에서 윙(wing) 출력은 메인파일 자체에서 include
				if(!$is_index && $is_wing) {
					@include_once(THEMA_PATH.'/wing.php'); 
				}
			?>


		<div id="at_container" class="at-container<?php echo (isset($at_set['content']) && $at_set['content']) ? ' content-'.$at_set['content'] : '';?>">
		<?php if($col_name) { ?>
			<div class="at-content">
				<div class="container">
				<?php if($col_name == "two") { ?>
					<div class="row at-row">
						<div class="col-md-<?php echo $col_content;?><?php echo ($at_set['side']) ? ' pull-right' : '';?> at-col">
							<div class="at-content-main">
				<?php } else { ?>
					<div class="at-content-main">
				<?php } ?>
		<?php } ?>
