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

	<div class="container-fluid twhite tace dp1" style="height:50px; background-color: #555555;">
		<div class="h015"></div>
		<table width="100%">
			<tr>
				<td width="125" align="left" class="cp1" onclick="location.href='<?=site_url("Main/vPage/$boardName")?>'">< 돌아가기</td>
				<td align="left"><b>방명록</b></td>
			</tr>
		</table>
	</div>
	<div class="container-fluid pdg00" style="background-color: #EEEEEE;">
		<img src="/images/bg-guestbook.jpg" width="100%">
		<center>
		<div class="h030"></div>
		<div class="container-fluid">
			<form method="post" action="<?=site_url('Main/btnSubmit')?>">
				<style type="text/css">
					input::placeholder {color:silver;}
					textarea::placeholder {
						color: silver;
					}
				</style>
				<input type="hidden" name="bdName" value="<?=$this->uri->segment(3,0)?>">
				<table width="100%">		 	
					<tr>
						<td><input type="text" name="name" placeholder="이름" style="padding-left:10px; width: 100%; height: 35px;"></td>
					</tr>
					<tr style="height: 5px;"></tr>
					<tr>
						<td>
							<textarea placeholder="내용을 입력해주세요 (비방, 욕설, 정치적성향의 글은 임의로 삭제되며 형사처벌의 대상이 될 수 있습니다.)" name="contents" style="padding:10px; width:100%; height: 150px; line-height: 1.5;"></textarea>
						</td>
					</tr>
					<tr style="height: 5px;"></tr>
					<tr>
						<td>
							<button type="submit" style="width:100%; height: 35px;">글쓰기</button>
						</td>
					</tr>
				</table>
			</form>		
		</div>
		<div class="h030"></div>		 
		<div class="h001"></div>
		<div class="container-fluid bgray">
			<div class="h020"></div>
			<table width="100%">
			<?php foreach ($data as $row) : ?>
			<?php if ($row['no'] > 1) : ?>
				<tr>
					<td class="cp3 we200 lt000 ln18 tale twhite"><?=$row['name']?> | <?=$row['modified']?></td>
				</tr>		 	
				<tr>
					<td class="cp2 we500 lt000 ln18 tale twhite">
						<b><?=$row['contents']?></b>
					</td>
				</tr>
				<tr style="height: 20px;"></tr>
			<?php endif ?>
			<?php endforeach ?>
			</table>		 
		</div>
	</div>

	</body>
</html>
