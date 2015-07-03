
<header class="desktop">
	<div class="brownbar">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-2">
					<a href="index.php" class="mainlogo" title="RHYTHM">
						<img src="images/mainlogo.png" alt="mainlogo" width="157" height="37" />
					</a>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8">
						
				</div>
				<form action="#" method="post" id="changelang">
					<div class="col-lg-2 col-md-2 col-sm-2 langsw">
						<?php if($_SESSION['lang'] && $_SESSION['lang'] == 'en'){ ?>
							<input type="hidden" value="th" name="lang">
						<?} else{?>
						<input type="hidden" value="en" name="lang">
						<?php } ?>
						<a id="langsw">
							<span class="icon icon-sphere"></span> TH/EN
						</a>
						<script type="text/javascript">
							$(function(){
								$("#langsw").click(function(){
									$("#changelang").submit();
								});
							})
						</script>
					</div>
				</form>
			</div>
		</div>
		<hr>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<nav id="mainnav">
					<ul>
						<li><a href="index.php"><?php echo($home); ?></a></li>
						<li><a href="history.php"><?php echo($history); ?></a></li>
						<li><a href="news.php"><?php echo($news); ?></a></li>
						<li><a href="products.php"><?php echo($products); ?></a></li>
						<li><a href="wheretobuy.php"><?php echo($where); ?></a></li>
						<li><a href="contactus.php"><?php echo($contact);?></a></li>
						<li><a href="joinus.php"><?php echo($join); ?></a></li>
					</ul>
					<hr>
				</nav>
			</div>
		</div>
	</div>	
</header>
<!-- show on mobile only -->
<header class="mobile">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
    	<div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">
		      <img src="images/mainlogo.png" alt="mainlogo" class="mainlogo"/>
	      </a>
    </div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      		<ul class="nav navbar-nav">
	  			<li><a href="index.php"><?php echo($home); ?></a></li>
				<li><a href="history.php"><?php echo($history); ?></a></li>
				<li><a href="news.php"><?php echo($news); ?></a></li>
				<li><a href="products.php"><?php echo($products); ?></a></li>
				<li><a href="wheretobuy.php"><?php echo($where); ?></a></li>
				<li><a href="contactus.php"><?php echo($contact);?></a></li>
				<li><a href="joinus.php"><?php echo($join); ?></a></li>
				<li>
					<form action="#" method="post" id="mbchangelang">
						<div class="col-lg-2 col-md-2 langsw">
							<?php if($_SESSION['lang'] && $_SESSION['lang'] == 'en'){ ?>
								<input type="hidden" value="th" name="lang">
							<?} else{?>
								<input type="hidden" value="en" name="lang">
							<?php } ?>
								<a id="langsw">
									<span class="icon icon-sphere"></span> TH/EN <?php echo($_SESSION['lang']); ?>
								</a>
								<script type="text/javascript">
									$(function(){
										$("#langsw").click(function(){
											$("#mbchangelang").submit();
										});
									})
								</script>
						</div>
					</form>
				</li>
					
	  		</ul>
	  	</div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>