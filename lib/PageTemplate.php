<?php
#lib/PageTemplate.php
class PageTemplate {
    public $PageTitle;
    public $ContentHead;
    public $ContentBody;
	public $ActivePage;
    public $Scripts;
}

$menu = array(
    "Inicio" => "Index",
    "Nosotros" => "About",
	"Servicios"=>"Services",
	"Blog"=>"Blog",
	"Contacto"=>"Contact"
);
