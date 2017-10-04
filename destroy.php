<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 04/10/17
 * Time: 15:34
 */
session_start();
session_destroy();
header('Location: /login.php');