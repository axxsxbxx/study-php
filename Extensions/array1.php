<?php

$blog = [
    'title'      => 'Lorem Ipsum',
    'categories' => [
        'all' => [
            [
                'title'   => 'What is Lorem Ipsum?',
                'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            ],
            [
                'title'   => 'Why do we use it?',
                'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
            ],
            [
                'title'   => 'Where does it come from?',
                'content' => 'Contrary to popular belief, Lorem Ipsum is not simply random text.',
            ],
        ],
    ],
];


// Push a element
array_push($blog['categories']['all'], [
    'title'     => 'Cupidatat amet eiusmod do culpa Lorem qui consequat.',
    'content'   => 'Cupidatat do voluptate consectetur cillum nulla culpa magna nostrud elit officia ullamco nisi. Nulla labore labore enim sunt irure eiusmod fugiat nostrud et adipisicing mollit consectetur occaecat. Commodo adipisicing voluptate eiusmod excepteur commodo sint eiusmod. Veniam aliquip tempor exercitation ullamco aliqua amet. Sint labore veniam qui proident fugiat cupidatat cupidatat non. Aliqua esse mollit consectetur enim do.'
]);


// Delete a element
array_pop($blog['categories']['all']);


// Filtering
var_dump(array_filter($blog['categories']['all'], function ($post) {
    return $post['title'] == 'What is Lorem Ipsum?';
}));


// Validate key
var_dump(array_key_exists('title', $blog));


// Make an array from another array
var_dump(array_map(function($post) {
    return $post['title'];
}, $blog['categories']['all']));


// Find a key
echo array_search('Lorem Ipsum', $blog);


// Generate Numbers array
$numbers = range(1, 5);


// Folding
echo array_reduce($numbers, function($carry, $num) {
    return $carry += $num * 2;
});


// Check element in array
in_array(3, $numbers);


// Get array keys
var_dump(array_keys($numbers));
var_dump(array_keys($blog));


// Get array values
var_dump(array_values($numbers));


// Make a array from variables
$message = "Hello, world";
$userCount = 0;
$pi = 3.14;
$is_visited = false;
$temp = null;

var_dump(compact("message", "userCount", "pi", "is_visited", "temp"));