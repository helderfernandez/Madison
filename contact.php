<?php
require_once('./lib/pagetemplate.php');
if (!isset($TPL)) {
    $TPL = new PageTemplate();
    $TPL-> PageTitle = "Madison Click - Contact";
	$TPL-> ActivePage = "Contact";
    $TPL-> ContentHead = './contact/head';
    $TPL-> ContentBody = './contact/content';
    $TPL-> Scripts     = './contact/scripts';
    include "./lib/layout.php";
    exit;
}