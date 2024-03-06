<?php

use App\Controllers\News; 
use App\Controllers\Pages;
use App\Controllers\ProjectController; 
use App\Controllers\CommentController;  

$routes->get('news', [News::class, 'index']);  
$routes->get('news/new', [News::class, 'new']); 
$routes->post('news', [News::class, 'create']);     
$routes->get('news/(:segment)', [News::class, 'show']); 

$routes->get('contact', [Pages::class, 'contact']);
$routes->post('contact', [Pages::class, 'contact']);

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);


$routes->get('comment', [CommentController::class, 'index']);
$routes->get('comment/count', [CommentController::class, 'count']);
$routes->get('comment/new', [CommentController::class, 'new']);
$routes->post('comment', [CommentController::class, 'create']);
$routes->get('comment/(:segment)', [CommentController::class, 'show']);
$routes->get('comment/test', [CommentController::class, 'test']);

$routes->get('comment/show', [CommentController::class, 'show']); //???


/*
 public function combine()
    {
        $data['title'] = 'Comment count'; // Define the title variable
        return view('templates/header', $data)
            . view('comment/index')
            . view('comment/count')
            . view('templates/footer');
    }
    */
$routes->get('comment/combine', [CommentController::class, 'combine']);
