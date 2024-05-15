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
        echo "昇順にソートします。<br>";
      } else {
        // 降順
        rsort($array);
        echo "降順にソートします。<br>";
      }
      // ソート結果を表示
      foreach ($array as $num) {
        echo $num . "<br>";
      }
    }

    // 昇順ソート
    sort_2way($nums, true);

    // 降順ソート
    sort_2way($nums, false);
    ?>
  </p>
</body>

</html>