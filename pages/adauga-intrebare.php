<?php
$data = file_get_contents("../data/forum.json");
$intrebari = json_decode($data, true);

$noua_intrebare = [
    "id" => count($intrebari) + 1,
    "utilizator" => $_POST["utilizator"],
    "intrebare" => $_POST["intrebare"],
    "raspunsuri" => []
];

$intrebari[] = $noua_intrebare;
file_put_contents("../data/forum.json", json_encode($intrebari, JSON_PRETTY_PRINT));

header("Location: forum.php");
exit;
?>
