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
	<div class="container">		
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb">
					<li><a href="index.php"><?php echo($home); ?></a></li>
					<li class="active"><?php echo($news); ?></li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<fieldset class="title-set watch-slide">
					<legend><?php echo($news); ?></legend>
				</fieldset>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="search-bar news-search">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="<?php echo($searchnews); ?> ">
								<span class="icon icon-search"></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col">
							<button><?php echo($searchnow); ?></button>
						</div>
						<div class="col-lg-2 col-lg-offset-2 col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-2 col">
							<div class="price-lenght" style="text-align: right;">
								<label><?php echo($filterbyyear); ?></label>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col">
							<div class="input-group" style="margin-left: 0; margin-right: 0;">
								<select>
									<option></option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section class="first-news">
			<div class="row">
				<div class="col-md-1 col-lg-1 col-sm-1">
					<div class="news-date">
						<table>
							<tr>
								<td>
									10
									<span>MAY</span>
									<span>2015</span>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 col-sm-4">
					<figure class="news-mainimg">
						<img src="images/exampleimg.jpg" alt="exampleimg">
					</figure>
				</div>
				<div class="col-md-7 col-lg-7 col-sm-7">
					<article>
						<h3 class="news-title">Amazing Shanghai</h3>
						<p>
							นพ.วุฒิชัย ดิลกธราดล ประธาน บจก. อินโนเวชั่น ไทม์ และ อิงอร ดิลกธราดล กรรมการผู้จัดการ รับมอบโล่เกียรติคุณ World NO.1 Growing Agent Award ปีที่ 2 จาก มร.ทากาโนริ คูโดะ ประธานบริหาร บจก. ริวาโค (ฮ่องกง)ในงานฉลองครบรอบปีที่ 5 ของ บริษัทฯ ที่โรงแรมฮิลตัน หัวหิน
						</p>
						<ul class="gal">
							<li><a href="images/exampleimg.jpg"><img src="images/exampleimg.jpg" alt="exampleimg"></a></li>
							<li><a href="images/exampleimg.jpg"><img src="images/exampleimg.jpg" alt="exampleimg"></a></li>
							<li><a href="images/exampleimg.jpg"><img src="images/exampleimg.jpg" alt="exampleimg"></a></li>
							<li><a href="images/exampleimg.jpg"><img src="images/exampleimg.jpg" alt="exampleimg"></a></li>
						</ul>
					</article>
				</div>
			</div>
		</section>
		<div class="row">
			<div class="col-xs-12">
				<article class="news-list news-all">
					<ul>
						<?php for($i=0;$i<6;$i++){ ?>
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
				</article>
				<nav class="pagenav">
					<ul class="pagination">
					    <li>
					      <a href="#" aria-label="Previous">
					        <span aria-hidden="true"><?php echo($prev); ?></span>
					      </a>
					    </li>
					    <li class="active"><a href="#">1</a></li>
					    <li><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li><a href="#">4</a></li>
					    <li><a href="#">5</a></li>
					    <li>
					      <a href="#" aria-label="Next">
					        <span aria-hidden="true"><?php echo($next); ?></span>
					      </a>
					    </li>
					  </ul>
					<div><?php echo($showing); ?> 1-36 <?php echo($of); ?> 124</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- end content here -->
	<div class="clear" style="height: 30px;"></div>
	<?php include('inc_footer.php'); ?>
	<link rel="stylesheet" href="css/colorbox.css"/>
	<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			// set equal height
			if($(".navbar-default").height()==0){
				$(".gal a").colorbox();
				$(".news-date").css({
					height : $(".news-mainimg").height()
				})
				$(".first-news article").css({
					height : $(".news-mainimg").height()
				})
			}else{
				$(".gal a").colorbox({
					 width:"75%",
					 height:"auto"
				});
				
			}
		})
	</script>
</body>
</html>