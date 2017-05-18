<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

apms_script('code'); //코드출력 스크립트

?>

<div class="bg-white">
	<?php echo apms_widget('miso-slider', 'mbt-title-manual', 'effect=fade shadow=2', 'slider_h=56'); // 타이틀 위젯  ?>

	<div class="container">

		<h2 class="text-center" style="margin:20px 0px 0px; letter-spacing:-2px;">
			<i class="fa fa-quote-left font-18" style="vertical-align:top"></i>
			미소 <span class="red">베이직</span> 테마
			<i class="fa fa-quote-right font-18" style="vertical-align:top"></i>
		</h2>

		<div class="h15"></div>

		<p class="text-center text-muted">
			좌측상단의 Switcher에서 다양한 레이아웃 설정 등을 테스트해 보실 수 있습니다.
		</p>

		<?php echo apms_line('fa', 'fa-book');?>

		<div class="row">
			<div class="col-sm-4">
				<h4 class="div-title-underline-thin">
					<i class="fa fa-leaf"></i> 이용안내
				</h4>
				<p>
					본 테마는 <b class="red font-16 en">APMS 1.4.2</b> 이상버전에서만 사용할 수 있습니다.
				</p>
			</div>
			<div class="col-sm-8">
				<ul class="div-ul">
					<li><i class="fa fa-star circle tiny bg-red"></i> <b class="red font-16 en">APMS 1.4.2</b> 이상부터 사용가능하며, <b>G5용 커뮤니티 테마와 YC5용 쇼핑몰 테마</b>가 각각 있습니다.</li>
					<li><i class="fa fa-star circle tiny bg-red"></i> 본 테마의 구성물 중 일부 위젯이나 페이지스킨의 경우 커뮤니티와 쇼핑몰 테마에 공용으로 포함되어 있습니다.</li>
					<li><i class="fa fa-star circle tiny bg-red"></i> 본 데모 사이트의 기본 보드스킨 및 기본 페이지는 APMS 기본 스킨 또는 아미나 일반 자료실에 무료로 공개된 스킨들입니다.</li>
					<li><i class="fa fa-check circle tiny bg-green"></i> HTML5, CSS3, Bootstrap 3를 이용한 PC & Mobile 통합 반응형 레이아웃이지만, PC 버전의 비반응형 모드도 같이 지원합니다.</li>
					<li><i class="fa fa-check circle tiny bg-green"></i> Switcher 설정으로 다양하게 레이아웃, 메인 스타일, 사이드 스타일을 적용과, 배경이미지, 페이지 타이틀 설정 등이 가능합니다.</li>
					<li><i class="fa fa-check circle tiny bg-green"></i> IE8 이상, Chrome, Firefox, Safari, Opera 등을 지원합니다.</li>
					<li><i class="fa fa-check circle tiny bg-green"></i> 단, IE8의 경우 CSS3 미지원으로 일부 위젯의 경우 정상출력되지 않을 수 있습니다.</li>
				</ul>
			</div>
		</div>

		<div class="h40"></div>

		<div class="row">
			<div class="col-sm-4">
				<h4 class="div-title-underline-thin">
					<i class="fa fa-bell"></i> 라이센스
				</h4>
				<p>
					본 테마의 라이센스 및 제한사항은 다음과 같습니다.
				</p>
			</div>
			<div class="col-sm-8">
				<ul class="div-ul">
					<li><i class="fa fa-check circle tiny bg-green"></i> 개인용 스텐다드 라이센스와 재판매용 리세일 라이센스만 있습니다.</li>
					<li><i class="fa fa-check circle tiny bg-green"></i> 재판매는 템플(http://themple.amina.co.kr)에서만 가능합니다.</li>
					<li><i class="fa fa-check circle tiny bg-green"></i> 재판매시 테마의 구성물을 분할해서 개별 재판매 할 수 있습니다.</li>
					<li><i class="fa fa-check circle tiny bg-green"></i> 재판매시 테마의 구성물에 별도의 위젯이나 스킨을 추가하여 재판매 할 수 있습니다.</li>
				</ul>
			</div>
		</div>

		<div class="h15"></div>

		<?php echo apms_line('fa', 'fa-cog');?>

		<div class="row">
			<div class="col-sm-4">
				<h4 class="div-title-underline-thin">
					<i class="fa fa-download"></i> 테마설치
				</h4>
				<p>
					본 테마의 설치 및 적용방법은 다음과 같습니다.
				</p>
			</div>
			<div class="col-sm-8">
				<ul class="div-ul">
					<li><i class="fa fa-arrow-down circle tiny bg-orangered"></i> 다운받은 파일의 압축을 푼 후 /thema 폴더 내 Miso-Basic 폴더를 FTP로 APMS가 설치된 그누보드의 /thema 폴더 올려 주세요.</li>
					<li><i class="fa fa-arrow-down circle tiny bg-orangered"></i> 파일을 FTP로 계정에 올린 후 "관리자 > 테마관리 > 기본설정"에서 테마를 "<b>Miso-Basic</b>"으로 설정해 주시면 됩니다.</li>
					<li><i class="fa fa-arrow-down circle tiny bg-orangered"></i> 관리자에서 테마 적용후 사이트 좌측의 Switcher에서 사용할 메인스킨과 사이드스킨을 설정해 주세요.</li>
					<li><i class="fa fa-arrow-down circle tiny bg-orangered"></i> Switcher 설정은 PC/모바일 각각 설정해 주셔야 합니다.</li>
					<li><i class="fa fa-arrow-down circle tiny bg-orangered"></i> PC 설정을 하신 이후 사이트 하단의 모바일로 전환버튼을 클릭한 후 모바일도 설정해 주세요.</li>
					<li><i class="fa fa-arrow-down circle tiny bg-orangered"></i> Switcher에 있는 위젯설정 버튼을 클릭후 각 위젯을 설정해 주세요.</li>
				</ul>
			</div>
		</div>

		<div class="h40"></div>

		<div class="row">
			<div class="col-sm-4">
				<h4 class="div-title-underline-thin">
					<i class="fa fa-file-text-o"></i> 문서설치
				</h4>
				<p>
					일반문서를 설치 및 적용방법은 다음과 같습니다.
				</p>
			</div>
			<div class="col-sm-8">
				<ul class="div-ul">
					<li><i class="fa fa-arrow-down circle tiny bg-skyblue"></i> 테마 내 /page 폴더 안의 파일들이 일반문서입니다.</li>
					<li><i class="fa fa-arrow-down circle tiny bg-skyblue"></i> 해당 문서들을 FTP를 이용해서 /data/apms/page 폴더에 올려 주셔야 사용하실 수 있습니다.</li>
					<li><i class="fa fa-arrow-down circle tiny bg-skyblue"></i> 올릴 때 기존에 설치된 문서 또는 APMS 기본 문서의 경우 덮어쓰기 때문에 주의하시기 바랍니다.</li>
					<li><i class="fa fa-arrow-down circle tiny bg-skyblue"></i> /data/apms/page 폴더에 올린후 테마관리 > 일반문서의 문서목록에 올린 파일들이 표시됩니다.</li>
					<li><i class="fa fa-arrow-down circle tiny bg-skyblue"></i> 그럼 신규등록 또는 기존 문서파일 변경 후 보드그룹을 등록해 주시면 메뉴 등에서 사용하실 수 있습니다.</li>
					<li><i class="fa fa-arrow-down circle tiny bg-skyblue"></i> 각 문서는 APMS 기본 Shortcode 외의 내용에 대해서 해당 문서 최상단에 스타일 지정을 해 두었습니다.</li>
				</ul>
			</div>
		</div>

		<div class="h40"></div>

		<div class="row">
			<div class="col-sm-4">
				<h4 class="div-title-underline-thin">
					<i class="fa fa-columns"></i> 수정하기
				</h4>
				<p>
					메인, 사이드, 위젯 등 수정방법은 다음과 같습니다.
				</p>
			</div>
			<div class="col-sm-8">
				<ul class="div-ul">
					<li><i class="fa fa-check circle tiny bg-green"></i> 메인, 사이드, 위젯은 테마 내  /main, /side, /widget 폴더 안에 각각 설치되어 있습니다.</li>
					<li><i class="fa fa-check circle tiny bg-green"></i> 메인과 사이드는 Switcher에서 설정한 이름과 동일한 파일명의 PHP 파일을 수정해 주시면 됩니다.</li>
					<li><i class="fa fa-check circle tiny bg-green"></i> 위젯의 타이틀 및 링크 등은 직접 입력해 주셔야 합니다.</li>
					<li><i class="fa fa-check circle tiny bg-green"></i> 위젯의 CSS는 각 위젯 내에 있는 widget.css 파일을 수정해 주시면 됩니다.</li>
					<li><i class="fa fa-check circle tiny bg-green"></i> 메뉴 등 사이트 상단은 테마 내 head.php 또는 shop.head.php 파일을 수정해 주시면 됩니다.</li>
					<li><i class="fa fa-check circle tiny bg-green"></i> 카피라이터 등 사이트 하단은 tail.php 또는 shop.tail.php 파일을 수정해 주시면 됩니다.</li>
				</ul>
			</div>
		</div>

		<div class="h40"></div>

	</div>
</div>