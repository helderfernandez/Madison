<?php
require_once('./lib/pagetemplate.php');
if (!isset($TPL)) {
    $TPL = new PageTemplate();
    $TPL-> PageTitle = "Madison Click - Home";
	$TPL-> ActivePage = "Home";
    $TPL-> ContentHead = './inicio/head';
    $TPL-> ContentBody = './inicio/content';
    $TPL-> Scripts     = './inicio/scripts';
    include "./lib/layout.php";
    exit;
}