<h1 class="h1-info">Analytics</h1>

<div class="stats">
    <div>
        <?php
        $stats = \App\DB::fetch_all();

        foreach ($stats as $row) {
            echo $row['orig_url']; // replace with your column names
            echo '<br>';
        }

        ?>

    </div>
</div>