<html>

<body>
    <?php
    class Example
    {
        public $name;
        public $color;
        function __construct($name,$color)
        {
            $this->name = $name;
            $this->color = $color;
        }
// khi chay het ct se huy 
        function __destruct()
        {
            echo "The examp object is destruct.";
        }

        function get_name()
        {
            return $this->name;
        }

        function get_color()
        {
            return $this->color;
        }
    }
    $exam1 = new Example("ten 1","mau do");
    echo $exam1->get_name()."<br>";
    echo $exam1->get_color()."<br>";
    ?>
</body>

</html>