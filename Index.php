<?php
require_once('./lib/PageTemplate.php');
if (!isset($TPL)) {
    $TPL = new PageTemplate();
    $TPL-> PageTitle = "Madison Click - Home";
	$TPL-> ActivePage = "Home";
    $TPL-> ContentHead = './Inicio/Head';
    $TPL-> ContentBody = './Inicio/Content';
    $TPL-> Scripts     = './Inicio/Scripts';
    include "./lib/Layout.php";
    exit;
}