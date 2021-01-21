<?php
function validate($data){
    global $validation;

    if(empty($_POST['name']) || !preg_match('/[A-Z]/', $_POST['name'])){
        $validation[] = 'Vardas turi buti is didziosios raides';
    }
    if(empty($_POST['lastname']) || !preg_match('/[A-Z]/', $_POST['lastname'])){
        $validation[] = 'Pavarde turi buti is didziosios raides';
    }
    if(!preg_match('/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/',$_POST['email'])){
        $validation[] = 'El. pastas turi atitikti formata';
    }
    if(empty($_POST['message']) || !preg_match('/^[A-Za-z0-9]{1,200}$/', $_POST['message'])){
        $validation[] = 'Zinute negali virsyti 200 simboliu';
    }
    return $validation;
}
function printError($validation){
    if(!empty($validation)) {
        foreach ($validation as $error) {
            echo "<div class='alert alert-danger' role='alert'> $error </div>";
        }
    }

}

function printData(){// data from FORM goes to zinutes.txt
    $data = 'data/zinutes.txt';
    $content = file_get_contents($data);
    $formData = implode(',', $_POST);
    $content .= $formData."/n";
    file_put_contents($data, $content);

}
function printTable() { // print to UI from zinutes.txt
    $newArray = explode("/n", file_get_contents('data/zinutes.txt'));
    foreach ($newArray as $arr) {
        $arr = explode(",", $arr);
        echo "<tr></tr>";
        foreach ($arr as $a) {
            echo "<td>$a</td>";
        }
    }
}

