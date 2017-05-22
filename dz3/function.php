<?php
function calculator($a, $b, $operator)
{
    switch ($operator) {
        case '+':
            return $a + $b;
            break;
        case '-':
            return $a - $b;
            break;
        case '/':
            if (0 == $b) {
                return null;
            } else {
                return $a / $b;
            }
            break;
        case '*':
            return $a * $b;
            break;
        default:
            return null;
            break;
    }
}

assert(4 == calculator(2, 2, '+'));
assert(8 == calculator(10, 2, '-'));
assert(2 == calculator(4, 2, '/'));
assert(4 == calculator(2, 2, '*'));