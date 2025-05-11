<?php
require 'koneksi.php';

function getData($q) {
    global $koneksi;
    $result = mysqli_query($koneksi, $q);
    $rows = [];
    
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function insertData($table, $data) {
    global $koneksi;

    unset($data['submit']);
    $columns = implode(", ", array_keys($data));
    $values = implode("', '", array_map(function($value) use ($koneksi) {
        return mysqli_real_escape_string($koneksi, $value);
    }, array_values($data)));
    return mysqli_query($koneksi, "INSERT INTO $table ($columns) VALUES ('$values')");
}

function deleteData($table, $column, $data) {
    global $koneksi;
    $data = mysqli_real_escape_string($koneksi, $data);
    return mysqli_query($koneksi, "DELETE FROM $table WHERE $column = '$data'");
}

function editData($table, $Column, $columnvalue, $data) {
    global $koneksi;
    unset($data['submit']);
    $updates = [];
    foreach ($data as $column => $value) {
        $updates[] = "$column = '" . mysqli_real_escape_string($koneksi, $value) . "'";
    }
    $updatestr = implode(", ", $updates);
    $columnvalue = mysqli_real_escape_string($koneksi, $columnvalue);
    return mysqli_query($koneksi, "UPDATE $table SET $updatestr WHERE $Column = '$columnvalue'");
}
?>
