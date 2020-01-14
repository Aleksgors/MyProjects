<?php

    require_once 'Figure.php';

    class Triangle extends Figure
    {
        public $a, $b, $c;
        public $area;

        function __construct($a = 0, $b = 0, $c = 0) {
            $this->type = '';

            if(($a > 0) && ($b > 0) && ($c > 0)) {
                $halfPerimeter = ($a + $b + $c) / 2;

                if(($halfPerimeter > $a) && ($halfPerimeter > $b) &&
                ($halfPerimeter > $c)) {
                    $this->type = 'Triangle';
                    $this->a = $a;
                    $this->b = $b;
                    $this->c = $c;
                    $this->area = $this->getArea();
                }
            }
        }

        public function getArea() {
            if (!$this->type) {
                return '';
            } else {
                $halfPerimeter = ($this->a + $this->b + $this->c) / 2;
                return (sqrt($halfPerimeter * ($halfPerimeter - $this->a) *
                ($halfPerimeter - $this->b) * ($halfPerimeter - $this->c)));
            }
        }
    }