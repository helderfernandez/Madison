<?php
require_once('./lib/pagetemplate.php');
if (!isset($TPL)) {
    $TPL = new PageTemplate();
    $TPL-> PageTitle = "Madison Click - Services";
	$TPL-> ActivePage = "Services";
    $TPL-> ContentHead = './services/head';
    $TPL-> ContentBody = './services/content';
    $TPL-> Scripts     = './services/scripts';
    include "./lib/layout.php";
    exit;
}