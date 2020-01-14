<?php

    require_once 'Figure.php';

    class Circle extends Figure
    {
        public $radius;
        public $area;

        function __construct($radius = 0) {
            $this->type = '';
            
            if ($radius > 0) {
                $this->type = 'Circle';
                $this->radius = $radius;
                $this->area = $this->getArea();
            }
        }

        public function getArea() {
            if (!$this->type) {
                return '';
            } else {
                return (M_PI * pow($this->radius, 2));
            }
        }
    }