<?php
$link = $data['link'];
$code = $data['code'];
// $qr = 'https://quickchart.io/qr?text=' . $link . '&margin=1&size=200';
$qr = 'https://yap.pw/static/qr.svg';
?>

<div style="display: flex; gap:1rem;">
    <img class="qr" src=<?= $qr ?> alt="qr code for link">
    <div style="display: flex;flex-direction: column;gap: 2rem;">
        <ul>
            <p>Link:</p>
            <a href=<?= "https://yap.pw/i/$code" ?>
                target="_blank" rel="noopener noreferrer">
                <?= "https://yap.pw/i/$code" ?>
            </a>
        </ul>
        <ul>
            <p>Analytics:</p>
            <a href=<?= "https://yap.pw/s/$code" ?>
                target="_blank" rel="noopener noreferrer">
                <?= "https://yap.pw/s/$code" ?>
            </a>
        </ul>
    </div>
</div>