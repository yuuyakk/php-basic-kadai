<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    function sort_2way($array, $order = true)
    {
      if ($order) {
        echo "昇順にソートします。<br> ";
        // 昇順でソート
        sort($array);
      } else {
        echo "降順にソートします。<br>";
        // 降順でソート
        rsort($array);
      }
      // ソートされた結果を表示
      foreach ($array as $key) {
        echo $key . '<br>';
      }
    }

    // ソート対象の配列
    $nums = [15, 4, 18, 23, 10];
    // 昇順でソート
    sort_2way($nums, true);

    // 降順でソート
    sort_2way($nums, false);
    ?>
  </p>
</body>

</html>