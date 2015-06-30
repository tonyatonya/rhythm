<div class="row">
	<div class="col-lg-12">
		<div class="compare-name-list">
			<span>
			<div class="name">
				<ul>
					<li><a href="#"></a> A1101S05</li>
					<li><a href="#"></a> A1101S05</li>
					<li><a href="#"></a> A1101S05</li>
				</ul>
			</div>
			<div class="button">
				<button class="clearlist">CLEAR ALL</button>
				<button class="comparenow" onclick="window.location.href='products-compare.php'">COMPARE NOW</button>
			</div>
			</span>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		$(".compare-name-list li").click(function(){
			$(this).remove();
		})
		$(".clearlist").click(function(){
			$(".compare-name-list li").each(function(){
				$(this).remove();
			})
		})
		$(".comparenow").click(function(){
			
		})
	})
</script>