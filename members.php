<?php 

$members_array = array(
  array("name" => "Andrey Kulakevich", "position" => "President", "img" => "andrey.jpg"),
  array("name" => "Tyler Pachal", "position" => "Vice-President", "img" => "tyler.jpg"),
  array("name" => "Gilberto De Melo", "position" => "Treasurer", "img" => "gilberto.jpg"),
  array("name" => "Kyle Asaff", "position" => "Member", "img" => "kyle.jpg"),
  array("name" => "Matthew Coelho", "position" => "Member", "img" => "coelho.jpg"),
  array("name" => "Terry Lin", "position" => "Member", "img" => "terry.jpg"),
  array("name" => "Brenden Krochko", "position" => "Member", "img" => "brenden.jpg")
);

?>
<!DOCTYPE html>
<html lang="en">
   <?php include('head.php') ?>
   <link rel="stylesheet" href="css/members.css" />
  <body>
    <?php $members = true ?>
    <?php include('navbar.php') ?>

    <!-- Begin page content -->

          <section class="members">
            <h1 class="text-center title">Members</h1>
            <?php foreach($members_array as $member): ?>
              <figure class="member-card">
                <img 
                  src="images/<?php echo $member['img'] ?>" 
                  alt="<?php echo $member['name'] ?>"
                  class="member-card__image"
                >
                <br>
                <h3>
                  <?php echo $member['name'] ?><br>
                  <small><?php echo $member['position'] ?></small>
                </h3>
              </figure>
            <?php endforeach ?>
          </section>

    <?php include('footer.php') ?>
    <?php include('javascript.php') ?>
  </body>
</html>
