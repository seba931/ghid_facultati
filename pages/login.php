<?php include '../includes/header.php'; ?>

<h2>Autentificare</h2>

<form action="login_process.php" method="POST">
    <input type="text" name="username" placeholder="Nume utilizator" required>
    <input type="password" name="parola" placeholder="Parolă" required>
    <button type="submit">Autentificare</button>
</form>

<?php include '../includes/footer.php'; ?>
