<?php $items = ["Malai cha" => 40, "Lebu cha" => 25, "Singara" => 15]; ?>
<!doctype html><html><head><meta charset="utf-8"><title>Menu</title></head>
<body style="font-family:system-ui;max-width:40rem;margin:4rem auto"><h1>Menu</h1><ul>
<?php foreach ($items as $n => $p): ?><li><?= htmlspecialchars($n) ?>: ৳<?= $p ?></li><?php endforeach; ?>
</ul><p><a href="/">Home</a></p></body></html>
