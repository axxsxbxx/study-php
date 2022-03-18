<?php

// String Match
preg_match("/^(https?\:)\/\/(.*)(\..*)$/", "http://example.com", $matches);
var_dump($matches);

$html = <<< 'HTML'
<section>
    <h1>Lorem Ipsum</h1>
    <article>
        <h2>What is Lorem Ipsum?</h2>
    </article>
</section>
HTML;

preg_match_all("/<(h[1-6])>(.*)<\/\\1>/", $html, $matches);
var_dump($matches);


// Replace
echo preg_replace("/^(.*)@(.*)$/", "http://$2?user=$1","example@google.com");
echo preg_filter("/^(.*)@(.*)$/", "http://$2?user=$1","example@google.com");
echo preg_replace_callback(
    "/^(.*)@(.*)$/",
    function($matches) {
        // var_dump($matches);
        [, $username, $domain] = $matches;
        return "http://" . $domain . "?user=" . $username;
    },
    "example@google.com"
);


// Filter
// 패턴에 일치하는 값만 반환
var_dump(preg_grep("/^(.*)@(.*)$/", [
    "php://stdout",
    "example@naver.com"
]));


// Escape regex string
echo preg_quote("^().*$?:[]");