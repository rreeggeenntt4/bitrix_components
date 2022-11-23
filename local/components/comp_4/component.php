<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();


if (CModule::IncludeModule("iblock")) :
	$my_elements = CIBlockElement::GetList(
		array("ID" => "ASC"),
		array('IBLOCK_ID' => $arParams['IBLOCK_ID'], 'SECTION_ID' => $arParams['SECTION_ID'], 'INCLUDE_SUBSECTIONS' => 'Y',  'DEPTH_LEVEL' => 10),
		false,
		false,
		array('ID', 'NAME')
	);

	while ($ar_fields = $my_elements->GetNext()) {
		$arResult[] = $ar_fields;
	}
endif;


$this->IncludeComponentTemplate($componentPage);
