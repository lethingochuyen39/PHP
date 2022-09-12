<html>

<body>
    <?php
    class City
    {
        // Properties
        public $name;
        public $country;
        // Methods
        function set_name($name)
        {
            $this->name = $name;
        }
        function get_name()
        {
            return $this->name;
        }
    }
    $London = new City();
    var_dump($London instanceof City);
    ?>
</body>

</html>