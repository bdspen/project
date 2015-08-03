<?php
class Car
{
    private $make_model;
    private $price;
    private $miles;

    function __construct($car_model, $car_miles, $car_price = 45000)
    {
      $this->make_model = $car_model;
      $this->miles = $car_miles;
      $this->price = $car_price;

    }

    function setName($new_name)
    {
      $changed_name = (string) $new_name;
      $this->make_model = $changed_name;
    }

    function getName()
    {
      return $this->make_model;
    }

    function setPrice($new_price)
    {
      $float_price = (float) $new_price;
      if ($float_price != 0) {
        $formatted_price = number_format($float_price, 2);
        $this->price = $formatted_price;
      }
    }

    function getPrice()
    {
      return $this->price;
    }

    function setMileage($new_mileage)
    {
      $number_mileage = (integer) $new_mileage;
      if ($number_mileage != 0) {
        $this->miles = $number_mileage;
      }
    }

    function getMiles()
    {
      return $this->miles;
    }

}



$porsche = new Car("2014 Porsche 911", 7864, 114991 );
$ford = new Car("2011 Ford F450", 14241);
$lexus = new Car("2013 Lexus RX 350", 20000);
$mercedes = new Car("Mercedes Benz CLS550", 37979, 39900);

$porsche->setName("2013 Porsche 911");
$porsche->setMileage(55555);
$lexus->setPrice(0);
$porsche->setName("2012 Porsche 911");


$cars = array($porsche, $ford, $lexus, $mercedes);

$cars_matching_search = array();
foreach ($cars as $car) {
    if ($car->getPrice() < $_GET["price"]) {
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
                $car_name = $car->getName();
                $car_price = $car->getPrice();
                $car_mileage = $car->getMiles();
                echo "<li> $car_name </li>";
                echo "<ul>";
                    echo "<li> $$car_price </li>";
                    echo "<li> Miles: $car_mileage </li>";
                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>
