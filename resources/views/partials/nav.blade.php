<!-- Nav -->
<nav id="layout-nav" class="navbar navbar-expand-md navbar-light navbar-transparent container" role="navigation">

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false" aria-controls="navbarCollapse">
		<span>&#9776</span>
	</button>

	<div id="navbarCollapse" class="navbar-collapse collapse">

		<ul class="navbar-nav">
			<li class="nav-item {{ (Route::getFacadeRoot()->current()->uri() == '/') ? 'active' : '' }}">
				<a class="nav-link" href="{{ url('/') }}">Home</a>
			</li>
		</ul>
	</div>
</nav>
