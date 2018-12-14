<?php

/**
 * This file is part of the samedreams/just-for-fun-ai.
 *
 * @Link     https://github.com/samedreams/just-for-fun-ai
 * @Document https://github.com/samedreams/just-for-fun-ai/blob/master/README.md
 * @Contact  itwujunze@gmail.com
 * @License  https://github.com/samedreams/just-for-fun-ai/blob/master/LICENSE
 *
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */



/**
 *
 *  $10 billion AI project code implementation in PHP
 *  
 */

function ai($input)
{
    $target = ['吗', '?', '？'];
    $replace = ['', '!', '!'];

    return str_replace($target, $replace, $input);
}


while (true) {
    $input = readline('Me: ');
    $output = ai($input);
    fwrite(STDOUT, 'AI: '.$output."\n");
}


