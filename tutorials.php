<!DOCTYPE html>

<?php
function formatFileName($fileName) {
  $withoutNumber = preg_replace("/[0-9] (.*?)/", "\1", $fileName);
  return trim(explode(".txt", $withoutNumber)[0]);
}
?>

<html lang="en">
   <?php include('head.php') ?>
   <link rel="stylesheet" href="css/members.css" />
  <body>
    <?php $members = true ?>
    <?php include('navbar.php') ?>

    <div class="container">
      <h1>Tutorials</h1>  

      <?php
      $fileNames = array();
      if ($handle = opendir('tutorials')) {
        while (false !== ($entry = readdir($handle))) {
          if ($entry !== '..' && $entry !== '.') {
            $fileNames[] = $entry;
          }
        }
      }

      ?>

      <h3>Contents</h3>
      <ul>
        <?php 
        $tutorialNumber = 0;
        foreach ($fileNames as $fileName) {
          $sectionName = formatFileName($fileName);
          ?>
          <li><a href="#tutorial-<?php echo $tutorialNumber ?>"><? echo $sectionName ?></a></li>
          <?php 
          $tutorialNumber += 1;
        }
        ?>
      </ul>

      <?php 
      $tutorialNumber = 0;
      foreach ($fileNames as $fileName) { ?>
      <section data-markdown id="tutorial-<?php echo $tutorialNumber ?>">
        <?php echo file_get_contents("tutorials/$fileName") ?>
      </section> 
      <?php 
        $tutorialNumber += 1;
      } ?>
    </div>

    <?php include('footer.php') ?>
    <?php include('javascript.php') ?>
  </body>
</html>


