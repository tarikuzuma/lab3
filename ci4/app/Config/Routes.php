<?php

use App\Controllers\News; 
use App\Controllers\Pages;
use App\Controllers\Project;   

$routes->get('news', [News::class, 'index']);  
$routes->get('news/new', [News::class, 'new']); 
$routes->post('news', [News::class, 'create']);     
$routes->get('news/(:segment)', [News::class, 'show']); 

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);

$routes->get('pages', [Pages::class, 'projects']);
$routes->get('(:segment)', [Pages::class, 'view']);

$routes->get('projects', 'Project::index'); // Route for projects
$routes->get('projects/personal', 'Project::personal'); // Route for personal projects
$routes->get('projects/academic', 'Project::academic'); // Route for academic projects

$routes->get('pages', [Pages::class, 'hobbies']);
$routes->get('(:segment)', [Pages::class, 'view']);