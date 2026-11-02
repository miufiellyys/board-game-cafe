<?php
/** Escape teks agar aman ditampilkan di HTML. */
function h(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

/** Format harga: 20000 -> "Rp. 20.000" */
function rupiah(int $amount): string
{
    return 'Rp. ' . number_format($amount, 0, ',', '.');
}

/** Kartu board game. */
function render_game(array $g): void
{
    $players = $g['min'] === $g['max'] ? (string) $g['min'] : $g['min'] . '-' . $g['max'];
    ?>
    <article class="game"
             data-cat="<?= h($g['cat']) ?>"
             data-name="<?= h(strtolower($g['name'])) ?>"
             data-diff="<?= h($g['diff']) ?>"
             data-min="<?= (int) $g['min'] ?>"
             data-max="<?= (int) $g['max'] ?>"
             data-time="<?= (int) $g['time'] ?>">
        <div class="game-img" style="background:<?= h($g['bg']) ?>">
            <?php if ($g['img'] !== ''): ?>
                <img src="<?= h($g['img']) ?>" alt="<?= h($g['name']) ?>">
            <?php else: ?>
                <?= h($g['text']) ?>
            <?php endif; ?>
        </div>
        <div class="game-info">
            <h3><?= h($g['name']) ?></h3>
            <p class="meta"><?= h($players) ?> pemain · <?= (int) $g['time'] ?> menit · <?= h($g['diff']) ?></p>
            <div class="tags">
                <span class="tag"><?= h($g['cat']) ?></span>
                <a href="#" class="tag alt">Detail</a>
                <a href="#" class="tag alt">Mulai</a>
            </div>
        </div>
    </article>
    <?php
}

/** Kartu menu makanan/minuman. */
function render_menu(array $m): void
{
    ?>
    <article class="menu">
        <div class="menu-img" style="background:<?= h($m['bg']) ?>">
            <?php if ($m['img'] !== ''): ?>
                <img src="<?= h($m['img']) ?>" alt="<?= h($m['name']) ?>">
            <?php else: ?>
                <span aria-hidden="true"><?= $m['emoji'] ?></span>
            <?php endif; ?>
        </div>
        <div class="menu-info">
            <div>
                <h3><?= h($m['name']) ?></h3>
                <p><?= h(rupiah($m['price'])) ?></p>
            </div>
            <button class="add" type="button" aria-label="Tambah <?= h($m['name']) ?>">+</button>
        </div>
    </article>
    <?php
}
