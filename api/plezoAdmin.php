<?php

/**
 * 
 * This handles all the application processes
 * return json
 */
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');
$result = [];
$query = "";
$allowedOptions = [
    "getSlides",
];
$result["success"] = false;
if (!isset($_GET["option"])) {
    $result["message"] = "No option provided on the url";
    echo json_encode($result);
    return;
}
if (!in_array($_GET["option"], $allowedOptions)) {
    $result["message"] = "Option " . $_GET["option"] . " is not allowed";
    $result["data"] = $allowedOptions;
    echo json_encode($result);
    return;
}
try {
    $con = mysqli_connect("localhost", "root", "", "dynamic");

    switch ($_GET["option"]) {
        case $allowedOptions[0]:
            $query = "select * from heroes";
            $query2 = "SELECT JSON_ARRAY(JSON_OBJECT('id', description, 'title', image)) from heroes";
            $queryResult = mysqli_query($con, $query2);
            $slidesArray = mysqli_fetch_array($queryResult);
            $result["success"] = true;
            $result["message"] = "Found slides";
            $result["data"] = $slidesArray;
            break;


        default:
            $result["message"] = "Provided option is not valid";
            break;
    }
    echo json_encode($result);
    return;
} catch (Exception $ex) {
    $result["message"] = "Error occurred, try again later";
    $result["error"] = $ex->getMessage();
    echo json_encode($result);
    return;
}
