<?php
// $qr = 'https://quickchart.io/qr?text=' . $data['link'] . '&margin=1&size=200';
$qr = 'https://yap.pw/static/qr.svg';
?>

<div style="display: flex; gap:1rem;">
    <img class="qr" src=<?= $qr ?> alt="qr code for link">
    <div style="display: flex;flex-direction: column;gap: 2rem;">
        <ul>
            <p>Link:</p>
            <a href="#" target="_blank" rel="noopener noreferrer">https://yap.pw/fSrEv</a>
        </ul>
        <ul>
            <p>Analytics:</p>
            <a href="#" target="_blank" rel="noopener noreferrer">https://yap.pw/stats/fSrEv</a>
        </ul>
    </div>
</div>