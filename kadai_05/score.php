
<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
            $score1 = 80;
            $score2 = 60;
            $score3 = 55;
            $score4 = 40;
            $score5 = 100;
            $score6 = 25;
            $score7 = 80;
            $score8 = 95;
            $score9 = 30;
            $score10 = 60; 
         // 変数の中身を出力する
         $total = ($score1+$score2+$score3+$score4+$score5+$score6+$score7+$score8+$score9+$score10);
         $ave = $total/10;
         echo 'total score = '. $total. '<br>';
         echo 'average score = '. $ave;
         ?>
     </p>
 </body>
 
 </html>
 