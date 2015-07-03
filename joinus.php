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
					<li class="active">JOIN US</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<fieldset class="title-set watch-slide">
					<legend>JOIN US</legend>
				</fieldset>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
				<h3 class="join-text">
					Whatever your professional background  and whatever your ambitions
for your future career, we’re confident that you can find the right
opportunity at  Innovation time Co.,Ltd. 
				</h3>
				<hr style="width: 20%; margin-left: auto; margin-right: auto; margin-top: 30px; margin-bottom: 30px; border-color: #32220a;">
				<h3 class="join-text" style="font-size:15px;">Vacancies</h3>
			</div>
			<div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
				<ul class="va-list">
					<?php for($i=0;$i<5;$i++){ ?>
					<li>
						<a href="#">
							<table>
								<tr>
									<td>Marketing</td>
									<td>2  capacities</td>
									<td>10/10/2015</td>
								</tr>
							</table>
						</a>
						<div class="detail">
							<h3>Qualification</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</p>
						</div>
					</li>
					<?php } ?>
				</ul>
				
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
			if($(".navbar-default").height()==0){}
			$(".va-list a").click(function(e){
				e.preventDefault();
				var _click = $(this).parent();
				if(_click.hasClass("active")==true){
					console.log("hasclass");
					_click.find(".detail").slideUp();
					_click.removeClass("active");
				}else{
					console.log("noclass");
					$(".va-list").find(".active").find(".detail").slideUp();
					$(".va-list").find(".active").removeClass("active");
					_click.find(".detail").slideDown();
					_click.addClass("active");
					
				}
			})
		})
	</script>
</body>
</html>