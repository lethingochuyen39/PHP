<html>

<body>
    <?php
    trait T1
    {
        public function msg1()
        {
            echo "This is an example of a trait!";
        }
    }
    trait T2
    {
        public function msg2()
        {
            echo "Code reusability can be achieved through OOP feature of traits!";
        }
    }

    class Message1
    {
        use T1;
    }

    class Message2
    {
        use T1, T2;
    }
    // thua ke tu lop cha
    $obj1 = new Message1();
    $obj1->msg1();
    echo "<br>";
    $obj2 = new Message2();
    $obj2->msg1();
    $obj2->msg2();
    ?>
</body>

</html>