<?php

function gameCity($arr, $mycity)
{
    foreach ($arr as $item) {
        $ch = mb_substr($item, 0, 1);

        if ($ch == $mycity) {
            return $item;
        }
    }

    return null;

}

assert('Тюмень' == gameCity(['Москва', 'Санкт-Петербург', 'Екатеринбург', 'Тюмень', 'Ишим', 'Курган', 'Париж', 'Тамбов',], 'Т'));
assert('Курган' == gameCity(['Москва', 'Санкт-Петербург', 'Екатеринбург', 'Тюмень', 'Ишим', 'Курган', 'Париж', 'Тамбов',], 'К'));
