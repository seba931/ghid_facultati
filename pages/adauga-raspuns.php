<?php
$data = file_get_contents("../data/forum.json");
$intrebari = json_decode($data, true);

$id_intrebare = $_POST["id_intrebare"];
$raspuns_nou = [
    "utilizator" => $_POST["utilizator"],
    "raspuns" => $_POST["raspuns"]
];

foreach ($intrebari as &$intrebare) {
    if ($intrebare["id"] == $id_intrebare) {
        $intrebare["raspunsuri"][] = $raspuns_nou;
        break;
    }
}

file_put_contents("../data/forum.json", json_encode($intrebari, JSON_PRETTY_PRINT));

header("Location: forum.php");
exit;
?>
