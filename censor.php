<?php
$paragraph = $_GET["paragraph"];
$badword = $_GET["badword"];
$lengthP = explode(" ", $paragraph);

$newParagraph = str_replace($badword, "***", $paragraph);
$newLength = explode(" ", $newParagraph);

// var_dump($paragraph, $badword);
// var_dump($lengthP);
// var_dump($newParagraph, $newLength);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Document Title -->
  <title>Document</title>
</head>

<body>
  <header></header>

  <main>
    <h2>
      <?php echo $paragraph . " => " . strlen($paragraph) . " Letters, " . count($lengthP) . " Words." ?>
    </h2>
    <h2>
      <?php echo $newParagraph . " => " . strlen($newParagraph) . " Letters, " . count($newLength) . " Words." ?>
    </h2>
  </main>

  <footer></footer>
</body>

</html>