<?php

function getKey() {
    return ["0408", "rahasia", "xyz"];
}

function isValid($input) {
    $apikey = $input["api_key"];
    if (in_array($apikey, getKey())) {
        return true;
    } else {
        return false;
    }
}

function jsonOut($status, $message, $data) {
    $respon = ["status" => $status, "message" => $message, "data" => $data];

    header("Content-type: application/json");
    echo json_encode($respon);
}

function getmhs() {
    $mahasiswa = [
        ["npm" => "187006004", "mahasiswa" => "mahasiswa ini mahasiswa ke-1"],
        ["npm" => "187006018", "mahasiswa" => "mahasiswa ini mahasiswa ke-2"], 
        ["npm" => "187006002", "mahasiswa" => "mahasiswa ini mahasiswa ke-3"],
    ];
    return $mahasiswa;
}

if (isValid($_GET)) {
    jsonOut("berhasil", "apikey valid", getmhs());
} else {
    jsonOut("gagal", "apikey not valid!!!", null);
}

?>