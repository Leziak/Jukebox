<?php

namespace app\Http\controllers;

use app\Song;
use \leziak\mvc\db;

class DeleteController
{
    public function index()
    {


        $song_id = $_GET['id'];

        $song = Song::find($song_id);

        $song->delete();

        header('location: /');


    }
}