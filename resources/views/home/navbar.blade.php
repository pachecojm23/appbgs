<!-- nav -->
<div class="navigation">
    <nav class="navbar navbar-default">
	    <!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
	    	    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
		     </button>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
			<nav class="stroke">
				<ul class="nav navbar-nav">
					<li class="active">{!!Html::link('/', 'HOME') !!}</li>
					<li>{!!Html::link('/about', 'NOSOTROS', array('class'=>'"hvr-rectangle-out"'))!!}</li>
					<li>{!!Html::link('/services', 'SERVICIOS', array('class'=>'"hvr-rectangle-out"'))!!}</li>
					<li>{!!Html::link('/contact', 'CONTACTO', array('class'=>'"hvr-rectangle-out"'))!!}</li>
					<li>{!!Html::link('/gestion', 'GESTION AULA', array('class'=>'"hvr-rectangle-out"'))!!}</li>
					<!--li><a href="#" class="hvr-rectangle-out">Menu</a></li-->
				</ul>
			</nav>
		</div>
		<!-- /.navbar-collapse -->
	</nav>
</div>
<!-- //nav -->