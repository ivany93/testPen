<?php
include_once ("WritingElement.php");
/**
 * Created by PhpStorm.
 * User: Ivany
 * Date: 27.04.2016
 * Time: 9:01
 */

class Pen extends WritingElement
{
function  __construct($length,  $color = '', $weight, $price,$material = '')
{
    $this->Written();
    $this->Description($length, $color, $weight, $price,$material);
}
}