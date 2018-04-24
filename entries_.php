<?php
require('../sp/process.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>The WoodenPotatoes' "Get Path of Fire" Contest</title>

	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<body data-gr-c-s-loaded="true" id="entries_body">

	<!-- Container Start -->
    <div class="container" id="entries_container">

			<div class="row">
				<div class="col-lg-12 text_left entriesWrapper">
					<br>
					<div class="btn btn-warning float-right"><a href="/getpof/"><i class="fa fa-hand-o-right fa-lg" aria-hidden="true"></i> Return to contest page</a></div>
					<h1>Entries </h1>
					<hr class="left">

					<?php
					foreach ( $process->fetchVideos() as $row ) {
						if( empty( $row['pending']) ) {
					?>
					<div class="col-lg-4 findme" data-id="">
						<div class="video" id="<?=$row['videoid']?>">
							<a href="<?=$row['url']?>" target="_blank" class="play_button"><i class="fa fa-play-circle-o fa-5x " aria-hidden="true"></i></a>
							<img src="http://img.youtube.com/vi/<?=$row['videoid']?>/mqdefault.jpg">
							<div class="youtubeInfo" id="youtubeInfo_<?=$row['videoid']?>">
								<div class="title list-group-item "><?=$row['title']?></div>
								<div class="channel list-group-item ">
									<i class="fa fa-user-circle" aria-hidden="true"></i>
									<a href="http://youtube.com/channel/<?=$row['channelId']?>" target="_blank"><?=$row['channelTitle']?></a> [<?=$row['rating']?>]
								</div>
								<!--div class="rating"></div-->
							<div class="list-group-item "> 
								<i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=$row['likeCount']?>
									&nbsp;
								<i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=$row['dislikeCount']?>
								<span class="views"> <?=$row['viewCount']?> views</span>
							</div>
							</div>
						</div>

					</div> 
					<?php }}?>
					<div class="clearfix"></div>
					<div class="long_div"></div>
						
					<div class="text_center">
						<span class="buyButton bigBuyBtn" id="BtnPassMe"><a href="http://guildwars2.go2cloud.org/SH5S" target="_blank">Buy Guild Wars 2: Path of Fire!*</a></span>
					</div>
					<br><br><br><br><br><br>
				</div>
			</div>	
		
	</div><!-- // container -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/jquery-ui-git.js"></script>
	<script src="js/jquery.timeago.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src='js/js.js'></script>
  </body>
</html>