<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
?>


<?php include '../includes/header.php'; ?>

<h2>Forum - Întrebări și Răspunsuri</h2>

<?php
$data = file_get_contents("../data/forum.json");
$intrebari = json_decode($data, true);
?>

<?php foreach ($intrebari as $intrebare): ?>
    <div class="post">
        <p><strong><?= $intrebare["utilizator"]; ?>:</strong> <?= $intrebare["intrebare"]; ?></p>

        <?php if (!empty($intrebare["raspunsuri"])): ?>
            <ul>
                <?php foreach ($intrebare["raspunsuri"] as $raspuns): ?>
                    <li><strong><?= $raspuns["utilizator"]; ?>:</strong> <?= $raspuns["raspuns"]; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <form action="adauga-raspuns.php" method="POST">
            <input type="hidden" name="id_intrebare" value="<?= $intrebare['id']; ?>">
            <input type="text" name="utilizator" placeholder="Numele tău" required>
            <textarea name="raspuns" placeholder="Scrie un răspuns..." required></textarea>
            <button type="submit">Trimite Răspuns</button>
        </form>
    </div>
<?php endforeach; ?>

<h3>Pune o întrebare</h3>
<form action="adauga-intrebare.php" method="POST">
    <input type="text" name="utilizator" placeholder="Numele tău" required>
    <textarea name="intrebare" placeholder="Scrie întrebarea ta..." required></textarea>
    <button type="submit">Trimite Întrebare</button>
</form>

<?php include '../includes/footer.php'; ?>
