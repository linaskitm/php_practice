<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Form Validation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/bootstrap.min.css">


</head>

<body>

<h3 class="text-center">Praktinė	užduotis	Nr.	1</h3>

<?php
 use Transports\Transport;

$transport1 = new Transport('Audi', 'Q7');

echo $transport1->getBrand();
echo $transport1->getModel();

$transport1->setWeight('1800 kg');
$transport1->setPrice('75 000 Eur');
$transport1->setEngine(true);
$transport1->setKw('160 kw');
$transport1->setMaxSpeed('240 km/h');
$transport1->setDescription('Cool car');
$transport1->setPassengerNumber('4 keleiviai');


echo $transport1->getWeight();
echo $transport1->getPrice();
echo $transport1->getEngine();
echo $transport1->getKw();
echo $transport1->getMaxSpeed();
echo $transport1->getDescription();
echo $transport1->getPassengerNumber();


?>

<div class="container">
    <div class="row">
        <div class="col">
            <?php
            use Transports\Car;
            $car = new Car('Honda', 'Accord', ' 4 duru');
            $car->setPassengerNumber('4 keleiviai');
            $car->setDescription('Puikus Japoniskas automobilis');
            $car->setMaxSpeed('220 km/h');
            $car->setKw('103 kw');
            $car->setEngine('Variklis yra');
            $car->setPrice(' Eur');
            $car->setWeight(' 1700 kg');
            ?>
            <h4 class="text-center">Car</h4>
            <ul class="list-group">
                <li class="list-group-item"><?=$car->getBrand();?></li>
                <li class="list-group-item"><?=$car->getModel();?></li>
                <li class="list-group-item"><?=$car->getDoors();?>
                <li class="list-group-item"><?=$car->getWeight();?></li>
                <li class="list-group-item"><?=$car->getPrice();?></li>
                <li class="list-group-item"><?=$car->getEngine();?></li>
                <li class="list-group-item"><?=$car->getKw();?></li>
                <li class="list-group-item"><?=$car->getMaxSpeed();?></li>
                <li class="list-group-item"><?=$car->getDescription();?></li>
                <li class="list-group-item"><?=$car->getPassengerNumber();?></li>
            </ul>


        </div>
        <div class="col">
            <?php
            use Transports\Bike;
            use Transports\Display;

            $bike = new Bike('Bix', 'track', 'on track');

            $bike->setDescription('Puikus dviratis');
            $bike->setPrice(' Eur');
            $bike->setWeight('25 kg');

            ?>
            <h4 class="text-center">Bike</h4>
            <ul class="list-group">

<!--                --><?php //foreach ($bike->getGeneralData() as $data):?>
<!--                    <li class="list-group-item">--><?//=$data;?><!--</li>-->
<!--                --><?php //endforeach?>
                <?php
                Display::DisplayData($bike->getGeneralData());
                ?>


                <li class="list-group-item"><?=$bike->getType();?></li>
            </ul>
        </div>
        <div class="col">
            <?php
            use Transports\Motocycle;

            $moto = new Motocycle('Suzuki', 'Rx-7', 'Sportbike');

            $moto->setDescription('Puikus motocikas');
            $moto->setPrice('15000 Eur');
            $moto->setWeight('250 kg');
            $moto->setEngine('Variklis yra');
            $moto->setKw('45 kw');
            $moto->setMaxSpeed('300 km/h');
            $moto->setPassengerNumber('1 keleivis');

            ?>
            <h4 class="text-center">Motocycle</h4>
            <ul class="list-group">
                <?php
                Display::DisplayData($moto->getGeneralData());
                ?>
                <li class="list-group-item"><?=$moto->getType();?></li>
                <li class="list-group-item"><?=$moto->getEngine();?></li>
                <li class="list-group-item"><?=$moto->getKw();?></li>
                <li class="list-group-item"><?=$moto->getMaxSpeed();?></li>
                <li class="list-group-item"><?=$moto->getPassengerNumber();?></li>
            </ul>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>