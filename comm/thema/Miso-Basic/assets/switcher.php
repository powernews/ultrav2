<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_ADMIN_PATH.'/apms_admin/apms.admin.lib.php');

// 테마스킨
$tmain = apms_file_list('thema/'.THEMA.'/main', 'php');
$tside = apms_file_list('thema/'.THEMA.'/side', 'php');
?>

<script>
	var sw_url = "<?php echo THEMA_URL;?>";
	var sw_bgcolor = "<?php echo $at_set['body_bgcolor'];?>";
</script>
<link rel="stylesheet" href="<?php echo THEMA_URL;?>/assets/css/switcher.css">
<link rel="stylesheet" href="<?php echo THEMA_URL;?>/assets/css/spectrum.css">
<script src="<?php echo THEMA_URL;?>/assets/js/switcher.js"></script>
<script src="<?php echo THEMA_URL;?>/assets/js/spectrum.js"></script>
<style>
	#style-switcher { position: <?php echo (isset($at_set['sfix']) && $at_set['sfix']) ? 'absolute' : 'fixed';?>; }
</style>
<section id="style-switcher">
	<?php if($is_demo) { ?>
		<a href="#" class="demo-setup" title="데모 설정"><i class="fa fa-cog fa-lg"></i> 데모설정</a>
	<?php } ?>
	<a href="#" class="widget-setup" title="위젯 설정"><i class="fa fa-cogs"></i></a>
	<h2>Style Switcher <a href="#" title="레이아웃 설정"><i class="fa fa-desktop"></i></a></h2>
	<div>
		<div class="switcher-style">
			<h3>
				<label>
					<span class="pull-right"><input type="checkbox" id="switcher-fixed" name="sfix" value="1"<?php echo ($at_set['sfix']) ? ' checked' : '';?>></span>
					<b class="en">1. Switcher 고정 해제</b>
				</label>
			</h3>
		</div>
		<?php if($is_admin && !$pv) { // 관리자일 경우에만 컬러셋 변경과 값저장 가능하도록 함 ?>
			<form id="themaSwitcher" name="themaSwitcher" action="<?php echo $at_href['switcher_submit'];?>" method="post" onsubmit="return switcher_submit(this);">
			<input type="hidden" name="sw_type" value="<?php echo $sw_type;?>">
			<input type="hidden" name="sw_code" value="<?php echo $sw_code;?>">
			<input type="hidden" name="sw_thema" value="<?php echo THEMA;?>">
			<input type="hidden" name="url" value="<?php echo urldecode($urlencode);?>">
			<input type="hidden" name="at_set[thema]" value="<?php echo THEMA;?>">
		<?php } ?>
		<h3>2. Thema Colorset</h3>
		<div class="layout-style">
			<select id="colorset-style" name="colorset">
				<?php //Colorset
					$srow = thema_switcher('thema', 'colorset', COLORSET);
					for($i=0; $i < count($srow); $i++) {
				?>
					 <option value="<?php echo $srow[$i]['value'];?>"<?php echo ($srow[$i]['selected']) ? ' selected' : '';?>>
						<?php echo $srow[$i]['name'];?>
					</option>
				<?php } ?>
			</select>

			<select id="wrapper-style" name="at_set[wrapper]">
				<option value="">기본컬러</option>
				<option value="wrapper-red"<?php echo ($at_set['wrapper'] == "wrapper-red") ? ' selected' : '';?>>레드</option>
				<option value="wrapper-crimson"<?php echo ($at_set['wrapper'] == "wrapper-crimson") ? ' selected' : '';?>>크림슨</option>
				<option value="wrapper-orangered"<?php echo ($at_set['wrapper'] == "wrapper-orangered") ? ' selected' : '';?>>오렌지레드</option>
				<option value="wrapper-orange"<?php echo ($at_set['wrapper'] == "wrapper-orange") ? ' selected' : '';?>>오렌지</option>
				<option value="wrapper-green"<?php echo ($at_set['wrapper'] == "wrapper-green") ? ' selected' : '';?>>그린</option>
				<option value="wrapper-blue"<?php echo ($at_set['wrapper'] == "wrapper-blue") ? ' selected' : '';?>>블루</option>
				<option value="wrapper-skyblue"<?php echo ($at_set['wrapper'] == "wrapper-skyblue") ? ' selected' : '';?>>스카이블루</option>
				<option value="wrapper-deepblue"<?php echo ($at_set['wrapper'] == "wrapper-deepblue") ? ' selected' : '';?>>딥블루</option>
				<option value="wrapper-violet"<?php echo ($at_set['wrapper'] == "wrapper-violet") ? ' selected' : '';?>>바이올릿</option>
				<option value="wrapper-navy"<?php echo ($at_set['wrapper'] == "wrapper-navy") ? ' selected' : '';?>>네이비</option>
			</select>
		</div>

		<h3>3. PC Mode Style</h3>
		<div class="layout-style">
			<select id="pc-style" name="at_set[pc]">
				<option value="">반응형 PC모드</option>
				<option value="1"<?php echo ($at_set['pc'] == "1") ? ' selected' : '';?>>비반응형 PC모드</option>
			</select>
		</div>

		<h3>4. Layout Style</h3>
		<div class="layout-style">
			<select id="layout-style" name="at_set[layout]">
				<option value="">와이드</option>
				<option value="boxed"<?php echo ($at_set['layout'] == "boxed") ? ' selected' : '';?>>박스형</option>
			</select>
		</div>

		<h3>5. Body Background</h3>
		<input type='hidden' id="input-body-background" name="at_set[body_background]" value="<?php echo $at_set['body_background'];?>">
		<div class="color-style">
			<input type='text' class="body-bgcolor" name="at_set[body_bgcolor]" value="<?php echo $at_set['body_bgcolor'];?>">
		</div>
		<p style="padding:8px 0px;">
			<a role="button" class="switcher-win btn btn-black btn-sm btn-block" target="_balnk" href="<?php echo $at_href['switcher'];?>&amp;type=html&amp;fid=input-body-background&amp;cid=body-background">
				<i class="fa fa-picture-o"></i> 배경이미지선택
			</a>
		</p>

		<h3>6. Page Title Background</h3>
		<input type='hidden' id="input-page-title" name="at_set[page_title]" value="<?php echo $at_set['page_title'];?>">
		<div class="layout-style">
			<a role="button" class="switcher-win btn btn-black btn-sm btn-block" target="_balnk" href="<?php echo $at_href['switcher'];?>&amp;fid=input-page-title&amp;cid=page-title">
				<i class="fa fa-picture-o"></i> 배경이미지선택
			</a>
			<p class="text-center" style="padding-top:6px;">
				상단위치
				<input type="text" name="at_set[page_top]" value="<?php echo $at_set['page_top'];?>" style="width:40px;">
				%
			</p>
		</div>

		<h3>7. LNB Style</h3>
		<div class="layout-style">
			<select id="lnb-style" name="at_set[lnb]">
				<option value="">화이트</option>
				<option value="at-lnb-gray"<?php echo ($at_set['lnb'] == "at-lnb-gray") ? ' selected' : '';?>>그레이</option>
				<option value="at-lnb-dark"<?php echo ($at_set['lnb'] == "at-lnb-dark") ? ' selected' : '';?>>블랙</option>
			</select>
		</div>

		<h3>8. Header Style</h3>
		<div class="layout-style">
			<select id="header-style" name="at_set[head]">
				<option value="">기본스타일</option>
				<option value="1"<?php echo ($at_set['head'] == "1") ? ' selected' : '';?>>스타일 #1</option>
				<option value="2"<?php echo ($at_set['head'] == "2") ? ' selected' : '';?>>스타일 #2</option>
				<option value="3"<?php echo ($at_set['head'] == "3") ? ' selected' : '';?>>스타일 #3</option>
				<option value="4"<?php echo ($at_set['head'] == "4") ? ' selected' : '';?>>스타일 #4</option>
				<option value="5"<?php echo ($at_set['head'] == "5") ? ' selected' : '';?>>스타일 #5</option>
				<option value="6"<?php echo ($at_set['head'] == "6") ? ' selected' : '';?>>스타일 #6</option>
				<option value="7"<?php echo ($at_set['head'] == "7") ? ' selected' : '';?>>스타일 #7</option>
			</select>
			<select id="header-fixed" name="at_set[header]">
				<option value="">일반헤더</option>
				<option value="1"<?php echo ($at_set['header']) ? ' selected' : '';?>>상단고정</option>
			</select>
		</div>

		<h3>9. Menu Style</h3>
		<div class="layout-style">
			<select id="menu-style" name="at_set[menu]">
				<option value="">일반형</option>
				<option value="navbar-contrasted"<?php echo ($at_set['menu'] == "navbar-contrasted") ? ' selected' : '';?>>반전형</option>
			</select>
		</div>

		<h3>10. Content Style</h3>
		<div class="layout-style">
			<select id="content-style" name="at_set[content]">
				<option value="">기본</option>
				<option value="1"<?php echo ($at_set['content'] == "1") ? ' selected' : '';?>>스타일 #01</option>
				<option value="2"<?php echo ($at_set['content'] == "2") ? ' selected' : '';?>>스타일 #02</option>
				<option value="3"<?php echo ($at_set['content'] == "3") ? ' selected' : '';?>>스타일 #03</option>
				<option value="4"<?php echo ($at_set['content'] == "4") ? ' selected' : '';?>>스타일 #04</option>
				<option value="5"<?php echo ($at_set['content'] == "5") ? ' selected' : '';?>>스타일 #05</option>
			</select>
		</div>

		<h3>11. Main Skin - Save</h3>
		<div class="layout-style">
			<select name="at_set[mfile]" required>
				<option value="">메인선택</option>
				<?php for ($i=0; $i<count($tmain); $i++) { ?>
					<option value="<?php echo $tmain[$i];?>"<?php echo get_selected($at_set['mfile'], $tmain[$i]);?>><?php echo $tmain[$i];?></option>
				<?php } ?>
			</select>
		</div>
		<h3>12. Page Style - Save</h3>
		<div class="layout-style">
			<select id="page-style" name="at_set[page]">
				<option value="9">2단 - 라지 컨텐츠</option>
				<option value="8"<?php echo ($at_set['page'] == "8") ? ' selected' : '';?>>2단 - 미디엄 컨텐츠</option>
				<option value="7"<?php echo ($at_set['page'] == "7") ? ' selected' : '';?>>2단 - 스몰 컨텐츠</option>
				<option value="12"<?php echo ($at_set['page'] == "12") ? ' selected' : '';?>>1단 - 박스형</option>
				<option value="13"<?php echo ($at_set['page'] == "13") ? ' selected' : '';?>>1단 - 와이드</option>
			</select>
		</div>

		<h3>13. Page Side Style - Save</h3>
		<div class="layout-style">
			<select id="side-style" name="at_set[side]">
				<option value="">오른쪽 사이드</option>
				<option value="1"<?php echo ($at_set['side']) ? ' selected' : '';?>>왼쪽 사이드</option>
			</select>
		</div>

		<h3>14. Page Side Skin - Save</h3>
		<div class="layout-style">
			<select name="at_set[sfile]" required>
				<option value="">사이드선택</option>
				<?php for ($i=0; $i<count($tside); $i++) { ?>
					<option value="<?php echo $tside[$i];?>"<?php echo get_selected($at_set['sfile'], $tside[$i]);?>><?php echo $tside[$i];?></option>
				<?php } ?>
			</select>
		</div>

		<h3>15. Font Style</h3>
		<div class="layout-style">
			<select id="font-style" name="at_set[font]">
				<option value="ko"<?php echo ($at_set['font'] == "ko") ? ' selected' : '';?>>한글폰트</option>
				<option value="en"<?php echo ($at_set['font'] == "en") ? ' selected' : '';?>>영문폰트</option>
			</select>
		</div>
		<?php if($is_admin && !$pv) { // 관리자일 경우에만 컬러셋 변경과 값저장 가능하도록 함 ?>
				<div class="save-style at-thema">
					<button class="btn btn-black btn-sm btn-block" type="submit"><i class="fa fa-check"></i> 저장하기</button>
				</div>
			</form>
			<script>
				function switcher_submit(f) {
					if(confirm("<?php echo $sw_msg;?>의 설정으로 저장하시겠습니까?")) {
						return true;
					}
					return false;
				}
			</script>
		<?php } ?>
	</div>
