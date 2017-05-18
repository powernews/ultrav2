<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 

// 수동메뉴설정
$hmenu = array();
$bmenu = array();
$tmenu = array();

if($mon && $pvm) $is_main = false; // 메인 스타일 보기일 때

$i = 0;

$msp = 'main';
$demo_href = $at_href['home'].'/?mon='.$msp.'&amp;pv='.THEMA.'&amp;pvm=';
$shmh = (IS_YC && IS_SHOP) ? 'main-shop-gallery-a' : 'main-basic-a';
$hmenu[$i]['new'] = 'old';
$hmenu[$i]['on'] = ($mon == $msp) ? true : false;
$hmenu[$i]['href'] = $demo_href.urlencode($shmh);
$hmenu[$i]['name'] = '메인 스타일';
$hmenu[$i]['is_sub'] = true;

$shmenu = array();
if(IS_YC && IS_SHOP) {
	$shmenu[] = array('main-shop-gallery-a', '갤러리형 A', '갤러리 스타일', 0);
	$shmenu[] = array('main-shop-gallery-b', '갤러리형 B', '', 0);
	$shmenu[] = array('main-shop-gallery-c', '갤러리형 C', '', 0);
	$shmenu[] = array('main-shop-gallery-d', '갤러리형 D', '', 0);
	$shmenu[] = array('main-shop-gallery-e', '갤러리형 E', '', 0);
	$shmenu[] = array('main-shop-gallery-f', '갤러리형 F', '', 0);
	$shmenu[] = array('main-shop-gallery-g', '갤러리형 G', '', 0);
	$shmenu[] = array('main-shop-gallery-h', '갤러리형 H', '', 0);
	$shmenu[] = array('main-shop-gallery-i', '갤러리형 I', '', 0);

	$shmenu[] = array('main-shop-photo-a', '포토형 A', '포토 스타일', 1);
	$shmenu[] = array('main-shop-photo-b', '포토형 B', '', 0);
	$shmenu[] = array('main-shop-photo-c', '포토형 C', '', 0);
	$shmenu[] = array('main-shop-photo-d', '포토형 D', '', 0);
	$shmenu[] = array('main-shop-photo-e', '포토형 E', '', 0);
	$shmenu[] = array('main-shop-photo-f', '포토형 F', '', 0);
	$shmenu[] = array('main-shop-photo-g', '포토형 G', '', 0);
	$shmenu[] = array('main-shop-photo-h', '포토형 H', '', 0);
	$shmenu[] = array('main-shop-photo-i', '포토형 I', '', 0);

	$shmenu[] = array('main-shop-webzine-a', '웹진형 A', '웹진 스타일', 1);
	$shmenu[] = array('main-shop-webzine-b', '웹진형 B', '', 0);
	$shmenu[] = array('main-shop-webzine-c', '웹진형 C', '', 0);
	$shmenu[] = array('main-shop-webzine-d', '웹진형 D', '', 0);
	$shmenu[] = array('main-shop-webzine-e', '웹진형 E', '', 0);
	$shmenu[] = array('main-shop-webzine-f', '웹진형 F', '', 0);

} else {
	$shmenu[] = array('main-basic-a', '기본형 A', '', 0);
	$shmenu[] = array('main-basic-b', '기본형 B', '', 0);
	$shmenu[] = array('main-basic-c', '기본형 C', '', 0);
	$shmenu[] = array('main-basic-d', '기본형 D', '', 0);
	$shmenu[] = array('main-basic-e', '기본형 E', '', 0);
	$shmenu[] = array('main-basic-f', '기본형 F', '', 0);
	$shmenu[] = array('main-community-a', '커뮤니티 A', '', 1);
	$shmenu[] = array('main-community-b', '커뮤니티 B', '', 0);
	$shmenu[] = array('main-community-c', '커뮤니티 C', '', 0);
	$shmenu[] = array('main-blog', '블로그', '', 0);
	$shmenu[] = array('main-company', '컴퍼니', '', 0);
	$shmenu[] = array('main-mobile', '모바일', '', 0);
}

