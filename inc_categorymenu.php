<div class="sidemenu-section">
	<h2><?php echo($WCat); ?></h2>
	<ul class="side-menu">
		<li><a href="products-category.php">EARTH SAVER</a></li>
		<li><a href="products-category.php">SUPER MODEL</a></li>
		<li><a href="products-category.php">AUTOMATIC</a></li>
		<li><a href="products-category.php">CHRONOGRAPH</a></li>
		<li><a href="products-category.php">MULTIFUNCTION</a></li>
		<li><a href="products-category.php">STYLISH</a></li>
		<li><a href="products-category.php">CERAMIC</a></li>
		<li><a href="products-category.php">FASHION</a></li>
		<li><a href="products-category.php">LADIES</a></li>
		<li><a href="products-category.php">PAIR</a></li>
		<li><a href="products-category.php">GENERAL</a></li>
		<li><a href="products-category.php">TRADITIONAL</a></li>
	</ul>
	</div>
<div class="sidemenu-section">
	<h2><?php echo($Ccat); ?></h2>
	<ul class="side-menu">
		<li><a href="products-category.php">BEEP ALARM CLOCKS</a></li>
		<li><a href="products-category.php">BELL ALARM CLOCKS</a></li>
		<li><a href="products-category.php">CUCKOO CLOCKS</a></li>
		<li><a href="products-category.php">DIGITAL CLOCKS</a></li>
		<li><a href="products-category.php">LIMITED CLOCKS</a></li>
		<li><a href="products-category.php">MAGIC MOTION CLOCKS</a></li>
		<li><a href="products-category.php">MECHANICAL CLOCKS</a></li>
		<li><a href="products-category.php">PLASTIC WALL CLOCKS</a></li>
		<li><a href="products-category.php">TABLE CLOCKS</a></li>
		<li><a href="products-category.php">WOODEN CLOCKS</a></li>
	</ul>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		if($(".navbar-default").height()!=0){
			$(".side-menu").css({
				'display': 'none'
			})
			$(".sidemenu-section h2").click(function(){
				var target = $(this).parent();
				if(target.hasClass("active")==false){
					$(".sidemenu-section.active").find(".side-menu").slideUp();
					$(".sidemenu-section.active").removeClass("active");
					target.find(".side-menu").slideDown();
					target.addClass("active");
				}else{
					target.find(".side-menu").slideUp();
					target.removeClass("active");
				}
			})
		}
	})
</script>