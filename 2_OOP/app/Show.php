<?php
namespace Users;
class Show
{
static public function showData($data) {// negalima naudoti this
    foreach ($data as $item) {
        echo "<p>$item</p>";
    }
}
}
