<?php
?>
<h4 class="text-center ">Bilieto formavimas</h4>
<form method="post">
    <div class="form-group">
        <label for="name">Vardas</label>
        <input type="text" class="form-control" id="name" name ="name">
    </div>
    <div class="form-group">
        <label for="lastname">Pavardė</label>
        <input type="text" class="form-control" id="lastname" name="lastname">
    </div>
    <div class="form-group">
        <label for="idcode">Asmens kodas</label>
        <input type="number" class="form-control" id="idcode" name="idcode" placeholder="Asmens koda sudaro 11 skaitmenu.">

    </div>
    <div class="form-group">
        <label for="phone">Tel. Nr.</label>
        <input type="number" class="form-control" id="phone" name="phone" placeholder="+370">

    </div>
    <div class="form-group">
        <label for="email">Elektroninis paštas</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="row">
        <div class="form-group col" >
            <label>Skrydžio nr:</label>
            <select name="flight-no" class="form-group">
                <?php foreach ($data['flight_no'] as $value):?>
                    <option ><?= $value;?></option>
                <?php endforeach?>
            </select>
        </div>
        <div class="form-group col" >
            <label>Išvykimas:</label>
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
            <label>Bagažas: </label>
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
