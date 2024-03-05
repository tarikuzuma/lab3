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
        helper('form');

        // Retrieve the validated data from the request
        $data = $this->request->getPost(['user_name', 'mobile_number', 'comment']);

        // Validate the submitted data
        if (! $this->validate([
            'user_name' => 'required|max_length[255]|min_length[3]',
            'mobile_number' => 'required|max_length[20]',
            'comment' => 'required|max_length[5000]|min_length[10]',
        ])) {
            // The validation fails, so return the form
            return $this->new();
        }

        // Get the validated data
        $commentData = $this->validator->getValidated();

        // Create an instance of the CommentModel
        $model = model(CommentModel::class);

        // Save the data to the database
        $model->save([
            'user_name' => $commentData['user_name'],
            'mobile_number' => $commentData['mobile_number'],
            'comment' => $commentData['comment'],
            'date_posted' => date('Y-m-d H:i:s')
        ]);

        // Display success message
        return view('templates/header', ['title' => 'Createdd a comment'])
            . view('comment/test')
            . view('templates/footer');
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