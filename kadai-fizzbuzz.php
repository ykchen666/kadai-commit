
<?php

$max = 100;


function fizzbuzz($num) {
    if ($num%3 == 0 && $num%5 == 0 ) {
        return 'FizzBuzz' ;
    }
    elseif ($num%3 == 0) {
        return 'Fizz' ;
    }
    elseif ($num%5 == 0) {
        return 'Buzz' ;
    }
    else {
        return $num ;
    }

    // 内容は省略。自力で考えてみましょう。
}

for ($num = 1; $num <= $max; $num++) {
        print fizzbuzz($num) . PHP_EOL;
    }

?>