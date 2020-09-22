<?php


function commoTonewLine($string)
{
    return str_replace(',', "\r\n", $string);
}

function newLineToCommo($string)
{
    return str_replace("\r\n", ',', $string);
}

function prettyPhone($phone)
{
    return substr($phone,0,4) . ' ' . substr($phone,4,3) . ' ' . substr($phone,7,4);
}
