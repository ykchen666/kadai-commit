{"filter":false,"title":"index.php","tooltip":"/index.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":20,"column":7},"action":"insert","lines":["<?php","    date_default_timezone_set('Asia/Tokyo');","    $now_hour = (int)date(\"G\");","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"UTF-8\">","        <title>タイトル</title>","    </head>","    <body>","        <p>今は<?php print $now_hour; ?>時です。</p>","        <?php if (6 <= $now_hour && $now_hour < 12) { ?>","            <p>おはよう、太郎さん</p>","        <?php } elseif (12 <= $now_hour && $now_hour < 18) { ?>","            <p>こんにちは、太郎さん</p>","        <?php } else { ?>","            <p>こんばんは、太郎さん</p>","        <?php } ?>","    </body>","</html>"],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":15,"column":29},"end":{"row":15,"column":29},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1653454496064,"hash":"21ff519ebe4d24c0a0be289af173241415203c2c"}