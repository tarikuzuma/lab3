<?php

use App\Controllers\News; 
use App\Controllers\Pages;

$routes->get('news', [News::class, 'index']);  
$routes->get('news/new', [News::class, 'new']); 
$routes->post('news', [News::class, 'create']);     
$routes->get('news/(:segment)', [News::class, 'show']); 

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);

$routes->get('pages', [Pages::class, 'projects']);
$routes->get('(:segment)', [Pages::class, 'view']);