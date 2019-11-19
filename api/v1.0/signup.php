<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/unified_user_platform/functions/init_database.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/unified_user_platform/functions/validator.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/unified_user_platform/class/user.php');

if (!isset($_POST['signup']) || empty($_POST['signup'])){
    response_invalid_request();
}

$request = $_POST['signup'];

//echo $request;

$database = init_database();
$database->connect();
$user = new user($database);
$request = urldecode ($request);
$data = json_decode($request, true);

$user->registration($data);


//{"username":"sadat","name":"Sadat Jubayer","phone":"+8801717018378","email":"sadat@yahoo.com","gender":"0","dob":"1996-03-14","password":"1234"}