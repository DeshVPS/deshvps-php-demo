<?php
// DeshVPS PHP sample: PHP on Apache, talking to the app's own MySQL database.
$db = null; $visits = null; $error = null;
try {
  $pdo = new PDO(sprintf("mysql:host=%s;dbname=%s;charset=utf8mb4", getenv("DB_HOST"), getenv("DB_NAME")), getenv("DB_USER"), getenv("DB_PASSWORD"));
  $pdo->exec("CREATE TABLE IF NOT EXISTS visits (id INT AUTO_INCREMENT PRIMARY KEY, at DATETIME DEFAULT CURRENT_TIMESTAMP)");
  $pdo->exec("INSERT INTO visits () VALUES ()");
  $visits = (int) $pdo->query("SELECT COUNT(*) FROM visits")->fetchColumn();
  $db = $pdo->query("SELECT VERSION()")->fetchColumn();
} catch (Throwable $e) { $error = $e->getMessage(); }
?><!doctype html>
<html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Cha Ghor · PHP</title><link rel="stylesheet" href="/style.css"></head>
<body>
<header><a class="brand" href="/">🍵 Cha Ghor</a><nav><a href="/">Home</a><a href="/menu">Menu</a></nav></header>
<section class="hero"><h1>Cha Ghor, on plain PHP</h1><p>PHP <?= htmlspecialchars(PHP_VERSION) ?> on Apache, with its own MySQL database.</p></section>
<main>
  <div class="status">
    <div class="tile"><small>Database</small><b id="db" class="<?= $error ? "bad" : "ok" ?>"><?= $error ? "error: " . htmlspecialchars($error) : "connected, " . $visits . " visits" ?></b></div>
    <div class="tile"><small>MySQL server</small><b><?= htmlspecialchars($db ?? "—") ?></b></div>
  </div>
  <p style="text-align:center"><a class="cta" href="/menu">See the menu →</a></p>
</main>
<footer>Every page view is counted in MySQL · deployed from Git by DeshVPS</footer>
</body></html>
