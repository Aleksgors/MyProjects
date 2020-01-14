<?php
    require_once 'classes.php';

    class FigureCollection
    {
        public $figures = [];

        public function getRandomFigures($numberOfFigures) {
            for ($i = 0; $i < $numberOfFigures; $i++) {
                $random = random_int(1, 3);
                if ($random == 1) {
                    $temp = new Circle(random_int(2, 15));
                    array_push($this->figures, $temp);
                }
                if ($random == 2) {
                    $temp = new Triangle(random_int(12, 20), random_int(12, 20),
                    random_int(12, 20));
                    array_push($this->figures, $temp);
                }
                if ($random == 3) {
                    $temp = new Rectangle(random_int(2, 20), random_int(2, 20));
                    array_push($this->figures, $temp);
                }
            }
        }

        public function sortByArea() {
            usort($this->figures, function($figure1, $figure2) {
                if($figure1->area == $figure2->area) return 0;
                return ($figure1->area > $figure2->area) ? -1 : 1;
            });
        }

        public function showFigures() {
            foreach ($this->figures as $value) {
                echo "<p>Figure: {$value->getType()}, area: {$value->area}</p>";
            }
        }

        public function writeToFile($filename) {
            if(!empty($this->figures)) {
                $data = serialize($this->figures);
                if(file_put_contents($filename, $data)) {
                    return true;
                }
            }
            
            return false;
        }

        public function getFromFile($filename) {
            $this->figures = unserialize(file_get_contents($filename));
        }
    }