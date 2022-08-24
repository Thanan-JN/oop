<?php
    class fruit{
        public $name;
        public $color;

        function  __construct($name){
            $this->name = $name;
        }

        function  __destruct(){
            echo "The fruit is {$this->name}.";
        }
        function message(){
            echo "<br> I am a fruit class<br>";
        }
    }

    $apple = new fruit("Apple");
    $apple->message();

?>