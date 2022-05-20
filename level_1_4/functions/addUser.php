<?php
function addUser($pdo, $name, $surname)
{
    $sql = "INSERT INTO users (name, surname) VALUES (:name, :surname)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['name' => $name, 'surname' => $surname]);
}
