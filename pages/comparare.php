<?php include '../includes/header.php'; ?>

<h2>Comparare Facultăți</h2>
<p>Selectează două sau mai multe facultăți pentru a le compara:</p>

<form action="comparare-rezultate.php" method="GET">
    <?php
    $data = file_get_contents("../data/facultati.json");
    $facultati = json_decode($data, true);
    ?>

    <?php foreach ($facultati as $facultate): ?>
        <label>
            <input type="checkbox" name="facultati[]" value="<?= $facultate['id']; ?>">
            <?= $facultate["nume"]; ?> (<?= $facultate["oras"]; ?>)
        </label><br>
    <?php endforeach; ?>

    <button type="submit">Compară</button>
</form>

<?php include '../includes/footer.php'; ?>
