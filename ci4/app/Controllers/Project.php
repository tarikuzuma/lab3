<?php

namespace App\Controllers;

use App\Models\ProjectModel;

class ProjectController extends BaseController
{
    public function index()
    {
        // Load your model
        $model = new ProjectModel();

        // Get projects data from the model
        $data = [
            'projects' => $model->getProjects(),
            'title' => 'Projects Archive',
        ];

        // Load views and pass data
        return view('templates/header', $data)
            . view('projects/index', $data)
            . view('templates/footer');
    }

    public function personal()
    {
        // Load your model
        $model = new ProjectModel();

        // Get personal projects data from the model
        $data = [
            'projects' => $model->getPersonalProjects(),
            'title' => 'Personal Projects',
        ];

        // Load views and pass data
        return view('templates/header', $data)
            . view('projects/personal', $data)
            . view('templates/footer');
    }

    public function academic()
    {
        // Load your model
        $model = new ProjectModel();

        // Get academic projects data from the model
        $data = [
            'projects' => $model->getAcademicProjects(),
            'title' => 'Academic Projects',
        ];

        // Load views and pass data
        return view('templates/header', $data)
            . view('projects/academic', $data)
            . view('templates/footer');
    }
}
