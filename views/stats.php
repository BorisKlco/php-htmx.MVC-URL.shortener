<h1 class="h1-info">Analytics</h1>

<div class="stats">
    <?php
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 0;
    $stats = \App\DB::fetch_all($page);
    ?>
    <div class="table">
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
                            <a href=<?= $row["short_url"] ?>><?= $row["short_url"] ?> </a>
                        </td>
                        <td><?= \App\Helper::ctime($row["added"]) ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <div class="pages">
        <?php
        echo '<a href="?page=' . max(0, $page - 1) . '">Previous</a> | ';
        echo '<a href="?page=' . ($page + 1) . '">Next</a>';
        ?>

    </div>

</div>