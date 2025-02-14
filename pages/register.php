<?php include '../includes/header.php'; ?>

<h2>Înregistrare</h2>

<form action="register_process.php" method="POST">
    <input type="text" name="username" placeholder="Nume utilizator" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="parola" placeholder="Parolă" required>
    <button type="submit">Înregistrează-te</button>
</form>

<?php include '../includes/footer.php'; ?>
