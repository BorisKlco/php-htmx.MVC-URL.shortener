<?php
$stats = $data["stats"];
$count = count($stats);
?>

<h1 class="h1-info">Analytics</h1>

<div class="stats">
    <p>Number of visits: <?= $count ?></p>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <td>User Agent</td>
                    <td>IP</td>
                    <td>Time</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stats as $row) : ?>
                    <tr>
                        <td>
                            <?= $row["user_agent"] ?>
                        </td>
                        <td>
                            <?= $row["ip"] ?>
                        </td>
                        <td>
                            <?= \App\Helper::ctime($row["added"]) ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>