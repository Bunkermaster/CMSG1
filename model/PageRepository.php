<?php

/**
 * Created by PhpStorm.
 * User: alexandrevagnair
 * Date: 10/05/2016
 * Time: 10:18
 */
namespace Model;

class PageRepository
{
    private $pdo;
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function update($pdo)
    {

    }

    public function insert($pdo)
    {

    }

    public function delete($pdo)
    {

    }

    public function select($pdo)
    {

    }
    public function selectAll($pdo)
    {

    }
    public function getSlug ($slug) {
        $sql ="SELECT `id`, `slug`, `body`, `title` FROM `page` WHERE `slug` = :slug ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':slug', $slug,\PDO::PARAM_STR);
        $stmt->execute();
        var_dump($stmt->fetchObject());
    }
}