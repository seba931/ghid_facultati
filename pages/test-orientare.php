<?php include '../includes/header.php'; ?>

<h2>Test de Orientare Profesională</h2>
<form action="rezultate-test.php" method="POST">
    <?php
    $data = file_get_contents("../data/intrebari.json");
    $intrebari = json_decode($data, true);
    ?>

    <?php foreach ($intrebari as $intrebare): ?>
        <fieldset>
            <legend><?= $intrebare["intrebare"]; ?></legend>
            <?php foreach ($intrebare["raspunsuri"] as $key => $raspuns): ?>
                <label>
                    <input type="radio" name="intrebare_<?= $intrebare['id']; ?>" value="<?= $intrebare['scor'][$key]; ?>" required>
                    <?= $raspuns; ?>
                </label><br>
            <?php endforeach; ?>
        </fieldset>
    <?php endforeach; ?>

    <button type="submit">Vezi Rezultatul</button>
</form>

<?php include '../includes/footer.php'; ?>
