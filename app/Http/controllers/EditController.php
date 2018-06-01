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

//// NOTE: this is just a template. It is not supposed to work in this state.
//
//// CREATE - www.example.com/edit
//// EDIT - www.example.com/edit?id=3
//

//
//// here I can be sure that I have an object $product of class Product
//// that can be saved into the database
//
//// was the form submitted
//if ($_POST) {
//
//// update data with submitted data
//    $product->name = $_POST['name'];
//    $product->price = $_POST['price'];
//
//// validate the data
//    $there_were_errors = false;
//    if ($product->name == '') {
//        // "name cannot be empty"
//        $there_were_errors = true;
//    }
//
//// if validation did not encounter any errors
//    if(!$there_were_errors) {
//
//        // save
//        $product->save();
//
//        // redirect
//        header('Location: /edit?id=3');
//
//    }
//}