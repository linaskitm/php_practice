<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Air ticket</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="view/css/bootstrap.min.css">

</head>

<body>

<div class="container">
    <?php if(isset($_POST['send'])):?>
        <?php
            if(empty($_POST['name']) || !preg_match('/[A-Z][a-z]{1,100}/i', $_POST['name']) && empty($_POST['lastname']) || !preg_match('/[A-Z][a-z]{1,100}/i', $_POST['lastname']))  {
                $validation[] = 'Vardo ir Pavardes laukai turi buti uzpildyti';
            }
            if(!preg_match('/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/',$_POST['email'])){
                $validation[] = 'El. pastas turi atitikti formata';
            }
            if(!preg_match('/^[A-Za-z0-9]{0,500}$/', $_POST['message'])){
                $validation[] = 'Zinute negali virsyti 500 simboliu';
            }
        if(!preg_match('/^[0-9]{11}$/', $_POST['idcode'])){
            $validation[] = 'Iveskite tinkama asmens koda';
        }

        ?>

    <?php endif;?>
    <?php if(isset($_POST['send']) && empty($validation)):?>
    <section>
            <?php if($_POST['send']!='send'):?>
        <div class="card text-dark bg-light mb-3">
            <div class="card-header">
                <span>Skrydzio numeris </span>
                <?=htmlspecialchars(ucfirst($_POST['flight-no']));?>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body ">
                        <span><?=date(DATE_RFC2822);?></span>
                        <h4 class="card-title">
                            <span>Departure: </span>
                            <?=htmlspecialchars(ucfirst($_POST['from']));?></h4>
                        <span><?=date(DATE_RFC2822);?></span>
                        <h4 class="card-title">
                            <span>Arrival: </span>
                            <?=htmlspecialchars(ucfirst($_POST['where']));?></h4>
                        <p class="card-text"><span>Bagazas: </span><?=($_POST['luggage']);?>kg </p>
                    </div>
                </div>
                <div class="col-md-5">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span>Vardas: </span>
                            <?=htmlspecialchars(ucfirst($_POST['name']));?>
                        </li>
                        <li class="list-group-item">
                            <span>Pavarde: </span>
                            <?=htmlspecialchars(ucfirst($_POST['lastname']));?>
                        </li>
                        <li class="list-group-item">
                            <span>Elektroninis pastas: </span>
                            <?=htmlspecialchars($_POST['email']);?>


                        <?php if($_POST['luggage'] >= 20):?>
                            <li class="list-group-item">
                                <span>Moketina suma: </span>
                                <?php $addition = $_POST['price'] + 30;?>
                                <?= $addition;?> Eur
                            </li>
                        <?php endif;?>
                        <?else:?>
                            <li class="list-group-item">
                                <span>Moketina suma: </span>
                                <?= $_POST['price'];?> Eur
                            </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php endif;?>
    </section>
    <?php else:?>
        <?php if(isset($validation)):?>
        <?php foreach ($validation as $error):?>
            <div class="alert alert-danger" role="alert">
                <?= $error;?>
            </div>
        <?php endforeach;?>
        <?php endif;?>
    <form method="post">
        <div class="form-group">
            <label for="name">Vardas</label>
            <input type="text" class="form-control" id="name" name ="name">
        </div>
        <div class="form-group">
            <label for="lastname">Pavarde</label>
            <input type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="form-group">
            <label for="idcode">Asmens kodas</label>
            <input type="number" class="form-control" id="idcode" name="idcode" placeholder="Asmens koda sudaro 11 skaitmenu.">

        </div>
        <div class="form-group">
            <label for="email">Elektroninis pastas</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="row">
            <div class="form-group col" >
                <label>Skrydzio nr:</label>
                <select name="flight-no" class="form-group">
                    <?php foreach ($data['flight_no'] as $value):?>
                        <option ><?= $value;?></option>
                    <?php endforeach?>
                </select>
            </div>
            <div class="form-group col" >
                <label>Isvykimas:</label>
                <select name="from" class="form-group">
                    <?php foreach ($data['from'] as $value):?>
                        <option ><?= $value;?></option>
                    <?php endforeach?>
                </select>
            </div>
            <div class="form-group col" >
                <label>Atvykimas:</label>
                <select name="where" class="form-group">
                    <?php foreach ($data['where'] as $value):?>
                        <option ><?= $value;?></option>
                    <?php endforeach?>
                </select>
            </div>
            <div class="form-group col" >
                <label>Bagazas: </label>
                <select name="luggage" class="form-group">
                    <?php foreach ($data['luggage'] as $value):?>
                        <option ><?= $value;?> KG</option>
                    <?php endforeach?>
                </select>
            </div>
            <div class="form-group col" >
                <label>Kaina: </label>
                <select name="price" class="form-group">
                    <?php foreach ($data['price'] as $value):?>
                        <option ><?= number_format($value, 2) ;?> Eur</option>
                    <?php endforeach?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="message">Pastabos</label>
            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        </div>
        <button type="submit" name="send" class="btn btn-primary">Submit</button>
    </form>
    <?php endif ?>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>