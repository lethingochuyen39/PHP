<html>

<body>
    <?php
    class Flower
    {
        public $name;
        public $color;
        function __construct($name)
        {
            $this->name = $name;
        }
        function __destruct()
        {
            echo "The flower is {$this->name}.";
        }
    }
    $Lotus = new Flower("Pink");
    ?>
</body>

</html>