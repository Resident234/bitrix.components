<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("SOF_DEFAULT_TEMPLATE_NAME"),
	"DESCRIPTION" => GetMessage("SOF_DEFAULT_TEMPLATE_DESCRIPTION"),
	"ICON" => "/images/sale_order_full.gif",
    "PATH" => array(
        "ID" => "content",
        "CHILD" => array(
            "ID" => "catalog_ext",
            "NAME" => GetMessage("SECTION_NAME"),
            "SORT" => 30,
            "CHILD" => array(
                "ID" => "catalog_cmpx",
            ),
        ),
    ),
);
?>