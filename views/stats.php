<h1 class="h1-info">Analytics</h1>

<div class="stats">
    <div>
        <?php
        $stats = \App\DB::fetch_all();
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 0;

        function ctime($time)
        {
            $convert = new DateTime($time);
            return $convert->format('d/m/Y');
        }
        ?>

        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Orig Url</td>
                    <td>Short Url</td>
                    <td>Stats Url</td>
                    <td>User</td>
                    <td>Added</td>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($stats as $row) : ?>
                    <tr>
                        <td><?= $row["id"] ?></td>
                        <td><?= $row["orig_url"] ?></td>
                        <td><?= $row["short_url"] ?></td>
                        <td><?= $row["stats_url"] ?></td>
                        <td><?= $row["nick"] ?></td>
                        <td><?= ctime($row["added"]) ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <?php
        echo '<a href="?page=' . max(0, $page - 1) . '">Previous</a> | ';
        echo '<a href="?page=' . ($page + 1) . '">Next</a>';
        ?>

    </div>
</div>