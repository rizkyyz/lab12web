<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view(
            'home',
            [
                'title' => 'Halaman home',
                'content' => 'Ini adalah halaman home yang menjelaskan tentang isi halaman ini.'
            ]
        );
    }
}
