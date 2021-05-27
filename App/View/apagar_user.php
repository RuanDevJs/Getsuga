<?php
require_once '../Controller/UserController.php';
$id = $_GET["id"];

UserController::deleteUser($id);