<div class="tableau">
    <?php

    $step = $_POST['count'];
    $sentence = $_POST['sentence'];

    for($i = 0; $i < $step; $i++) {
        echo htmlspecialchars($sentence) . '<br>';
    }

    ?>
</div>