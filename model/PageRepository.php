<?php

/**
 * Created by PhpStorm.
 * User: alexandrevagnair
 * Date: 10/05/2016
 * Time: 10:18
 */
class PageRepository
{
    public function update(\PDO $pdo)
    {
        $sql = "UPDATE `page` SET  WHERE 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }

    public function insert(\PDO $pdo)
    {
        $sql ="INSERT INTO `page`() VALUES ()";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }

    public function delete(\PDO $pdo)
    {
        $sql = "DELETE FROM `page` WHERE 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }

    public function select(\PDO $pdo)
    {
        $sql = "SELECT `id`, `slug`, `h1`, `body`, `title`, `img`, `span_text`, `span_class` FROM `page` WHERE 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }
    public function selectAll(\PDO $pdo)
    {
        $sql = "SELECT `id`, `slug`, `h1`, `body`, `title`, `img`, `span_text`, `span_class` FROM `page`";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }

}