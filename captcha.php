<?php


session_start();
require_once('./Captcha.class.php');
$captcha = new Captcha();
$captcha->width = 250;
$captcha->height = 50;
$captcha->Generate();