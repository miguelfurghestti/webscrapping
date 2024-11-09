<?php

$content = file_get_contents('https://www.globo.com/');

preg_match_all('/<div class="bullets">(.*?)<a class="post__link" href="(.*?)" title="(.*?)">(.*?)<\/a><\/div>/s', $content, $matches);
preg_match_all('/<img[^>]*class="[^"]*post__image[^"]*"[^>]*src="([^"]+)"/i', $content, $matches_img);

// var_dump($matches[4]);

// $arraySemDuplicados = array_unique($matches[0]);

// foreach ($matches[4] as $key => $value) {
//     echo $value;
//     echo '<hr>';
// }

// print_r($matches_img[0]);
// print_r($matches_img);

// var_dump($matches_img);
foreach ($matches_img[1] as $key => $value) {
    echo '<img src="' . $value . '" />';
    echo '<hr>';
}
// var_dump($arraySemDuplicados);