<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Gustavo Henrique',
    new \DateTimeImmutable('2000-09-11')
);

echo $student->age();
