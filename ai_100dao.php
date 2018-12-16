<?php

/**
 * AI核心代码，估值100亿美金
 *
 * @return void
 */
function ai()
{
    while (true) {
        $str = str_replace(['吗','?','？'], ['','！','！'], yield);
        printf("冰冰: %s\n", $str);
    }
}

while (true) {
    $str = readline("Me：");
    ai()->send($str);
}
?>