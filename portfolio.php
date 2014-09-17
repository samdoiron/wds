<?php

$projects_array = array(
	array(
		"name" => "Project Manager (Open Source)",
		"description" => "Complete Agile Development Project Management System",
		"img" => array(
			array("title" => "Login Page", "src" => "project-manager-login.png"),
			array("title" => "New Project", "src" => "project-manager-new-project.png")
		),
		"link" => "https://github.com/websociety/project-manager"
	),
);

?>

<!DOCTYPE html>
<html lang="en">
	<?php include('head.php') ?>
	<body>
		<?php $portfolio = true ?>
		<?php include('navbar.php') ?>

		<!-- Begin page content -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="page-header">
						<h1 class="text-center">Portfolio</h1>
					</div>
					<div class="lead">
						<?php if ( empty($projects_array) ): ?>
							Coming soon.
						<?php else: ?>
							<?php foreach($projects_array as $project): ?>
								<div class="row text-center">
									<div class="col-xs-12">
										<div class="row">
											<?php for($i = 0; $i < count($project['img']); $i++): ?>
												<a href="images/<?php echo $project['img'][$i]['src'] ?>" 
													data-toggle="lightbox" 
													data-gallery="<?php echo str_replace(" ","_",$project['name']) ?>"
													data-title="<?php echo $project['img'][$i]['title'] ?>" 
													class="thumbnail col-xs-<?php echo 12.0 / count($project['img']) ?>">
													<img src="images/<?php echo $project['img'][$i]['src'] ?>" alt="<?php echo $project['img'][$i]['title'] ?>">
												</a>
											<?php endfor ?>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<h3>
													<a href="<?php echo $project['link'] ?>"><?php echo $project['name'] ?></a>
												</h3>
												<p><?php echo $project['description'] ?></p>	
											</div>
										</div>
									</div>
								</div>
								<hr>
							<?php endforeach ?>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>

		<?php include('footer.php') ?>
		<?php include('javascript.php') ?>
	</body>
</html>
