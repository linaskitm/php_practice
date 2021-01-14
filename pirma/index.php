<?php
/*
 * comment
 */
$name = "Linas";

$online = true; // false


$sum = 12.45;
$dataNope = array();// sena versija
$data = []; // deklaravau masyva
$data = [12, false, 'Linas', 'KITM'];
$data2 = [ // indexed array
  111 => "Acer",
  888 => "intel",
  1234 => "core i7"
];
// Asociatyvus masyvas
$items = [
    'KOMP-1' => "MacBook Pro",
    'TEL-1' => "iPhone 7",
    'KITA' => 'Mouse'
];

// daugiamatis masyvas
$nav = [
    'Prekes' => [
        'Technika',
        'Maistas',
        'Priedai'
    ],
    'Paslaugos' => [
        'Progaramviams',
        'Konsultavimas'
    ]
];




//echo $nav['Prekes'][1];
// funkcijos darbui su tekstu
$eilute = " labas rytas, Lietuva! ";
$ilgis = strlen($eilute);
echo $ilgis;
$be_tarpu = trim($eilute);
echo $be_tarpu;
$upper = strtoupper($eilute);
echo $upper;
$lower = strtolower($eilute);
echo $lower;
$firstLetter = ucfirst($eilute);
echo $firstLetter;
$replace = str_replace("Lietuva", "Latvija", $eilute);
echo $replace;
$zodis = substr($eilute, 1, 5);
echo $zodis;

$count = 15;
 if($count == 15){
     echo " lygu";
 } else {
     echo " nelygu";
 }
 $language = 'ru';
 switch ($language){
     case 'lt':
         echo " Sveiki";
         break;
     case 'en':
         echo ' Hello';
         break;
     case 'ru':
         echo " Priviet";
         break;
     default:
         echo "Kalba nezinoma";
 }

 const host = " localhost";

 echo host;

 $dataX = [' Linas', ' Urte', ' Lukas', ' Ieva'];

 for($i = 0; $i<count($dataX); $i++){
     echo $dataX[$i];
 }

 foreach ($dataX as $key => $value) {
     echo  "$key : $value";
 }

?>

<ul>
    <?php for($i = 0; $i<count($dataX); $i++):?>
    <li><?= $dataX[$i]; ?></li>
    <?php endfor;?>
</ul>
<ul>
    <?php foreach ($dataX as $value):?>
        <li><?= $value; ?></li>
    <?php endforeach;?>
</ul>
<pre>
    <?php print_r($dataX); ?>
</pre>
 <?php
 if($count == 16): ?>
     <div>Lygu , nes count reiksme yra <?=$count;?></div>
 <?php else:?>
 <div>Nelygu</div>
 <?php endif; ?>

<ul>
    <li>Elelemtas: <?=$data[0]?></li>
    <li>Elelemtas: <?=$data2[111]?></li>
</ul>

<?php
$firstName = "Linas";
$lastName = "Pelenis";
$grade = 8;
$average = 8.8;
$moduleNumber = 5;
?>

<table>
    <tr>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>Klase</th>
        <th>Vidurkis</th>
        <th>Dalyku skaicius</th>
    </tr>
    <tr>
        <td><?=$firstName?></td>
        <td><?=$lastName?></td>
        <td><?=$grade?></td>
        <td><?=$average?></td>
        <td><?=$moduleNumber?></td>
    </tr>
</table>

