<?php
    require_once 'Figure.php';

    class Rectangle extends Figure
    {
        private $sideA, $sideB;
        public $area;

        function __construct($a, $b) {
            $this->type = '';

            if (($a > 0) && ($b > 0)) {
                $this->type = 'Rectangle';
                $this->sideA = $a;
                $this->sideB = $b;
                $this->area = $this->getArea();
            }
        }

        public function getArea() {
            if (!$this->type) {
                return '';
            } else {
                return $this->sideA * $this->sideB;
            }
        }
    }