<?php

function getTopScore()
{
    $db = dbConnect();

    $query = $db->query('SELECT * FROM game ORDER BY game.score DESC limit 10');
    $scores = $query->fetchAll();

    return $scores;
}

function getInsertTopScore($data)
{
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO game(name, score) VALUES (?,?)');
    $result = $query->execute(
        array(
            $data['name'],
            $data['score'],
        ));
    return $result;
}

function doesPlayerExist($data){
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM game WHERE name = :PacmanUserName');
    $query->execute(
        [
            'PacmanUserName' => $data['name'],
        ]
    );
    $PacmanUserExist = $query->fetch();

    return $PacmanUserExist;
}

function updatePlayerInformations($data){
    $db = dbConnect();
    $query = $db->prepare('UPDATE game SET name = :PacmanUserName, score = :PacmanUserScore WHERE name = :PacmanUserName ');
    $result = $query->execute(
        [
            'PacmanUserName' => $data['name'],
            'PacmanUserScore' => $data['score'],
        ]
    );

    return $result;
}