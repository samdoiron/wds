<!DOCTYPE html>
<html lang="en">
	<?php include('head.php') ?>
	<body>
		<?php $contact = true ?>
		<?php include('navbar.php') ?>

		<!-- Begin page content -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="page-header">
						<h1 class="text-center">Contact</h1>
					</div>

					<div class="alert alert-success hide" role="alert"></div>
					<div class="alert alert-danger hide" role="alert"></div>

					<p class="lead">
						<form id="email-form" action="email.php" method="POST" role="form">
							<div class="form-group">
								<label class="control-label" for="email">Email From:</label>
								<input type="email" id="email" placeholder="Email Address" 
									class="form-control" required>
							</div>
							<div class="form-group">
								<label class="control-label" for="subject">Subject:</label>
								<input type="text" id="subject" placeholder="Subject" 
									class="form-control" required>
							</div>
							<div class="form-group">
								<label class="control-label" for="message">Message:</label>
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" required></textarea>
							</div>
							<div class="form-group">
								<input type="submit" value="Send" class="btn btn-block btn-primary">
							</div>
						</form>
					</p>		
				</div>
			</div>
		</div>

		<?php include('footer.php') ?>
		<?php include('javascript.php') ?>
	</body>
</html>
