{"filter":false,"title":"sample.php","tooltip":"/kadai-commit/sample.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":0,"column":0},"end":{"row":13,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"UTF-8\">","        <title>おみくじ</title>","    </head>","    <body>","        <h1>おみくじ</h1>","        <p>おみくじの結果：無し</p>","        <form action=\"sample.php\" method=\"POST\">","            <button type=\"submit\" name=\"act\" value=\"draw\">おみくじをひく！</button>","        </form>","    </body>","</html>"],"id":21}],[{"start":{"row":0,"column":0},"end":{"row":13,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"UTF-8\">","        <title>おみくじ</title>","    </head>","    <body>","        <h1>おみくじ</h1>","        <p>おみくじの結果：無し</p>","        <form action=\"sample.php\" method=\"POST\">","            <button type=\"submit\" name=\"act\" value=\"draw\">おみくじをひく！</button>","        </form>","    </body>","</html>"],"id":22},{"start":{"row":0,"column":0},"end":{"row":16,"column":7},"action":"insert","lines":["<?php","    $result = '無し';","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"UTF-8\">","        <title>おみくじ</title>","    </head>","    <body>","        <h1>おみくじ</h1>","        <p>おみくじの結果：<?php print htmlspecialchars($result, ENT_QUOTES, \"UTF-8\"); ?></p>","        <form action=\"sample.php\" method=\"POST\">","            <button type=\"submit\" name=\"act\" value=\"draw\">おみくじをひく！</button>","        </form>","    </body>","</html>"]}],[{"start":{"row":0,"column":0},"end":{"row":16,"column":7},"action":"remove","lines":["<?php","    $result = '無し';","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"UTF-8\">","        <title>おみくじ</title>","    </head>","    <body>","        <h1>おみくじ</h1>","        <p>おみくじの結果：<?php print htmlspecialchars($result, ENT_QUOTES, \"UTF-8\"); ?></p>","        <form action=\"sample.php\" method=\"POST\">","            <button type=\"submit\" name=\"act\" value=\"draw\">おみくじをひく！</button>","        </form>","    </body>","</html>"],"id":23},{"start":{"row":0,"column":0},"end":{"row":24,"column":7},"action":"insert","lines":["<?php","    $result = '無し';","    if (array_key_exists('act', $_POST)) {","        $result = omikuji();","    }","","    function omikuji() {","        $fortune = [\"大吉\", \"吉\", \"中吉\", \"小吉\", \"末吉\", \"凶\"];","        return $fortune[random_int(0, count($fortune) - 1)];","    }","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"UTF-8\">","        <title>おみくじ</title>","    </head>","    <body>","        <h1>おみくじ</h1>","        <p>おみくじの結果：<?php print htmlspecialchars($result, ENT_QUOTES, \"UTF-8\"); ?></p>","        <form action=\"sample.php\" method=\"POST\">","            <button type=\"submit\" name=\"act\" value=\"draw\">おみくじをひく！</button>","        </form>","    </body>","</html>"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":18,"column":21},"end":{"row":18,"column":21},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1654564556260,"hash":"a6dea34e0907b59118a0c4c0f935c29cc4b09860"}