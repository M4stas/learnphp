<?php

namespace App\Controllers;

use App\DB;
use App\Models\Post;
use App\Models\User;

class PublicController
{
    public function index()
    {
        $title = 'World';
        $posts = Post::where('category', 'world');
        view('index', compact('title', 'posts'));
    }

    public function us()
    {
        $title = 'U.S';
        $posts = Post::where('category', 'us');
        view('us', compact('title', 'posts'));
    }

    public function tech()
    {
        $title = 'Technology';
        $posts = [
            (object) ['title' => 'Kuidas PHP veebilehe loob', 'created_at' => 'October 6, 2026', 'author' => 'Mats', 'body' => 'PHP töötab serveris ja koostab HTML-i, mille brauser kasutajale kuvab. Marsruut valib controller’i meetodi ning vaade annab lehele kujunduse.'],
            (object) ['title' => 'Git aitab muudatusi jälgida', 'created_at' => 'October 6, 2026', 'author' => 'Mats', 'body' => 'Git salvestab koodi muudatused commitidena. Eraldi haru võimaldab uut lehte arendada ning pull request aitab muudatused enne ühendamist üle vaadata.'],
        ];
        view('tech', compact('title', 'posts'));
    }

    public function test()
    {
        $db = new DB();
    }

    public function form()
    {

        view('form');
    }

    public function answer()
    {
        dump($_GET, $_POST);
    }
}
