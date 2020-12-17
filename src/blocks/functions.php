<?php
function R1($for = 5, $nameArr = 'Number')
{
    $arr_1 = [];
    for ($i = 1; $i <= $for; $i++) {
        $arr_1[] = $nameArr . "_$i";
    }
    shuffle($arr_1);
    var_dump($arr_1);
    sort($arr_1);
    var_dump($arr_1);
}

function R2()
{
    $superArr_1 = [
        ['id' => 1, 'name' => 'Longer', 'age' => 20],
        ['id' => 2, 'name' => 'Torald', 'age' => 30],
        ['id' => 3, 'name' => 'Azuran', 'age' => 40],
    ];
    var_dump($superArr_1);
}

function R3()
{
    function plus($num_1, $num_2, $name = 'none')
    {
        $res = $num_1 + $num_2;
        if ($name != 'none') {
            $res = $res . " $num_2" . '_' . $name;
        }
        $res = $res;
        return $res . '<br>';
    }
    echo plus(100, 400, 'Hellow');
    echo plus(100, 500);
    echo plus(100, 600);
}

/**
 * Создать масив.
 * @param {int} $from Значение 1
 * @param {int} $to Значение 2
 */
function R4 ($from = 1, $to = 2) {
    for ($i = $from; $i <= $to; $i++) { 
        $arrs1["Ship_$i"] = "Ships_$i";
        $arrs2["AirCraft_$i"] = "AirCrafts_$i";
    }

    $arrs3['Water'] = $arrs1;
    $arrs3['Air'] = $arrs2;

    var_dump($arrs1);
    var_dump($arrs2);
    var_dump($arrs3);
}
?>
