<footer id="tentang">
    <div class="container">
        <div>
            <a href="index.php" class="logo"><span class="logo-mark">♟</span>Meeple Space</a>
            <h2>Mau main board game sambil nongkrong? Booking sekarang!</h2>
            <a href="#booking" class="btn">Booking</a>
        </div>
        <div class="explore">
            <h4>Jelajahi</h4>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="boardgame.php">Board Game</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="index.php#tentang">About</a></li>
            </ul>
        </div>
    </div>
    <p class="copy">&copy; <?= date('Y') ?> Meeple Space. Hak cipta dilindungi.</p>
</footer>
<?php if (!empty($pageScript)): ?>
<script>
<?= $pageScript ?>
</script>
<?php endif; ?>
</body>
</html>
