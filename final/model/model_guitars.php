<?php

include (__DIR__ . '/db.php');

function getGuitars(){

    global $db;

    $results = [];

    $stmt = $db->prepare("SELECT * FROM guitars ORDER BY brand, model, color, bridge, pickups, strings, price");

    if($stmt->execute() && $stmt->rowCount() > 0){
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    return $results;
}

function addGuitar($gBrand, $gModel, $gColor, $gBridge, $gPickups, $gStrings, $gPrice){

    global $db;

    $result = "";

    $sql = "INSERT INTO guitars SET brand = :b, model = :m, color = :c, bridge = :br, pickups = :p, strings = :s, price = :pr";

    $stmt = $db->prepare($sql);

    $binds = array(
        ":b" => $gBrand,
        ":m" => $gModel,
        ':c' => $gColor,
        ':br' => $gBridge,
        ":p" => $gPickups,
        ":s" => $gStrings,
        ":pr" => $gPrice
    );

    if($stmt->execute($binds) && $stmt->rowCount() > 0){
        $result = "Data Added";
    }

    return $result;
}

function getGuitar($id){
    global $db;

    $result = [];

    $sql = 'SELECT * FROM guitars WHERE ID = :id';

    $stmt = $db->prepare($sql);

    $binds = array(
        ':id'=> $id
    );

    if ( $stmt->execute($binds) && $stmt->rowCount() > 0){
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    return $result;
}










