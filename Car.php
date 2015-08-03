<?php
class Car
{
    public $make_model;
    public $price;
    public $miles;

    function __construct($car_model, $car_miles, $car_price = 45000)
    {
      $this->make_model = $car_model;
      $this->miles = $car_miles;
      $this->price = $car_price;

    }
}


$porsche = new Car("2014 Porsche 911", 7864, 114991 );
$ford = new Car("2011 Ford F450", 14241);
$lexus = new Car("2013 Lexus RX 350", 20000);
$mercedes = new Car("Mercedes Benz CLS550", 37979, 39900);



$cars = array($porsche, $ford, $lexus, $mercedes);

$cars_matching_search = array();
foreach ($cars as $car) {
    if ($car->price < $_GET["price"]) {
        array_push($cars_matching_search, $car);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Car Dealership's Homepage</title>
</head>
<body>
    <h1>Your Car Dealership</h1>
    <ul>
        <?php
            foreach ($cars_matching_search as $car) {
                echo "<li> $car->make_model </li>";
                echo "<ul>";
                    echo "<li> $$car->price </li>";
                    echo "<li> Miles: $car->miles </li>";
                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>
