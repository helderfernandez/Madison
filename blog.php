<?php
require_once('./lib/pagetemplate.php');
if (!isset($TPL)) {
    $TPL = new PageTemplate();
    $TPL-> PageTitle = "Madison Click - Blog";
	$TPL-> ActivePage = "Blog";
    $TPL-> ContentHead = './blog/head';
    $TPL-> ContentBody = './blog/content';
    $TPL-> Scripts     = './blog/scripts';
    include "./lib/layout.php";
    exit;
}