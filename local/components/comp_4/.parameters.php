<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();


$arComponentParameters = array(
    "GROUPS" => array(),
    "PARAMETERS" => array(
        "SECTION_ID" => array(
            "PARENT" => "BASE",
            "NAME" => "ID раздела для вывода",
            "TYPE" => "INTEGER",
            "MULTIPLE" => "N",
            "DEFAULT" => "",
        ),
        "IBLOCK_ID" => array(
            "PARENT" => "BASE",
            "NAME" => "ID Информационного блока",
            "TYPE" => "INTEGER",
            "MULTIPLE" => "N",
            "DEFAULT" => "",
        ),
    ),
);