<?php

namespace App\Controllers;

use App\Models\CommentModel;

class CommentController extends BaseController
{

    public function index()
    {
        $data['title'] = 'Comment count'; // Define the title variable
        return view('templates/header', $data)
            . view('comment/index')
            . view('templates/footer');
    }
    public function count()
    {
        $model = model(CommentModel::class);

        // Get the comment count from the model
        
        $data['comment_count'] = $model->getCommentCount();
        $data['title'] = 'Comment count'; // Define the title variable

        return view('templates/header', $data)
            . view('comment/count', $data)
            . view('templates/footer');
    }

    public function new()
    {
        $data['title'] = 'Comment Create'; // Define the title variable

        helper('form');
        return view('templates/header', $data)
            . view('comment/create')
            . view('templates/footer');
    }

    public function create()
    {
        $model = model(CommentModel::class);

        $user_name = $this->request->getPost('user_name');
        $mobile_number = $this->request->getPost('mobile_number');
        $comment = $this->request->getPost('comment');

        $data = [
            'user_name' => $user_name,
            'mobile_number' => $mobile_number,
            'comment' => $comment,
            'date_posted' => date('Y-m-d H:i:s')
        ];

        if ($model->insert($data)) {
            // Success: Data inserted
            return view('templates/header', ['title' => 'Created a news item'])
                . view('comment/test')
                . view('templates/footer');
        } else {
            // Error: Failed to insert data
            return redirect()->back()->with('error', 'Failed to submit comment.');
        }
    }

    public function show($user_id = null)
    {
        $model = new CommentModel();

        $data['comments'] = $model->getAllComments();
        $data['title'] = 'Comment Show'; // Define the title variable

        return view('templates/header', $data)
            . view('comment/show', $data)
            . view('templates/footer');
    }

    public function combine()
    {

        $model = model(CommentModel::class);
        $data['title'] = 'Comment count'; // Define the title variable
        $data['comment_count'] = $model->getCommentCount();
        $data['comments'] = $model->getAllComments();

        helper('form');

        return view('templates/header', $data)
            . view('comment/index')
            . view('comment/count', $data)
            . view('comment/create')
            . view('comment/show', $data)
            . view('templates/footer');
    }

    public function test()
    {
        $data['title'] = 'test'; // Define the title variable

        helper('form');
        return view('templates/header', $data)
            . view('comment/test')
            . view('templates/footer');
    }

}