<?php
?>
<div class="card text-dark bg-light mb-3">
            <div class="card-header">
                <span>Skrydzio numeris </span>
                <?=htmlspecialchars(ucfirst($_POST['flight-no']));?>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body ">
                        <span><?=date("F j, Y, g:i a");?></span>
                        <h4 class="card-title">
                            <span>Departure: </span>
                            <?=htmlspecialchars(ucfirst($_POST['from']));?></h4>
                        <span><?=date("F j, Y, g:i a");?></span>
                        <h4 class="card-title">
                            <span>Arrival: </span>
                            <?=htmlspecialchars(ucfirst($_POST['where']));?></h4>
                        <p class="card-text"><span>Bagazas: </span><?=($_POST['luggage']);?> </p>
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
                                <?php (float)$addition = (float) $_POST['price'] + 30;?>
                                <?= number_format($addition, 2);?> Eur
                            </li>


                        <?php else:?>
                            <li class="list-group-item">
                                <span>Moketina suma: </span>
                                <?= number_format((float) $_POST['price'], 2);?> Eur
                            </li>
                        <?php endif;?>

                    </ul>
                </div>
            </div>
        </div>