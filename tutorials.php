<?php
  function formatFileName($fileName) {
    // File names are structured as follows:
    // TUTORIAL_NUMBER NAME_WITH_SPACES.txt
    // Example: 1 Getting Started.txt
    
    $withoutNumber = trim(str_replace(range(0,9),'',$fileName));
    $fileName = explode(".", $withoutNumber);
    return $fileName[0];
  }

  $fileNames = array();
  if ($handle = opendir('tutorials'))
    while ($entry = readdir($handle))
      if (! in_array($entry, array('..','.')))
        $fileNames[] = $entry;
?>

<!DOCTYPE html>
<html lang="en">
   <?php include('head.php') ?>
  <body>
    <?php $tutorials = true ?>
    <?php include('navbar.php') ?>

    <div class="container">
      <h1>Tutorials</h1>  
      <h3>Contents</h3>
      <ul>
        <?php foreach ($fileNames as $tutorialNumber => $fileName): ?>
          <li>
            <a href="#tutorial-<?php echo $tutorialNumber ?>">
              <?php echo formatFileName($fileName) ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>

      <?php foreach ($fileNames as $tutorialNumber => $fileName): ?>
        <section data-markdown id="tutorial-<?php echo $tutorialNumber ?>">
          <?php echo file_get_contents("tutorials/$fileName") ?>
        </section>
      <?php endforeach; ?>
    </div>

    <?php include('footer.php') ?>
    <?php include('javascript.php') ?>
  </body>
</html>


