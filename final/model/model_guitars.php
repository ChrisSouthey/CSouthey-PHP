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

function getGuitar($id){
    global $db;

    $result = [];

    $stmt = $db->prepare("SELECT * FROM guitars WHERE id = :id");

    $binds = array(
        ':id'=> $id
    );

    if ( $stmt->execute($binds) && $stmt->rowCount() > 0){
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    return $result;
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


function deleteGuitar($id){
    global $db;

    $result = '';

    $sql = 'DELETE FROM guitars WHERE id = :id';

    $stmt = $db->prepare($sql);

    $binds = array(
        ':id'=> $id
    );

    if($stmt->execute($binds) && $stmt->rowCount() > 0){
        $result = 'Guitar Deleted';
    }

    return $result;
}


function updateGuitar($id, $gBrand, $gModel, $gColor, $gBridge, $gPickups, $gStrings, $gPrice) {
    global $db;

    $result = '';

    $sql = 'UPDATE guitars SET brand = :b, model = :m, color = :c, bridge = :br, pickups = :p, strings = :s, price = :pr WHERE id = :id';

    $stmt = $db->prepare($sql);

    $binds = array(
        ':id'=> $id,
        ":b" => $gBrand,
        ":m" => $gModel,
        ':c' => $gColor,
        ':br' => $gBridge,
        ":p" => $gPickups,
        ":s" => $gStrings,
        ":pr" => $gPrice
    );

    if($stmt->execute($binds) && $stmt->rowCount() > 0){
        $result = 'Guitar Updated';
    }

    return $result;
}


function searchGuitars($gBrand, $gModel, $gStrings){
    global $db;

    $results = [];

    $binds = [];

    $sql = 'SELECT * FROM guitars WHERE 0 = 0';

    if($gBrand != ''){
        $sql .= ' AND brand LIKE :b';
        $binds['b'] = '%'. $gBrand .'%';
    }

    if($gModel != ''){
        $sql .= ' AND model LIKE :m';
        $binds['m'] = '%'. $gModel .'%';
    }

    if($gStrings != ''){
        $sql .= ' AND strings LIKE :s';
        $binds['s'] = '%'. $gStrings .'%';
    }

    $sql .= " ORDER BY brand, model, color, bridge, pickups, strings, price";

    $stmt = $db->prepare($sql);

    if($stmt->execute($binds) && $stmt->rowCount() > 0){
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    return $results;

}










