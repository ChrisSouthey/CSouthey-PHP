<?php

include (__DIR__ . '/db.php');

function getPatients(){
    global $db;

    $results = [];

    $stmt = $db->prepare("SELECT * FROM patients");

    if($stmt->execute() && $stmt->rowCount() > 0){
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return $results;
}

function addPatient($pFirstName, $pLastName, $pMarried, $pBirthDate){
    global $db;

    $result = "";

    $sql = "INSERT INTO patients SET patientFirstName = :f, patientLastName = :l, patientMarried = :m, patientBirthDate = :b";

    $stmt = $db->prepare($sql);

    $binds = array(
        ":f" => $pFirstName,
        ":l" => $pLastName,
        ":m" => $pMarried,
        ":b" => $pBirthDate
    );

    if ( $stmt->execute($binds) && $stmt->rowCount() > 0){
        $result = "Data Added";
    }

    return $result;
}

function getPatient($id){
    global $db;

    $result = [];

    $sql = 'SELECT * FROM patients WHERE ID = :id';

    $stmt = $db->prepare($sql);

    $binds = array(
        ':id'=> $id
    );

    if ( $stmt->execute($binds) && $stmt->rowCount() > 0){
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    return $result;
}

function updatePatient($id, $pFirstName, $pLastName, $pMarried, $pBirthDate){
    global $db;

    $result = '';

    $sql = 'UPDATE patients SET patientFirstName = :f, patientLastName = :l, patientMarried = :m, patientBirthDate = :b WHERE ID = :id';

    $stmt = $db->prepare($sql);

    $binds = array(
        ':id'=> $id,
        ":f" => $pFirstName,
        ":l" => $pLastName,
        ":m" => $pMarried,
        ":b" => $pBirthDate
    );

    if ( $stmt->execute($binds) && $stmt->rowCount() > 0){
        $result = "Patient Updated";
    }

    return $result; 
}

function deletePatient($id){
    global $db;

    $result = "";

    $sql = "DELETE FROM patients WHERE id = :id";

    $stmt = $db->prepare($sql);

    $binds = array(
        ":id"=> $id
    );

    if ( $stmt->execute($binds) && $stmt->rowCount() > 0){
        $result = "Patient Deleted";
    }

    return $result;
}