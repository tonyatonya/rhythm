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
					<li class="active"><?php echo($contact); ?></li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-sm-12">
<!--
				<fieldset class="title-set watch-slide">
					<legend><?php echo($contact); ?></legend>
				</fieldset>
-->
				<h2 class="section-title"><span><?php echo($contact); ?></span></h2>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 contact-info">
				<table class="table">
					<tr>
						<td><span class="icon icon-location"></span></td>
						<td>
							<?php if($_SESSION['lang'] == 'en'){ ?>
								No. 532 Soi Ratchadapisek 26 Samsennork. Huay Kwang, Bangkok 10310
							<?php }else{?>
								เลขที่ 532 ซอยรัชดาภิเษก 26 แขวงสามเสนนอก เขตหัวยขวาง กทม. 10310
							<?php }?>
							
						</td>
					</tr>
					<tr>
						<td><span class="icon icon-clock"></span></td>
						<td>
							<?php if($_SESSION['lang'] == 'en'){ ?>
								Office Hours: Monday - Friday 8.30 - 17.30.
							<?php }else{?>
								เวลาทำการ : จันทร์ - ศุกร์ เวลา 8.30-17.30
							<?php }?>
							
						</td>
					</tr>
					<tr>
						<td><span class="icon icon-mobile"></span></td>
						<td>
							<?php if($_SESSION['lang'] == 'en'){ ?>
								Tel 0-2541-5112-3 
							<?php }else{?>
								โทรศัพท์ : 0-2541-5112-3
							<?php }?>
							
						</td>
					</tr>
					<tr>
						<td><span class="icon icon-printer"></span></td>
						<td>
							<?php if($_SESSION['lang'] == 'en'){ ?>
								Fax 0-2541-5029
							<?php }else{?>
								โทรสาร : 0-2541-5029
							<?php }?>
							
						</td>
					</tr>
					<tr>
						<td>
							<img src="images/facebookicon.png" alt="facebookicon" width="32" height="32">
						</td>
						<td>
							<a href="https://www.facebook.com/RhythmThailand">https://www.facebook.com/RhythmThailand</a>
						</td>
					</tr>
					<tr>
						<td>
							<img src="images/lineshopicon.png" alt="lineshopicon" width="32" height="32">
						</td>
						<td>
							<a href="http://shop.line.me/web/m/shop/129441">http://shop.line.me/web/m/shop/129441</a>
						</td>
					</tr>
				</table>
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.6565868359094!2d100.57573880000004!3d13.799563800000016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29e7000000001%3A0x55e3a56244670c13!2z4Lit4Li04LiZ4LmC4LiZ4LmA4Lin4LiK4Lix4LmI4LiZIOC5hOC4l-C4oeC5jCAo4Liq4Liy4LiC4LiyMSk!5e0!3m2!1sth!2sth!4v1435805265505"  frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4  col-lg-offset-1 col-md-offset-1 col-sm-offset-1 contact-form">
				<h3><?php echo($contactF); ?></h3>
				<table>
					<tr>
						<td>
							<label><?php echo($cname); ?></label>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text">
						</td>
					</tr>
					<tr>
						<td>
							<label><?php echo($cemail); ?></label>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text">
						</td>
					</tr>
					<tr>
						<td>
							<label><?php echo($cPhone); ?></label>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text">
						</td>
					</tr>
					<tr>
						<td>
							<label><?php echo($cmessage); ?></label>
						</td>
					</tr>
					<tr>
						<td>
							<textarea></textarea>
						</td>
					</tr>
					<tr>
						<td>
							<button><?php echo($csend); ?></button>
							<button><?php echo($ccancel); ?></button>
						</td>
					</tr>
				</table>
				
			</div>
		</div>
	</div>
	<!-- end content here -->
	<?php include('inc_footer.php'); ?>
	<script type="text/javascript">
		$(document).ready(function(){
			// set equal height
			if($(".navbar-default").height()==0){
			}
		})
	</script>
</body>
</html>