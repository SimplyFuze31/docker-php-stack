<?php
declare(strict_types = 1);
//phpinfo();


try {
    $dbh = new PDO('mysql:host=mysql;dbname=Sandbox', 'root', 'secret');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

$sql = "INSERT INTO Students (firstname, lastname, email)
VALUES ('Oleksandr', 'Kondratiuk', 'www@gmail.com');";


$result = $dbh->exec("SELECT * FROM Students;");

var_dump($result);