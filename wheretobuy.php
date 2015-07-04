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
					<li class="active"><?php echo($where); ?></li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-sm-12">
			<!--
				<fieldset class="title-set watch-slide">
					<legend><?php echo($where); ?></legend>
				</fieldset>
			-->
				<h2 class="section-title"><span><?php echo($where); ?></span></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-md-12">
				<figure class="where-banner">
					<h3><?php echo($findUs); ?></h3>
					<img src="images/wheretobuybanner.jpg" alt="wheretobuybanner">
				</figure>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="dep-logo">
					<ul class="dep-nav">
						<li><a href="#"><img src="images/logo/Untitled-1_14.png" alt="Untitled-1_14" width="63" height="76"></a></li>
						<li><a href="#"><img src="images/logo/Untitled-1_16.png" alt="Untitled-1_16" width="69" height="76"></a></li>
						<li><a href="#"><img src="images/logo/Untitled-1_18.png" alt="Untitled-1_18" width="88" height="76"></a></li>
						<li><a href="#"><img src="images/logo/Untitled-1_20.png" alt="Untitled-1_20" width="68" height="76"></a></li>
						<li><a href="#"><img src="images/logo/Untitled-1_22.png" alt="Untitled-1_22" width="164" height="76"></a></li>
						<li><a href="#"><img src="images/logo/Untitled-1_24.png" alt="Untitled-1_24" width="58" height="76"></a></li>
						<li><a href="#"><img src="images/logo/Untitled-1_26.png" alt="Untitled-1_26" width="162" height="76"></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-12 col-sm-12 notice-text">
				<?php echo($selectDep); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="dep-list">
					<div class="dep-list-child">
						<h3 class="dep-name">
							<img src="images/logo/Untitled-1_14.png" alt="Untitled-1_14"> CENTRAL
						</h3>
						<div class="dep-list-name">
							<ul>
								<?php for($i=0;$i<25;$i++){ ?>
								<li>
									<table>
										<tr>
											<td class="current">ชิดลม</td>
											<td>ชั้น  5 แผนกเครื่องครัว</td>
											<td><a href="images/CT.jpg" class="preview"><span class="icon icon-search"></span></a></td>
										</tr>
									</table>
								</li>
								<?php } ?>
							</ul>
							
						</div>
					</div>
				</div>
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
				$(".preview").colorbox();
			}else{
				$(".preview").colorbox({
					width: '75%',
					height: 'auto'
				});
			}
		})
	</script>
</body>
</html>