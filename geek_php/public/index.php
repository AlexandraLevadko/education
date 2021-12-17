<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once dirname(__DIR__) . '/vendor/autoload_runtime.php';

$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader);

$images = [
    [
        'name' => 'image_1',
        'path' => '../images/image_1.jpg'
    ],
    [
        'name' => 'image_2',
        'path' => '../images/image_2.jpg'
    ],
    [
        'name' => 'image_3',
        'path' => '../images/image_3.jpg'
    ],
    [
        'name' => 'image_4',
        'path' => '../images/image_4.jpg'
    ],
    [
        'name' => 'image_5',
        'path' => '../images/image_5.jpg'
    ],
    [
        'name' => 'image_6',
        'path' => '../images/image_6.jpg'
    ],
    [
        'name' => 'image_7',
        'path' => '../images/image_7.jpg'
    ],
];

try {
    $template = $twig->load('index.html.twig');
    $list = $template->render([
        'images' => $images
    ]);
    echo $list;
} catch (Exception $e) {
    throw new Exception($e->getMessage());
}
