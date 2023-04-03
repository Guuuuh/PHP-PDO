<?php

require_once 'vendor/autoload.php';

$pdo = \Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();

$statement = $pdo->query('SELECT * FROM students;');
$studentList = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($studentList);

echo $studentList[0][1];