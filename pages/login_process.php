<?php
session_start();
$data = file_get_contents("../data/utilizatori.json");
$utilizatori = json_decode($data, true);

foreach ($utilizatori as $user) {
    if ($user["username"] == $_POST["username"] && password_verify($_POST["parola"], $user["parola"])) {
        $_SESSION["username"] = $user["username"];
        header("Location: forum.php");
        exit;
    }
}

header("Location: login.php?error=1");
exit;
?>
