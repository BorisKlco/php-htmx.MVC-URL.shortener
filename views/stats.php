<h1 class="h1-info">Analytics</h1>

<div class="stats">
    <?php
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 0;
    $stats = \App\DB::fetch_all($page);
    if (count($stats) == 0) {
        $page = 0;
        $stats = \App\DB::fetch_all(0);
    }
    ?>
    <div class="stats-table">
        <table>
            <thead>
                <tr>
                    <td>Link</td>
                    <td>Added</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stats as $row) : ?>
                    <tr>
                        <td>
                            <a href=<?= "https://" . DOMAIN . "/s/" . $row["code"] ?>>
                                <?= "https://" . DOMAIN . "/i/" . $row["code"] ?>
                            </a>
                        </td>
                        <td><?= \App\Helper::cdate($row["added"]) ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <div class="pages">
        <?php
        if ($page > 0) {
            echo '<a href="?page=' . max(0, $page - 1) . '">Previous</a>';
        }
        if ($page > 0 && count($stats) > 9) {
            echo ' | ';
        }
        if (count($stats) > 9) {
            echo '<a href="?page=' . ($page + 1) . '">Next</a>';
        }
        ?>

    </div>

</div>