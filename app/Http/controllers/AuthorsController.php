<?php

namespace app\Http\controllers;

use app\Author;
use \leziak\mvc\db;
use PDO;

class AuthorsController
{
    public function index()
    {
        $authors = Author::select("SELECT * FROM `authors`");

        $content = 'authors.php';

        include __DIR__ . '/../../../resources/views/html-wrapper.php';
    }
}