<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Form Validation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="view/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <?php if(isset($_POST['send'])):?>
            <?php validate($_POST) ;?>
        <?php endif;?>

        <?php if(isset($_POST['send']) & empty($validation)):?>
            <?php printData();?>
        <section>
            <h2>Formos duomenys</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th >Vardas</th>
                        <th >Pavarde</th>
                        <th >El.Pastas</th>
                        <th >Slaptazodis</th>
                        <th >Sektorius</th>
                        <th >Zinute</th>
                    </tr>
                </thead>
                <tbody>
                    <?php printTable(); ?>
                </tbody>
            </table>
        </section>
        <?php else:?>
                    <?php printError($validation);?>
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
        <?php endif;?>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>