<?php
/**
 * Created by PhpStorm.
 * User: hayk1
 * Date: 02.04.2019
 * Time: 00:05
 */

class Input
{
    public static function get($input)
    {
        if (isset($_POST[$input])){
            return FH::sanitize($_POST[$input]);
        }else if(isset($_GET[$input])){
            return FH::sanitize($_GET[$input]);
        }
    }
}