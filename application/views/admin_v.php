<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="ko">
	<head>
		<title>갤러리 어드민</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">		
		<meta property="og:title" content="갤러리용 사진 및 게시판 생성" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://www.allencarr.co.kr" />
		<meta property="og:image" content="http://www.allencarr.co.kr/images/allencarr_sns.png"/>
		<meta property="og:description" content="갤러리용 사진 및 게시판 생성">

		<!-- external css/js -->
		<link rel="stylesheet" type="text/css" href="/include/css/animate.css">
		<link rel="stylesheet" type="text/css" href="/include/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/include/css/swiper.css">
		<script type="text/javascript" src="/include/js/jquery.min.js"></script>
		<script type="text/javascript" src="/include/js/swiper.js"></script>	
		<script type="text/javascript" src="/include/js/bootstrap.min.js"></script>

		<!-- ac private css/js -->
		<link rel="stylesheet" type="text/css" href="/include/css/ac-font-line.css">
		<link rel="stylesheet" type="text/css" href="/include/css/ac-blank.css">
		<link rel="stylesheet" type="text/css" href="/include/css/ac-color.css">
		<link rel="stylesheet" type="text/css" href="/include/css/ac-div.css">
		<link rel="stylesheet" type="text/css" href="/include/css/ac-input.css">
		<link rel="stylesheet" type="text/css" href="/include/css/ac-swiper.css">			
	</head>
	<body class="bwhite">

	<div class="container">
		 <div class="h030"></div>
		 <form method="post" action="<?=site_url('Main/btnCreateApp')?>">
		 <table style="width:100%;">
		 	<tr>
		 		<td class="dp3">신청자명<br><br></td>
		 	</tr>
		 	<tr>
		 		<td><input type="text" name="name" style="height:35px; width: 100%;"></td>
		 	</tr>
		 	<tr style="height: 15px;"></tr>
		 	<tr>
		 		<td class="dp3">게시판명(영문+숫자 조합)<br><br></td>
		 	</tr>
		 	<tr>
		 		<td><input type="text" name="board_name" style="height:35px; width: 100%;"></td>
		 	</tr>
		 	<tr style="height: 15px;"></tr>
		 	<tr>
		 		<td width="250" class="dp3">결혼일<br><br></td>
		 	</tr>
		 	<tr>
		 		<td><input type="text" name="date" placeholder="2018-09-17" style="height:35px; width: 100%;"></td>
		 	</tr>
		 	<tr style="height: 35px;"></tr>
		 	<tr>
		 		<td colspan="2">
		 			<button  type="submit" style="width: 100%; height: 50px;">페이지 생성</button>
		 		</td>
		 	</tr>
		 </table>
		</form>

		<?php 
			$sql = 'show tables';		
			$query = $this->db->query($sql);
			$result = $query->result_array();
		 ?>		
		 <div class="h030"></div>
		 <p class="dp4"><b>현재 운영 중인 페이지 바로가기</b></p>
		 <p class="cp1">
		 	<?php foreach($result as $row) : ?>
		 	<?php 
		 		$tb_name = $row['Tables_in_db_ese'];
		 		$url = "Main/vPage/".$tb_name;
		 		$url = site_url($url);
		 	?>
		 		<a href="<?=$url?>"><?=$tb_name?></a>&nbsp;&nbsp;<font color=silver>|</font>&nbsp;
		 	<?php endforeach ?>
		 </p>
	</div>
	</body>
</html>
