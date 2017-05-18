<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(THEMA_PATH.'/assets/thema.php');
?>
<div class="at-html">
    <div id="thema_wrapper" class="wrapper <?php echo $is_thema_layout;?> <?php echo $is_thema_font;?>">
        <header class="at-header">
            <center><table width="1200" border="0">
                    <tbody>
                    <tr>
                        <td width="740px;">	<!-- PC Logo -->
                            <div class="header-logo" style="margin: 10px 0px;">
                                <a href="<?php echo $at_href['home'];?>">
                                    <img src="/comm/thema/Miso-Basic/assets/img/info_logo.png" width="200px"></a>
                                </a>
                            </div></td>
                        <td style="text-align: right; width: 200px;">
                            <div style=" text-align: right;" align="right;">
                                <ul style="font-size: 12px; list-style: none; padding:20px 0px 5px; text-align: right; ">
                                    <?php if($is_member) { // 로그인 상태 ?>
                                        <li style="float: left;padding: 0px 5px; "><a href="javascript:;" onclick="sidebar_open('sidebar-user');"><b><?php echo $member['mb_nick'];?></b></a></li>
                                        <?php if($member['admin']) {?>
                                            <li style="float: left;padding: 0px 15px; "><a href="<?php echo G5_ADMIN_URL;?>">관리</a></li>
                                        <?php } ?>

                                        <li class="sidebarLabel"<?php echo ($member['response'] || $member['memo']) ? '' : ' style="display:none;"';?>>
                                            <a href="javascript:;" onclick="sidebar_open('sidebar-response');">
                                                알림 <b class="orangered sidebarCount"><?php echo $member['response'] + $member['memo'];?></b>
                                            </a>
                                        </li>
                                    <?php } else { // 로그아웃 상태 ?>
                                        <li style="float: left; "><a href="<?php echo $at_href['login'];?>" onclick="sidebar_open('sidebar-user'); return false;">로그인 / </a></li>
                                        <li style="float: left; "><a href="<?php echo $at_href['reg'];?>"> 회원가입 / </a></li>
                                        <li style="float: left; "><a href="<?php echo $at_href['mypage'];?>"> 마이페이지</a></li>
                                    <?php } ?>
                                    <?php if($is_member) { ?>
                                        <li  style="float: left; "><a href="<?php echo $at_href['logout'];?>">로그아웃 / </a></li>
                                        <li style="float: left; "><a href="<?php echo $at_href['mypage'];?>"> 마이페이지 /</a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </td>
                        <div class="clearfix"></div></td>

                        <td width="200px;">
                            <!-- PC Search -->
                            <div class="header-search" style="margin-bottom: -20px;">
                                <form name="tsearch" method="get" onsubmit="return tsearch_submit(this);" role="form" class="form">
                                    <input type="hidden" name="url"	value="<?php echo (IS_YC) ? $at_href['isearch'] : $at_href['search'];?>">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="stx" class="form-control input-sm" value="<?php echo $stx;?>">
								<span class="input-group-btn">
									<button type="submit" class="btn btn-sm"><i class="fa fa-search fa-lg"></i></button>
								</span>
                                    </div>
                                </form>
                            </div>
                            <div class="clearfix"></div></td>
                    </tr>
                    </tbody>
                </table></center>




            <!-- Mobile Header -->
            <div class="m-header">
                <div class="at-container">
                    <div class="header-wrap">
                        <div class="header-icon">
                            <a href="javascript:;" onclick="sidebar_open('sidebar-user');">
                                <i class="fa fa-user"></i>
                            </a>
                        </div>
                        <div class="header-logo en">
                            <!-- Mobile Logo -->
                            <a href="<?php echo $at_href['home'];?>">
                                <b>울트라브이</b>
                            </a>
                        </div>
                        <div class="header-icon">
                            <a href="javascript:;" onclick="sidebar_open('sidebar-search');">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </header>

        <div class="at-wrapper">
            <!-- Menu -->
            <nav class="at-menu">
                <!-- PC Menu -->
                <div class="pc-menu">
                    <!-- Menu Button & Right Icon Menu -->
                    <div class="at-container">
                        <div class="nav-right nav-rw nav-height">
                            <ul>
                                <?php if(IS_YC) { //영카트 ?>
                                    <li class="nav-show">
                                        <a href="<?php echo $at_href['cart'];?>" onclick="sidebar_open('sidebar-cart'); return false;"<?php echo tooltip('쇼핑');?>>
                                            <i class="fa fa-shopping-bag"></i>
                                            <?php if($member['cart'] || $member['today']) { ?>
                                                <span class="label bg-green en">
													<?php echo number_format($member['cart'] + $member['today']);?>
												</span>
                                            <?php } ?>
                                        </a>
                                    </li>
                                <?php } ?>
                                <li>
                                    <a href="javascript:;" onclick="sidebar_open('sidebar-response');"<?php echo tooltip('알림');?>>
                                        <i class="fa fa-bell"></i>
										<span class="label bg-orangered en"<?php echo ($member['response'] || $member['memo']) ? '' : ' style="display:none;"';?>>
											<span class="msgCount"><?php echo number_format($member['response'] + $member['memo']);?></span>
										</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" onclick="sidebar_open('sidebar-search');"<?php echo tooltip('검색');?>>
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                                <li class="menu-all-icon"<?php echo tooltip('전체메뉴');?>>
                                    <a href="javascript:;" data-toggle="collapse" data-target="#menu-all">
                                        <i class="fa fa-th"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <?php include_once(THEMA_PATH.'/menu.php');	// 메뉴 불러오기 ?>
                    <div class="clearfix"></div>
                    <div class="nav-back"></div>
                </div><!-- .pc-menu -->

                <!-- PC All Menu -->
                <div class="pc-menu-all">
                    <div id="menu-all" class="collapse">
                        <div class="at-container table-responsive">
                            <table>
                                <tr>
                                    <?php
                                    $az = 0;
                                    for ($i=1; $i < $menu_cnt; $i++) {

                                        if(!$menu[$i]['gr_id']) continue;

                                        // 줄나눔
                                        if($az && $az%$is_allm == 0) {
                                            echo '</tr><tr>'.PHP_EOL;
                                        }
                                        ?>
                                        <td>
                                            <a class="menu-a" href="<?php echo $menu[$i]['href'];?>"<?php echo $menu[$i]['target'];?>>
                                                <?php echo $menu[$i]['name'];?>
                                                <?php if($menu[$i]['new'] == "new") { ?>
                                                    <i class="fa fa-bolt new"></i>
                                                <?php } ?>
                                            </a>
                                            <?php if($menu[$i]['is_sub']) { //Is Sub Menu ?>
                                                <div class="sub-1div">
                                                    <ul class="sub-1dul">
                                                        <?php for($j=0; $j < count($menu[$i]['sub']); $j++) { ?>

                                                            <?php if($menu[$i]['sub'][$j]['line']) { //구분라인 ?>
                                                                <li class="sub-1line"><a><?php echo $menu[$i]['sub'][$j]['line'];?></a></li>
                                                            <?php } ?>

                                                            <li class="sub-1dli <?php echo $menu[$i]['sub'][$j]['on'];?>">
                                                                <a href="<?php echo $menu[$i]['sub'][$j]['href'];?>" class="sub-1da<?php echo ($menu[$i]['sub'][$j]['is_sub']) ? ' sub-icon' : '';?>"<?php echo $menu[$i]['sub'][$j]['target'];?>>
                                                                    <?php echo $menu[$i]['sub'][$j]['name'];?>
                                                                    <?php if($menu[$i]['sub'][$j]['new'] == "new") { ?>
                                                                        <i class="fa fa-bolt sub-1new"></i>
                                                                    <?php } ?>
                                                                </a>
                                                            </li>
                                                        <?php } //for ?>
                                                    </ul>
                                                </div>
                                            <?php } ?>
                                        </td>
                                        <?php $az++; } //for ?>
                                </tr>
                            </table>
                            <div class="menu-all-btn">
                                <div class="btn-group">
                                    <a class="btn btn-lightgray" href="<?php echo $at_href['main'];?>"><i class="fa fa-home"></i></a>
                                    <a href="javascript:;" class="btn btn-lightgray" data-toggle="collapse" data-target="#menu-all"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .pc-menu-all -->

                <!-- Mobile Menu -->
                <div class="m-menu">
                    <?php include_once(THEMA_PATH.'/menu-m.php');	// 메뉴 불러오기 ?>
                </div><!-- .m-menu -->
            </nav><!-- .at-menu -->

            <div class="clearfix"></div>

            <?php if($page_title) { // 페이지 타이틀 ?>
                <div class="at-title">
                    <div class="at-container">
                        <div class="page-title en">
                            <strong<?php echo ($bo_table) ? " class=\"cursor\" onclick=\"go_page('".G5_BBS_URL."/board.php?bo_table=".$bo_table."');\"" : "";?>>
                                <?php echo $page_title;?>
                            </strong>
                        </div>
                        <?php if($page_desc) { // 페이지 설명글 ?>
                            <div class="page-desc hidden-xs">
                                <?php echo $page_desc;?>
                            </div>
                        <?php } ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            <?php } ?>

            <?php
            // Wing : 메인에서 윙(wing) 출력은 메인파일 자체에서 include
            if(!$is_index && $is_wing) {
                @include_once(THEMA_PATH.'/wing.php');
            }
            ?>

            <div class="at-body">
                <?php if($col_name) { ?>
                <div class="at-container">
                    <?php if($col_name == "two") { ?>
                    <div class="row at-row">
                        <div class="col-md-<?php echo $col_content;?><?php echo ($at_set['side']) ? ' pull-right' : '';?> at-col at-main">
                            <?php } else { ?>
                            <div class="at-content">
                                <?php } ?>
                                <?php } ?>
