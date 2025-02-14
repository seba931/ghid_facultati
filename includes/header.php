<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghidul Facultăților</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<header>
    <h1>Ghidul Facultăților</h1>
    <nav>
        <a href="../index.php">Acasă</a>
        <a href="facultati.php">Facultăți</a>
        <a href="comparare.php">Comparare</a>
        <a href="forum.php">Forum</a>
        <a href="resurse.php">Resurse</a>
    </nav>
</header>

<?php session_start(); ?>
<nav>
    <a href="index.php">Acasă</a>
    <a href="forum.php">Forum</a>
    <a href="resurse.php">Resurse</a>

    <?php if (isset($_SESSION["username"])): ?>
        <a href="logout.php">Logout (<?= $_SESSION["username"]; ?>)</a>
    <?php else: ?>
        <a href="login.php">Login</a>
        <a href="register.php">Înregistrare</a>
    <?php endif; ?>
</nav>
