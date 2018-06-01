<?php

namespace app\Http\controllers;

use app\Author;
use app\Song;
use \leziak\mvc\db;

class AuthorController
{
    public function index()
    {
        $author_id = $_GET['id'];
        $author = Author::find($author_id);

        $query = "
            SELECT *
            FROM `songs`
            WHERE `songs`.`author_id` = ?";

        $songs = Song::select($query, [$author_id]);


        $content = 'author.php';

        include __DIR__ . '/../../../resources/views/html-wrapper.php';
    }
}