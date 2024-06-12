
<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP連想配列</title>
 </head>
 
 <body>
     <p>
        <?php
        $array = ['name'=>'onion', 'price'=>200, 'weight'=>150];
        print_r('Array ([name] => '. $array['name']. ' [price] => '. $array['price']. '[weight] => '. $array['weight']);
        ?>
     </p>
 </body>
 
 </html>
 