<?php

namespace app\Http\controllers;

use app\Song;
use \leziak\mvc\db;

class EditController
{
    public function index()
    {

        if (!isset($_GET['id'])) {
            $song = new Song();
        } else {
            $song = song::find( $_GET['id'] );
        }

        if($_POST) {
            $song->name = $_POST['name'];
            $song->code = $_POST['code'];
            $song->author_id = $_POST['author_id'];
            $song->description = $_POST['description'];
            if(!($song->name == '' || $song->code == '' || $song->description == '')) {
                $song->save();
                header("location: ?page=list&id={$song->id}");
            } else {
                echo '<script>alert("Please fill all the inputs")</script>';
            }

        }

        $content = 'edit.php';

        include __DIR__ . '/../../../resources/views/html-wrapper.php';
    }
}

