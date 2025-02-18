<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\View\View;

    class HomeController extends Controller
    {
        function __invoke(): View
        {

            $posts = [
                [
                    'title' => 'Post 1',
                    'content' => 'Content 1',
                ],
                [
                    'title' => 'Post 2',
                    'content' => 'Content 2',
                ],
                [
                    'title' => 'Post 3',
                    'content' => 'Content 3',
                ],
            ];

            $name = 'Laravel 11';
            return view('welcome', [
                'name' => $name,
                'posts' => $posts,
            ]);
        }
    }