for($j=0; $j < count($shmenu); $j++) {
	$hmenu[$i]['sub'][$j]['line'] = $shmenu[$j][2];
	$hmenu[$i]['sub'][$j]['sp'] = $shmenu[$j][3];
	$hmenu[$i]['sub'][$j]['on'] = ($pvm == $shmenu[$j][0]) ? true : false;
	$hmenu[$i]['sub'][$j]['href'] = $demo_href.urlencode($shmenu[$j][0]);
	$hmenu[$i]['sub'][$j]['name'] = $shmenu[$j][1];
	$hmenu[$i]['sub'][$j]['new'] = 'old';
	$hmenu[$i]['sub'][$j]['is_sub'] = false;
}

// 쇼핑몰 페이지
if(IS_YC && IS_SHOP) {
	// 상품 페이지
	unset($shmenu);
	$i++;
	$msp = 'it';
	$hmenu[$i]['new'] = 'old';
	$hmenu[$i]['on'] = ($mon == $msp) ? true : false;
	$hmenu[$i]['href'] = G5_SHOP_URL.'/list.php?ca_id=10&amp;mon='.$msp.'&amp;pv='.THEMA.'&amp;smode=list&amp;slist='.urlencode('miso-gallery');
	$hmenu[$i]['name'] = '상품 페이지';
	$hmenu[$i]['is_sub'] = true;

	$shmenu[] = array('list', '10', 'miso-gallery|1', '갤러리형 - 일반', '분류/이벤트 목록', 0);
	$shmenu[] = array('list', '10', 'miso-gallery|2', '갤러리형 - 더보기', '', 0);
	$shmenu[] = array('list', '10', 'miso-gallery|3', '갤러리형 - 무한스크롤', '', 0);
	$shmenu[] = array('list', '1020', 'miso-gallery|4', '갤러리형 - 일반/메이슨리', '', 0);
	$shmenu[] = array('list', '1020', 'miso-gallery|5', '갤러리형 - 더보기/메이슨리', '', 0);
	$shmenu[] = array('list', '1020', 'miso-gallery|6', '갤러리형 - 무한/메이슨리', '', 0);
	$shmenu[] = array('list', '10', 'miso-webzine|1', '웹진형 - 일반', '', 0);
	$shmenu[] = array('list', '10', 'miso-webzine|2', '웹진형 - 더보기', '', 0);
	$shmenu[] = array('list', '10', 'miso-webzine|3', '웹진형 - 무한스크롤', '', 0);
	$shmenu[] = array('list', '10', 'miso-photo|1', '포토형 - 일반', '', 0);
	$shmenu[] = array('list', '10', 'miso-photo|2', '포토형 - 더보기', '', 0);
	$shmenu[] = array('list', '10', 'miso-photo|3', '포토형 - 무한스크롤', '', 0);
	$shmenu[] = array('list', '1020', 'miso-photo|4', '포토형 - 일반/메이슨리', '', 0);
	$shmenu[] = array('list', '1020', 'miso-photo|5', '포토형 - 더보기/메이슨리', '', 0);
	$shmenu[] = array('list', '1020', 'miso-photo|6', '포토형 - 무한/메이슨리', '', 0);

	$shmenu[] = array('item', '399', 'miso-basic', '기본형 - 일반', '상품설명 페이지', 1);
	$shmenu[] = array('item', '395', 'miso-tabs', '기본형 - 탭스타일', '', 0);
	$shmenu[] = array('type', '', 'miso-gallery', '갤러리형', '상품유형 페이지', 0);
	$shmenu[] = array('type', '', 'miso-webzine', '웹진형', '', 0);
	$shmenu[] = array('type', '', 'miso-photo', '포토형', '', 0);
	$shmenu[] = array('search', '', 'miso-gallery', '갤러리형', '상품검색 페이지', 0);
	$shmenu[] = array('search', '', 'miso-webzine', '웹진형', '', 0);
	$shmenu[] = array('search', '', 'miso-photo', '포토형', '', 0);
	$shmenu[] = array('event', '', 'miso-event', '이벤트', '그밖에 페이지', 0);
	$shmenu[] = array('use', '', 'miso-use', '상품후기', '', 0);
	$shmenu[] = array('qa', '', 'miso-qa', '상품문의', '', 0);

	if(USE_PARTNER) {
		$shmenu[] = array('myshop', '', 'miso-gallery', '갤러리형', '마이샵 페이지', 1);
		$shmenu[] = array('myshop', '', 'miso-webzine', '웹진형', '', 0);
		$shmenu[] = array('myshop', '', 'miso-photo', '포토형', '', 0);
	}

	for($j=0; $j < count($shmenu); $j++) {
		$hmenu[$i]['sub'][$j]['line'] = $shmenu[$j][4];
		$hmenu[$i]['sub'][$j]['sp'] = $shmenu[$j][5];
		$hmenu[$i]['sub'][$j]['on'] = ($hmenu[$i]['on'] && $smode == $shmenu[$j][0] && ($slist == $shmenu[$j][2] || $sitem == $shmenu[$j][2])) ? true : false;
		switch($shmenu[$j][0]) {
			case 'list'		: $demo_mode = 'list.php?ca_id='.$shmenu[$j][1].'&amp;slist='; break;
			case 'item'		: $demo_mode = 'item.php?it_id='.$shmenu[$j][1].'&amp;sitem='; break;
			case 'type'		: $demo_mode = 'listtype.php?slist='; break;
			case 'search'	: $demo_mode = 'search.php?slist='; break;
			case 'myshop'	: $demo_mode = 'myshop.php?id=amina&amp;slist='; break;
			case 'event'	: $demo_mode = 'event.php?slist='; break;
			case 'use'		: $demo_mode = 'itemuselist.php?slist='; break;
			case 'qa'		: $demo_mode = 'itemqalist.php?slist='; break;
			default			: $demo_mode = 'list.php?ca_id='.$shmenu[$j][1].'&amp;slist='; break;
		}
		$hmenu[$i]['sub'][$j]['href'] = G5_SHOP_URL.'/'.$demo_mode.urlencode($shmenu[$j][2]).'&amp;smode='.$shmenu[$j][0].'&amp;mon='.$msp.'&amp;pv='.THEMA;
		$hmenu[$i]['sub'][$j]['name'] = $shmenu[$j][3];
		$hmenu[$i]['sub'][$j]['new'] = 'old';
		$hmenu[$i]['sub'][$j]['is_sub'] = false;
	}
}

