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
            <?php foreach($members_array as $member): ?>
              <div class="row">
                <div class="col-xs-12">
                  <img src="images/<?php echo $member['img'] ?>" alt="<?php echo $member['name'] ?>" 
                    class="responsive-img col-xs-12 col-sm-4">  
                  <br>
                  <h3 class="col-xs-12 col-sm-8 text-center">
                    <?php echo $member['name'] ?><br>
                    <small><?php echo $member['position'] ?></small>
                  </h3>
                </div>
              </div>
              <hr>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>

    <?php include('footer.php') ?>
    <?php include('javascript.php') ?>
  </body>
</html>
