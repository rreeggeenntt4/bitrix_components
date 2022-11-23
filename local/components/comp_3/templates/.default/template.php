<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<style>
    .comp3 td {
        padding: 5px 10px;
    }

    .comp3 thead {
        background: #eee;
    }
</style>

<table class="comp3">
    <thead>
        <tr>
            <td>Логин</td>
            <td>Email</td>
            <td>Имя</td>
            <td>Фамилия</td>
        </tr>
    </thead>
    <tbody>
        <? foreach ($arResult as $row) { ?>
            <tr>
                <td>
                    <? echo $row['LOGIN'] ?>
                </td>
                <td>
                    <? echo $row['EMAIL'] ?>
                </td>
                <td>
                    <? echo $row['NAME'] ?>
                </td>
                <td>
                    <? echo $row['LAST_NAME'] ?>
                </td>
            </tr>
        <? } ?>
    </tbody>
</table>