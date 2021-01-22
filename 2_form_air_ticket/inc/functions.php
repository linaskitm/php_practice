<?php
function validate($data) {
    global $validation;

    if(empty($_POST['name']) || !preg_match('/[A-Z][a-z]{1,100}/i', $_POST['name']) && empty($_POST['lastname']) || !preg_match('/[A-Z][a-z]{1,100}/i', $_POST['lastname']))  {
        $validation[] = 'Vardo ir Pavardes laukai turi buti uzpildyti';
    }
    if(!preg_match('/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/',$_POST['email'])){
        $validation[] = 'El. pastas turi atitikti formata';
    }
    if(!preg_match('/^[A-Za-z0-9]{0,500}$/', $_POST['message'])){
        $validation[] = 'Zinute negali virsyti 500 simboliu';
    }
    if(!preg_match('/^[+0-9. ()-]{8,13}$/ui', $_POST['phone'])){
        $validation[] = 'Iveskite tinkama telefono numeri';
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

function getData(){// data from FORM goes to flights.txt
    $data = 'data/flights.txt';
    $content = file_get_contents($data);
    $formData = implode(',', $_POST);
    $content .= $formData."/n";
    file_put_contents($data, $content);
}

