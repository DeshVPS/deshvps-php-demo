<?php
// DeshVPS PHP sample: shows the PHP version and checks the MySQL database from the app's variables.
$db = "not configured";
try {
  $pdo = new PDO(sprintf("mysql:host=%s;dbname=%s;charset=utf8mb4", getenv("DB_HOST"), getenv("DB_NAME")), getenv("DB_USER"), getenv("DB_PASSWORD"));
  $pdo->exec("CREATE TABLE IF NOT EXISTS visits (id INT AUTO_INCREMENT PRIMARY KEY, at DATETIME DEFAULT CURRENT_TIMESTAMP)");
  $pdo->exec("INSERT INTO visits () VALUES ()");
  $db = "connected, " . $pdo->query("SELECT COUNT(*) FROM visits")->fetchColumn() . " visits";
} catch (Throwable $e) { $db = "error: " . $e->getMessage(); }
?><!doctype html>
<html><head><meta charset="utf-8"><title>Cha Ghor PHP</title>
<style>body{font-family:system-ui;max-width:40rem;margin:4rem auto;padding:0 1rem;color:#1f2937}code{background:#f3f4f6;padding:.1rem .3rem;border-radius:.25rem}</style></head>
<body><h1>Cha Ghor, on plain PHP</h1>
<p>PHP <code><?= htmlspecialchars(PHP_VERSION) ?></code> on Apache, deployed by DeshVPS.</p>
<p>Database: <strong id="db"><?= htmlspecialchars($db) ?></strong></p>
<p><a href="/menu">Menu</a> (a pretty URL handled by .htaccess)</p>
</body></html>
