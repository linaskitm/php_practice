<?php
namespace Transports;
class Display
{
    static public function DisplayData($data){
        foreach ($data as $item){
            echo "<li class='list-group-item'>$item</li>";
        }
    }
}