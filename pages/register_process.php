<?php
session_start();
$data = file_get_contents("../data/utilizatori.json");
$utilizatori = json_decode($data, true);

$newUser = [
    "id" => count($utilizatori) + 1,
    "username" => $_POST["username"],
    "email" => $_POST["email"],
    "parola" => password_hash($_POST["parola"], PASSWORD_DEFAULT) 
];

$utilizatori[] = $newUser;
file_put_contents("../data/utilizatori.json", json_encode($utilizatori, JSON_PRETTY_PRINT));

$_SESSION["username"] = $_POST["username"];
header("Location: forum.php");
exit;
?>
