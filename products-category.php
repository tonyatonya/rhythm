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
					<li><a href="products.php">PRODUCTS</a></li>
					<li class="active">PRODUCTS CATEGORY NAME</li>
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
			<div class="col-lg-3 col-md-3">
				<aside class="left-col">
					<?php include('inc_categorymenu.php'); ?>
				</aside>
			</div>
			<div class="col-lg-9 col-md-9 ">
				<div class="right-col">
					<div class="row product-list">
					<?php for($i=0;$i<9;$i++){ ?>
						<div class="col-lg-4 col-md-4 col-sm-6">
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
					<nav class="pagenav">
					<ul class="pagination">
					    <li>
					      <a href="#" aria-label="Previous">
					        <span aria-hidden="true">prev</span>
					      </a>
					    </li>
					    <li class="active"><a href="#">1</a></li>
					    <li><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li><a href="#">4</a></li>
					    <li><a href="#">5</a></li>
					    <li>
					      <a href="#" aria-label="Next">
					        <span aria-hidden="true">next</span>
					      </a>
					    </li>
					  </ul>
					<div>showing 1-36 of 124</div>
				</nav>
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
			}
		})
	</script>
</body>
</html>