<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 

// 데모 설정
$demo_title = 'Miso Basic Thema 3.6 Preview';
$demo_config = array('bo_table' => 'basic', 'ca_id' => '10', 'ev_id' => '', 'bn_id' => '');

// 데모 레이아웃 설정값 저장하기
if(isset($dpv) && $dpv) { 
	$dpv_set = THEMA.'|'.$dpv_pc.'|'.$dpv_layout.'|'.$dpv_bg.'|'.$dpv_lnb.'|'.$dpv_head.'|'.$dpv_menu.'|'.$dpv_content.'|'.$dpv_font.'|'.$dpv_wrapper;
	set_session('demo_set', $dpv_set);
}

// 데모 레이아웃 설정값 불러오기
$demo_set = get_session('demo_set');
list($demo_thema) = explode("|", $demo_set);
if($demo_thema && $demo_thema == THEMA) {
	list($demo_thema, $at_set['pc'], $at_set['layout'], $at_set['body_background'], $at_set['lnb'], $at_set['head'], $at_set['menu'], $at_set['content'], $at_set['font'], $at_set['wrapper']) = explode("|", $demo_set);
}

// 박스형 배경
if(isset($at_set['layout']) && $at_set['layout'] == "boxed" && !$at_set['body_background']) {
	$at_set['body_background'] = "http://amina.co.kr/demo/data/apms/background/1107.jpg";
}

// 페이지 타이틀
$at_set['page_title'] = THEMA_URL.'/assets/img/page.jpg';

// 메인 및 사이드 기본 파일
if(IS_YC && IS_SHOP) { // 쇼핑몰
	$at_set['mfile'] = 'main-manual';
	$at_set['sfile'] = 'side-shop';
} else {
	$at_set['mfile'] = 'main-manual';
	$at_set['sfile'] = 'side-blog';
}

//G5 데모 스킨 설정값
/*
$member_skin_path   = G5_SKIN_PATH.'/member/폴더명';
$member_skin_url    = G5_SKIN_URL.'/member/폴더명';
$new_skin_path      = G5_SKIN_PATH.'/new/폴더명';
$new_skin_url       = G5_SKIN_URL.'/new/폴더명';
$search_skin_path   = G5_SKIN_PATH.'/search/폴더명';
$search_skin_url    = G5_SKIN_URL.'/search/폴더명';
$connect_skin_path  = G5_SKIN_PATH.'/connect/폴더명';
$connect_skin_url   = G5_SKIN_URL.'/connect/폴더명';
$faq_skin_path      = G5_SKIN_PATH.'/connect/폴더명';
$faq_skin_url       = G5_SKIN_URL.'/faq/폴더명';
$tag_skin_path      = G5_SKIN_PATH.'/tag/폴더명';
$tag_skin_url       = G5_SKIN_URL.'/tag/폴더명';
$qa_skin_path       = G5_SKIN_PATH.'/qa/폴더명';
$qa_skin_url        = G5_SKIN_URL.'/qa/폴더명';

$board['bo_'.MOBILE_.'skin'] = 'apms-basic';
$board_skin_path = G5_SKIN_PATH.'/board/'.$board['bo_'.MOBILE_.'skin'];
$board_skin_url = G5_SKIN_PATH.'/board/'.$board['bo_'.MOBILE_.'skin'];
*/


//YC5 데모 스킨 설정값
if(!IS_YC || !IS_SHOP) return;

//$order_skin_path    = G5_SKIN_PATH.'/apms/order/폴더명';
//$order_skin_url     = G5_SKIN_URL.'/apms/order/폴더명';

