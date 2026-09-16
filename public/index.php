<?php
require_once('../vendor/autoload.php');

use App\Student;

$student = new Student();

$student->name = "idi nagui";

echo($student->name)
?>