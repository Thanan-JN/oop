<?php
    abstract class shape{
        protected $color;
        protected $filled;

        abstract public function getArea();

        public function __construct($col, $filled){
            $this->color = $col;
            $this->filled = $filled;
        }
        
        public function setColor($col){
            echo "<br> i am in the parent class <br>";
            $this->color = $col;
        }

        public function getColor(){
            return $this->color;
        }

        public function isFilled(){
            return $this->filled;
        }

        public function makeHollow(){
            $this->filled = false;
        }

        public function fill(){
            $this->filled = true;
        }
    }

    class square extends shape{
        private $length;

        public function __construct($col, $filled, $l){
            parent::__construct($col, $filled);
            $this->length = $l;
        }

        public function setColor($col){
            echo "<br> setting the color is:{$this->color}<br>";
        }

        public function setLength($l){
            $this->length = $l;
        }

        public function getLength(){
            return $this->length;
        }

        public function getArea(){
            return $this->length*$this->length;
        }
    }

    class circle extends shape{
        private $radious;

        public function __construct($col, $filled, $r){
            parent::__construct($col, $filled);
            $this->radious = $r;
        }

        public function setRadious($r){
            $this->radious = $r;
        }

        public function getRadious(){
            return $this->radious;
        }

        public function getArea(){
            return M_PI * pow($this->radious,2);
        }
    }

    $circle1 = new circle("white",true,9);
    // $circle1->setRadious(18);
    print_r($circle1);
    echo "<br>".$circle1->getArea();
    $circle1->setColor("black");

    //$shape1 = new shape("Red",true);
    //print_r($shape1);
    //echo "<br>".$shape1->getColor();
    //$shape1->setColor("blue");

    $square1 = new square("red",true,8);
    print_r($square1);
    $square1->getLength();
    $square1->setColor("blue");
    print ($square1->getColor());
?>