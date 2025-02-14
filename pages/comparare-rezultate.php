<?php include '../includes/header.php'; ?>

<h2>Rezultatele Comparării</h2>

<?php
if (!isset($_GET['facultati']) || count($_GET['facultati']) < 2) {
    echo "<p>Selectează cel puțin două facultăți pentru comparare.</p>";
    echo '<a href="comparare.php">Înapoi</a>';
    include '../includes/footer.php';
    exit;
}

$data = file_get_contents("../data/facultati.json");
$facultati = json_decode($data, true);
$facultati_selectate = [];

foreach ($facultati as $facultate) {
    if (in_array($facultate["id"], $_GET['facultati'])) {
        $facultati_selectate[] = $facultate;
    }
}
?>

<table border="1">
    <tr>
        <th>Nume</th>
        <th>Oraș</th>
        <th>Admitere</th>
        <th>Taxă (lei)</th>
        <th>Burse</th>
        <th>Specializări</th>
    </tr>
    <?php foreach ($facultati_selectate as $facultate): ?>
        <tr>
            <td><?= $facultate["nume"]; ?></td>
            <td><?= $facultate["oras"]; ?></td>
            <td><?= $facultate["admitere"]; ?></td>
            <td><?= $facultate["taxa"]; ?></td>
            <td><?= $facultate["burse"]; ?></td>
            <td><?= implode(", ", $facultate["specializari"]); ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="comparare.php">Înapoi</a>

<?php include '../includes/footer.php'; ?>
