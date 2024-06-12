<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP sort</title>
</head>

<body>
    <p>
        <?php
        $nums = [15, 4, 18, 23, 10];
        function sort_2way(array $array, bool $order){
            if ($order) {
                echo "昇順にソートします<br>";
                sort($array);
            }else{
                echo "降順にソートします<br>";
                rsort($array);
            }

            foreach ($array as $ordered_array){
            echo $ordered_array. '<br>';
            }
        }

        sort_2way($nums, true);
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>
