<?php
ini_set('display_errors', 1);
 require_once "config.php";

function db_query($db, $querys) {
   
    $query = "SELECT * FROM filmes WHERE name LIKE  '%' ? '%' ";

    $sql = $db->prepare($query);
    
    if ($sql->execute([$querys])) {
        $filmes = $sql->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $filmes = [];
    }

    return $filmes;

}

db_query($pdo, $_GET["pesquisa"]);

$db_movies = db_query($pdo, $_GET["pesquisa"]);



header("Content-Type: application/json; charset=utf-8");
echo json_encode($db_movies);


