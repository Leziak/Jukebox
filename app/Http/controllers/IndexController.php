<?php

namespace app\Http\controllers;

use \leziak\mvc\db;

class IndexController
{
    public function index()
    {

        $query = "SELECT `songs`.*,`authors`.`name` AS `author_name` FROM `songs` LEFT JOIN `authors` ON `authors`.`id` = `songs`.`author_id`";

        $songs = \app\Song::select($query);

        $content = 'list.php';

        include __DIR__ . '/../../../resources/views/html-wrapper.php';
    }
}