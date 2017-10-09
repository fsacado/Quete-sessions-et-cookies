<?php

require 'inc/head.php';

if ($_POST) {

    if ($_POST['PecanNuts']) {
        setcookie('cookie1', $_POST['PecanNuts'], time() + 86400);
    }
    if ($_POST['ChocolateChips']) {
        setcookie('cookie2', $_POST['ChocolateChips'], time() + 86400);
    }
    if ($_POST['ChocolateCookie']) {
        setcookie('cookie3', $_POST['ChocolateCookie'], time() + 86400);
    }
    if ($_POST['MMCookies']) {
        setcookie('cookie4', $_POST['MMCookies'], time() + 86400);
    }
    
}

?>

<section class="cookies container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-46.jpeg" alt="cookies chocolate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Pecan nuts</h3>
                    <p>Cooked by Penny !</p>
                    <form method="POST" action="">
                        <input type="hidden" value="Pecan Nuts" name="PecanNuts">
                        <button type="submit" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </button>
                    </form>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-36.jpeg" alt="cookies chocolate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Chocolate chips</h3>
                    <p>Cooked by Bernadette !</p>
                    <form method="POST" action="">
                        <input type="hidden" value="Chocolate Chips" name="ChocolateChips">
                        <button type="submit" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </button>
                    </form>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-58.jpeg" alt="cookies chocolate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Chocolate cookie</h3>
                    <p>Cooked by Bernadette !</p>
                    <form method="POST" action="">
                        <input type="hidden" value="Chocolate Cookie" name="ChocolateCookie">
                        <button type="submit" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </button>
                    </form>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-32.jpeg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>M&M's&copy; cookies</h3>
                    <p>Cooked by Penny !</p>
                    <form method="POST" action="">
                        <input type="hidden" value="M&M's Cookies" name="MMCookies">
                        <button type="submit" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </button>
                    </form>
                </figcaption>
            </figure>
        </div>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
