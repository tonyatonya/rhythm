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
					<li><a href="products-category.php">PRODUCTS CATEGORY NAME</a></li>
					<li class="active">PRODUCTS NAME</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 catbanner">
				<img src="images/category_banner.jpg" alt="category_banner">
			</div>
		</div>
		<?php include("inc_comparenamelist.php"); ?>
		<?php include("inc_searchbar.php");?>
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3">
				<aside class="left-col">
					<?php include('inc_categorymenu.php'); ?>
				</aside>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9">
				<div class="right-col">
					<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-5">
							<figure class="main-product-img">
								<img src="images/sample_productimg.jpg" alt="sample_productimg">
							</figure>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-7">
							<div class="product-detail">
								<div class="series">A1101S05 <input type="checkbox"></div>
								<div class="price"><?php echo($price); ?> : 2,170 <?php echo($baht); ?></div>
								<h3><?php echo($dimension); ?></h3>
								<table>
									<tr>
										<th><?php echo($width); ?> :</th>
										<td>16.0</td>
									</tr>
									<tr>
										<th><?php echo($height); ?> :</th>
										<td>8.6</td>
									</tr>
									<tr>
										<th><?php echo($deep); ?> :</th>
										<td>4.8</td>
									</tr>
									<tr>
										<th><?php echo($weight); ?> :</th>
										<td>200</td>
									</tr>
									<tr>
										<th><?php echo($battery); ?> :</th>
										<td>AAx2</td>
									</tr>
									<tr>
										<th><?php echo($case); ?> :</th>
										<td>White Case / Plastic Case</td>
									</tr>
								</table>
								<hr>
								<h3><?php echo($specifications); ?></h3>
								<p>
									4 Steps Increasing Beep Alarm,Snooze,Hygrometer & Thermometer(-9.9~50 ?C/20~95%),Maximum & Minimum Reading Within 24Hrs Displayable,Alert Display For Heatstrock,Mould,Influenza & Food Poisoning,Super Silent Move.
								</p>
							</div>
						</div>
					</div>
					<!-- relate products-->
<!--
					<fieldset class="title-set">
						<legend><?php echo($relatep); ?></legend>
					</fieldset>
-->
					<h2 class="section-title"><span><?php echo($relatep); ?></span></h2>
					<div class="relate-products">
						<div class="row product-list">
					<?php for($i=0;$i<3;$i++){ ?>
						<div class="col-lg-4 col-md-4 col-sm-4">
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

				</div>
			</div>
			
		</div>
	</div>
	<!-- end content here -->
	<?php include('inc_footer.php'); ?>
	<script type="text/javascript">
		$(document).ready(function(){
			
			// set equal height
			if($(".navbar-default").height()==0){
				var getMaxheight = $(".right-col").height();
				$(".left-col").css({
					'height' : getMaxheight
				});
				var detailH = $(".main-product-img").height();
				console.log("detailH = ", detailH);
				$(".product-detail").css({
					'min-height': detailH
				})
			}
			
		})
		
	</script>
</body>
</html>