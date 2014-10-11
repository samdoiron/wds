<?php 

$members_array = array(
  array("name" => "Andrey Kulakevich", "position" => "President", "img" => "andrey.jpg"),
  array("name" => "Terry Lin", "position" => "Vice-President", "img" => "terry.jpg"),
  array("name" => "Gilberto De Melo", "position" => "Treasurer", "img" => "gilberto.jpg"),
  array("name" => "Matthew Coelho", "position" => "Secretary", "img" => "coelho.jpg"),
  array("name" => "Sam Doiron", "position" => "Member", "img" => "sam.jpg"),
  array("name" => "Baifan Hu", "position" => "Member", "img" => "Sabrina.jpg"),
  array("name" => "Weibo Wang", "position" => "Member", "img" => "weibo.jpg"),
);

?>
<!DOCTYPE html>
<html lang="en">
   <?php include('head.php') ?>
  <body>
    <?php $members = true ?>
    <?php include('navbar.php') ?>

		<!-- Begin page content -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="page-header">
						<h1 class="text-center">Members</h1>
					</div>
				
					<div class="lead">
						<?php foreach(array_chunk($members_array,3) as $three_members): ?>
							<div class="row">
								<?php foreach ($three_members as $member): ?>
									<div class="col-xs-12 col-sm-4 col-md-4">
									<img src="images/<?php echo $member['img'] ?>" alt="<?php echo $member['name'] ?>" 
										class="responsive-img col-xs-12">	
									<br>
									<h3 class="col-xs-12 text-center">
										<?php echo $member['name'] ?><br>
										<small><?php echo $member['position'] ?></small>
									</h3>
								</div>
								<?php endforeach ?>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
    <?php include('footer.php') ?>
    <?php include('javascript.php') ?>
  </body>
</html>
