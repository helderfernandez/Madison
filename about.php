<?php
require_once('./lib/pagetemplate.php');
if (!isset($TPL)) {
    $TPL = new PageTemplate();
    $TPL-> PageTitle = "Madison Click - About us";
	$TPL-> ActivePage = "About us";
    $TPL-> ContentHead = './about/head';
    $TPL-> ContentBody = './about/content';
    $TPL-> Scripts     = './about/scripts';
    include "./lib/layout.php";
    exit;
}