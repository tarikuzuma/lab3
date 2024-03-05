<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model
{
    protected $table = 'edgumba_myguest';

    protected $allowedFields = ['user_id', 'user_name', 'comment', 'date_posted'];

    public function getComment($user_id = false)
    {
        if ($user_id === false) {
            return $this->findAll();
        }

        return $this->where(['user_id' => $user_id])->first();
    }

    public function getAllComments()
    {
        return $this->orderBy('date_posted', 'DESC')->findAll();
    }

    public function getCommentCount()
    {
        return $this->countAll();
    }
}