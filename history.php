<?php require('init.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>RHYTHM GLOBAL TIMEPIECE</title>
<?php include('inc_head.php'); ?>
</head>
<body>
	<?php include('inc_header.php'); ?>	
	<!-- content here-->
	<div class="container">		
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb">
					<li><a href="index.php">HOME</a></li>
					<li class="active">HISTORY</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<fieldset class="title-set watch-slide">
					<legend>HISTORY</legend>
				</fieldset>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-lg-offset-2 col-md-offset-2 img-col">
				
				<div class="vdo">
					<iframe src="https://www.youtube.com/embed/KOmvZr4GiBw" frameborder="0" allowfullscreen></iframe>
				</div>
				<figure class="main-fiure">
					<img src="images/examplehistoryimg.jpg" alt="examplehistoryimg">
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 history-text">
				<h3>
					Rhythm Watch Co., Ltd.-Japan was established in Japan in 1950
					<hr style="width: 20%; margin-left: auto; margin-right: auto; margin-top: 30px; margin-bottom: 30px; border-color: #32220a;">
				</h3>
				<p>
					During that time, Rhythm was the leader of producing world time telling machine which produced more than 20 millions clocks and time telling  tools around the world until in the year 1963, Rhythm Watch – Japan registered itself in the stock market of Japan. 
				</p>
				<p>
					Rhythm Watch is interested in the clock production industry is the development arts of making clocks according to its slogan “Don’t  Follow, Be a Leader” which Rhythm has strong keeping  without stop developing the pattern and design of products to match with the new lifestyle of the consumers, cause that in the year 1976, could develop pieces of quartz system for alarm clock that use small battery to create  energy successfully first in the world.
				</p>
				<p>
					The design of alarm clocks have been satisfied with it’s the best in Japan and mean while do not forget to think about present time in business way of both users and sellers which design have to variety and interesting clocks.
				</p>
				<h3>
					In the year 1982,
					<hr style="width: 20%; margin-left: auto; margin-right: auto; margin-top: 30px; margin-bottom: 30px; border-color: #32220a;">
				</h3>
				<p>
					
Rywaco (Hong Kong) Co., Ltd. was established by Rhythm Watch-Japan invested 100% share and at present, all business contact of Rhythm Watch has been transferred to Rhywaco (Hong Kong) Co.,Ltd.
				</p>
				<h3>
					For Thailand,
					<hr style="width: 20%; margin-left: auto; margin-right: auto; margin-top: 30px; margin-bottom: 30px; border-color: #32220a;">
				</h3>
				<p>
					Rhythm clocks have come and success to more than 40 years.  The Innovation time Co.,Ltd. was  elected as exclusive sole distributor of Rhythm Clocks since 2005 to the present time.  With its policies that emphasizing on Product’s Quality and After Sales Service to high benefit of both sellers and end-users around the country.
				</p>
			</div>
		</div>
	</div>
	<section class="award">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<fieldset class="title-set watch-slide">
						<legend>OUR AWARD</legend>
					</fieldset>
				</div>
				<div class="col-lg-4 col-md-4 col-lg-offset-2 col-md-offset-2">
					<div class="award-slider">
						<a href="#" class="award-nav award-nav-left">
							<img src="images/award-left.png" alt="award-left" width="19" height="36">
						</a>
						<a href="#" class="award-nav award-nav-right">
							<img src="images/award-right.png" alt="award-right" width="19" height="36">
						</a>
						<div class="award-frame">
							<ul class="train">
								<?php for($i=0;$i<5;$i++){ ?>
								<li><a href="#" class="award-img"><img src="images/award.png" alt="award"></a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="award-content-slider">
						<div class="award-content-slider-frame">
								<?php for($i=0;$i<5;$i++){ ?>
								<div class="content-child">
									<h3>
										Best Growing Agent Award in 1950
									</h3>
									<hr style="width: 20%; margin-left: auto; margin-right: auto; margin-top: 20px; margin-bottom: 20px; border-color: #32220a;">
									<p>
										Best Growing Agent Award as Rhythm’s agent that can be able to run its business fast growing within 2 years,  This award received from Rhywaco (H.K.) Co., Ltd. who is responsible  for marketing and sales around the world.
									</p>
								</div>
								<?php } ?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end content here -->
	<?php include('inc_footer.php'); ?>
	<link rel="stylesheet" href="css/colorbox.css"/>
	<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			// set equal height
			if($(".navbar-default").height()==0){
				$(".award-img").colorbox({
					width: '75%',
					height: 'auto'
				})
			}else{
				$(".award-img").colorbox();
			}
			
			var train = $("ul.train");
			var _legnht = train.find("li").length;
			var _count = 0;
			var max = _legnht - 1
			var award = $(".award-content-slider-frame .content-child");
			//intitial award slide
			train.css({
				width : _legnht * 270
			});
			award.eq(0).addClass("active");
			
			//slide control
			$(".award-nav-left").click(function(e){
				e.preventDefault();
				if(_count < max){
					train.stop(true,true).animate({
						left: "-=" + 270
					})
					award.eq(_count).removeClass("active");
					_count++;
					award.eq(_count).addClass("active");
				}
			})
			$(".award-nav-right").click(function(e){
				e.preventDefault();
				var trainPos = train.position();
				if(_count > 0){
					train.stop(true,true).animate({
						 left : trainPos.left + 270
					});
					award.eq(_count).removeClass("active");
					_count--;
					award.eq(_count).addClass("active");
				}
			})
		})
	</script>
</body>
</html>