// 일반 페이지
unset($shmenu);
$i++;
$msp = 'hid';
$demo_href = G5_BBS_URL.'/page.php?mon='.$msp.'&amp;pv='.THEMA.'&amp;hid=';
$hmenu[$i]['new'] = 'old';
$hmenu[$i]['on'] = ($mon == $msp) ? true : false;
$hmenu[$i]['href'] = $demo_href.urlencode('cp-company');
$hmenu[$i]['name'] = '일반 페이지';
$hmenu[$i]['is_sub'] = true;

$shmenu[] = array('cp-company', '회사개요', '', 0);
$shmenu[] = array('cp-greeting', 'CEO 인사말', '', 0);
$shmenu[] = array('cp-business', '사업영역', '', 0);
$shmenu[] = array('cp-organization', '조직도', '', 0);
$shmenu[] = array('cp-recruit', '인재채용', '', 0);
$shmenu[] = array('cp-history', '연혁', '', 0);
$shmenu[] = array('cp-location', '오시는 길', '', 0);

$shmenu[] = array('intro', '사이트 소개', '일반 페이지', 1);
$shmenu[] = array('provision', '이용약관', '', 0);
$shmenu[] = array('privacy', '개인정보 취급방침', '', 0);
$shmenu[] = array('noemail', '이메일 무단수집거부', '', 0);
$shmenu[] = array('disclaimer', '책임의 한계와 법적고지', '', 0);
$shmenu[] = array('guide', '이용안내', '', 0);

for($j=0; $j < count($shmenu); $j++) {
	$hmenu[$i]['sub'][$j]['line'] = $shmenu[$j][2];
	$hmenu[$i]['sub'][$j]['sp'] = $shmenu[$j][3];
	$hmenu[$i]['sub'][$j]['on'] = ($hid == $shmenu[$j][0]) ? true : false;
	$hmenu[$i]['sub'][$j]['href'] = $demo_href.urlencode($shmenu[$j][0]);
	$hmenu[$i]['sub'][$j]['name'] = $shmenu[$j][1];
	$hmenu[$i]['sub'][$j]['new'] = 'old';
	$hmenu[$i]['sub'][$j]['is_sub'] = false;
}

