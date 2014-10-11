
<!DOCTYPE html>
<html lang="en">
	<?php include('head.php') ?>
	<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

		<?php $home = true ?>
		<?php include('navbar.php') ?>

		<!-- Begin page content -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="page-header">
						<h1 class="text-center">Web Dev Society </h1>
					</div>
					<p class="lead">
						The web development society's goal is to provide students with opportunity to gain experience,
						while providing Dalhousie's Community with websites and web applications.
					</p>		
				</div>
			</div>
		</div>

		<?php include('footer.php') ?>
		<?php include('javascript.php') ?>
	</body>
</html>
