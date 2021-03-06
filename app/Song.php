<?php

namespace app;

use \leziak\mvc\db;
use PDO;

class Song
{
    public $id = null;
    public $author_id = null;
    public $author_name = null;
    public $name = null;
    public $code = null;
    public $description = null;
    public $date = null;
    public $url = null;
    public $html_url = null;

    public static function find($id)
    {
        $query = "
            SELECT `songs`.*,`authors`.`name` AS `author_name` FROM `songs` LEFT JOIN `authors` ON `authors`.`id` = `songs`.`author_id` WHERE `songs`.`id` = ?
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
            (`name`, `code`, `author_id`, `description`, `date`, `url`, `html_url`)
            VALUES
            (?, ?, ?, ?, NOW(), ?, ?)
        ";

        $values = [
            $this->name,
            $this->code,
            $this->author_id,
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
                `author_id` = ?,
                `description` = ?,
                `url` = ?,
                `html_url` = ?
            WHERE `id` = ?
        ";

        $values =  [
            $this->name,
            $this->code,
            $this->author_id,
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