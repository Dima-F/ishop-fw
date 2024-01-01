<?php

use \ifw\View;
/** @var $this View */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Title</title>
  <?= $this->getMeta() ?>

</head>
<body>
  <?= $this->content; ?>
</body>
</html>