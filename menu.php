<?php $items = [["🍵", "Malai cha", 40], ["🍋", "Lebu cha", 25], ["🫖", "Seven-layer cha", 120], ["🥟", "Singara", 15], ["🥯", "Puri", 10], ["🍪", "Biscuit", 5]]; ?>
<!doctype html>
<html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Menu · Cha Ghor</title><link rel="stylesheet" href="/style.css"></head>
<body>
<header><a class="brand" href="/">🍵 Cha Ghor</a><nav><a href="/">Home</a><a href="/menu">Menu</a></nav></header>
<main><h1>Menu</h1><div class="grid">
<?php foreach ($items as [$e, $n, $p]): ?><div class="card"><div class="e"><?= $e ?></div><b><?= htmlspecialchars($n) ?></b><span>৳<?= $p ?></span></div><?php endforeach; ?>
</div></main>
<footer>/menu is a pretty URL rewritten by Apache's .htaccess</footer>
</body></html>
