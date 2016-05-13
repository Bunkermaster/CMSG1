<?php
/**
 * Created by PhpStorm.
 * User: alexandrevagnair
 * Date: 13/05/2016
 * Time: 14:16
 */

require_once "vendor/autoload.php";
try {
    $pdo = new PDO('mysql:host=localhost;dbname=obj;charset=utf8','root','root');
    $pdo->query("SET NAMES 'UTF8';");
}catch (PDOException $e) {
   die($e->getMessage());
}
$page = new \Controller\PageController($pdo);
$page->displayAction();