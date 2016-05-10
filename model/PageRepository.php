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
        $sql = "UPDATE `page` SET  WHERE 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }

    public function insert($pdo)
    {
        $sql ="INSERT INTO `page`() VALUES ()";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }

    public function delete($pdo)
    {
        $sql = "DELETE FROM `page` WHERE 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }

    public function select($pdo)
    {
        $sql = "SELECT `id`, `slug`, `h1`, `body`, `title`, `img`, `span_text`, `span_class` FROM `page` WHERE 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }
    public function selectAll($pdo)
    {
        $sql = "SELECT `id`, `slug`, `h1`, `body`, `title`, `img`, `span_text`, `span_class` FROM `page`";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }

}