<?php

namespace app\Http\controllers;

use app\Author;
use \leziak\mvc\db;
use PDO;

class EditauthorController
{
    public function index()
    {
        if (!isset($_GET['id'])) {
            $author = new Author();
        } else {
            $author = Author::find( $_GET['id'] );
        }

        if($_POST) {
            $author->name = $_POST['name'];
            $author->birth = $_POST['birth'];
            $author->biography = $_POST['biography'];
            $author->photo = $_POST['photo'];
            if(!($author->name == '' || $author->biography == '' || $author->birth == '')) {
                $author->save();
                header("location: ?page=list&id={$author->id}");
            } else {
                echo '<script>alert("Please fill all the inputs")</script>';
            }

        }

        $content = 'editauthor.php';

        include __DIR__ . '/../../../resources/views/html-wrapper.php';
    }
}