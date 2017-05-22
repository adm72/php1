<?php

function discrim($a, $b, $c)
{
    return $b * $b - 4 * $a * $c;

}

assert(0 == discrim(3, -18, 27));
assert(2500 == discrim(1, -70, 600));
assert(-175 == discrim(1, 15, 100));

function sex($name)
{
    if ($name != '') {
        $ch = mb_substr($name, -1);
        if ($ch == 'а' || $ch == 'я') {
            return 'Женский';
        } elseif ($ch == 'р' || $ch == 'й' || $ch == 'с' || $ch == 'т' || $ch == 'н' || $ch == 'ь') {
            return 'Мужской';
        } else {
            return null;
        }
    } else {
        return null;
    }
}

assert('Мужской' == sex('Василий'));
assert('Женский' == sex('Татьяна'));