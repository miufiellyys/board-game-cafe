<?php
$pageTitle = 'Board Game';
$active    = 'boardgame';
require __DIR__ . '/includes/header.php';

$games = require __DIR__ . '/data/games.php';

$categories = ['All', 'Card', 'Board', 'Strategic', 'Memory', 'Puzzle', 'Cooperative', 'Dexterity', 'Trivia', 'Mind', 'Word'];
?>

<header class="hero">
    <div class="container">
        <h1>Cari Board Game</h1>
        <p>Jelajahi koleksi board game favoritmu dan temukan yang ingin kamu mainkan bersama teman-temanmu.</p>
        <form class="search" id="searchForm" role="search">
            <input type="search" id="q" placeholder="Cari board game berdasarkan nama" aria-label="Cari board game">
            <button class="btn" type="submit">Cari</button>
        </form>
    </div>
</header>

<main class="container">
    <div class="tabs" id="tabs" role="group" aria-label="Kategori board game">
        <?php foreach ($categories as $c): ?>
            <button class="tab" type="button" data-cat="<?= h($c) ?>" aria-pressed="<?= $c === 'All' ? 'true' : 'false' ?>"><?= h($c) ?></button>
        <?php endforeach; ?>
    </div>

    <div class="filters">
        <span>Filter</span>
        <select id="fDiff" aria-label="Tingkat kesulitan">
            <option value="">Kesulitan</option>
            <option>Mudah</option>
            <option>Sedang</option>
            <option>Sulit</option>
        </select>
        <select id="fPeople" aria-label="Jumlah pemain">
            <option value="">Pemain</option>
            <option value="2">2 pemain</option>
            <option value="4">4 pemain</option>
            <option value="6">6 pemain</option>
        </select>
        <select id="fTime" aria-label="Durasi">
            <option value="">Durasi</option>
            <option value="30">Kurang dari 30 menit</option>
            <option value="60">30-60 menit</option>
            <option value="999">Lebih dari 60 menit</option>
        </select>
    </div>

    <p class="count" id="count" aria-live="polite"><?= count($games) ?> Board Game</p>

    <div class="grid" id="grid">
        <?php foreach ($games as $g) render_game($g); ?>
        <p class="empty" id="empty" hidden>Tidak ada board game yang cocok. Coba ubah kata kunci atau filter.</p>
    </div>
</main>

<?php
$pageScript = <<<'JS'
const $ = id => document.getElementById(id);
const cards = [...document.querySelectorAll('.game')];
const state = { cat: 'All', q: '' };

function render() {
  const diff = $('fDiff').value, ppl = +$('fPeople').value, time = +$('fTime').value;
  let shown = 0;
  cards.forEach(c => {
    const min = +c.dataset.min, max = +c.dataset.max, t = +c.dataset.time;
    const ok =
      (state.cat === 'All' || c.dataset.cat === state.cat) &&
      c.dataset.name.includes(state.q) &&
      (!diff || c.dataset.diff === diff) &&
      (!ppl || (min <= ppl && max >= ppl)) &&
      (!time || (time === 30 ? t < 30 : time === 60 ? (t >= 30 && t <= 60) : t > 60));
    c.hidden = !ok;
    if (ok) shown++;
  });
  $('count').textContent = shown + ' Board Game';
  $('empty').hidden = shown !== 0;
}

$('tabs').addEventListener('click', e => {
  const b = e.target.closest('.tab');
  if (!b) return;
  state.cat = b.dataset.cat;
  document.querySelectorAll('.tab').forEach(t => t.setAttribute('aria-pressed', t === b));
  render();
});
$('searchForm').addEventListener('submit', e => { e.preventDefault(); state.q = $('q').value.trim().toLowerCase(); render(); });
$('q').addEventListener('input', () => { state.q = $('q').value.trim().toLowerCase(); render(); });
['fDiff', 'fPeople', 'fTime'].forEach(id => $(id).addEventListener('change', render));
render();
JS;
require __DIR__ . '/includes/footer.php';
?>
