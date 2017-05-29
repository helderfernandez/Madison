<?php
#lib/pagetemplate.php
class PageTemplate {
    public $PageTitle;
    public $ContentHead;
    public $ContentBody;
	public $ActivePage;
    public $Scripts;
}

$menu = array(
    "Home" => "index",
    "About us" => "about",
	"Services"=>"services",
	"Blog"=>"blog",
	"Contact"=>"contact"
);
?>