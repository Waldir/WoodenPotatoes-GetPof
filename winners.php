<?php
require('../sp/process.php');
$_GET['sort'] = 'none';
$videos_array = $process->fetchVideos('winners');
//print_r($videos_array);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The WoodenPotatoes' "Get Path of Fire" Contest Winners</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

	<!-- Hidden -->
	<div id="buyButn">
		<span class="buyButton">
			<a href="http://guildwars2.go2cloud.org/SH5S" target="_blank">Buy Gw2: PoF!*</a>
		</span>
	</div>
	
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<a href="#page-top" class="navbar-brand page-scroll" ><img src="./images/wp_logo-letters.png" alt="Wooden Potatoes"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past prices section -->
                    <li class="hidden"><a class="page-scroll" href="#page-top"></a></li>
                    <li><a class="page-scroll" href="#1-3">1<sup>ST</sup>-3<sup>RD</sup></a></li>
                    <li><a class="page-scroll" href="#4-6">4<sup>TH</sup>-6<sup>TH</sup></a></li>
                    <li><a class="page-scroll" href="#7-10">7<sup>TH</sup>-10<sup>TH</sup></a></li>
                    <li><a class="page-scroll" href="#11-19">11<sup>TH</sup>-19<sup>TH</sup></a></li>
                    <li><a class="page-scroll" href="#20-25">20<sup>TH</sup>-25<sup>TH</sup></a></li>
                    <li><a class="page-scroll" href="#26-35">26<sup>TH</sup>-35<sup>TH</sup></a></li>
                </ul>
            </div>
        </div>
    </nav>
	
    <!-- Intro Section -->
    <section id="intro" class="intro-section sections art-sections pad-sections">
        <div class="container">
            <div class="row">
				<div class="col-lg-12">
					<div class="top_header">
						<h2 class="mainTitle">WoodenPotatoes' "Get Path of Fire" Contest Winners</h2>
						<div class="long_div"></div>
						<p>Check out the videos that were made in association with the competition <a href="entries.php">Here</a></p>
						<p>To go back to the competition main site click <a href="index.php">Here</a></p>
						<p>To check out the <a class="page-scroll" href="#1-3">winners</a> scroll down or use the navigation links above</p>
					</div>
				</div>	
            </div>
        </div>
    </section>

    <!-- 1-3 Section -->
    <section id="1-3" class="sections pad-sections">
        <div class="container">
            <div class="row">

				<!-- -1ST PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 1<sup>ST</sup> place: </span> </h2>
					<div class="col-lg-4">
						<div>
							<img src="images//1st.png" class="place_ribbon" alt="Winner winner chicken dinner!">
							<a href="<?=$videos_array[0]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[0]['videoid']?>/mqdefault.jpg" alt=""></a>
						</div>
					</div> 
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[0]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[0]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> All core Legendary weapons</div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[0]['channelId']?>" target="_blank"><?=$videos_array[0]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[0]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[0]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[0]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[0]['viewCount'])?> views</div>
					</div>
					<div class="clearfix"></div>
					<p class="v-spacer"> </p>
					<br>
					<div class="col-lg-6 cornerBG"><h4 class="dashedBot">Total Prize Value (Buy-Orders):</h4>  <p class="v-spacer"></p><div id="legendary-total-buy" class="totalBigGold"></div></div>
					<div class="col-lg-6 cornerBG"><h4 class="dashedBot">Total Prize Value (Sell-Orders):</h4> <p class="v-spacer"></p><div id="legendary-total-sell" class="totalBigGold"></div></div>
					<br>
				</div>
				<br>
				
				<!-- -2ND PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 2<sup>ND</sup> place: </span> </h2>
					<div class="col-lg-4">
						<div>
							<img src="images//2nd.png" class="place_ribbon" alt="Winner winner chicken dinner!">
							<a href="<?=$videos_array[1]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[1]['videoid']?>/mqdefault.jpg" alt=""></a>
						</div>
					</div> 
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[1]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[1]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> All Permanent Contracts</div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[1]['channelId']?>" target="_blank"><?=$videos_array[1]['channelTitle']?></a>  / <b>Account Name:</b> <?=$videos_array[1]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[1]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[1]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[1]['viewCount'])?> views</div>
					</div>
					<div class="clearfix"></div>
					<p class="v-spacer"> </p>
					<br>
					<div class="col-lg-6 cornerBG"><h4 class="dashedBot">Total Prize Value (Buy-Orders):</h4>  <p class="v-spacer"></p><div id="contract-total-buy" class="totalBigGold"></div></div>
					<div class="col-lg-6 cornerBG"><h4 class="dashedBot">Total Prize Value (Sell-Orders):</h4> <p class="v-spacer"></p><div id="contract-total-sell" class="totalBigGold"></div>  </div>
					<br>
				</div>
				<br>
				
				<!-- -3RD PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 3<sup>RD</sup> place:</span> </h2>
					<div class="col-lg-4">
						<div>
							<img src="images//3rd.png" class="place_ribbon" alt="Winner winner chicken dinner!">
							<a href="<?=$videos_array[2]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[2]['videoid']?>/mqdefault.jpg" alt=""></a>
						</div>
					</div> 
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[2]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[2]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> All core Legendary precursors</div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[2]['channelId']?>" target="_blank"><?=$videos_array[2]['channelTitle']?></a>  / <b>Account Name:</b> <?=$videos_array[2]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[2]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[2]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[2]['viewCount'])?> views</div>
					</div>
					<div class="clearfix"></div>
					<p class="v-spacer"> </p>
					<br>
					<div class="col-lg-6 cornerBG"><h4 class="dashedBot">Total Prize Value (Buy-Orders):</h4>  <p class="v-spacer"></p><div id="precursor-total-buy" class="totalBigGold"></div></div>
					<div class="col-lg-6 cornerBG"><h4 class="dashedBot">Total Prize Value (Sell-Orders):</h4> <p class="v-spacer"></p><div id="precursor-total-sell" class="totalBigGold"></div>  </div>
					<br>
				</div>
				<br>

			</div>
		</div>
    </section>
	
    <!-- 4-6 Section -->
    <section id="4-6" class="gray_section sections pad-sections">
        <div class="container">
            <div class="row">

				<!-- -4TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 4<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[3]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[3]['videoid']?>/mqdefault.jpg" alt=""></a></div>
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[3]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[3]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> Aura Collection</div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[3]['channelId']?>" target="_blank"><?=$videos_array[3]['channelTitle']?></a>  / <b>Account Name:</b> <?=$videos_array[3]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[3]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[3]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[3]['viewCount'])?> views</div>
					</div>
					<div class="clearfix"></div>
					<p class="v-spacer"> </p>
					<br>
					<div class="col-lg-6 cornerBG"><h4 class="dashedBot">Total Prize Value (Buy-Orders):</h4>  <p class="v-spacer"></p><div id="auras-total-buy" class="totalBigGold"></div></div>
					<div class="col-lg-6 cornerBG"><h4 class="dashedBot">Total Prize Value (Sell-Orders):</h4> <p class="v-spacer"></p><div id="auras-total-sell" class="totalBigGold"></div></div>	
					<br>
				</div>
				<br>
				
				<!-- -5TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 5<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[4]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[4]['videoid']?>/mqdefault.jpg" alt=""></a></div>
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[4]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[4]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> Ghastly Grinning Shield & Greatsaw Skins</div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[4]['channelId']?>" target="_blank"><?=$videos_array[4]['channelTitle']?></a>  / <b>Account Name:</b> <?=$videos_array[4]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[4]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[4]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[4]['viewCount'])?> views</div>
					</div>
					<div class="clearfix"></div>
					<p class="v-spacer"> </p>
					<br>
					<div class="col-lg-6 cornerBG"><h4 class="dashedBot">Total Prize Value (Buy-Orders):</h4>  <p class="v-spacer"></p><div id="skins-total-buy" class="totalBigGold"></div></div>
					<div class="col-lg-6 cornerBG"><h4 class="dashedBot">Total Prize Value (Sell-Orders):</h4> <p class="v-spacer"></p><div id="skins-total-sell" class="totalBigGold"></div>  </div>
					<br>
				</div>
				<br>
				
				<!-- -6TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 6<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[5]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[5]['videoid']?>/mqdefault.jpg" alt=""></a></div>
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[5]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[5]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> Mini Pets</div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[5]['channelId']?>" target="_blank"><?=$videos_array[5]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[5]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[5]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[5]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[5]['viewCount'])?> views</div>
					</div>
					<div class="clearfix"></div>
					<p class="v-spacer"> </p>
					<br>
					<div class="col-lg-6 cornerBG"><h4 class="dashedBot">Total Prize Value (Buy-Orders):</h4>  <p class="v-spacer"></p><div id="minis-total-buy" class="totalBigGold"></div></div>
					<div class="col-lg-6 cornerBG"><h4 class="dashedBot">Total Prize Value (Sell-Orders):</h4> <p class="v-spacer"></p><div id="minis-total-sell" class="totalBigGold"></div></div>
					<br>
				</div>
				<br>

            </div>
        </div>
    </section>

    <!-- 7-10 Section -->
    <section id="7-10" class="sections pad-sections">
        <div class="container">
            <div class="row">

				<!-- -7TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 7<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[6]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[6]['videoid']?>/mqdefault.jpg" alt=""></a></div>
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[6]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[6]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> 4,000 <i class="fa fa-diamond" aria-hidden="true"></i>+ Mini Egg</div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[6]['channelId']?>" target="_blank"><?=$videos_array[6]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[6]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[6]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[6]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[6]['viewCount'])?> views</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<br>

				<!-- -8TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 8<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[7]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[7]['videoid']?>/mqdefault.jpg" alt=""></a></div>
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[7]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[7]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> 4,000 <i class="fa fa-diamond" aria-hidden="true"></i>+ Mini Egg</div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[7]['channelId']?>" target="_blank"><?=$videos_array[7]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[7]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[7]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[7]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[7]['viewCount'])?> views</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<br>

				<!-- -9TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 9<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[8]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[8]['videoid']?>/mqdefault.jpg" alt=""></a></div>
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[8]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[8]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> 4,000 <i class="fa fa-diamond" aria-hidden="true"></i>+ Mini Egg</div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[8]['channelId']?>" target="_blank"><?=$videos_array[8]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[8]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[8]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[8]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[8]['viewCount'])?> views</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<br>

				<!-- -10TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 10<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[9]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[9]['videoid']?>/mqdefault.jpg" alt=""></a></div>
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[9]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[9]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> 4,000 <i class="fa fa-diamond" aria-hidden="true"></i>+ Mini Egg</div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[9]['channelId']?>" target="_blank"><?=$videos_array[9]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[9]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[9]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[9]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[9]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>
				<div class="col-lg-12 cornerBG"><h4 class="dashedBot">Total Prize Value for places 7-10:</h4>  <p class="v-spacer"></p><div class="gems4000 totalBigGold"></div></div>
			s	<br>

			</div>
        </div>
    </section>

    <!---11-19 Section -->
    <section id="11-19" class="gray_section sections pad-sections">
        <div class="container">
            <div class="row">

				<!-- -11TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 11<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[10]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[10]['videoid']?>/mqdefault.jpg" alt=""></a></div>
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[10]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[10]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> 1,200 <i class="fa fa-diamond" aria-hidden="true"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[10]['channelId']?>" target="_blank"><?=$videos_array[10]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[10]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[10]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[10]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[10]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>

				<!-- -12TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 12<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[11]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[11]['videoid']?>/mqdefault.jpg" alt=""></a></div>
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[11]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[11]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> 1,200 <i class="fa fa-diamond" aria-hidden="true"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[11]['channelId']?>" target="_blank"><?=$videos_array[11]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[11]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[11]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[11]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[11]['viewCount'])?> views</div>
						<div class="list-group-item "><?=number_format($videos_array[10]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>

				<!-- -13TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 13<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[12]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[12]['videoid']?>/mqdefault.jpg" alt=""></a></div>
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[12]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[12]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> 1,200 <i class="fa fa-diamond" aria-hidden="true"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[12]['channelId']?>" target="_blank"><?=$videos_array[12]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[12]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[12]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[12]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[12]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>

				<!-- -14TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 14<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[13]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[13]['videoid']?>/mqdefault.jpg" alt=""></a></div>
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[13]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[13]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> 1,200 <i class="fa fa-diamond" aria-hidden="true"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[13]['channelId']?>" target="_blank"><?=$videos_array[13]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[13]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[13]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[13]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[13]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>

				<!-- -15TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 15<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[14]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[14]['videoid']?>/mqdefault.jpg" alt=""></a></div>
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[14]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[14]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> 1,200 <i class="fa fa-diamond" aria-hidden="true"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[14]['channelId']?>" target="_blank"><?=$videos_array[14]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[14]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[14]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[14]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[14]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>

				<!-- -16TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 16<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[15]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[15]['videoid']?>/mqdefault.jpg" alt=""></a></div>
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[15]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[15]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> 1,200 <i class="fa fa-diamond" aria-hidden="true"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[15]['channelId']?>" target="_blank"><?=$videos_array[15]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[15]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[15]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[15]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[15]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>

				<!-- -17TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 17<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[16]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[16]['videoid']?>/mqdefault.jpg" alt=""></a></div>
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[16]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[16]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> 1,200 <i class="fa fa-diamond" aria-hidden="true"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[16]['channelId']?>" target="_blank"><?=$videos_array[16]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[16]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[16]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[16]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[16]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>

				<!-- -18TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 18<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[17]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[17]['videoid']?>/mqdefault.jpg" alt=""></a></div>
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[17]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[17]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> 1,200 <i class="fa fa-diamond" aria-hidden="true"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[17]['channelId']?>" target="_blank"><?=$videos_array[17]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[17]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[17]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[17]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[17]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>

				<!-- -19TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 19<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[18]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[18]['videoid']?>/mqdefault.jpg" alt=""></a></div>
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[18]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[18]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> 1,200 <i class="fa fa-diamond" aria-hidden="true"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[18]['channelId']?>" target="_blank"><?=$videos_array[18]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[18]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[18]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[18]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[18]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>
				<div class="col-lg-12 cornerBG"><h4 class="dashedBot">Total Prize Value for 11-19:</h4>  <p class="v-spacer"></p><div class="gems1200 totalBigGold"></div></div>
				<br>

			</div>
        </div>
    </section>

    <!---20-25 Section -->
    <section id="20-25" class="sections pad-sections">
        <div class="container">
            <div class="row">

				<!-- -20TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 20<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[19]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[19]['videoid']?>/mqdefault.jpg" alt=""></a></div>
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[19]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[19]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> 800 <i class="fa fa-diamond" aria-hidden="true"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[19]['channelId']?>" target="_blank"><?=$videos_array[19]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[19]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[19]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[19]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[19]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>

				<!-- -21TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 21<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[20]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[20]['videoid']?>/mqdefault.jpg" alt=""></a></div>
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[20]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[20]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> 800 <i class="fa fa-diamond" aria-hidden="true"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[20]['channelId']?>" target="_blank"><?=$videos_array[20]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[20]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[20]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[20]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[20]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>

				<!-- -22TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 22<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[21]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[21]['videoid']?>/mqdefault.jpg" alt=""></a></div>
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[21]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[21]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> 800 <i class="fa fa-diamond" aria-hidden="true"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[21]['channelId']?>" target="_blank"><?=$videos_array[21]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[21]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[21]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[21]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[21]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>

				<!-- -23TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 23<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[22]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[22]['videoid']?>/mqdefault.jpg" alt=""></a></div>
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[22]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[22]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> 800 <i class="fa fa-diamond" aria-hidden="true"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[22]['channelId']?>" target="_blank"><?=$videos_array[22]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[22]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[22]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[22]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[22]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>

				<!-- -24TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 24<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[23]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[23]['videoid']?>/mqdefault.jpg" alt=""></a></div> 
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[23]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[23]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> 800 <i class="fa fa-diamond" aria-hidden="true"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[23]['channelId']?>" target="_blank"><?=$videos_array[23]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[23]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[23]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[23]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[23]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>

				<!-- -25TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 25<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[24]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[24]['videoid']?>/mqdefault.jpg" alt=""></a></div> 
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[24]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[24]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> 800 <i class="fa fa-diamond" aria-hidden="true"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[24]['channelId']?>" target="_blank"><?=$videos_array[24]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[24]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[24]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[24]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[24]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>
				<div class="col-lg-12 cornerBG"><h4 class="dashedBot">Total Prize Value for 20-25:</h4>  <p class="v-spacer"></p><div class="gems800 totalBigGold"></div></div>
				<br>
				
			</div>
        </div>
    </section>
	
	<!-- 26-35 -->
    <section id="26-35" class="gray_section sections pad-sections">
		<div class="container">
			<div class="row">

				<!-- -26TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 26<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[25]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[25]['videoid']?>/mqdefault.jpg" alt=""></a></div> 
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[25]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[25]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> <span class="goldText">50</span> <i class="gw2money-gold"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[25]['channelId']?>" target="_blank"><?=$videos_array[25]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[25]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[25]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[25]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[25]['viewCount'])?> views</div>
						</div>
				</div>
				<div class="clearfix"></div>
				<br>

				<!-- -27TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 27<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[26]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[26]['videoid']?>/mqdefault.jpg" alt=""></a></div> 
						<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[26]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[26]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> <span class="goldText">50</span> <i class="gw2money-gold"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[26]['channelId']?>" target="_blank"><?=$videos_array[26]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[26]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[26]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[26]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[26]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>

				<!-- -28TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 28<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[27]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[27]['videoid']?>/mqdefault.jpg" alt=""></a></div> 
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[27]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[27]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> <span class="goldText">50</span> <i class="gw2money-gold"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[27]['channelId']?>" target="_blank"><?=$videos_array[27]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[27]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[27]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[27]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[27]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>

				<!-- -29TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 29<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[28]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[28]['videoid']?>/mqdefault.jpg" alt=""></a></div> 
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[28]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[28]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> <span class="goldText">50</span> <i class="gw2money-gold"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[28]['channelId']?>" target="_blank"><?=$videos_array[28]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[28]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[28]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[28]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[28]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>

				<!-- -30TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 30<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[29]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[29]['videoid']?>/mqdefault.jpg" alt=""></a></div> 
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[29]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[29]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> <span class="goldText">50</span> <i class="gw2money-gold"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[29]['channelId']?>" target="_blank"><?=$videos_array[29]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[29]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[29]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[29]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[29]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>

				<!-- -31TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 31<sup>ST</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[30]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[30]['videoid']?>/mqdefault.jpg" alt=""></a></div> 
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[30]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[30]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> <span class="goldText">50</span> <i class="gw2money-gold"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[30]['channelId']?>" target="_blank"><?=$videos_array[30]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[30]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[30]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[30]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[30]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>

				<!-- -32ND PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 32<sup>ND</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[31]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[31]['videoid']?>/mqdefault.jpg" alt=""></a></div> 
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[31]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[31]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> <span class="goldText">50</span> <i class="gw2money-gold"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[31]['channelId']?>" target="_blank"><?=$videos_array[31]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[31]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[31]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[31]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[31]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>

				<!-- -33RD PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 33<sup>RD</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[32]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[32]['videoid']?>/mqdefault.jpg" alt=""></a></div> 
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[32]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[32]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> <span class="goldText">50</span> <i class="gw2money-gold"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[32]['channelId']?>" target="_blank"><?=$videos_array[32]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[32]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[32]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[32]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[32]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>
		
				<!-- -34TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 34<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[33]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[33]['videoid']?>/mqdefault.jpg" alt=""></a></div> 
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[33]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[33]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> <span class="goldText">50</span> <i class="gw2money-gold"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[33]['channelId']?>" target="_blank"><?=$videos_array[33]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[33]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[33]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[33]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[33]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>

				<!-- -35TH PLACE -->
				<div class="col-lg-12">
					<h2 class="winnerHead"> <span> 35<sup>TH</sup> place:</span> </h2>
					<div class="col-lg-4"><a href="<?=$videos_array[34]['url']?>" target="_blank"><img src="http://img.youtube.com/vi/<?=$videos_array[34]['videoid']?>/mqdefault.jpg" alt=""></a></div> 
					<div class="col-lg-8 text_left" id="youtubeInfo_<?=$videos_array[34]['videoid']?>">
						<div class="list-group-item "><b>Title:</b> <?=$videos_array[34]['title']?> </div>
						<div class="list-group-item "><b>Prize:</b> <span class="goldText">50</span> <i class="gw2money-gold"></i></div>
						<div class="list-group-item "><b>Channel:</b> <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="http://youtube.com/channel/<?=$videos_array[34]['channelId']?>" target="_blank"><?=$videos_array[34]['channelTitle']?></a> / <b>Account Name:</b> <?=$videos_array[34]['name']?></div>
						<div class="list-group-item "><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?=number_format( $videos_array[34]['likeCount'] )?> &nbsp; <i class="fa fa-thumbs-down" aria-hidden="true"></i> <?=number_format( $videos_array[34]['dislikeCount'] )?></div>
						<div class="list-group-item "><?=number_format($videos_array[34]['viewCount'])?> views</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>
		
			</div>
		</div>
    </section>

	<br>
	<br>
	<br>
	<br>
	
	<!-- Contributors  -->
    <section id="contributors" class="art-section-three sections pad-sections">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1>Legendary Contributors: </h1>
					<hr class="middle">
					<p>This give away is possible thanks the generosity of our community and I cant thank each and everyone of you enough!</p>
					<div class="contContainer">
<?php
// Get text file contents as array of lines
$filepath = 'http://www.waldirb.com/StreamPanels/contData.txt';
$lines = file( $filepath );
?>

	<?php
	$count = 0;
	foreach ( array_reverse( $lines ) as $line_num => $line ) {
		$count++;
		$cycleCell = ( ( $bgc = !$bgc ) ? 'rowTwo' : 'rowOne' );
		$data = str_replace( array("\r", "\n"), '', $data );
		$data = explode( "<~>", $line );
		$timeStamp = date('c', $data[4]);
		
		$rarityTiers[$data[2]]++;
		
	
		echo <<<HTML
		<div class="$cycleCell row_tbl col-sm-3 text_left">
			<div><i class="fa fa-user" aria-hidden="true"></i> <span class="userText">$data[0]</span></div>
			<div><i class="fa fa-gift" aria-hidden="true"></i> <span style="color: $data[2]">$data[1]</span></div>
			<div><i class="fa fa-shield" aria-hidden="true"></i> <span class="legenText">$data[3]</span></div>
			<div><i class="fa fa-calendar" aria-hidden="true"></i> <time class="timeago timeText" datetime="$timeStamp">$timeStamp</time></div>
		</div>
HTML;
	}

	?>
					</div>
					<br>
					<p>There is a total of <?php echo $count;?> contributors.</p>
				</div>
			</div>
		</div>
		
		<div class="close-modal" id="closeButton">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
    </section>
	
	<!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 text_center">
					<h3 class="connect"><i class="fa fa-plug" aria-hidden="true"></i> CONNECT WITH ME</h3>
					<hr>
					<a href="http://youtube.com/woodenpotatoes" class="footer-social-links" id="sm-youtube" target="_blank">
						<i class="fa fa-youtube-play" aria-hidden="true"></i>
					</a>
					<a href="http://reddit.com/r/WoodenPotatoes" class="footer-social-links" id="sm-reddit" target="_blank">
						<i class="fa fa-reddit-alien" aria-hidden="true"></i>
					</a>
					<a href="http://Twitch.tv/WoodenPotatoes" class="footer-social-links" id="sm-twitch" target="_blank">
						<i class="fa fa-twitch" aria-hidden="true"></i>
					</a>
					<a href="http://Twitter.com/WoodenPotatoes" class="footer-social-links" id="sm-twitter" target="_blank">
						<i class="fa fa-twitter" aria-hidden="true"></i>
					</a>
				</div>
				<div class="col-lg-4 text_center">
					<div class="row">
						<div class="col-lg-12 text_center">
							<h3 class="connect"><i class="fa fa-link" aria-hidden="true"></i> Links:</h3>
							<hr>
						</div>
						<div class="col-sm-6 text_left">
							<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a class="page-scroll" href="#prizes">Prizes</a></p>
							<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a class="page-scroll" href="#details">Details</a></p>
							<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a class="page-scroll" href="#enter">How to Enter</a></p>
							<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a class="page-scroll" href="#submit">Submit entry</a></p>
						</div>
						<div class="col-sm-6 text_left">
							<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a class="page-scroll" href="#rules">Rules</a></p>
							<p><i class="fa fa-angle-double-right" aria-hidden="true"></i><a class="page-scroll" href="#tips">Winning Tips</a></p>
							<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a class="page-scroll" href="#entries">Entries</a></p>
							<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a id="contributors_link">Contributors</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 text_center">
					<h3 class="connect"><i class="fa fa-paint-brush" aria-hidden="true"></i> Crafted by:</h3>
					<hr>
					<p><a href="http://youtube.com/welc" target="_blank"><img src="images/waldir.png" id="welcIcon" alt="Welc Youtube Channel"></a></p>
					<p>with <i class="fa fa-heart" aria-hidden="true"></i></p>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
			This is a FanSite - Guild Wars, Guild Wars 2, Heart of Thorns, Path of Fire, ArenaNet, NCSOFT, the Interlocking NC Logo, and all associated logos and designs are trademarks or registered trademarks of NCSOFT Corporation. All other trademarks are the property of their respective owners.
			</div>
		</div>

    </footer>
	<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
	<script src="js/jquery.timeago.js"></script>
	<script src="js/js.js"></script>
</body>
</html>
