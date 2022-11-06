<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandwich Order</title>
    <style>
    input[type="radio"]{
    vertical-align: baseline;
}
        </style>
</head>
<body>
<div class="header">
        <?php include 'header.php';?>
    </div>
    <h1>Create your sandwich</h1>
    <form action="connect.php" method="post">
    <h3>Bread</h3>

    <div class="container">
    <input type="radio" id="white" name="bread" value="White">
    <label for="white">white - 200 calories - $1.00</label><br>
    <input type="radio" id="wheat" name="bread" value="Wheat">
    <label for="wheat">wheat - 160 calories - $1.25</label><br>
    <input type="radio" id="grain" name="bread" value="Grain">
    <label for="grain">Grain - 120 calories - $1.50</label><br>
    <input type="radio" id="garlic" name="bread" value="Garlic">
    <label for="garlic">Garlic & Cheese - 280 calories - $2.00</label><br>

    <h3>Protein</h3>
    <input type="radio" id="ham" name="protein" value="Ham">
    <label for="ham">Ham - 160 calories - $2.00</label><br>
    <input type="radio" id="chicken" name="protein" value="Chicken">
    <label for="chicken">Chicken - 140 calories - $1.80</label><br>
    <input type="radio" id="turkey" name="protein" value="Turkey">
    <label for="turkey">Turkey - 120 calories - $2.30</label><br>
    <input type="radio" id="salami" name="protein" value="Salami">
    <label for="salami">Salami - 200 calories - $3.00</label><br>

    <h3>Cheese</h3>
    <input type="radio" id="cheddar" name="cheese" value="Cheddar">
    <label for="cheddar">Cheddar - 60 calories - $1.50</label><br>
    <input type="radio" id="colby" name="protein" value="Colby">
    <label for="colby">Colby - 80 calories - $1.50</label><br>
    <input type="radio" id="provolone" name="protein" value="Provolone">
    <label for="provolone">Provolone - 60 calories - $1.50</label><br>

    <h3>Vegetable</h3>
    <input type="checkbox" id="lettuce" name="vegetable" value="Lettuce">
    <label for="lettuce">Lettuce - 15 calories - $0.50</label><br>
    <input type="checkbox" id="tomato" name="vegetable" value="Tomato">
    <label for="tomato">Tomato - 30 calories - $0.50</label><br>
    <input type="checkbox" id="onion" name="vegetable" value="Onion">
    <label for="onion">Onion - 10 calories - $0.25</label><br>
    <input type="checkbox" id="pickle" name="vegetable" value="Pickle">
    <label for="pickle">Pickle - 10 calories - $0.10</label><br>
    <input type="checkbox" id="pepper" name="vegetable" value="Pepper">
    <label for="pepper">Bell Pepper - 5 calories - $0.30</label><br>
    <input type="checkbox" id="olive" name="vegetable" value="Olive">
    <label for="olive">Olive - 40 calories - $0.70</label><br>
    <input type="checkbox" id="mushroom" name="vegetable" value="Mushroom">
    <label for="mushroom">Mushroom - 10 calories - $0.40</label><br>
    <div>

    <h3>Condiment</h3>
    <input type="checkbox" id="ketchup" name="condiment" value="Ketchup">
    <label for="ketchup">Ketchup - 25 calories - $0.10</label><br>
    <input type="checkbox" id="mustard" name="condiment" value="Mustard">
    <label for="mustard">Mustard - 5 calories - $0.10</label><br>
    <input type="checkbox" id="mayo" name="condiment" value="Mayo">
    <label for="mayo">Mayonnaise - 60 calories - $0.20</label><br>
    <input type="checkbox" id="seasoning" name="condiment" value="Seasoning">
    <label for="seasoning">Seasoning - 0 calories - $0.30</label><br>
    <input type="checkbox" id="spices" name="condiment" value="Spices">
    <label for="spices">Spices - 0 calories - $0.50</label><br>
    <input type="checkbox" id="oilvinegar" name="condiment" value="OilVinegar">
    <label for="oilvinegar">Oil & Vinegar - 40 calories - $0.10</label><br>
    </form>
</div>
<br>
    <div>
        <input type="submit"/>
    </div>

</body>
</html>