<?php
    interface Sellable{
        public function addStock($num);
        public function sellItem();
        public function getStockcount();
    }

    class Television implements Sellable{
        private $screensize;
        private $stockcount;

        public function setScreensize($size){
            $this->screensize = $size;
        }

        public function getScreensize(){
            return $this->screensize;
        }

        public function addStock($num){
            $this->stockcount += $num;
        }

        public function sellItem(){
            $this->stockcount -= 1;
        }

        public function getStockcount(){
            return $this->stockcount;
        }
    }

    $tv1 = new Television();
    $tv1->setScreensize("14");
    print($tv1->getScreensize()."<br>");
    $tv1->addStock(50);
    print($tv1->getStockcount()); echo "<br>";
    $tv1->sellItem();
    print($tv1->getStockcount()."<br>"); 

    class TennisBall{
        private $count;
        private $color;

        public function setColor($col){
            $this->color = $col;
        }

        public function getColor(){
            return $this->color;
        }

        public function addStock($num){
            $this->count += $num;
        }

        public function sellItem(){
            $this->count -= 1;
        }

        public function getStockcount(){
            return $this->count;
        }
    }

    $ball1 = new TennisBall();
    $ball1->setColor("Yellow");
    print($ball1->getColor()."<br>");
    $ball1->addStock(100);
    print($ball1->getStockcount()); echo "<br>";
    $ball1->sellItem();
    print($ball1->getStockcount()."<br>"); 
?>