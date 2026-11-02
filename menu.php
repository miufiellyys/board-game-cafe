<?php
/*
 * Data menu.
 * Format: [kategori, nama, harga, emoji, warna, foto(opsional)]
 * Isi item ke-6 dengan 'img/nama.jpg' untuk memakai foto asli.
 */
$rows = [
    // Food
    ['food', 'Chicken Katsu', 20000, '🍗', '#8a6a4a'],
    ['food', 'Rice With Anchovies', 20000, '🍚', '#7a6a5a'],
    ['food', 'Spaghetti Bolognese', 20000, '🍝', '#a0522d'],
    ['food', 'Spaghetti Carbonara', 20000, '🍝', '#b8864b'],
    ['food', 'Chicken Katsu Teriyaki', 20000, '🍛', '#6b8e4e'],
    ['food', 'Indomie Soto', 20000, '🍜', '#c9a227'],
    ['food', 'Indomie Goreng', 20000, '🍜', '#b5651d'],
    ['food', 'Indomie Goreng Special', 20000, '🍜', '#a67c52'],
    ['food', 'Indomie Rendang', 20000, '🍜', '#8b4513'],
    // Drink
    ['drink', 'Matcha', 20000, '🍵', '#7fa87a'],
    ['drink', 'Orange Juice', 20000, '🍊', '#e69a2e'],
    ['drink', 'Americano Ice', 20000, '🧊', '#5a4332'],
    ['drink', 'Blue Lagoon', 20000, '🍹', '#3b8fd6'],
    ['drink', 'Strawberry Milk Shake', 20000, '🍓', '#d9748c'],
    ['drink', 'Ice Coffee', 20000, '🥤', '#7a4a32'],
    ['drink', 'Cookies & Cream Milkshake', 20000, '🥛', '#8f8a84'],
    ['drink', 'Green Tea', 20000, '🍃', '#8fb36a'],
    ['drink', 'Mango Milkshake', 20000, '🥭', '#e8b830'],
    // Snack
    ['snack', 'Onigiri', 20000, '🍙', '#9aa5b1'],
    ['snack', 'Caramel Pudding', 20000, '🍮', '#d9a441'],
    ['snack', 'French Fries', 20000, '🍟', '#e0b23a'],
    ['snack', 'Chicken Tender Bite', 20000, '🍗', '#c27a35'],
    ['snack', 'Brownies Bites', 20000, '🍫', '#5b3a2a'],
    ['snack', 'Churros', 20000, '🥖', '#b8743a'],
    ['snack', 'Dimsum', 20000, '🥟', '#c9a46a'],
    ['snack', 'Chicken Sticks', 20000, '🍢', '#b8862f'],
    ['snack', 'Cookies', 20000, '🍪', '#7a5236'],
];

$menu = [];
foreach ($rows as $r) {
    $menu[] = [
        'cat'   => $r[0],
        'name'  => $r[1],
        'price' => $r[2],
        'emoji' => $r[3],
        'bg'    => $r[4],
        'img'   => $r[5] ?? '',
    ];
}

return $menu;
