<div class="tableau">
    <?php

    $step = $_POST['count'];
    $_SESSION['sentence'] = $_POST['sentence'];

    for($i = 0; $i < $step; $i++) {
        echo htmlspecialchars($_SESSION['sentence']) . '<br>';
    }

    ?>
</div>