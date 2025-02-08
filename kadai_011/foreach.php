<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP課題011</title>
</head>
<body>

<?php

$products = ['名前' => '玉ねぎ','値段' => 200,'産地' => '北海道'];

foreach ($products as $key => $value){
  echo  "{$key}:{$value}.<br>";
}
  ?>

</body>
</html>