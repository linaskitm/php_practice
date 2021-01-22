

<?php include '_partials/header.php'?>

<div class="container">
    <?php if(isset($_POST['send'])):?>
    <?php validate($_POST);?>
    <?php endif;?>

    <?php if(isset($_POST['send']) && empty($validation)):?>
    <?php getData();?>
    <section>
        <?php if($_POST['send']!='send'):?>
        <?php include '_partials/ticket.php';?>
        <?php endif;?>
    </section>

    <?php else:?>
       <?php printError($validation);?>
    <?php include '_partials/form.php';?>
    <?php endif ?>

</div>
<?php include '_partials/footer.php';?>