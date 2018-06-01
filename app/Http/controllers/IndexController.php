<?php

namespace app\Http\controllers;

use \leziak\mvc\db;

class IndexController
{
    public function index()
    {

        $query = "SELECT * FROM `songs`";

        $songs = \app\Song::select($query);

        $content = 'list.php';

        include __DIR__ . '/../../../resources/views/html-wrapper.php';
    }
}