/* ================================================================= */
/* Basic Thema Setup
====================================================================== */

window.console = window.console || (function(){
	var c = {}; c.log = c.warn = c.debug = c.info = c.error = c.time = c.dir = c.profile = c.clear = c.exception = c.trace = c.assert = function(){};
	return c;
})();

function switcher_background(type, fid, cid, url) {
	if(type == "html") {
		$("body").css("background-image", "url('" + url + "')");
	} else {
		$("." + cid).attr("style", "background-image:url('" + url + "')");
	}
	$("#" + fid).val(url);
	return false;
}

function switcher_bgcolor(color) {
	$("body").css("background-color", color.toHexString());
	return false;
}

jQuery(document).ready(function($) {

	//Switcher Open & Close
	$("#style-switcher h2 a").click(function(e){
		e.preventDefault();
		var div = $("#style-switcher");
		console.log(div.css("left"));
		if (div.css("left") === "-206px") {
			$("#style-switcher").animate({
				left: "0px"
			}); 
		} else {
			$("#style-switcher").animate({
				left: "-206px"
			});
		}
	});

	//Switcher Fixed & Relative
	$("#switcher-fixed").click(function(e){
		if($("#switcher-fixed").is(":checked")) {
			$("#style-switcher").css("position", "absolute");
		} else {
			$("#style-switcher").css("position", "fixed");
		}
		return true;
	});

	//ColorSet Style
	$("#colorset-style").change(function(e){
		var new_colorset = $(this).val();
		$(".thema-colorset" ).attr("href", sw_url + "/colorset/" + new_colorset + "/colorset.css");
		return false;
	});

	//Header Style
	$("#wrapper-style").change(function(e){
		var name = $(this).val();

		// Remove All Class
		$("#thema_wrapper").removeClass("wrapper-red");
		$("#thema_wrapper").removeClass("wrapper-crimson");
		$("#thema_wrapper").removeClass("wrapper-orangered");
		$("#thema_wrapper").removeClass("wrapper-orange");
		$("#thema_wrapper").removeClass("wrapper-green");
		$("#thema_wrapper").removeClass("wrapper-blue");
		$("#thema_wrapper").removeClass("wrapper-skyblue");
		$("#thema_wrapper").removeClass("wrapper-deepblue");
		$("#thema_wrapper").removeClass("wrapper-violet");
		$("#thema_wrapper").removeClass("wrapper-navy");

		// Add Select Class
		if(name) {
			$("#thema_wrapper").addClass(name);
		}
		$(window).resize();
	});

	//Layout Style
	$("#layout-style").change(function(e){
		var name = $(this).val();
		// Remove All Class
		$(".wrapper").removeClass("boxed"); 

		// Add Select Class
		$(".wrapper").addClass(name);
		$(window).resize();
	});

	//PC Style
	$("#pc-style").change(function(e){
		var new_mode = $(this).val();
		if(new_mode) {
			$(".thema-mode" ).attr("href", sw_url + "/assets/bs3/css/bootstrap-apms.min.css");
			$("body").removeClass("responsive");
			$("body").addClass("no-responsive");
		} else {
			$(".thema-mode").attr("href", sw_url + "/assets/bs3/css/bootstrap.min.css");
			$("body").removeClass("no-responsive");
			$("body").addClass("responsive");
		}
		return false;
	});

	//Background Color Change
	$(".body-bgcolor").spectrum({
		showInitial: true,
		color: sw_bgcolor,
		preferredFormat: "hex6",
		showInput: true,
		move: switcher_bgcolor
	});

	//LNB Style
	$("#lnb-style").change(function(e){
		var name = $(this).val();

		// Remove All Class
		$(".at-lnb").removeClass("at-lnb-gray");
		$(".at-lnb").removeClass("at-lnb-dark");

		// Add Select Class
		$(".at-lnb").addClass(name);
		$(window).resize();
	});

	//Header Style
	$("#header-style").change(function(e){
		var name = $(this).val();

		// Remove All Class
		$("#logo_head").removeClass("header-1");
		$("#logo_head").removeClass("header-2");
		$("#logo_head").removeClass("header-3");
		$("#logo_head").removeClass("header-4");
		$("#logo_head").removeClass("header-5");
		$("#logo_head").removeClass("header-6");
		$("#logo_head").removeClass("header-7");

		// Add Select Class
		if(name) {
			$("#logo_head").addClass("header-" + name);
		}
		$(window).resize();
	});

	//Menu Style
	$("#menu-style").change(function(e){
		var name = $(this).val();

		// Remove All Class
		$(".at-navbar").removeClass("navbar-contrasted");

		// Add Select Class
		$(".at-navbar").addClass(name);
		$(window).resize();
	});

	//Content Style
	$("#content-style").change(function(e){
		var name = $(this).val();

		// Remove All Class
		$("#at_container").removeClass("content-1");
		$("#at_container").removeClass("content-2");
		$("#at_container").removeClass("content-3");
		$("#at_container").removeClass("content-4");
		$("#at_container").removeClass("content-5");

		// Add Select Class
		if(name) {
			$("#at_container").addClass("content-" + name);
		}
		$(window).resize();
	});

	//Side Style
	$("#side-style").change(function(e){
		if($(this).val() == 1){
			$(".contentArea").addClass("pull-right");
			$(".sideArea").addClass("pull-left");
		} else{
			$(".contentArea").removeClass("pull-right");
			$(".sideArea").removeClass("pull-left");
		}
		$(window).resize();
	});	

	//Font Style
	$("#font-style").change(function(e){
		var name = $(this).val();

		// Remove All Class
		$(".wrapper").removeClass("ko"); 
		$(".wrapper").removeClass("en"); 

		// Add Select Class
		$(".wrapper").addClass(name);
		$(window).resize();
	});

    $('.switcher-win').click(function() {
		var new_win = window.open(this.href, 'win_switcher', 'left=100,top=100,width=600, height=600, scrollbars=1');
		new_win.focus();
        return false;
    });

});