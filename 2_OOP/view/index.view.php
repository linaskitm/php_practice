<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Form Validation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">


</head>

<body>
<?php
use Users\Student;
use Users\Show;

$userOne = new Student('Linas', 'Pelenis', 'admin', 9.5 );
$userOne->addDescription('puikus adminas');

Show::ShowData($userOne->getUserData());

echo "<ul class='list-group'> Domenys";
foreach ($userOne->getUserData() as $user) {
    echo "<li class='list-group-item'>$user</li>";
}
echo "</ul>"

?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>