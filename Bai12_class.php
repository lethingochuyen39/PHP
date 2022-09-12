<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class</title>
</head>

<body>

    <?php
    class City
    {
        public $name;
        public $country;
        public function setName($name)
        {
            $this->name = $name;
        }

        public function getName()
        {
            return $this->name;
        }
        public function setCountry($country)
        {
            $this->country = $country;
        }

        public function getCountry()
        {
            return $this->country;
        }
    }

    $Hanoi = new City();
    $Saigon = new City();
    $Hanoi->setCountry("VietNam");
    $Saigon->setName("HCM City");

    echo "Ha Noi's country: " . $Hanoi->getCountry() . "<br>";
    echo "Sai Gon's name: " . $Saigon->getName();


    ?>

</body>

</html>