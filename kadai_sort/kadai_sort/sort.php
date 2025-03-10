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


function sort_2way($arr, $order) {
    // TRUEなら昇順、TRUEでなければ降順にソート
    if ($order) {
        echo '昇順にソートします。<br>';
        sort($arr);
    } else {
        echo '降順にソートします。<br>';
        rsort($arr);
    }

    // ソート結果を1行ずつ表示
    foreach ($arr as $elem) {
        echo $elem . '<br>';
    }
}


$nums = [15, 4, 18, 23, 10 ];

sort_2way($nums, TRUE);
sort_2way($nums, FALSE);

?>
</p>



</body>
</html>