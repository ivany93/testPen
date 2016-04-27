<?php
require_once ("Pencil.php");
/**
 * Created by PhpStorm.
 * User: Ivany
 * Date: 27.04.2016
 * Time: 14:26
 */
class PenMannyKernel extends Pencil
{

    function __construct($colorCount)
    {
        $this->Written();
        $this->clickabel(true);
        $this->Description(13,'white',10,3,'plastic');
        $this->colorKernel($colorCount);
    }


    function colorKernel ($colorCount){
        echo "select $colorCount colors";
    }

}