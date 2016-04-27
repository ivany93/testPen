<?php

/**
 * Created by PhpStorm.
 * User: Ivany
 * Date: 27.04.2016
 * Time: 8:38
 */
class WritingElement
{
    public function Written (){

        echo "Now you write!<br><br>";
    }

    public function Description ($length,  $color = '', $weight, $price,$material = ''){

        echo "description :<br>
            length = $length sm,<br>
            color = $color,<br>
            weight = $weight gramm,<br>
            price = $price dollars,<br>
            material = $material .<br>
        ";


    }


}