<?php

/**
 * Register custom post type bt jjgrainger.
 *
 * @return void
 */


use PostTypes\PostType;
use PostTypes\Taxonomy;

$book_names = [
    'name'     => 'warsztat',
    'singular' => 'Warsztaty',
    'plural'   => 'Warsztaty',
    'slug'     => 'warsztaty',
];

$book= new PostType($workshopNames);

$book->options([
    'has_archive' => false,
    'supports'    => array('title', 'editor', 'author', 'thumbnail', 'revisions', 'post-formats', 'excerpt'),
]);
$book->icon('dashicons-format-aside');
$book->register();

$book_tax_names = [
    'name'     => 'formy',
    'singular' => 'Forma',
    'plural'   => 'Formy',
    'slug'     => 'formy',
];
$book_tax = new Taxonomy($book_tax_names);
$book_tax->posttype('warsztat');
$book_tax->register();