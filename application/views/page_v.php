
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
	
	<meta property="og:title" content="결혼을 축하합니다." />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://neoeun1.cafe24.com/0809160sbk" />
	<meta property="og:image" content="http://neoeun1.cafe24.com/0809160sbk/thumb.jpg"/>
	<meta property="og:description" content="소중한 인연, 결혼을 축하합니다." />		

	<link rel="stylesheet" href="/include/swiper/dist/css/swiper.css">
	<link rel="stylesheet" href="/include/swiper/dist/css/swiper.min.css">
	<link href="/include/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">	


	<!-- 합쳐지고 최소화된 최신 CSS -->
	<script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?clientId=Iy0lX9pqFomNGmlOJBjN&submodules=geocoder"></script>
	<link rel="stylesheet" href="/include/css/bootstrap.min.css">

	<!-- ac private css/js -->
	<link rel="stylesheet" type="text/css" href="/include/css/ac-font-line.css">
	<link rel="stylesheet" type="text/css" href="/include/css/ac-blank.css">
	<link rel="stylesheet" type="text/css" href="/include/css/ac-color.css">
	<link rel="stylesheet" type="text/css" href="/include/css/ac-div.css">
	<link rel="stylesheet" type="text/css" href="/include/css/ac-input.css">
	<link rel="stylesheet" type="text/css" href="/include/css/ac-swiper.css">	
	
	<!-- Demo styles -->
	<style>
	html, body {
		position: relative;
		height: 100%;
	}
	body {
		background: #000;
		font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
		font-size: 14px;
		color:#000;
		margin: 0;
		padding: 0;
	}
	.swiper-container {
		width: 100%;
		height: 300px;
		margin-left: auto;
		margin-right: auto;
	}
	.swiper-slide {
		background-size: contain;
		background-position: center;
		background-repeat:  no-repeat;
		min-height: 100%;
	}
	.gallery-top {
		height: 40%;
		width: 100%;
	}
	.gallery-thumbs {
		height: 20%;
		box-sizing: border-box;
		padding: 10px;
	}
	.gallery-thumbs .swiper-slide {
		width: 25%;
		height: 100%;
		opacity: 0.2;
	}
	.gallery-thumbs .swiper-slide-active {
		opacity: 1;
	}
	</style>
