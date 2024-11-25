        <?php
        class QuadraticEquation{
            private int $a;
            private int $b;
            private int $c;

            public function __construct($a,$b,$c)
            {
                $this->a = $a;
                $this->b = $b;
                $this->c = $c;
            }

            public function getA(){
                return $this->a;
            }

            public function getB(){
                return $this->b;
            }

            public function getC(){
                return $this->c;
            }

            public function getDiscrimiant(){
                return (($this->b * $this->b) - (4 * $this->a*$this->c));
            }

            public function getRoot1(){
                return (-$this->b - pow($this->getDiscrimiant(),0.5))/2/$this->a;
            }

            public function getRoot2(){
                return (-$this->b + pow($this->getDiscrimiant(),0.5))/2/$this->a;
            }

            public function isQuadratic() {
                return $this->a != 0; 
            }
        }
        ?>
