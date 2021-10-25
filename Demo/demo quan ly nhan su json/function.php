<?php
include_once "employee.php";

function saveData($data){
    $dataJs = json_encode($data);
    file_put_contents("data.json",$dataJs);
}

function loadData() {
    $data = file_get_contents("data.json");
    return json_decode($data , true);
}

function addEmployee($employee){
    $employees = loadData();
    array_push($employees,$employee);
    saveData($employees);
}

function convertData(){
    $data = loadData();
    $employees = [];
    foreach ($data as $item){
        $employee = new Employee($item["name"],$item["age"],$item["phone"]);
        array_push($employees, $employee);
    }
    // saveData($employees);
    return $employees;
}