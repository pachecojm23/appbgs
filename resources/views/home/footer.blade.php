<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-4 footer-grid">
					<p>Barrio El Calvario, Av. Benjamín Estrada Valiente #8.	
					<br> Metapán, Santa Ana, El Salvador.
					<a href="mailto:colegiobillgates@aguilasamericanas.net">colegiobillgates@aguilasamericanas.net</a>
					<p>Teléfono : +503 2402-3349</p>
				</div>
				<div class="col-md-4 footer-grid">
					<ul>
						<li>{!!Html::link('/about', 'About')!!}</li>
						<li><a href="#">Menu</a></li>
						<li><a href="#">Menu</a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grid">
					<ul>
						<li>{!!Html::link('/contact', 'Contact')!!}</li>
						<li>{!!Html::link('/services', 'Services')!!}</li>
						<li>{!!Html::link('/','Home')!!}</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-copy">
				<p>&copy 2016 Bill Gates School. All rights reserved</p>
				<ul>
					<li><a href="#" class="facebook" id="facebook"><span type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Follow Us On Facebook"></span></a></li>
					<div class="clearfix"> </div>
				</ul>
				<script>
					$(function () {
					  $('[data-toggle="tooltip"]').tooltip()
					})
				</script>
			</div>
		</div>
	</div>
<!-- //footer -->