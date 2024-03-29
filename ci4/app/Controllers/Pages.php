<?php

namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function contact()
    {
        $data['title'] = 'Guest Forms'; // Define the title variable
        return view('templates/header_contact', $data) . view('pages/contact') . view('templates/footer');
    }

    public function hobbies()
    {
        $data['title'] = 'Hobbies'; // Define the title variable
        return view('templates/header_hobbies', $data) 
            . view('pages/hobbies/hero')
            . view('pages/hobbies/core_hobbies')
            . view('pages/hobbies/soft_hobbies')
            . view('pages/hobbies/softdev')
            . view('pages/hobbies/webdev')
            . view('templates/footer');
    }

    public function view($page)
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }

}