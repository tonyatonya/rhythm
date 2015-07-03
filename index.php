<?php require('init.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo($_SESSION['lang']); ?>">
<head>
<title>RHYTHM GLOBAL TIMEPIECE</title>
<?php include('inc_head.php'); ?>
</head>
<body>
	<?php include('inc_header.php'); ?>	
	<!-- content here-->
	<section class="mainbenner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				<ul class="allbanner">
					<li><img src="images/mainbanner.png" alt="mainbanner"></li>
					<li><img src="images/mainbanner.png" alt="mainbanner"></li>
					<li><img src="images/mainbanner.png" alt="mainbanner"></li>
				</ul>
			</div>
			</div>
		</div>
	</section>
	<section class="clockslider">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<fieldset class="title-set watch-slide">
						<legend><?php echo($featureW); ?></legend>
					</fieldset>
					<div class="watch-slide">
						<div class="watch-frame">
							<ul class="train">
								<?php for($i=0;$i<12;$i++){ ?>
									<li>
										<a href="products-category.php">
										<div class="cat">
											<img src="images/clockcategory.jpg" alt="clockcategory" width="254" height="361">
											<div class="hover">
												<div>
													<span>
														EARTH SAVER
													</span>
												</div>
											</div>
											
										</div>
										<div class="footcat">
											<span>
												EARTH SAVER
											</span>
										</div>
										</a>
										
									</li>
								<?php } ?>
							</ul>
						</div>
						<a href="#" class="nav nav-left">
							<img src="images/leftnav.png" alt="leftnav" width="19" height="36">
						</a>
						<a href="#" class="nav nav-right">
							<img src="images/rightnav.png" alt="rightnav" width="19" height="36">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="featureclock">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<fieldset class="title-set watch-slide">
						<legend><?php echo($featureC); ?></legend>
					</fieldset>
					
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-6">
					<a href="products-detail.php">
					<div class="clock-child">
						<figure>
							<img src="images/clockcate.jpg" alt="clockcate" width="339" height="339">
						</figure>
						<div class="detail">
							AUTOMATIC<br>
							<span>RA1209</span>
						</div>
					</div>
					</a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<a href="products-detail.php">
					<div class="clock-child">
						<figure>
							<img src="images/clockcate.jpg" alt="clockcate" width="339" height="339">
						</figure>
						<div class="detail">
							AUTOMATIC<br>
							<span>RA1209</span>
						</div>
					</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4">
				<article class="news-list news-list-home">
					<h2 class="box-title"><?php echo($news); ?></h2>
					<ul>
						<?php for($i=0;$i<3;$i++){ ?>
						<li>
							<table>
								<tr>
									<td>
										10
										<span>MAY</span>
										<span>2015</span>
									</td>
									<td>
										<a href="news.php">
											<h3>Amazing Shanghai</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>
										</a>
									</td>
								</tr>
							</table>
						</li>
						<?php } ?>
					</ul>
					<a class="learnmore" href="news.php"><?php echo($learnmore); ?></a>
				</article>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4">
				<article class="history-home">
					<h2 class="box-title"><?php echo($outhistory); ?></h2>
					
					<img src="images/historybanner.jpg" alt="historybanner" style="width:100%; height: auto;">
					<p>
						Rhythm Watch Co., Ltd.-Japan was established in Japan in 1950. During that time, Rhythm was the leader of producing world time telling machine which produced more than 20 millions clocks and time telling  tools around the world until in the year 1963, Rhythm Watch – Japan registered itself in the stock market of Japan.
					</p>
					<a class="learnmore" href="history.php"><?php echo($learnmore); ?></a>
				</article>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4">
				<article class="wheretobuy-home">
					<h2 class="box-title"><?php echo($where); ?></h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
					</p>
					<img src="images/shopbanner.jpg" alt="shopbanner" style="margin-bottom: 20px; width: 100%; height: auto; max-width: 360px;">
					<a class="learnmore" href="wheretobuy.php"><?php echo($learnmore); ?></a>
				</article>
			</div>
		</div>
	</div>
	<!-- end content here -->
	<?php include('inc_footer.php'); ?>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<link rel="stylesheet" href="css/jquery.bxslider.css"/>
	<script type="text/javascript">
		$(document).ready(function(){
			//////////////////////bx slider//////////////////////////////////
			var slider = $('.allbanner').bxSlider({
	            mode: 'horizontal', //mode: 'fade',            
	            speed: 300,
	            auto: true,
	            infiniteLoop: true,
	            hideControlOnEnd: true,
	            useCSS: false,
	            onSlideAfter: function() {
		            slider.startAuto();
		        }
	        });
	        
	        //////////////////// clock slider ///////////////////////////
	        var train = $("ul.train");
	        var bokeh = train.find("li").length;
	        var moveCount = 0;
	        var left  = $("a.nav-left");
	        var right = $("a.nav-right");
	        if($(".navbar-default").height()==0){
		        var stageShow = 4;
		        var childW = 270;
	        }else{
		        var stageShow = 1;
		        var childW = $(".watch-frame").width();
		        train.find("li").each(function(){
			        $(this).css({
				        'width': childW
			        })
		        })
		        
	        }
	        var maxShow = (bokeh - stageShow);
	        console.log("maxShow = ",maxShow);
	        //setup train
	        console.log("childW = ",childW ," bokeh = ", bokeh," childW * bokeh = ",childW * bokeh );
	        train.css({
		        'width': childW * bokeh + 270
	        })
	        // slide control
	        left.click(function(e){
		        e.preventDefault();
		        var trainPos = train.position();
		        if(moveCount < maxShow){
			        
			        train.stop(true).animate({
				        'left' : "-=" + childW
			        },500)
			        moveCount++;
		        }
		        console.log("maxShow = ",maxShow ,"moveCount = ", moveCount);
	        })
	        right.click(function(e){
		        e.preventDefault();
		        var trainPos = train.position();
		        if(moveCount > 0){
			        
			     	train.stop(true).animate({
				        'left' : trainPos.left + childW
			        },500);
			        moveCount--;
		        }
		        
	        })
	        
		})
	</script>
	
	
	
	
	
	
	
	
	
</body>
</html>