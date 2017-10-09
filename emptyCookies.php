<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 04/10/17
 * Time: 18:50
 */
if ($_COOKIE['cookie1']) {
    setcookie("cookie1","", time()-1);
}
if ($_COOKIE['cookie2']) {
    setcookie("cookie2","", time()-1);
}
if ($_COOKIE['cookie3']) {
    setcookie("cookie3","", time()-1);
}
if ($_COOKIE['cookie4']) {
    setcookie("cookie4","", time()-1);
}

header('Location: index.php');