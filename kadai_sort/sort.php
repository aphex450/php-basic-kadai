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

function sort_2way(array $nums,bool $order):array{
  if($order){
    sort($nums);
    }else{
      rsort($nums);
    }
    return $nums;
}

sort_2way($nums,true);
echo '昇順にソートします<br>';

foreach(sort_2way($nums,true) as $num){
  echo $num . '<br>';
}

sort_2way($nums,false);
echo '降順にソートします<br>';

foreach(sort_2way($nums,false) as $num){
  echo $num . '<br>';
}
?>
</p>
</body>
</html>