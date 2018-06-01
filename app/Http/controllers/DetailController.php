<?php

namespace app\Http\controllers;

use app\Song;
use \leziak\mvc\db;

class DetailController
{
    public function index()
    {
        $song_id = $_GET['id'];
        $song = Song::find($song_id);

        $site_url = SITE_URL . '/detail';


        $content = 'detail.php';

        include __DIR__ . '/../../../resources/views/html-wrapper.php';
    }
}