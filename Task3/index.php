<?php
    require_once 'classes/classes.php';

    $figureSpace = new FigureCollection;
    $figureSpace->getFromFile('database.txt');
    $figureSpace->showFigures();