// 페이지 타이틀
if(isset($hid) && $hid) {
	switch($hid) {
		case 'cp-company'		: $page_title = '<i class="fa fa-university"></i> Company'; $page_desc = '회사소개'; break;
		case 'cp-greeting'		: $page_title = '<i class="fa fa-smile-o"></i> Greeting'; $page_desc = 'CEO 인사말'; break;
		case 'cp-business'		: $page_title = '<i class="fa fa-cubes"></i> Business'; $page_desc = '사업영역'; break;
		case 'cp-organization'	: $page_title = '<i class="fa fa-sitemap"></i> Organization'; $page_desc = '조직도'; break;
		case 'cp-recruit'		: $page_title = '<i class="fa fa-heart"></i> Recruit'; $page_desc = '인재채용'; break;
		case 'cp-history'		: $page_title = '<i class="fa fa-history"></i> History'; $page_desc = '연혁'; break;
		case 'cp-location'		: $page_title = '<i class="fa fa-compass"></i> Location'; $page_desc = '오시는 길'; break;

		case 'intro'			: $page_title = '<i class="fa fa-leaf"></i> Introduction'; $page_desc = '사이트 소개'; break;
		case 'provision'		: $page_title = '<i class="fa fa-check-circle"></i> Provision'; $page_desc = '서비스 이용약관'; break;
		case 'privacy'			: $page_title = '<i class="fa fa-plus-circle"></i> Privacy'; $page_desc = '개인정보 취급방침'; break;
		case 'noemail'			: $page_title = '<i class="fa fa-ban"></i> Rejection of E-mail Collection'; $page_desc = '이메일 무단수집거부'; break;
		case 'disclaimer'		: $page_title = '<i class="fa fa-minus-circle"></i> Lines of Responsibility'; $page_desc = '책임의 한계와 법적고지'; break;
		case 'guide'			: $page_title = '<i class="fa fa-info-circle"></i> User Guide'; $page_desc = '사이트 이용안내'; break;
	}

	if(!$page_desc) $page_desc = '테마관리 > 일반문서에서 타이틀 및 설명글 입력';
}

$t = 0;
@include_once(G5_BBS_PATH.'/demo.menu.php');

/*
$i++;
$demo_href = $at_href['home'].'/?pv='.THEMA.'&amp;pvc=';
$hmenu[$i]['new'] = 'old';
$hmenu[$i]['href'] = $demo_href.urlencode('Basic');
$hmenu[$i]['name'] = '컬러셋';
$hmenu[$i]['is_sub'] = true;

unset($shmenu);
$shmenu[] = array('Basic', '기본 컬러셋', '', 0);
for($j=0; $j < count($shmenu); $j++) {
	$hmenu[$i]['sub'][$j]['line'] = $shmenu[$j][2];
	$hmenu[$i]['sub'][$j]['sp'] = $shmenu[$j][3];
	$hmenu[$i]['sub'][$j]['on'] = ($colorset == $shmenu[$j][0]) ? true : false;
	$hmenu[$i]['sub'][$j]['href'] = $demo_href.urlencode($shmenu[$j][0]);
	$hmenu[$i]['sub'][$j]['name'] = $shmenu[$j][1];
	$hmenu[$i]['sub'][$j]['new'] = 'old';
	$hmenu[$i]['sub'][$j]['is_sub'] = false;
}
*/

/* 자동메뉴 재배열 
	- apms_array_menu('그룹,분류', '그룹 또는 분류 1개만', '그룹,분류')
	- 첫번째와 세번째 메뉴는 콤바(,)를 이용해서 복수등록 가능
*/

//$bmenu = (IS_YC && IS_SHOP) ? apms_array_menu('10,shop','','') : apms_array_menu('shop','','');

$bmenu = $menu[0];

// 매뉴 재설정
unset($menu);

// 메뉴 통계
$menu[0] = $bmenu;

$i = 1;
// Head Menu
for($j = 0; $j < count($hmenu); $j++) {
	$menu[$i] = $hmenu[$j];
	$i++;
}

// Body Menu
//for($j = 1; $j < count($bmenu); $j++) {
	//$menu[$i] = $bmenu[$j];
	//if($mon == 'side') $menu[$i]['on'] = false;
	//$i++;
//}

// Tail Menu
for($j = 0; $j < count($tmenu); $j++) {
	$menu[$i] = $tmenu[$j];
	$i++;
}

?>