<?php
$db = new PDO("pgsql:dbname=PHP2; host=localhost", "postgres", "123456");
session_start();
// echo $_SERVER["REQUEST_URI"];
//  $arr = explode("/",$_SERVER["REQUEST_URI"]);
//  if($arr[1] != ""){
//     $controller=$arr[1];
//     $arr1= explode("?",$arr[2]);
//     $action = $arr[0];
//  }else{
//     $controller="home";
//     $action="index";
//  }

//  echo $controller."".$action;

//Phân tích url thành controller và action
$uris = explode("/", $_SERVER["REQUEST_URI"]);
$controller = $uris[1] ?? "";
$actions = explode("?", $uris[2] ?? "");
$action = $actions[0] ?? "";
$controller = $controller == "" ? "home" : $controller;
$action = $action == "" ? "index" : $action;

//Xử lý router
//chặn các action và controller không được phép\

$routes = [
    "nguoidung" =>
    [
        "name" => "user", "action" => [
            "xoa-nguoi-dung" => ["name" => "deleteUser"],
            "hienthidangnhap" => ["name" => "showLogin"],
            "thuchiendangnhap" => ["name" => "doLogin"],
            "danhsach" => ["name" => "viewUser"],
            "them" => ["name" => 'viewAddUser'],
            "gui-them" => ["name" => 'addUser'],
            "sua" => ["name" => 'viewSuaUser'],
            "gui-cap-nhat" => ["name" => 'suaUser'],
        ]
    ]
];
if (isset($routes[$controller])) {
    $actions = $routes[$controller]["action"];
    $controller = $routes[$controller]["name"];
    if (isset($actions[$action])) {
        $action = $actions[$action]["name"];
    } else {
        return;
    }
}

//thiết lập thư mục include
set_include_path(
    get_include_path()
        . PATH_SEPARATOR . "G:/PHP2/controller"
        . PATH_SEPARATOR . "G:/PHP2/view"
        . PATH_SEPARATOR . "G:/PHP2/model"
        . PATH_SEPARATOR . "G:/PHP2/database"
);

//nhúng controller
require_once($controller . "Controller.php");
//gọi Action
$actionName = $action . "Action";
//$actionName();
$controllerName = $controller . "Controller";
//$controllerName::$actionName();  
require_once("layout.php");

require_once("database.php");
