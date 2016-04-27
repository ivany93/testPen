<?php
include_once ("clickability.php");
include_once ("Pen.php");
/**
 * Created by PhpStorm.
 * User: Ivany
 * Date: 27.04.2016
 * Time: 13:27
 */
class AutoPen extends Pen implements clickability
{

    function clickabel($boolean)
    {
        // TODO: Implement clickabel() method.
        if($boolean === true){
            echo "You Writing clickabel element  <br>";
        }
    }
}