<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 

// 사용안함 - 사용시 아래코드 지워 주세요.
return;

if(G5_IS_MOBILE) return; // 모바일에서는 출력하지 않습니다.

// 좌우측 내용에 맞도록 CSS는 수정하셔야 합니다.
?>

<style>
	.wing-left { position:absolute; left:0px; top:20px; padding:0px 15px; margin-left:-160px; }
	.wing-right { position:absolute; right:0px; top:20px; padding:0px 15px; margin-right:-160px; }
	.boxed .wing-left { margin-left:-190px; }
	.boxed .wing-right { margin-right:-190px; }
</style>	
<div class="wing-left visible-lg">
	<div style="width:160px; height:600px; line-height:600px; text-align:center; background:#fff; border:1px solid #ddd;">
		구글광고 등
	</div>
</div>

<div class="wing-right visible-lg">
	<div style="width:160px; height:600px; line-height:600px; text-align:center; background:#fff; border:1px solid #ddd;">
		구글광고 등
	</div>
</div>
