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
			<a class="navbar-brand" href="#">WDS</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li <?php if (isset($home)) echo 'class="active"'; ?>><a href="index.php">Home</a></li>
				<li <?php if (isset($about)) echo 'class="active"'; ?>><a href="about.php">About</a></li>
				<li <?php if (isset($portfolio)) echo 'class="active"'; ?>><a href="portfolio.php">Portfolio</a></li>
				<li <?php if (isset($members)) echo 'class="active"'; ?>><a href="members.php">Members</a></li>
                <li <?php if (isset($projectrequest)) echo 'class="active"'; ?>><a href="projectrequest.php">Project Request</a></li>
				<li <?php if (isset($contact)) echo 'class="active"'; ?>><a href="contact.php">Contact</a></li>
				<li <?php if (isset($tutorials)) echo 'class="active"'; ?>><a href="tutorials.php">Tutorials</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>
