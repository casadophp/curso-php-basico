<?php

echo "<br /> ---------- (1)";

// FALSE
// TRUE
// 1
// 1 = 1 + 1 = 2
// 2 = 2 + 1 = 3
for ($i = 1; $i <= 5; $i++) {
    echo "<br />", $i;
}

echo "<br /> ---------- (2)";

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo "<br />", $i;
}

echo "<br /> ---------- (3)";

$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo "<br />", $i;
    $i++;
}