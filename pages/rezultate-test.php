<?php include '../includes/header.php'; ?>

<h2>Rezultatele Testului</h2>

<?php
$rezultate = [];

foreach ($_POST as $raspuns) {
    if (!isset($rezultate[$raspuns])) {
        $rezultate[$raspuns] = 0;
    }
    $rezultate[$raspuns]++;
}

arsort($rezultate);
$recomandare = array_key_first($rezultate);
?>

<p>Cel mai potrivit domeniu pentru tine este: <strong><?= $recomandare; ?></strong></p>

<a href="test-orientare.php">Înapoi la test</a>

<?php include '../includes/footer.php'; ?>
