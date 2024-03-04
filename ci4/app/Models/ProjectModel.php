<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'projects';

    public function getProjects()
    {
        // Fetch all projects from the database
        return $this->findAll();
    }

    public function getPersonalProjects()
    {
        // Fetch personal projects from the database
        return $this->where('category', 'personal')->findAll();
    }

    public function getAcademicProjects()
    {
        // Fetch academic projects from the database
        return $this->where('category', 'academic')->findAll();
    }
}