</section>

<?php if($is_demo) { //데모 미리보기 설정 ?>
	<style>
		#demoModal .form-group { border-top:1px solid #ddd; padding-top:6px; }
	</style>
	<div class="modal fade" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form id="demoSwitcher" name="demoSwitcher" method="post" class="form-horizontal">
			<input type="hidden" name="dpv" value="1">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="demoModalLabel"><i class="fa fa-desktop"></i> Layout Style Preview</h4>
				</div>
				<div class="modal-body" style="padding-bottom:0px;">

					<div class="alert alert-warning" role="alert">
					 데모 사이트에 Switcher에서 설정 가능한 일부 항목을 적용하여 미리보기할 수 있습니다.<br>
					 기본 컬러셋(Basic 계열)만 포함되어 있고, 그 외 컬러셋은 별도 구매하셔야 합니다.
					</div>
			
					<div class="form-group" style="border:0px; padding-top:0px;">
						<label class="col-sm-2 control-label">컬러셋</label>
						<div class="col-sm-4">
							<select name="pvc" class="form-control input-sm">
								<?php //Colorset
									$srow = thema_switcher('thema', 'colorset', COLORSET);
									for($i=0; $i < count($srow); $i++) {
								?>
									 <option value="<?php echo $srow[$i]['value'];?>"<?php echo ($srow[$i]['selected']) ? ' selected' : '';?>>
										<?php echo $srow[$i]['name'];?>
									</option>
								<?php } ?>
							</select>
						</div>
						<div class="col-sm-4">
							<select name="dpv_wrapper" class="form-control input-sm">
								<option value="">기본컬러</option>
								<option value="wrapper-red"<?php echo ($at_set['wrapper'] == "wrapper-red") ? ' selected' : '';?>>레드</option>
								<option value="wrapper-crimson"<?php echo ($at_set['wrapper'] == "wrapper-crimson") ? ' selected' : '';?>>크림슨</option>
								<option value="wrapper-orangered"<?php echo ($at_set['wrapper'] == "wrapper-orangered") ? ' selected' : '';?>>오렌지레드</option>
								<option value="wrapper-orange"<?php echo ($at_set['wrapper'] == "wrapper-orange") ? ' selected' : '';?>>오렌지</option>
								<option value="wrapper-green"<?php echo ($at_set['wrapper'] == "wrapper-green") ? ' selected' : '';?>>그린</option>
								<option value="wrapper-blue"<?php echo ($at_set['wrapper'] == "wrapper-blue") ? ' selected' : '';?>>블루</option>
								<option value="wrapper-skyblue"<?php echo ($at_set['wrapper'] == "wrapper-skyblue") ? ' selected' : '';?>>스카이블루</option>
								<option value="wrapper-deepblue"<?php echo ($at_set['wrapper'] == "wrapper-deepblue") ? ' selected' : '';?>>딥블루</option>
								<option value="wrapper-violet"<?php echo ($at_set['wrapper'] == "wrapper-violet") ? ' selected' : '';?>>바이올릿</option>
								<option value="wrapper-navy"<?php echo ($at_set['wrapper'] == "wrapper-navy") ? ' selected' : '';?>>네이비</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">PC모드</label>
						<div class="col-sm-10">
							<label class="radio-inline">
								<input type="radio" name="dpv_pc" value="" <?php echo get_checked($at_set['pc'], "");?>> 반응형 PC 레이아웃
							</label>
							<label class="radio-inline">
								<input type="radio" name="dpv_pc" value="1" <?php echo get_checked($at_set['pc'], "1");?>> 비반응형 PC 레이아웃
							</label>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">레이아웃</label>
						<div class="col-sm-10">
							<label class="radio-inline">
								<input type="radio" name="dpv_layout" value="" <?php echo get_checked($at_set['layout'], "");?>> 와이드 스타일
							</label>
							<label class="radio-inline">
								<input type="radio" name="dpv_layout" value="boxed" <?php echo get_checked($at_set['layout'], "boxed");?>> 박스 스타일 &nbsp;
							</label>

							<input type='hidden' id="input-dpv-bg" name="dpv_bg" value="<?php echo $at_set['body_background'];?>">
							<a role="button" class="switcher-win btn btn-black btn-sm" target="_balnk" href="<?php echo $at_href['switcher'];?>&amp;type=html&amp;fid=input-dpv-bg&amp;cid=body-background">
								<i class="fa fa-check"></i> 배경이미지 설정
							</a>
						</div>
					  </div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">LNB</label>
						<div class="col-sm-10">
							<label class="radio-inline">
								<input type="radio" name="dpv_lnb" value="" <?php echo get_checked($at_set['lnb'], "");?>> 화이트
							</label>
							<label class="radio-inline">
								<input type="radio" name="dpv_lnb" value="at-lnb-gray" <?php echo get_checked($at_set['lnb'], "at-lnb-gray");?>> 그레이
							</label>
							<label class="radio-inline">
								<input type="radio" name="dpv_lnb" value="at-lnb-dark" <?php echo get_checked($at_set['lnb'], "at-lnb-dark");?>> 블랙
							</label>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">헤더</label>
						<div class="col-sm-10">
							<label class="radio-inline">
								<input type="radio" name="dpv_head" value="" <?php echo get_checked($at_set['head'], "");?>> 기본
							</label>
							<label class="radio-inline">
								<input type="radio" name="dpv_head" value="1" <?php echo get_checked($at_set['head'], "1");?>> #01
							</label>
							<label class="radio-inline">
								<input type="radio" name="dpv_head" value="2" <?php echo get_checked($at_set['head'], "2");?>> #02
							</label>
							<label class="radio-inline">
								<input type="radio" name="dpv_head" value="3" <?php echo get_checked($at_set['head'], "3");?>> #03
							</label>
							<label class="radio-inline">
								<input type="radio" name="dpv_head" value="4" <?php echo get_checked($at_set['head'], "4");?>> #04
							</label>
							<label class="radio-inline">
								<input type="radio" name="dpv_head" value="5" <?php echo get_checked($at_set['head'], "5");?>> #05
							</label>
							<label class="radio-inline">
								<input type="radio" name="dpv_head" value="6" <?php echo get_checked($at_set['head'], "6");?>> #06
							</label>
							<label class="radio-inline">
								<input type="radio" name="dpv_head" value="7" <?php echo get_checked($at_set['head'], "7");?>> #07
							</label>
						</div>
					  </div>

					<div class="form-group">
						<label class="col-sm-2 control-label">메뉴</label>
						<div class="col-sm-10">
							<label class="radio-inline">
								<input type="radio" name="dpv_menu" value="" <?php echo get_checked($at_set['menu'], "");?>> 일반 스타일
							</label>
							<label class="radio-inline">
								<input type="radio" name="dpv_menu" value="navbar-contrasted" <?php echo get_checked($at_set['menu'], "navbar-contrasted");?>> 반전 스타일
							</label>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">컨텐츠</label>
						<div class="col-sm-10">
							<label class="radio-inline">
								<input type="radio" name="dpv_content" value="" <?php echo get_checked($at_set['content'], "");?>> 기본
							</label>
							<label class="radio-inline">
								<input type="radio" name="dpv_content" value="1" <?php echo get_checked($at_set['content'], "1");?>> #01
							</label>
							<label class="radio-inline">
								<input type="radio" name="dpv_content" value="2" <?php echo get_checked($at_set['content'], "2");?>> #02
							</label>
							<label class="radio-inline">
								<input type="radio" name="dpv_content" value="3" <?php echo get_checked($at_set['content'], "3");?>> #03
							</label>
							<label class="radio-inline">
								<input type="radio" name="dpv_content" value="4" <?php echo get_checked($at_set['content'], "4");?>> #04
							</label>
							<label class="radio-inline">
								<input type="radio" name="dpv_content" value="5" <?php echo get_checked($at_set['content'], "5");?>> #05
							</label>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">폰트</label>
						<div class="col-sm-4">
							<label class="radio-inline">
								<input type="radio" name="dpv_font" value="ko" <?php echo get_checked($at_set['font'], "ko");?>> 한글폰트
							</label>
							<label class="radio-inline">
								<input type="radio" name="dpv_font" value="en" <?php echo get_checked($at_set['font'], "en");?>> 영문폰트
							</label>
						</div>
					</div>
		
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-color"><i class="fa fa-check"></i> 적용하기</button>
				</div>
			</div>
			</form>
		</div>
	</div>
	<?php if(!G5_IS_MOBILE) { ?>
	<script>
	var pc_responsive = "<?php echo $at_set['pc'];?>";
	$(function() {
		if(pc_responsive) {
			$(".thema-mode" ).attr("href", sw_url + "/assets/bs3/css/bootstrap-apms.min.css");
			$("body").removeClass("responsive");
			$("body").addClass("no-responsive");
		} else {
			$(".thema-mode").attr("href", sw_url + "/assets/bs3/css/bootstrap.min.css");
			$("body").removeClass("no-responsive");
			$("body").addClass("responsive");
		}
		$(".demo-setup").click(function(){
			$('#demoModal').modal();
		});
	});
	</script>
	<?php } ?>
<?php } ?>