//분류,이벤트 상품목록 & 상품설명스킨 - 추가설정값
if($ev_id || $ca_id || $it_id) {

	//페이지 스타일
	$at_set['page'] = 12;

	//목록 기본설정
	$list_mods = 4; //가로수
	$list_rows = (G5_IS_MOBILE) ? 3 : 4; //세로수
	$thumb_w = 400;// 썸네일 너비
	$thumb_h = 600;// 썸네일 높이

	//목록스킨에 따른 설정
	if($slist) set_session('slist', $slist);

	$tmp_slist = get_session('slist');

	list($ls, $lo) = explode("|", $tmp_slist);

	$list_skin = ($ls) ? $ls : 'miso-gallery';

	if($ls == 'miso-gallery' || $ls == 'miso-photo') { //갤러리형, 포토형
		$wset['masonry'] = 0;
		if($ls == 'miso-photo') {
			$wset['star'] = 'lightgreen';
		} else {
			$wset['shadow'] = 0;
		}
		$wset['cmt'] = 1;
		$wset['hit'] = 1;
		$wset['md'] = 3;
		$wset['sm'] = 2;
		$wset['xs'] = 1;
		switch($lo) {
			case '1'	: $wset['infi'] = 0; $wset['sns'] = 1; break; 
			case '2'	: $wset['infi'] = 1; $wset['sns'] = 1; break;
			case '3'	: $wset['infi'] = 2; $wset['sns'] = 1; break;
			case '4'	: $wset['infi'] = 0; $wset['masonry'] = 1; $thumb_h = 0; break;
			case '5'	: $wset['infi'] = 1; $wset['masonry'] = 1; $thumb_h = 0; break;
			case '6'	: $wset['infi'] = 2; $wset['masonry'] = 1; $thumb_h = 0; break;
			default		: $wset['infi'] = 1; $wset['sns'] = 1; break;
		}

	} else if($ls == 'miso-webzine') { //웹진형

		//페이지 스타일
		$at_set['page'] = 9;

		$thumb_h = 400; //썸네일 높이
		$list_mods = 8; //가로수
		$list_rows = 1; //세로수

		$wset['star'] = 'blue';
		$wset['buy'] = 1;
		$wset['good'] = 1;
		$wset['cmt'] = 1;
		$wset['hit'] = 1;
		$wset['sns'] = 1; 
		switch($lo) {
			case '1'	: $wset['infi'] = 0; break; 
			case '2'	: $wset['infi'] = 1; break;
			case '3'	: $wset['infi'] = 2; break;
			default		: $wset['infi'] = 1; break;
		}
	}


	//상품설명 스킨
	if($sitem) set_session('sitem', $sitem);

	$tmp_sitem = get_session('sitem');

	list($is, $io) = explode("|", $tmp_sitem);

	$item_skin = ($is) ? $is : 'miso-basic';

	$default['de_'.MOBILE_.'rel_img_width'] = 400;
	$default['de_'.MOBILE_.'rel_img_height'] = 400;
	$wset['ishadow'] = 0;
	$wset['rshadow'] = 0;
	$wset['rxs'] = 1;
	$wset['rgood'] = 1;
	$wset['rcmt'] = 1;
	$wset['rhit'] = 1;
	$wset['rsns'] = 1; 

	if($ls == 'miso-webzine') { //웹진형
		$itemrows['irelation_'.MOBILE_.'mods'] = 3;
		$itemrows['irelation_'.MOBILE_.'rows'] = 1;
		$wset['rmd'] = 3;
		$wset['rsm'] = 1;
	} else {
		$itemrows['irelation_'.MOBILE_.'mods'] = 4;
		$itemrows['irelation_'.MOBILE_.'rows'] = 1;
		$wset['rmd'] = 2;
		$wset['rsm'] = 2;
	}
}

//스킨 추가설정이 있는 페이지
if($pid == 'iuse') { //사용후기
	$skin_name = 'miso-use';

} else if($pid == 'iqa') { //상품문의
	$skin_name = 'miso-qa';

} else if($pid == 'iev') { //이벤트(전체)
	//페이지 스타일
	$at_set['page'] = 12;

	$skin_name = 'miso-event';
	$wset['shadow'] = 2;
	$wset['xs'] = 1;
	$wset['thumb'] = 1;
	$wset['thumb_w'] = 600;
	$wset['thumb_h'] = (int)(600 * 0.5625);

} else if($pid == 'itype' || $pid == 'isearch' || $pid == 'myshop') { //상품유형, 상품검색, 마이샵

	//페이지 스타일
	$at_set['page'] = 12;

	//목록 기본설정
	$list_mods = 4; //가로수
	$list_rows = (G5_IS_MOBILE) ? 3 : 4; //세로수
	$thumb_w = 400;// 썸네일 너비
	$thumb_h = 600;// 썸네일 높이

	//목록스킨에 따른 설정
	if($slist) set_session('slist', $slist);

	$tmp_slist = get_session('slist');

	list($ls, $lo) = explode("|", $tmp_slist);

	$skin_name = ($ls) ? $ls : 'miso-gallery';

	$wset['cmt'] = 1;
	$wset['hit'] = 1;
	$wset['sns'] = 1; 
	$wset['sm'] = 2; 
	$wset['xs'] = 1; 

	if($skin_name == 'miso-webzine') { //웹진형

		//페이지 스타일
		$at_set['page'] = 9;

		$thumb_h = 400; //썸네일 높이
		$list_mods = 8; //가로수
		$list_rows = 1; //세로수

		$wset['star'] = 'blue';
		$wset['buy'] = 1;
	}
} 
 
?>