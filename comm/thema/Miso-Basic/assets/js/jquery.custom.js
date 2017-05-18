// Response Count
function miso_response_check() {

	var $icons = $('.rspIcon');
	var $counts = $('.rspCount');
	var url = g5_url + '/thema/' + g5_thema + '/widget/response.php?count=1';

	$.get(url, function(data) {
		if (data.count > 0) {
			$counts.text(number_format(data.count));
			$icons.show();
		} else {
			$icons.hide();
		}
	}, "json");
}

// Time = 1000ms ex) 10sec = 10 * 1000
if(g5_is_member) {
	var misoResponse = setInterval(function() {
		miso_response_check();
	}, 10000);
}

// Side List
function miso_side(opt) {
	var url;
	switch(opt) {
		case 'rsp' : url = g5_url + '/thema/' + g5_thema + '/widget/response.php'; break
		case 'cart' : url = g5_url + '/thema/' + g5_thema + '/widget/cart.php'; break
	}

	if(url) $('#slistItem').load(url);
}

// Menu
function miso_menu(id){
	var menu = $("#" + id);
	if(menu.is(":visible")){
		menu.hide();
	} else {
		menu.show();
	}
	return false;
}

// More
function miso_more(id){
	var more = $('#' + id + ' .nav .active a');
	var href = more.attr("ref");
	if(href) {
		document.location.href = href;
	}
	return false;
}

// Search
function tsearch_submit(f) {
	if (f.stx.value.length < 2) {
		alert("검색어는 두글자 이상 입력하십시오.");
		f.stx.select();
		f.stx.focus();
		return false;
	}
	f.action = f.url.value;
	return true;
}

function tsearch_form(){
	$("#rspList").hide();
	$("#asideMenu").hide();
	if($("#search-mask").is(":visible")){
		$('#search-mask').hide();
		$('#search-window').hide();
	} else {
		$('#search-mask').fadeTo('',0.75).fadeIn();
		$('#search-window').fadeIn('slow');
	}
	return false;
}

$(function() {

	//Tooltip
	$('.at-tip').tooltip();

	// Menu
	$('#menu_all .menu-head').matchHeight();

	// Top
	//$().UItoTop({ easingType: 'easeOutQuart' });

	// Aside Menu
	$(".asideButton").click(function(){
		$("#sideList").hide();
		if($("#asideMenu").is(":visible")){
			$("#asideMenu").hide();
			$("body").removeClass("aside-menu-in");
		} else {
			$("body").addClass("aside-menu-in");
			$("#asideMenu").fadeIn();
		}
		return false;	
	});

	// Responsive
	$(".rspButton").click(function(){
		if(g5_is_member == "") {
			alert("로그인해 주세요.");
			return false;
		}
		miso_side('rsp');
		$("#sideList").fadeIn();
		return false;	
	});

	// Cart
	$(".cartButton").click(function(){
		miso_side('cart');
		$("#sideList").fadeIn();
		return false;	
	});

	// Side List Close
	$(".slistClose").click(function(){
		$("#sideList").hide();
		return false;	
	});

	// Tab Swipe
	$(".swipe-tab").swiperight(function(e) {
		e.preventDefault();
		var tab_id = $(this).attr("id");
		var $tab = $('#' + tab_id + ' .nav .active').prev();
		if ($tab.length > 0) {
			e.preventDefault()
			$tab.find('a').tab('show');
		}
		return false;
	});

	$(".swipe-tab").swipeleft(function(e) {
		e.preventDefault();
		var tab_id = $(this).attr("id");
		var $tab = $('#' + tab_id + ' .nav .active').next();
		if ($tab.length > 0) {
			$tab.find('a').tab('show');
		}
		return false;
	});
});
