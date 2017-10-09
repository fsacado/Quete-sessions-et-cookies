<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php

        $contenu = false;

        if (!empty($_COOKIE['cookie1'])) {
            echo $_COOKIE['cookie1'] . '<br/>';
            $contenu = true;
        }
        if (!empty($_COOKIE['cookie2'])) {
            echo $_COOKIE['cookie2'] . '<br/>';
            $contenu = true;
        }
        if (!empty($_COOKIE['cookie3'])) {
            echo $_COOKIE['cookie3'] . '<br/>';
            $contenu = true;
        }
        if (!empty($_COOKIE['cookie4'])) {
            echo $_COOKIE['cookie4'] . '<br/>';
            $contenu = true;
        }
        ?>
        <br/>
        <?php
        if ($contenu == true): ?>
        <form method="POST" action="emptyCookies.php">
            <input type="submit" value="Empty your basket" class="btn btn-danger">
        </form>
        <?php endif ?>
        <br/>
        <form method="POST" action="index.php">
            <input type="submit" value="Go Back" class="btn btn-primary">
        </form>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
