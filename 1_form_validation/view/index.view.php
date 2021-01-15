<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>X</title>

    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="view/css/bootstrap.min.css">

</head>

<body>

<div class="container">
    <?php if(isset($_POST['send'])):?>
        <?php
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

        ?>

    <?php endif;?>
    <?php if(isset($_POST['send']) && empty($validation)):?>
    <section>
        <h2>Formos duomenys</h2>
            <ul class="list-group">
                <?php foreach ($_POST as $field => $info):?>
                <?php if($field !='send'):?>
                        <li class="list-group-item">
                            <span><?=htmlspecialchars(ucfirst($field));?>:</span>
                            <?=htmlspecialchars(ucfirst($info));?>
                        </li>
                        <?php endif;?>
                <?php endforeach;?>
            </ul>
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
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name ="name">
        </div>
        <div class="form-group">
            <label for="lastname">Last name</label>
            <input type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group" >
            <select name="department" class="form-group">
                <?php foreach ($data as $key => $value):?>
                <option ><?= $key;?></option>
                <?php endforeach?>
            </select>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
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