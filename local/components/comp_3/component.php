<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$dbUsers = CUser::GetList(
	[
		'name' => 'asc'
	],
	'',
	'',
	[
		"FIELDS" => ["LOGIN", "EMAIL", "NAME", "LAST_NAME"]
	]
);
while ($arUser = $dbUsers->fetch()) {
	$arResult[] = $arUser;
}

$this->IncludeComponentTemplate($componentPage);
