<?php

namespace app;

use \leziak\mvc\db;
use PDO;

class Song
{
    public $id = null;
    public $name = null;
    public $code = null;
    public $author = null;
    public $description = null;
    public $date = null;
    public $url = null;
    public $html_url = null;

    public static function find($id)
    {
        $query = "
            SELECT *
            FROM `songs`
            WHERE `id` = ?
            ";

        $statement = db::query($query, [
            $id
        ]);

        $statement->setFetchMode(PDO::FETCH_CLASS, static::class);

        return $statement->fetch();
    }

    public static function select($query, $values = [])
    {
        $statement = db::query($query, $values);

        $statement->setFetchMode(PDO::FETCH_CLASS, static::class);

        return $statement->fetchAll();
    }

    public function insert()
    {
        $query = "
            INSERT 
            INTO `songs`
            (`name`, `code`, `author`, `description`, `date`, `url`, `html_url`)
            VALUES
            (?, ?, ?, ?, NOW(), ?, ?)
        ";

        $values = [
            $this->name,
            $this->code,
            $this->author,
            $this->description,
            $this->url,
            $this->html_url,
        ];

        db::query($query, $values);

        $this->id = db::getConnection()->lastInsertId();
    }

    public function update()
    {
        $query = "
            UPDATE `songs`
            SET `name` = ?,
                `code` = ?,
                `author` = ?,
                `description` = ?,
                `url` = ?,
                `html_url` = ?
            WHERE `id` = ?
        ";

        $values =  [
            $this->name,
            $this->code,
            $this->author,
            $this->description,
            $this->url,
            $this->html_url,
            $this->id
        ];

        db::query($query, $values);
    }

    public function delete()
    {
        $query = "
            DELETE
            FROM `songs`
            WHERE `id` = ?
        ";

        db::query($query, [$this->id]);

    }

    public function save()
    {
        if($this->id) {
            $this->update();
        } else {
            $this->insert();
        }
    }
}