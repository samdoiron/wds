<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">Web Development Society</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li <?php if (isset($home)) echo 'class="active"'; ?>><a href="index">Home</a></li>
				<li <?php if (isset($about)) echo 'class="active"'; ?>><a href="about">About</a></li>
				<li <?php if (isset($portfolio)) echo 'class="active"'; ?>><a href="portfolio">Portfolio</a></li>
				<li <?php if (isset($members)) echo 'class="active"'; ?>><a href="members">Members</a></li>
				<li <?php if (isset($contact)) echo 'class="active"'; ?>><a href="contact">Contact</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>