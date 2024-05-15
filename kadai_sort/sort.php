<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // 配列
    $nums = [15, 4, 18, 23, 10];

    // 関数の定義
    function sort_2way(&$array, $order)
    {
      if ($order) {
        // 昇順
        sort($array);
      } else {
        // 降順
        rsort($array);
      }
    }

    // 昇順ソートを表示
    echo "昇順にソートします。<br>";
    sort_2way($nums, true);
    foreach ($nums as $num) {
      echo $num . "<br>";
    }

    // 降順ソートを表示
    echo "降順にソートします。<br>";
    sort_2way($nums, false);
    foreach ($nums as $num) {
      echo $num . "<br>";
    }
    ?>
  </p>
</body>

</html>