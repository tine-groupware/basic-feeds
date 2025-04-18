<?php

require_once(__DIR__ . '/vendor/autoload.php');

use Aschmelyun\BasicFeeds\Feed;

$attributes = [
    'link' => 'https://aschmelyun.com/blog',
    'authors' => 'Andrew Schmelyun',
    'title' => 'Andrew Schmelyun\'s Blog',
    'feed' => 'https://aschmelyun.com/feed.xml',
    'description' => 'test'
];

$categories = ['test1', 'test2'];
$images = ["image1", "image2"];

$feed = Feed::create($attributes)
    ->entry([
        'id' => 'https://example.com/blog/post-one',
        'title' => 'Post One',
        'link' => 'https://example.com/blog/post-one',
        'summary' => 'This is my summary',
        'content' => '<p>This is my example content!</p>',
        'description' => 'test',
        'categories' => $categories,
        'images' => $images,
    ]);

header('Content-type: application/xml');
echo $feed->asRss();