</head>
<body>		
	<div class="container-fluid pdg-0" style="border-bottom: orange; background-color: white">
		<img src="/images/<?=$boardName?>/main.jpg" width="100%">
	</div>
	

	<!-- Swiper -->
	<audio src="/music/abc.mp3" preload controls autoplay style="visibility: hidden;"></audio>
	<div class="swiper-container gallery-top" >
		<div class="swiper-wrapper">
			<div class="swiper-slide" style="background-image:url('/images/<?=$boardName?>/1.jpg')" onclick="window.open('images/1.jpg');"></div>
			<div class="swiper-slide" style="background-image:url('/images/<?=$boardName?>/2.jpg')" onclick="window.open('images/2.jpg');"></div>
			<div class="swiper-slide" style="background-image:url('/images/<?=$boardName?>/3.jpg')" onclick="window.open('images/3.jpg');"></div>
			<div class="swiper-slide" style="background-image:url('/images/<?=$boardName?>/4.jpg')" onclick="window.open('images/4.jpg');"></div>
			<div class="swiper-slide" style="background-image:url('/images/<?=$boardName?>/5.jpg')" onclick="window.open('images/5.jpg');"></div>
			<div class="swiper-slide" style="background-image:url('/images/<?=$boardName?>/6.jpg')" onclick="window.open('images/6.jpg');"></div>
			<div class="swiper-slide" style="background-image:url('/images/<?=$boardName?>/7.jpg')" onclick="window.open('images/7.jpg');"></div>
			<div class="swiper-slide" style="background-image:url('/images/<?=$boardName?>/8.jpg')" onclick="window.open('images/8.jpg');"></div>
			<div class="swiper-slide" style="background-image:url('/images/<?=$boardName?>/9.jpg')" onclick="window.open('images/9.jpg');"></div>
			<div class="swiper-slide" style="background-image:url('/images/<?=$boardName?>/10.jpg')" onclick="window.open('images/10.jpg');"></div>
		</div>
		<!-- Add Arrows -->
		<div class="swiper-button-next swiper-button-white"></div>
		<div class="swiper-button-prev swiper-button-white"></div>
	</div>
	<div class="swiper-container gallery-thumbs">
		<div class="swiper-wrapper">
			<div class="swiper-slide" style="background-image:url('/images/<?=$boardName?>/1.jpg')"></div>
			<div class="swiper-slide" style="background-image:url('/images/<?=$boardName?>/2.jpg')"></div>
			<div class="swiper-slide" style="background-image:url('/images/<?=$boardName?>/3.jpg')"></div>
			<div class="swiper-slide" style="background-image:url('/images/<?=$boardName?>/4.jpg')"></div>
			<div class="swiper-slide" style="background-image:url('/images/<?=$boardName?>/5.jpg')"></div>
			<div class="swiper-slide" style="background-image:url('/images/<?=$boardName?>/6.jpg')"></div>
			<div class="swiper-slide" style="background-image:url('/images/<?=$boardName?>/7.jpg')"></div>
			<div class="swiper-slide" style="background-image:url('/images/<?=$boardName?>/8.jpg')"></div>
			<div class="swiper-slide" style="background-image:url('/images/<?=$boardName?>/9.jpg')"></div>
			<div class="swiper-slide" style="background-image:url('/images/<?=$boardName?>/10.jpg')"></div>
		</div>
	</div>
	<div class="container-fluid tace" style="background-color: #555555; height: 50px;">
		<div class="h013"></div>
		<img src="/images/tlt-guestbook.png" style="margin-bottom: 10px;">&nbsp;&nbsp;<font style="font-size:18px; text-align:center; color:white;">Guest Book</font>
	</div>

	<div class="container-fluid" style="background-color: white">
		<center>
		 <div style="height:15px;"></div>
		 <table width="100%">
		 <?php foreach ($data as $row) : ?>
		 	<?php if ($row['no'] > 1) : ?>
		 	<tr>
		 		<td style="font-size:12px; height:25px;"><?=$row['name']?> <font style="color:silver;">|</font> <?=$row['modified']?></td>
		 	</tr>		 	
		 	<tr style="border-bottom:1px solid silver; ">
		 		<td style="color:#666666; height:25px; font-size:12px; padding-bottom: 10px;">
		 			<b><?=$row['contents']?></b>
		 		</td>
		 	</tr>
		 	<tr style="height: 20px;"></tr>
		 	<?php endif ?>
		 <?php endforeach ?>
		 <tr>
		 	<td onclick="location.href='<?=site_url("Main/vInv/$boardName")?>'" align="right" style="height:30px; font-size:11px;">
		 		전체글보기 <font color=silver>|</font> 글쓰기
		 	</td>
		 </tr>
		 <tr style="height: 20px;"></tr>
		 </table>		 
		<center>
	</div>	

	<!-- Swiper JS -->
	<script src="/include/swiper/dist/js/swiper.min.js"></script>

	<!-- Initialize Swiper -->  
	<script>
		var galleryTop = new Swiper('.gallery-top', {
			spaceBetween: 10,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});
		var galleryThumbs = new Swiper('.gallery-thumbs', {
			spaceBetween: 10,
			centeredSlides: true,
			slidesPerView: 'auto',
			touchRatio: 0.2,
			slideToClickedSlide: true,
		});
		galleryTop.controller.control = galleryThumbs;
		galleryThumbs.controller.control = galleryTop;
	</script>

	<!-- Naver Map -->
	<div id="map" style="width:100%;height:50%;"></div>
	<div class="container-fluid pdg-0">
		<img src="/images/<?=$boardName?>/address.jpg" width="100%">
	</div>
	<script>
		// 맵 초기화
		var mapOptions = {
		    center: new naver.maps.LatLng(37.500736, 126.908534),
		    //mapTypeId: naver.maps.MapTypeId.HYBRID,
		    zoom: 13
		};

		var map = new naver.maps.Map('map', mapOptions);

		var marker1 = new naver.maps.Marker({
		    position: new naver.maps.LatLng(37.500736, 126.908534),
		    clickable: true,
		    map: map
		});

		// 이벤트리스너 (아무데서나 클릭시 위치 정보를 팝업으로 띄움)
		naver.maps.Event.addListener(map, 'click', function(e) {
	        alert(e.coord);
	    });		

		// 이벤트 리스너 (마크1 클릭시 발생하는 이벤트)
		naver.maps.Event.addListener(marker1, 'click', function() {
			slideInfo();

			/*
	        var delta = 0,
	            zoom = map.getZoom();

	        if (zoom < 12) {
	            delta = 12 - zoom;
	        } else {
	            delta = 5 - zoom;
	        }
	        map.zoomBy(delta, marker1.getPosition(), true);
	        */
	    });	    

		naver.maps.Event.addListener(marker2, 'click', function() {
			slideInfo();
	    });	    
	</script>	
</body>
</html>