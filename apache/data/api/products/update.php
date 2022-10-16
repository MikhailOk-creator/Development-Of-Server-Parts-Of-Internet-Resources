<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once "api/config/database.php";
include_once "api/entities/product.php";

$database = new Database();
$db = $database->getConnection();

$product = new Product($db);

$data = json_decode(file_get_contents("php://input"));
$product->id = $data->id;
$product->name_of_product = $data->name_of_product;
$product->description = $data->description;
$product->price = $data->price;

if ($product->update()) {
    http_response_code(200);

    echo json_encode(array("message" => "Товар был обновлён."), JSON_UNESCAPED_UNICODE);
} else {
    http_response_code(503);

    echo json_encode(array("message" => "Невозможно обновить товар."), JSON_UNESCAPED_UNICODE);
}