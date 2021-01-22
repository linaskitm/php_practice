<?php
?>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Air ticket</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
<nav class="pb-5">
    <ul class="nav nav-tabs justify-content-center" >
        <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../index.php">Bilieto formavimas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Skryzdių rezervacija</a>
        </li>

    </ul>
</nav>
<h2 class="text-center pb-5"> Skrydžių rezervacijos</h2>

<?php
function printTable() { // print to UI from zinutes.txt
    $newArray = explode("/n", file_get_contents('../data/flights.txt'));
    foreach ($newArray as $arr) {
        $arr = explode(",", $arr);
        echo "<tr></tr>";
        foreach ($arr as $a) {
            echo "<td>$a</td>";
        }
    }
}
?>
<div class="container-fluid">
    <div class="m-2">
        <table class="table">
            <thead>
            <tr>
                <th >Vardas</th>
                <th >Pavardė</th>
                <th >Asmens kodas</th>
                <th >Telefono nr.</th>
                <th >El.Paštas</th>
                <th >Skryzdžio nr.</th>
                <th >Išvykimas</th>
                <th >Atvykimas</th>
                <th >Bagažas</th>
                <th >Kaina</th>
                <th >Pastabos</th>
            </tr>
            </thead>
            <tbody>
            <?php printTable(); ?>
        </tbody>
    </div>
</div>


<footer class="modal-footer"></footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>