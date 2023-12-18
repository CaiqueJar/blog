<?php

require "../../boostrap.php";

$search = $_GET['search'];
$search = filter_var($search, FILTER_SANITIZE_STRING);

if($search) {
    $pdo = connect();
    $query = "SELECT * FROM posts WHERE title LIKE '%{$search}%'";

    $result = $pdo->prepare($query);
    $result->execute();
    
    echo json_encode($result->fetchAll());
}