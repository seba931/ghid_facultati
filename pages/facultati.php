<?php include '../includes/header.php'; ?>

<h2>Lista Facultăților</h2>

<?php
$data = file_get_contents("../data/facultati.json");
$facultati = json_decode($data, true);
?>

<ul>
    <?php foreach ($facultati as $facultate): ?>
        <li>
            <strong><?= $facultate["nume"]; ?></strong> - <?= $facultate["oras"]; ?>
            (Admitere: <?= $facultate["admitere"]; ?>, Taxă: <?= $facultate["taxa"]; ?> lei)
        </li>
    <?php endforeach; ?>
</ul>

<?php include '../includes/footer.php'; ?>
