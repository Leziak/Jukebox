<?php

namespace app;

use \leziak\mvc\db;
use PDO;

class Author
{
    public $id = null;
    public $name = null;
    public $birth = null;
    public $biography = null;
    public $photo = null;

    public static function find($id)
    {
        $query = "
            SELECT *
            FROM `authors`
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
            INTO `authors`
            (`name`, `birth`, `biography`, `photo`)
            VALUES
            (?, ?, ?, ?)
        ";

        $values = [
            $this->name,
            $this->birth,
            $this->biography,
            $this->photo,
        ];

        db::query($query, $values);

        $this->id = db::getConnection()->lastInsertId();
    }

    public function update()
    {
        $query = "
            UPDATE `authors`
            SET `name` = ?,
                `birth` = ?,
                `biography` = ?,
                `photo` = ?,
            WHERE `id` = ?
        ";

        $values =  [
            $this->name,
            $this->birth,
            $this->biography,
            $this->photo,
        ];

        db::query($query, $values);
    }

    public function delete()
    {
        $query = "
            DELETE
            FROM `authors`
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