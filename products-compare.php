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
					<li><a href="products.php"><?php echo($products); ?></a></li>
					<li class="active"><?php echo($comp); ?></li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
<!--
				<fieldset class="title-set">
					<legend><?php echo($comp); ?></legend>
				</fieldset>
-->
				<h2 class="section-title"><span><?php echo($comp); ?></span></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3">
				<aside class="left-col compare-left">
					<div class="compare-menu">
						<span>
							<h3><?php echo($wSelect); ?></h3>
							<div class="clear"></div>
							<a href="products.php"><?php echo($backproducts); ?></a>
						</span>
					</div>
					
					<div class="table-hold desktop">
						<table>
							<tr><td><?php echo($width); ?> :</td></tr>
							<tr><td><?php echo($height); ?> :</td></tr>
							<tr><td><?php echo($deep); ?> :</td></tr>
							<tr><td><?php echo($weight); ?> :</td></tr>
							<tr><td><?php echo($battery); ?> :</td></tr>
							<tr><td><?php echo($case); ?> :</td></tr>
							<tr><td><?php echo($specifications); ?> :</td></tr>
						</table>
					</div>
				</aside>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9">
				<div class="right-col">
					<div class="compare-list">
								<div class="row">
								<?php for($i=0;$i<4;$i++){ ?>
									<div class="col-lg-4 col-md-4 col-sm-4 compare-child product-list">
									<div class="product-child">
										<figure>
											<img src="images/sample_productimg.jpg" alt="sample_productimg" width="264" height="345">
										</figure>
										<h3>Automatic Watch</h3>
										<div class="series">
											A1101S05 | 11000 THB
										</div>
										<table>
											<tr><td><?php echo($width); ?> :</td><td>16.0</td></tr>
											<tr><td><?php echo($height); ?> :</td><td>8.6</td></tr>
											<tr><td><?php echo($deep); ?> :</td><td>4.8</td></tr>
											<tr><td><?php echo($weight); ?> :</td><td>200</td></tr>
											<tr><td><?php echo($battery); ?> :</td><td>AAx2</td></tr>
											<tr><td><?php echo($case); ?> :</td><td>White Case / Plastic Case</td></tr>
										</table>
										<p>
											4 Steps Increasing Beep Alarm,Snooze,Hygrometer & Thermometer(-9.9~50 ?C/20~95%),Maximum & Minimum Reading Within 24Hrs Displayable,Alert Display For Heatstrock,Mould,Influenza & Food Poisoning,Super Silent Move.
										</p>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
		<div class="row product-list">
			<div class="col-lg-12">
<!--
				<fieldset class="title-set">
					<legend><?php echo($youmaylike); ?></legend>
				</fieldset>
-->
				<h2 class="section-title"><span><?php echo($youmaylike); ?></span></h2>
			</div>
			<div class="clear" style="height: 15px;"></div>
			<?php for($i=0;$i<4;$i++){ ?>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<a href="products-detail.php">
						<div class="product-child">
						<figure>
							<img src="images/sample_productimg.jpg" alt="sample_productimg" width="264" height="345">
						</figure>
						<h3>Automatic Watch</h3>
						<div class="series">
							A1101S05 | 11000 THB
							<input type="checkbox">
						</div>
					</div>
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
	<!-- end content here -->
	<?php include('inc_footer.php'); ?>
	<script type="text/javascript">
		$(document).ready(function(){
			
			if($(".navbar-default").height()==0){
				// set equal height
				var getMaxheight = $(".right-col").height();
				
				$(".left-col").css({
					'height' : getMaxheight
				});
				
				//set compare list
				var train = $(".compare-list .row");
				var round = 1;
				train.find(".compare-child").each(function(){
					if(round > 3){
						train.css({
							'width' : $(this).innerWidth() + train.innerWidth()
						})
					}
					round++;
					console.log("round", round);
				})
				
				
			}
			
		})
		
	</script>
</body>
</html>