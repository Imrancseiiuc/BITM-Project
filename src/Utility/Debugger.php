<?php

namespace team_extreme\Utility;


class Debugger
{
    public static function debug($var)
    {
        echo "<pre>";
        print_r($var);
        echo "</pre>";
    }
    public static function debugAndDie($var)
    {
        echo "<pre>";
        print_r($var);
        echo "</pre>";
        die();
    }
}
