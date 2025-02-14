<?php include '../includes/header.php'; ?>

<h2>Resurse pentru Admitere</h2>
<p>Aici găsești materiale utile pentru pregătirea admiterii la facultate.</p>

<?php
$data = file_get_contents("../data/resurse.json");
$resurse = json_decode($data, true);
?>

<ul>
    <?php foreach ($resurse as $resursa): ?>
        <li>
            <strong><?= $resursa["titlu"]; ?></strong><br>
            <?= $resursa["descriere"]; ?><br>
            <a href="<?= $resursa["link"]; ?>" target="_blank">Descarcă / Citește</a>
        </li>
    <?php endforeach; ?>
</ul>

<?php include '../includes/footer.php'; ?>
