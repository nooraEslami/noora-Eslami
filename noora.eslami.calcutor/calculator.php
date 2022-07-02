<?php
error_reporting(E_ALL ^ E_WARNING);
function calc($expression, $calc, $clear)
{
    if (isset($calc)) {
        try {
            $math = "print" . "(" . $expression . ")" . ";";
            return eval($math);
        } catch (Error $e) {
            return "please enter a valid math expression";
        }
    }
    if (isset($clear))
        return "";
    return "";
}




