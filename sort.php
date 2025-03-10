<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>
<body>
<p></p>
<?php
$nums = [15, 4, 18, 23, 10 ];


// 昇順にソート
sort($nums);
echo "昇順にソートします<br>";
foreach ($nums as $num) {
    echo $num . "<br>";
}

// 降順にソート
rsort($nums);
echo "降順にソートします<br>";
foreach ($nums as $num) {
    echo $num . "<br>";
}

?>
</p>



</body>
</html>