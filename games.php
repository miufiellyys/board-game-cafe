<?php
/*
 * Data board game.
 * Format: [kategori, nama, kesulitan, pemainMin, pemainMax, menit, warna, teks, foto(opsional)]
 * Isi item ke-9 dengan 'img/nama.jpg' untuk memakai foto asli.
 */
$rows = [
    ['Card', 'Uno Wild', 'Mudah', 2, 10, 15, '#222222', 'UNO'],
    ['Card', 'Sc - Kata', 'Mudah', 2, 4, 30, '#d9549b', 'KATA'],
    ['Card', 'Uno No Mercy', 'Mudah', 2, 10, 20, '#c8231f', 'NO MERCY'],
    ['Card', 'Uno Flip', 'Mudah', 2, 10, 20, '#6a2c91', 'FLIP'],
    ['Board', 'Catan', 'Sedang', 3, 4, 90, '#d98a2b', 'CATAN'],
    ['Board', 'Monopoly', 'Sedang', 2, 6, 90, '#d94a2b', 'MONOPOLY'],
    ['Board', 'Ludo', 'Mudah', 2, 4, 30, '#3b8f5a', 'LUDO'],
    ['Strategic', 'Hive', 'Sedang', 2, 2, 20, '#4a6fa5', 'HIVE'],
    ['Strategic', 'Dominion', 'Sulit', 2, 4, 30, '#8a5a3a', 'DOMINION'],
    ['Strategic', 'Chess', 'Sulit', 2, 2, 60, '#5b4636', 'CHESS'],
    ['Memory', 'T-C-G-F-P', 'Mudah', 2, 6, 30, '#e6b52c', 'TCGFP'],
    ['Memory', "That's Not A Hat", 'Mudah', 3, 8, 20, '#d94a7a', 'NOT A HAT'],
    ['Memory', 'Simon', 'Mudah', 1, 4, 10, '#2a8fd6', 'SIMON'],
    ['Puzzle', 'Chinese Checkers', 'Sedang', 2, 6, 40, '#a0522d', 'CHECKERS'],
    ['Puzzle', 'Rush Hour', 'Sedang', 1, 1, 15, '#c8231f', 'RUSH HOUR'],
    ['Puzzle', 'Quoridor', 'Sedang', 2, 4, 20, '#8a6a4a', 'QUORIDOR'],
    ['Cooperative', 'Pandemic', 'Sedang', 2, 4, 45, '#2f6f8f', 'PANDEMIC'],
    ['Cooperative', 'Forbidden Island', 'Sedang', 2, 4, 30, '#2a7a7a', 'FORBIDDEN ISLAND'],
    ['Cooperative', 'Forbidden Desert', 'Sedang', 2, 5, 45, '#c9923a', 'FORBIDDEN DESERT'],
    ['Dexterity', 'Jenga', 'Mudah', 1, 8, 20, '#b8864b', 'JENGA'],
    ['Dexterity', 'Klask', 'Sedang', 2, 2, 10, '#3b6fd6', 'KLASK'],
    ['Dexterity', 'Pitch Car', 'Sedang', 2, 8, 30, '#a8452b', 'PITCH CAR'],
    ['Trivia', 'Trivial Pursuit', 'Sedang', 2, 6, 90, '#2f7fb8', 'TRIVIAL PURSUIT'],
    ['Trivia', 'Wits and Wagers', 'Mudah', 3, 7, 30, '#d94a7a', 'WITS & WAGERS'],
    ['Trivia', 'Smart 10', 'Mudah', 2, 6, 20, '#e8873a', 'SMART 10'],
    ['Mind', 'Mastermind', 'Sedang', 2, 2, 20, '#3b4a8a', 'MASTERMIND'],
    ['Mind', 'Set', 'Sedang', 1, 6, 20, '#6a2c91', 'SET'],
    ['Mind', 'Qwixx', 'Mudah', 2, 5, 15, '#d9a441', 'QWIXX'],
    ['Word', 'Scrabble', 'Sedang', 2, 4, 60, '#8a6a3a', 'SCRABBLE'],
    ['Word', 'Boggle', 'Mudah', 2, 8, 15, '#c8231f', 'BOGGLE'],
    ['Word', 'Bananagrams', 'Mudah', 1, 8, 15, '#e6c42c', 'BANANAGRAMS'],
];

$games = [];
foreach ($rows as $r) {
    $games[] = [
        'cat'  => $r[0],
        'name' => $r[1],
        'diff' => $r[2],
        'min'  => $r[3],
        'max'  => $r[4],
        'time' => $r[5],
        'bg'   => $r[6],
        'text' => $r[7],
        'img'  => $r[8] ?? '',
    ];
}

return $games;
