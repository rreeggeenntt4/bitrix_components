<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<style>
    .comp4 td {
        padding: 5px 10px;
    }

    .comp4 thead {
        background: #eee;
    }
</style>

<table class="comp4">
    <thead>
        <tr>
            <td>ID</td>
            <td>Наименование</td>
        </tr>
    </thead>
    <tbody>
        <? foreach ($arResult as $row) { ?>
            <tr>
                <td>
                    <? echo $row['ID'] ?>
                </td>
                <td>
                    <? echo $row['NAME'] ?>
                </td>
            </tr>
        <? } ?>
    </tbody>
</table>