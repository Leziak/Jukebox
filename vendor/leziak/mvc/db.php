<?php

//CONNECT TO THE DATABASE

namespace leziak\mvc;

use \PDO;
use \PDOException;

class db
{
    protected static $connection = null;

    public static function getConnection()
    {
        if (static::$connection === null) {
            try {
                static::$connection = new PDO(
                    'mysql:dbname=' . DB_NAME . ';host=' . DB_HOST . ';charset=utf8',
                    DB_USER,
                    DB_PASSWORD
                );

                static::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
        }

        return static::$connection;
    }

    public static function query($query, $values=[])
    {
        $connection = static::getConnection();

        $statement = $connection->prepare($query); // prepare the query

        $success = $statement->execute($values);

        if (!$success) // execute the query
        {
            static::exitWithError();
        }

        return $statement;
    }

    public static function select($query, $values = [])
    {
        $statement = static::query($query, $values);
        $statement->setFetchMode(PDO::FETCH_ASSOC);

        $all_results = $statement->fetchAll();

        return $all_results;
    }

    public static function find($query, $values=[])
    {
        $statement = static::query($query, $values);
        $statement->setFetchMode(PDO::FETCH_OBJ);

        $result = $statement->fetch();

        return $result;
    }

    public static function exitWithError()
    {
        // print a <h1>
        echo '<h1>MySQL error:</h1>';

        // dump information about the error
        var_dump(static::getConnection()->errorInfo());

        // end execution
        exit();
    }


}