<?php
include_once ("MechanicalPencil.php");
include_once ("AutoPen.php");
/**
 * Created by PhpStorm.
 * User: Ivany
 * Date: 27.04.2016
 * Time: 13:50
 */
class Pencil extends  AutoPen implements MechanicalPencil
{

function __construct()
{
    $this->Written();
    $this->clickabel(true);
    $this->diameteOfPencilLead('0.7 mm');
    $this->hardnessOfPencilLead('HB');
    $this->Description(12,'yellow',25,1,'tree');
}


    public function diameteOfPencilLead($diametr='')
    {
        // TODO: Implement diameteOfPencilLead() method.
        echo "diamete Of Pencil Lead  = $diametr, <br>";
    }

    public function hardnessOfPencilLead($hardness='')
    {
        // TODO: Implement hardnessOfPencilLead() method.
        echo "hardness Of Pencil Lead  = $hardness, <br>";
    }
}